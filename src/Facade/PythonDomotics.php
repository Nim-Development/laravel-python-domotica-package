<?php 

namespace NimDevelopment\PythonDomotics\Facade;

use Illuminate\Support\Facades\Facade;

class PythonDomotics extends Facade
{
	protected static function getFacadeAccessor()
	{
		//Name we assigned to class when we binded it into the service container
		return 'python.domotics';
	}
}

?>