<?php

namespace Rediite\Model\Entity;

class Achat {

  /**
   * @var int
   */
  private $numAchat;

  /**
   * @var int
   */
  private $montantAchat;

  /**
   * @var \DateTime
   */
  private $dateAchat;

  /**
   * @var int
   */
  private $idClient;


  public function getNum() 
  {
    return $this->numAchat;
  }

  public function setNum(int $num)
  {
    $this->numAchat = $num;
    return $this;
  }

  public function getMontant()
  {
    return $this->montantAchat;
  }

  public function setMontant($montant)
  {
    $this->montantAchat = $montant;
    return $this;
  }


  public function getDate()
  {
    return $this->dateAchat;
  }

  public function setDate($date) 
  {
    $this->dateAchat = $date;
    return $this;
  }


  public function getClient()
  {
    return $this->idClient;
  }

  public function setClient($client)
  {
    $this->idClient = $client;
    return $this;
  }


}
