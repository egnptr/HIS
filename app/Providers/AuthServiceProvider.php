<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Post::class => PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function(User $user) {
            return $user->role_id == 1;
        });

        Gate::define('doctor', function(User $user) {
            return $user->role_id == 2;
        });

        Gate::define('nurse', function(User $user) {
            return $user->role_id == 3;
        });

        Gate::define('staff', function(User $user) {
            return $user->role_id == 4;
        });
    }
}
