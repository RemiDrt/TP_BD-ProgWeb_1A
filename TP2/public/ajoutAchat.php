<?php
include_once '../src/utils/autoloader.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();

$clientHydrator = new \Rediite\Model\Hydrator\ClientHydrator();
$clientRepository = new \Rediite\Model\Repository\ClientRepository($dbAdapter, $clientHydrator);

$id_client = !empty($_POST['idClient']) ? htmlspecialchars($_POST['idClient']) : null;
$date = !empty($_POST['date_achat']) ? htmlspecialchars($_POST['date_achat']) : null;
$num_achat = !empty($_POST['num_achat']) ? htmlspecialchars($_POST['num_achat']) : null;
$montant_achat = !empty($_POST['montant_achat']) ? htmlspecialchars($_POST['montant_achat']) : null;
$clients = $clientRepository->findClientById($id_client);
foreach($clients as $client){
    $debit = $client->getDebit();
    $calcDeb = $debit - $montant_achat;
    var_dump($montant_achat);
    var_dump($debit);
    $req1 = $clientRepository->addPurchase($num_achat, $montant_achat, $date, $id_client);
    var_dump($calcDeb);
    $req2 = $clientRepository->changeDebit($id_client, $calcDeb);
    var_dump($req1);
    var_dump($req2);
    var_dump($client);
}




var_dump($_POST);


//$modif = $clientRepository->updateClientById($id, $num, $debit);



//var_dump($modif);

$data = null;

include_once '../src/View/template.php';
loadView('home', $data);


?>