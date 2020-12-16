<h1>Menu </h1>

<form action="gestionClient.php" method="post">
  <label for="idClient">Numéro de client :</label>
  <input type="number" id="idClient" name="idClient" required="required"/><br>

  <fieldset>
  <legend>Choix:</legend>
    <label for="v">Visualisation :</label>
    <input type="radio" id="v" value="v" name="choix" required="required"><br>
  </fieldset>
  <button type="submit">Envoyer</button>
</form>
