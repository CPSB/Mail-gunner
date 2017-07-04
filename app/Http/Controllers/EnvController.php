<?php

namespace App\Http\Controllers;

use Brotzka\DotenvEditor\DotenvEditor as Env;
use Illuminate\Http\Request;

class EnvController extends Controller
{
    public function create()
    {
        $env = new Env();
        $env->createBackup();

        flash('De back-up is aangemaakt en opgeslagen in het systeem.')->success();

        return redirect()->route('config.backup');
    }

    /**
     * @param integer $timestamp Unformatted timestalp for the config backup.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($timestamp)
    {
        $env = new Env();
        $env->deleteBackup($timestamp);

        flash('De configuratie backup is verwijderd.')->success();
        return redirect()->route('config.backup');
    }

    public function download($filename = false)
    {
        $env = new Env();

        if ($filename) {
            $file = $env->getBackupPath() . $filename . "_env";
            flash('Het back-up configuratie bestand is gedownload.')->success();
            return response()->download($file, $filename . ".env");
        }

        flash('We komen geen configuratie back-up vinden dus hebben we de huidige configuratie gedownload.')->warning();
        return response()->download(base_path() . "/.env", ".env");
    }

    public function restore($backuptimestamp)
    {
        $env = new Env();
        $env->restoreBackup($backuptimestamp);

        flash()->success('De configuratie is hersteld naar het aangegeven punt.');
        return redirect()->route('config.backup');
    }
}
