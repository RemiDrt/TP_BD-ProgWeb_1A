<?php
include_once '../src/utils/autoloader.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();

$clientHydrator = new \Rediite\Model\Hydrator\ClientHydrator();
$clientRepository = new \Rediite\Model\Repository\ClientRepository($dbAdapter, $clientHydrator);

$choixMenu =  !empty($_POST['choix']) ? $_POST['choix'] : null;
$idClient =  !empty($_POST['idClient']) ? $_POST['idClient'] : null;


// problème en choisissant le menu
if (null == $choixMenu || null == $idClient) {
	// on revoie vers l'index /!\ message d'erreur à ajouter
	header('Location: index.php'); 
}
else{
	$data = ['clients' => $clientRepository->findClientById($idClient)];
	if($choixMenu == "v"){
		include_once '../src/View/template.php';
		loadView('client', $data);
	}
}
