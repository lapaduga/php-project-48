<?php

namespace App\Gendiff;

use Docopt;

function showHelp()
{
	$doc = <<<DOC
	Generate diff

	Usage:
		gendiff (-h|--help)
		gendiff (-v|--version)
		gendiff [--format <fmt>] <firstFile> <secondFile>
	
	Options:
		-h --help                     Show this screen
		-v --version                  Show version
		--format <fmt>                Report format [default: stylish]\n
	DOC;

	$params = array(
    'argv'=>array_slice($_SERVER['argv'], 1),
    'help'=>true,
    'version'=>null,
    'optionsFirst'=>false,
	);
	$args = Docopt::handle($doc, $params);
}