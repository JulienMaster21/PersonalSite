<?php

namespace App\Providers;

use App\Assignment;
use App\Blok;
use App\Course;
use App\Policies\AssignmentPolicy;
use App\Policies\BlokPolicy;
use App\Policies\CoursePolicy;
use App\Policies\TestPolicy;
use App\Test;
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
        'App\model' => 'App\Policies\ModelPolicy',
        Test::class => TestPolicy::class,
        Course::class => CoursePolicy::class,
        Blok::class => BlokPolicy::class,
        Assignment::class => AssignmentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
