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
  SELECT 

  /*à compléter*/

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

}


