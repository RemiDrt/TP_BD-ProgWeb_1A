<h1>Création d'un client </h1>

<?php
  $clients = $data["clients"];
?>

<div class="client-container">
    <?php 
    foreach ($clients as $client): ?>
        <div class="client-item">
                <div>
			Client : <?php echo 'id : '.$client->getId(); echo ' Name : '.$client->getLastName(); echo ' Debit : '.$client->getDebit();?>
                </div>
            </div>
    <?php endforeach; ?>
</div>

<form action="ajoutClient.php" method="post">
  

  <fieldset>
  <legend>Choix:</legend>
    <label for="idClient">Numéros :</label>
    <input type="number" name="idClient" id="idClient" required="required"><br>
    <label for="nom_client">Nom :</label>
    <input type="texte" id="nom_client" name="nom_client" required="required"><br>
    <label for="m">Crédit :</label>
    <input type="number" id="debit_client" name="debit_client" required="required"><br>
  </fieldset>
  <button type="submit">Envoyer</button>
</form>