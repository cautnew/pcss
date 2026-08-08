<?php

use CN\PCSS\DECLARATION;
use CN\PCSS\PCSS;
use CN\PCSS\RULE;

require __DIR__ . '/../DECLARATION.php';
require __DIR__ . '/../PCSS.php';
require __DIR__ . '/../RULE.php';

$styleGeral = new PCSS();

$declarations = new DECLARATION([
  'font-family' => 'Arial',
  'font-size' => '20px',
  'height' => '10px',
  'width' => '300px'
]);

echo $declarations;

die();

// Create a rule
$rule = new RULE();
