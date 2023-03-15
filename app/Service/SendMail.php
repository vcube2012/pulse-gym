<?php

namespace App\Service;

use App\Models\Mailer;

class SendMail
{
    public static function domain()
    {
        return Mailer::select('domain')->first()->domain;
    }
    public static function driver()
    {
        return Mailer::select('driver')->first()->driver;
    }
    public static function host()
    {
        return Mailer::select('host')->first()->host;
    }
    public static function port()
    {
        return Mailer::select('port')->first()->port;
    }
    public static function userName()
    {
        return Mailer::select('username')->first()->username;
    }
    public static function password()
    {
        return Mailer::select('password')->first()->password;
    }
    public static function secret()
    {
        return Mailer::select('secret')->first()->secret;
    }
    public static function to()
    {
        return Mailer::select('to')->first()->to;
    }
    public static function from_name()
    {
        return Mailer::select('from_name')->first()->from_name;
    }
    public static function from_address()
    {
        return Mailer::select('from_address')->first()->from_address;
    }
}
