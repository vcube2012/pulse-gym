<?php

namespace App\Service;

use App\Models\Mailer;
use Illuminate\Support\Facades\Cache;

class SendMail
{
    public null|\Illuminate\Database\Eloquent\Model $config;

    public function __construct()
    {
        $this->getConfig();
    }

    public function getConfig()
    {
        $this->config = Cache::remember('config_mailer', 60, function () {
            return Mailer::query()->first();
        });
        return $this;
    }

    public function setConfig()
    {
        config()->set('mail.mailers.smtp.transport', $this->config->driver);
        config()->set('mail.mailers.smtp.host', $this->config->host);
        config()->set('mail.mailers.smtp.port', $this->config->port);
        config()->set('mail.mailers.smtp.username', $this->config->username);
        config()->set('mail.mailers.smtp.password', $this->config->password);
        config()->set('services.mailgun.domain', $this->config->domain);
        config()->set('services.mailgun.secret', $this->config->secret);
        config()->set('mail.from.address', $this->config->from_address);
        config()->set('mail.from.name', $this->config->from_name);
        return $this;
    }
}
