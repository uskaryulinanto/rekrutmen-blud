<?php

namespace Config;

use CodeIgniter\Shield\Config\AuthViews as ShieldAuthViews;

class AuthViews extends ShieldAuthViews
{
    public array $views = [
        'login'                  => 'Shield/login',
        'register'               => 'Shield/register',
        'layout'                 => 'layouts/auth',
        'emailActivateShow'      => 'Shield/email_activate_show', // <-- PASTIKAN BARIS INI MENGARAH KE VIEW CUSTOM
        'email2faShow'           => 'CodeIgniter\Shield\Views\email_2fa_show',
        'magicLinkVerify'        => 'CodeIgniter\Shield\Views\magic_link_verify',
        'magicLinkMessage'       => 'CodeIgniter\Shield\Views\magic_link_message',
        'action_email_activate'  => 'Shield/email_activate_show', // <-- Tambahkan ini untuk berjaga-jaga
    ];
}
