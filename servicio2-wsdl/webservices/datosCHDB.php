<?php

$productos = array(
    'zapatos' => '100',
    'camisa' => '200',
    'pantalon' => '300',
    'collar' => '400'
);

chdb_create('data.chdb', $productos);