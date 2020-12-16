<?php

namespace Rediite\Model\Hydrator;
error_reporting(E_ALL);
ini_set('display_errors', 1);

use \Rediite\Model\Entity\Client as ClientEntity;

class ClientHydrator {
  public function hydrate($data): ClientEntity
  {
    $client = new ClientEntity();
    $client
      ->setId($data['num_client'])
      ->setLastName($data['nom_client'])
      ->setDebit($data['debit_client']);
    return $client;
  }
}
