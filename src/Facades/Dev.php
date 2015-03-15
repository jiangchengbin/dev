<?php namespace Jiangchengbin\Dev\Facades;

use Illuminate\Support\Facades\Facade;

class Dev extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'dev';
	}
}
