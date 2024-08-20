<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // evita o Lazy Loading, ou seja, ativa o Eager Loading
        Model::preventLazyLoading();

        // cria um portão (Gate) para autorizar a edição da vaga
        Gate::define('edit-job', function (User $user, Job $job) {
            return $job->employer->user->is(Auth::user());
        });
    }
}
