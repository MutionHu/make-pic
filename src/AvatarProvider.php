<?php
namespace Mution\MakePic;
use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-08-23
 * Time: 10:08
 */

class AvatarProvider extends ServiceProvider
{

    /**
     * 发布配置文件
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/avatar.php' => config_path('avatar.php'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('avatar', function ($app) {
            return new Avatar($app['config']);
        });
    }
}