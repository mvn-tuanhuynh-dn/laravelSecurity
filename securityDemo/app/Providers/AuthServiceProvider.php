<?php

namespace App\Providers;
use App\Models\User;

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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-edit-delete-post', function (User $user) {
            if ($user->roll == 1 || $user->roll == 3) {
                return true;
            }
            return false;
        });

        Gate::define('show-all-post', function (User $user) {
            if ($user->roll == 2 || $user->roll == 3) {
                return true;
            }
            return false;
        });
    }
}
