<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$arff = new Person("Afif", "Bengkulu");

// tambahkan value nama di object
$arff->nama = "Afif";

// panggil function sayHelloNull dengan parameter
$arff->sayHelloNull("fahmi");

// buat object dari kelas person
$prass = new Person("fahmi", "Jakarta");

// tambahkan value nama di object
$prass->nama = "Udin";

// panggil function sayHelloNull dengan parameter null
$prass->sayHelloNull(null);
