<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('test_developer',function(User $user) { return $user->role_id == Role::IS_DEVELOPER; });
        Gate::define('test_admin',function(User $user) { return $user->role_id == Role::IS_ADMIN; });
        Gate::define('test_user',function(User $user) { return $user->role_id == Role::IS_USER; });
    }
}
