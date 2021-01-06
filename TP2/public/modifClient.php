<?php
include_once '../src/utils/autoloader.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();

$clientHydrator = new \Rediite\Model\Hydrator\ClientHydrator();
$clientRepository = new \Rediite\Model\Repository\ClientRepository($dbAdapter, $clientHydrator);

$id = !empty($_POST['idClient']) ? htmlspecialchars($_POST['idClient']) : null;

$num = !empty($_POST['nom_client']) ? htmlspecialchars($_POST['nom_client']) : null;
$debit = !empty($_POST['debit_client']) ? htmlspecialchars($_POST['debit_client']) : null;
var_dump($_POST);

$modif = $clientRepository->updateClientById($id, $num, $debit);



var_dump($modif);

$data = null;

include_once '../src/View/template.php';
loadView('home', $data);


?>