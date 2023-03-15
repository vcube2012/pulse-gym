<?php

namespace App\Providers;

use App\Models\Mailer;
use App\Service\SendMail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Spatie\NovaTranslatable\Translatable::defaultLocales(['ru','uk']);

        if(Mailer::all()->count()>0) {
            if (!is_null(SendMail::host())) {
                config()->set('mail.mailers.smtp.host', SendMail::host());
            }
            if (!is_null(SendMail::port())) {
                config()->set('mail.mailers.smtp.port', SendMail::port());
            }
            if (!is_null(SendMail::userName())) {
                config()->set('mail.mailers.smtp.username', SendMail::userName());
            }
            if (!is_null(SendMail::password())) {
                config()->set('mail.mailers.smtp.password', SendMail::password());
            }
            if (!is_null(SendMail::domain())) {
                config()->set('services.mailgun.domain', SendMail::domain());
            }
            if (!is_null(SendMail::secret())) {
                config()->set('services.mailgun.secret', SendMail::secret());
            }
            if (!is_null(SendMail::from_address())) {
                config()->set('mail.from.address', SendMail::from_address());
            }
            if (!is_null(SendMail::from_name())) {
                config()->set('mail.from.name', SendMail::from_name());
            }
        }
    }
}
