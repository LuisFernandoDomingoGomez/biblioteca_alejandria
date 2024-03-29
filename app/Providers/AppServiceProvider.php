<?php
 
namespace App\Providers;
 
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Support\ServiceProvider;
use PHPUnit\Framework\TestCase;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function register()
    {
        //
    }
    
    public function boot(): void
    {
        ParallelTesting::setUpProcess(function (int $token) {
            // ...
        });
 
        ParallelTesting::setUpTestCase(function (int $token, TestCase $testCase) {
            // ...
        });
 
        // Executed when a test database is created...
        ParallelTesting::setUpTestDatabase(function (string $database, int $token) {
            Artisan::call('db:seed');
        });
 
        ParallelTesting::tearDownTestCase(function (int $token, TestCase $testCase) {
            // ...
        });
 
        ParallelTesting::tearDownProcess(function (int $token) {
            // ...
        });
    }
}