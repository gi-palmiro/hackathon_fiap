<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpClient\HttpClient;
use MailerSend\LaravelDriver\MailerSendTransport;



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

        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        $httpClient = Http::withOptions([
            'verify' => false,
        ]);

        // Inicializa o transport MailerSend com essa configuração
        app()->bind('mail.mailersend', function () use ($httpClient) {
            return new MailerSendTransport(new Config(env('MAILERSEND_API_KEY')), $httpClient);
        });


//        $httpClient = Http::withOptions([
//            'verify' => false,
//        ]);
//
//        // Inicializa o transport MailerSend com essa configuração
//        app()->bind('mail.mailersend', function () use ($httpClient) {
//            return new \MailerSend\MailerSend(new \MailerSend\Config(env('MAILERSEND_API_KEY')), $httpClient);
//        });
    }
}
