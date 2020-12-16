<?php

namespace Rediite\Model\Entity;

class Client {

    /**
     * @var int
     */
  private $idClient;

    /**
     * @var string
     */
  private $lastNameClient;

    /**
     * @var int
     */
  private $debitClient;



    /**
     * @return mixed
     */
    public function getId ()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $id
     * @return User
     */
    public function setId ($id)
    {
        $this->idClient = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName ()
    {
        return $this->lastNameClient;
    }

    /**
     * @param mixed $login
     * @return User
     */
    public function setLastName ($lastName)
    {
        $this->lastNameClient = $lastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDebit ()
    {
        return $this->debitClient;
    }

    /**
     * @param mixed $debit
     * @return User
     */
    public function setDebit ($debit)
    {
        $this->debitClient = $debit;
        return $this;
    }


}
