<?php

namespace Rediite\Model\Factory;

class dbFactory {

  function createService() {
    return new \PDO('pgsql:dbname=tpphp;host=pgsql2;port=5432"', 'tpphp', 'tpphp');
  }
}
