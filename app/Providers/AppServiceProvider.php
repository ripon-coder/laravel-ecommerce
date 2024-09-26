<?php

namespace App\Providers;

use App\Repository\UserRepository;
use App\Repository\UserRepositoryInterface;
use App\Service\PaymentService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);

        Blade::directive("datetime",function($value){
            return "<?php echo ($value)->format('Y'); ?>";
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
