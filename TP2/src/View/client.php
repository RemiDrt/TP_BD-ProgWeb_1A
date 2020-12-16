<?php
  $clients = $data["clients"];
?>

<div class="client-container">
    <?php 
    foreach ($clients as $client): ?>
        <div class="client-item">
                <div>
			Client : <?php echo $client->getId(); echo $client->getLastName(); echo $client->getDebit();?>
                </div>
            </div>
    <?php endforeach; ?>
</div>
