<?php

namespace App\Http\Controllers;

use Brotzka\DotenvEditor\DotenvEditor as Env;
use Brotzka\DotenvEditor\Exceptions\DotEnvException;
use Illuminate\Http\Request;

/**
 * Class ConfigController
 *
 * @package App\Http\Controllers
 */
class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * The database configuration view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $env = new Env();

        try{
            $data['db_connection'] = $env->getValue('DB_CONNECTION');
            $data['db_host'] = $env->getValue("DB_HOST");
            $data['db_port'] = $env->getValue('DB_PORT');
            $data['db_user'] = $env->getValue('DB_USERNAME');
            $data['db_pass'] = $env->getValue('DB_PASSWORD');
            $data['db_name'] = $env->getValue('DB_DATABASE');

            return view('config.database', $data);
        } catch (DotEnvException $e){
            echo $e->getMessage();
        }
    }

    /**
     * The backup configuration view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getBackups()
    {
        $env = new Env();

        try {
            $data['backups'] = $env->getBackupVersions();
        } catch (DotEnvException $e) {
            $data['backups'] = false;
        }

        return view('config.backups', $data);
    }

    /**
     * SMTP configuration view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function smtp()
    {
        $env = new Env();

        try {
            $data['mail_driver']        = $env->getValue('MAIL_DRIVER');
            $data['mail_host']          = $env->getValue('MAIL_HOST');
            $data['mail_port']          = $env->getValue('MAIL_PORT');
            $data['mail_username']      = $env->getValue('MAIL_USERNAME');
            $data['mail_password']      = $env->getValue('MAIL_PASSWORD');
            $data['mail_encryption']    = $env->getValue('MAIL_ENCRYPTION');

            $data['sender_name']        = $env->getValue('MAIL_FROM_NAME');
            $data['sender_address']     = $env->getValue('MAIL_FROM_ADDRESS');

            return view('config.smtp', $data);
        } catch(DotEnvException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * GitHub configuration field.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function github()
    {
        $env = new Env();

        try {
            $data['github_user'] = $env->getValue('GITHUB_USER');

            return view('config.github', $data);
        } catch (DotEnvException $e) {
            echo $e->getMessage();
        }
    }
}
