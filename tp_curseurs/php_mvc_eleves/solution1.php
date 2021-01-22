<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("services_model.php");
include("services_view.php");
include("services_controler.php");



// Solution 1 : une seule requête avec jointure des deux tables
function sol1() {
	global $DETAILS; // affichage ou non de la liste d'employés de chaque service

	try {
		$pdo = connect();
	// requete avec jointure et double boucle
		$sql = 'SELECT * FROM EMPLOYE NATURAL JOIN SERVICE ODER BY  ;';
		$req = $pdo->prepare($sql);
		$req->execute();
		$employes = $req->fetchAll();
		$i = 0;
		foreach($employes as $employe){
			echo $i;
			var_dump($employe);
			$i = $i + 1;
		}
	}
	catch (PDOException $e) {
   		print "Erreur !: " . $e->getMessage() . "<br/>";
    		die();
	}	
	
}


html_header();	
retour_menu();

$debut = get_time();
sol1();
$fin = get_time();

print_time('Solution 1 exécutée en ', $fin - $debut);

html_footer();
?>
