<h1>Achat </h1>

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

<form action="ajoutAchat.php" method="post">

  <fieldset>
  <legend>Choix:</legend>
    <label for="num_achat">Numéros d'achat :</label>
    <input type="number" id="num_achat" name="num_achat" required="required"><br>
    <input type="hidden" name="idClient" id="idClient" value="<?php echo $client->getId(); ?>"><br>
    <label for="montant_achat">Montant achat :</label>
    <input type="number" id="montant_achat" name="montant_achat" required="required"><br>
    <label for="date">Date :</label>
    <input type="date" id="date_achat" name="date_achat" required="required"><br>
  </fieldset>
  <button type="submit">Envoyer</button>
</form>