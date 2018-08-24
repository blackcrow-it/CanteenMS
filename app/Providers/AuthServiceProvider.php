<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Post::class => \App\Policies\PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        Gate::define('hoa-don', function ($user){
            if ($user->role_id === 1 || $user->role_id === 3) {
                return true;
            }
        });

        Gate::define('danh-sach-hoa-don', function ($user){
            if ($user->role_id === 1 || $user->role_id === 2 || $user->role_id === 3) {
                return true;
            }
        });

        Gate::define('thong-tin', function ($user){
                return true;
        });

        Gate::define('quan-ly', function ($user){
            if ($user->role_id === 2 || $user->role_id === 1) {
                return true;
            }
        });

        // $this->registerPolicies();

        // Gate::before(function($user){
        //     if ($user->id === 2) {
        //         return true;
        //     }
        // });

        // if (! $this->app->runningInConsole()) {
        //     foreach (Permission::all() as $permission) {
        //         Gate::define($permission->name, function ($user) use ($permission){
        //             return $user->hasPermission($permission);
        //         });
        //     }
        // }
    }
}
