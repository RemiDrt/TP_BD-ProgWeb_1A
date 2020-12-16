<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once '../src/Model/Repository/ClientRepository.php';
include_once '../src/Model/Factory/dbFactory.php';
include_once '../src/Model/Entity/Client.php';
include_once '../src/Model/Hydrator/ClientHydrator.php';

