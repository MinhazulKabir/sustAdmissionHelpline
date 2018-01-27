<?php

namespace App\Providers;

use App\Role;
use App\User;
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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Transportation
        Gate::define('transportation_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('transportation_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('transportation_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('transportation_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('transportation_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Association
        Gate::define('association_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('association_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('association_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('association_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('association_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Hotel information
        Gate::define('hotel_information_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('hotel_information_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('hotel_information_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('hotel_information_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('hotel_information_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Restaurant infomation
        Gate::define('restaurant_infomation_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('restaurant_infomation_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('restaurant_infomation_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('restaurant_infomation_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('restaurant_infomation_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Emergency information
        Gate::define('emergency_information_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('emergency_information_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('emergency_information_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('emergency_information_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('emergency_information_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

    }
}
