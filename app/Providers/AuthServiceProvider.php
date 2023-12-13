<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        foreach ($this->getAllPermissions() as $permission){
            Gate::define($permission->title , function (User $user) use ($permission){
                $isAuthorized =  $user->role->hasPermission($permission);
                return $isAuthorized
                    ? Response::allow()
                    : Response::deny('دسترسی شما به محتوا غیرمجاز است');
            });
        }
    }
    public function getAllPermissions()
    {
        return Permission::with('roles')->get();
    }
}
