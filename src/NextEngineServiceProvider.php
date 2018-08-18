<?php

namespace Mystickynet\NextEngine;

use Illuminate\Support\ServiceProvider;

class NextEngineServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/config/nextengine.php' => config_path('nextengine.php')
		], 'config');

	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__ . '/config/nextengine.php', 'nextengine'
		);

		// bind NextEngine facede
		$this->app->bind('nextengineclient', function() {
			return new NextEngineClient;
		});
	}
}
