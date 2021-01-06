<h1>Modification du client </h1>

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

<form action="modifClient.php" method="post">
  

  <fieldset>
  <legend>Choix:</legend>
    <input type="hidden" name="idClient" id="idClient" value="<?php echo $_POST['idClient']; ?>">
    <label for="nom_client">Nom :</label>
    <input type="texte" id="nom_client" name="nom_client"><br>
    <label for="m">Crédit :</label>
    <input type="number" id="debit_client" name="debit_client"><br>
  </fieldset>
  <button type="submit">Envoyer</button>
</form>

