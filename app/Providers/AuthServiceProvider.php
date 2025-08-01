<?php

namespace App\Providers;

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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function($user) {
            return $user->role == 'Admin';
         });
         Gate::define('isOperator', function($user) {
             return $user->role == 'Operator';
         });
         Gate::define('isAuthor', function($user) {
             return $user->role == 'user';
         });
         Gate::define('update-post', function ($user, $post) {
             return $user->id === $post->user_id;
         });
    }
}
