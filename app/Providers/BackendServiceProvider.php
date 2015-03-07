<?php namespace Mareck\Providers;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Mareck\Repositories\CommentRepositoryInterface',
			'Mareck\Repositories\DbCommentRepository'
		);
	}

}
