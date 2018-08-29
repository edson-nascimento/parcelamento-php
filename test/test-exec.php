<?php
use Parcel\Test\ParcelamentoTest;

require '../vendor/autoload.php';



$parcelas = ParcelamentoTest::runTest();

d($parcelas);