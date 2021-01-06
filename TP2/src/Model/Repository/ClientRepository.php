<?php
namespace Rediite\Model\Repository;

error_reporting(E_ALL);
ini_set('display_errors', 1);

use \Rediite\Model\Entity\Client;


class ClientRepository {

    /**
     * @var \PDO
     */
  private $dbAdapter;

  /**
   * @var CommentHydrator
   */
  private $clientHydrator;

  public function __construct(
    \PDO $dbAdapter,
    \Rediite\Model\Hydrator\ClientHydrator $clientHydrator
  ) {
    $this->dbAdapter = $dbAdapter;
    $this->clientHydrator = $clientHydrator;
  }

  function findClientById(int $id) {
    $sql = 
<<<SQL
  SELECT * from client where num_client = :id;
SQL;


    $clients = [];
    $stmt = $this->dbAdapter->prepare($sql);
    $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
    $stmt->execute();
    foreach ($stmt->fetchAll() as $rawClient) {
        $clients[] = $this->clientHydrator->hydrate($rawClient);
    }
    return $clients;
  }

  function updateClientById($id, $nom_client, $debit_client) {
    $sql = 'UPDATE client SET ';
    if (isset($nom_client) && $nom_client != '') {
      $sql = $sql.'nom_client = :nom_client ';
      if(isset($debit_client) && $debit_client != '') {
        $sql = $sql.', debit_client = :debit_client ';
      }
    }
    else if(isset($debit_client) && $debit_client != '') {
      $sql = $sql.'debit_client = :debit_client ';
    }
    $sql = $sql.'WHERE num_client = :id ;';
    $req = $this->dbAdapter->prepare($sql);
    $req->bindValue(':id', $id, \PDO::PARAM_INT);
    if(isset($debit_client) && $debit_client != '') {
      $req->bindValue(':debit_client', $debit_client, \PDO::PARAM_INT);
    }
    if(isset($nom_client) && $nom_client != '') {
      $req->bindValue(':nom_client', $nom_client, \PDO::PARAM_STR);
    }
    $req->execute();
    return $req->fetchAll();
  }

  function addClient($id, $nom, $debit){
    $sql = 
<<<SQL
  INSERT INTO client VALUES (:id , :nom , :debit );
SQL;
    $req = $this->dbAdapter->prepare($sql);
    $req->bindValue(':id', $id, \PDO::PARAM_INT);
    $req->bindValue(':nom', $nom, \PDO::PARAM_STR);
    $req->bindValue(':debit', $debit, \PDO::PARAM_INT);
    $req->execute();
    return $req;
  }

  function addPurchase($num_achat, $montant_achat, $date_achat, $num_client){
    $sql = 
<<<SQL
  INSERT INTO achat VALUES ( :num_achat , :montant_achat , :date_achat , :num_client ) ;
SQL;
    $req = $this->dbAdapter->prepare($sql);
    $req->bindValue(':num_achat', $num_achat, \PDO::PARAM_INT);
    $req->bindValue(':montant_achat', $montant_achat, \PDO::PARAM_INT);
    $req->bindValue(':date_achat', $date_achat, \PDO::PARAM_STR);
    $req->bindValue(':num_client', $num_client, \PDO::PARAM_INT);
    $req->execute();
    return $req;
  }

  function changeDebit($id, $montant) {
    $sql = 
<<<SQL
  UPDATE client 
    SET debit_client = :montant
    WHERE num_client = :id ;
SQL;
    $req = $this->dbAdapter->prepare($sql);
    $req->bindValue(':montant', $montant, \PDO::PARAM_INT);
    $req->bindValue(':id', $id, \PDO::PARAM_INT); 
    $req->execute();
    return $req;
  }

}


