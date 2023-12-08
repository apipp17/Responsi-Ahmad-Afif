<?php

require_once "data/programmer.php";

$company = new Company();
$company->programmer = new Programmer("Afif");
var_dump($company);

$company->programmer = new BackendProgrammer("Afif");
var_dump($company);

$company->programmer = new FrontendProgrammer("Afif");
var_dump($company);

sayHelloProgrammer(new Programmer("Ahmad"));
sayHelloProgrammer(new BackendProgrammer("Afif"));
sayHelloProgrammer(new FrontendProgrammer("nurdiantoro"));
