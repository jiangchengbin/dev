<?php namespace Jiangchengbin\Dev;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class DevServiceProvider extends ServiceProvider {

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		
	}

	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['dev'] = $this->app->share(
            function ($app) {
                return new \Jiangchengbin\Dev\Dev();
            }
        );
	}

}
