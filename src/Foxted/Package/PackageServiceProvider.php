<?php namespace Foxted\Package;

use Illuminate\Support\ServiceProvider;

/**
 * Class PackageServiceProvider
 * @package Foxted\Package
 * @author  Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class PackageServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 * @return void
	 */
	public function boot()
	{
		$this->package('foxted/package');
	}

	/**
	 * Register the service provider.
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
