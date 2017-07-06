<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\TranslationLoader\LanguageLine;

/**
 * Class ActionController
 *
 * @package App\Http\Controllers
 */
class ActionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    public function store(Request $input)
    {
        $titleCheck = LanguageLine::where('group', 'action')
            ->where('key', 'title')
            ->where('text', 'REGEXP', "\"{$input->language}\"");

        $textCheck  = LanguageLine::where('group', 'action')
            ->where('key', 'text')
            ->where('text', 'REGEXP', "\"{$input->language}\"");

        if ($titleCheck->count() === 1) {
            $oldText = $titleCheck->firstOrfail();

            $title        = $oldText;
            $title->text  = [$input->language => $input->title];
            $title->save();
        } else {
            LanguageLine::create(['group' => 'action', 'key' => 'title', 'text'  => [$input->language => $input->title]]);
        }

        if ($textCheck->count()) {
            $text         = $textCheck->firstOrfail();
            $text->text   = [$input->language => $input->text];
            $text->save();
        } else {
            LanguageLine::create(['group' => 'action', 'key' => 'text', 'text'  => [$input->language => $input->text]]);
        }

        flash('De mailings text is aangepast.');

        return redirect()->route('home');
    }
}
