<?php
require 'autoload.php';

use \matematica\Basica;
use \foto\Upload;

$m = new Basica();
echo $m->somar(10, 20);

$upload = new Upload();