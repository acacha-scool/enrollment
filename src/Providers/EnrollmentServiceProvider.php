<?php

namespace Scool\Enrollment\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class EnrollmentServiceProvider.
 *
 * @package Scool\Enrollment\Providers
 */
class EnrollmentServiceProvider extends ServiceProvider
{
    /**
     * Register package services.
     */
    public function register()
    {
        if (!defined('SCOOL_ENROLLMENT_PATH')) {
            define('SCOOL_ENROLLMENT_PATH', realpath(__DIR__ . '/../../'));
        }
    }

    /**
     * Bootstrap package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrations();
    }

    /**
     * Load migrations.
     */
    private function loadMigrations()
    {
        $this->loadMigrationsFrom(SCOOL_ENROLLMENT_PATH . '/database/migrations');
    }
}