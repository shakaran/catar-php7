<?php
namespace Catar;

error_reporting(E_ALL);
echo 'error_reporting(E_ALL);' . PHP_EOL;

class Dummy {
	public function __toString() {
		return 'I am nobody... snif ' . PHP_EOL;
	}
}

class Seven {

    public function helloWorld():string
    {
        return 'Hello Word' . PHP_EOL;
    }

    public function fuckReturnTypes():array
    {
    	$obj = new Dummy();
    	return $obj;
    }

	public function whatAboutNull():Dummy {
		return null;
	}

	public function whatAboutCasting():int {
		return 'A';
	}

	public function andIfITellYouAnotherCasting():string {
		return  -69.283;
	}
}

$newPHP = new Seven();

echo $newPHP->helloWorld();

try {
	echo $newPHP->fuckReturnTypes();
} catch(\EngineException $e) {
	echo PHP_EOL . PHP_EOL . $e->getMessage() . PHP_EOL;
}

try {
	echo $newPHP->whatAboutNull();
} catch(\EngineException $e) {
	echo PHP_EOL . $e->getMessage() . PHP_EOL;
}

try {
	echo $newPHP->whatAboutCasting();
} catch(\EngineException $e) {
	echo PHP_EOL . $e->getMessage() . PHP_EOL;
}

try {
	echo PHP_EOL . $newPHP->andIfITellYouAnotherCasting() . PHP_EOL;
} catch(\EngineException $e) {
	echo PHP_EOL . $e->getMessage() . PHP_EOL;
}
