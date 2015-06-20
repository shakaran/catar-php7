<?php
namespace Catar;

error_reporting(E_ALL);
echo "error_reporting(E_ALL);\n";

class Dummy {
	public function __toString() {
		return "no soy nadie... snif \n";
	}
}

class Seven {

    public function helloWorld():string
    {
        return "Hola Mundo\n";
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

$nuevoPhp = new Seven();

echo $nuevoPhp->helloWorld();

try {
	echo $nuevoPhp->fuckReturnTypes();
} catch(\EngineException $e) {
	echo "\n\n{$e->getMessage()}\n";
}

try {
	echo $nuevoPhp->whatAboutNull();
} catch(\EngineException $e) {
	echo "\n{$e->getMessage()}\n";
	
}

try {
	echo $nuevoPhp->whatAboutCasting();
} catch(\EngineException $e) {
	echo "\n{$e->getMessage()}\n";
	
}

try {
	echo "\n";
	echo $nuevoPhp->andIfITellYouAnotherCasting();
	echo "\n";
} catch(\EngineException $e) {
	echo "\n{$e->getMessage()}\n";
	
}