<?php

use App\Models\Mailer;

if (!function_exists('get_driver')) {
    function get_driver(): string
    {
        return 'mailer';
    }
}

//if (!function_exists('get_host')) {
//    function get_host(): string
//    {
//        return Mailer::select('host')->first()->host;
//    }
//}
//
//if (!function_exists('get_port')) {
//    function get_port(): string
//    {
//        return Mailer::select('port')->first()->port;
//    }
//}
//
//if (!function_exists('get_user_name')) {
//    function get_user_name(): string
//    {
//        return Mailer::select('user_name')->first()->user_name;
//    }
//}
//
//if (!function_exists('get_password')) {
//    function get_password(): string
//    {
//        return Mailer::select('password')->first()->password;
//    }
//}
//
//if (!function_exists('get_secret')) {
//    function get_secret(): string
//    {
//        return Mailer::select('secret')->first()->secret;
//    }
//}
//
//if (!function_exists('get_to')) {
//    function get_to(): string
//    {
//        return Mailer::select('to')->first()->to;
//    }
//}
//
//if (!function_exists('get_from_name')) {
//    function get_from_name(): string
//    {
//        return Mailer::select('from_name')->first()->from_name;
//    }
//}
//
//if (!function_exists('get_from_address')) {
//    function get_from_address(): string
//    {
//        return Mailer::select('from_address')->first()->from_address;
//    }
//}
//
//    if (!function_exists('get_domain')) {
//        function get_domain(): string
//        {
//            return Mailer::select('domain')->first()->domain;
//        }
//   }
