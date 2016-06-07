<?php

namespace App\Modules\Authentication\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class AuthenticationServiceProvider extends ServiceProvider
{
	/**
     * Bootstrap the application events.
     *
     * @return void
     */
	public function boot()
	{
		// You may register any additional middleware provided with your
		// module with the following addMiddleware() method. You may
		// pass in either an array or a string.
		// $this->addMiddleware('');
	}

	/**
	 * Register the Authentication module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Authentication\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Authentication module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('authentication', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('authentication', base_path('resources/views/vendor/authentication'));
		View::addNamespace('authentication', realpath(__DIR__.'/../Resources/Views'));
	}

	/**
     * Register any additional module middleware.
     *
     * @param  array|string  $middleware
	 * @return void
     */
	protected function addMiddleware($middleware)
	{
		$kernel = $this->app['Illuminate\Contracts\Http\Kernel'];

		if (is_array($middleware)) {
			foreach ($middleware as $ware) {
				$kernel->pushMiddleware($ware);
			}
		} else {
			$kernel->pushMiddleware($middleware);
		}
	}
}
