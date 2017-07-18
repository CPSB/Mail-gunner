<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignatureValidator;
use App\Mail\SendPetitionMail;
use App\Senders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class MailingController
 *
 * @package App\Http\Controllers
 */
class MailingController extends Controller
{
    public function __construct()
    {
        $this->middleware('lang');
    }

    /**
     * Store the data and fire the mails.
     *
     * @param SignatureValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function fire(SignatureValidator $input)
    {
        if ($data = Senders::create($input->except(['_token']))) {
            flash('Wij bedanken je voor je steun. En hebben zonder problemen de mail overgebracht naar Jo vandeurzen en Maggie De Block');
            Mail::to($data->email)->send(new SendPetitionMail($data));
        }

        return back(302);
    }
}
