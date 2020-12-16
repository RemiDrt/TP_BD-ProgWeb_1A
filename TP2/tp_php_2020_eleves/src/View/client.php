<?php
  $clients = $data["clients"];
?>

<div class="client-container">
    <?php 
    foreach ($clients as $client): ?>
        <div class="client-item">
                <div>
			Client : <?php echo $client->getId(); ?>
                </div>
            </div>
    <?php endforeach; ?>
</div>
