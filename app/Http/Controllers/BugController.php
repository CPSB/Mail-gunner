<?php

namespace App\Http\Controllers;

use App\Http\Requests\BugValidator;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Http\Request;

/**
 * Class BugController
 *
 * @package App\Http\Controllers
 */
class BugController extends Controller
{
    /**
     * BugController constructor.
     */
    public function __construct()
    {
        $this->middleware('lang');
    }

    /**
     * Get the view for bug reporting.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('bug.index');
    }

    /**
     * Upload some user error to github.
     *
     * @param  BugValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $input)
    {
        // dd(config('github.connections.other.username'), config('github.connections.other.password'));
        $input->merge(['title' => 'Foutmelding gebruiker.']);

        if (GitHub::issues()->create('Tjoosten', 'Mail-gunner', $input->except(['email', 'token']))) {
            flash('Wij hebben u foutmelding goed ontvangen.')->success();
        }

        return redirect()->route('bug.index');
    }
}
