<?php

require __DIR__ . '/vendor/autoload.php';

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

// Options definition: the configuration file parameter is optional
$options = GeneratorOptions::instance(/* '/path/file.yml' */);
$options
    ->setOrigin('arrendamento.wsdl')
    ->setDestination('./MySdk')
    ->setComposerName('myproject/mysdk');
// Generator instantiation
$generator = new Generator($options);
// Package generation
$generator->generatePackage();

