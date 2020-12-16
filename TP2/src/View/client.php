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
