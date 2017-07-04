@extends('layouts.config')

@section('panel-icon', 'fa fa-btn fa-color fa-cogs')
@section('panel-title', 'Configuratie back-ups')

@section('content')
    @if (! $backups)
        <div class="alert alert-info alert-important">
            <strong><span class="fa fa-info-circle" aria-hidden="true"></span></strong>
            Er zijn nog geen configuratie back-ups. Maak er snel eentje aan voor alles in de soep draait.
        </div>
    @else
        <p>
            Een overzicht van je back-ups. Je kunt ook tevens in het overzicht back-ps terug zetten, downloaden, verwijderen, enz... <br/>
            <span class="text-danger">Let wel op bij het terugzetten van een backup. Word de huidige configuratie herschreven. Indien nodig back-up deze eerst!</span>
        </p>
    @endif
@endsection