@extends('layouts.config')

@section('panel-icon', 'fa fa-btn fa-color fa-github')
@section('panel-title', 'GitHub configuratie')

@section('content')
    <div class="alert alert-warning alert-important alert-dismissible" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Waarshuwing:</strong>

        Het configureren van de GitHub gegevens. Kan de foutmelder kapot maken. Als u de verkeerde gegevens invoerd.
        Dus wees zeker van je gegevens die je wilt aanpassen of invullen.
    </div>

    <form class="form-horizontal" method="post" action="">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-md-3">
                GitHub naam: <span class="text-danger">*</span>
            </label>

            <div class="col-md-9">
                <input type="text" class="form-control" placeholder="GitHub gebruikersnaam" value="">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">
                GitHub wachtwoord: <span class="text-danger">*</span>
            </label>

            <div class="col-md-9">
                <input type="text" class="form-control" placeholder="GitHub wachtwoord">
                <small class="help-block">* Wachtwoord word niet weergegeven uit veiligheid.</small>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-success">
                    <span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Wijzigen.
                </button>

                <button type="reset" class="btn btn-danger">
                    <span class="fa fa-undo" aria-hidden="true"></span> Annuleren.
                </button>
            </div>
        </div>
    </form>
@endsection