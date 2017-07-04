@extends('layouts.config')

@section('panel-icon', 'fa fa-btn fa-color fa-database')
@section('panel-title', 'Database configuratie')

@section('content')
    <div class="alert alert-warning alert-important alert-dismissible" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Waarshuwing:</strong>

        Het configuren van de database kan er mogelijk voor zorgen dat de applicatie niet meer werkt.
        Dus wees zeker van je database gegevens die je wilt invoegen of aanpassen.
    </div>

    <form class="form-horizontal" action="" method="">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-md-3">
                Database naam: <span class="text-danger">*</span>
            </label>

            <div class="col-md-9">
                <input type="text" name="DB_NAME" class="form-control" placeholder="De naam van de databank." value="{{ $db_name }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">
                Database adres: <span class="text-danger">*</span>
            </label>

            <div class="col-md-7">
                <input type="text" name="DB_HOST" class="form-control" placeholder="Het adres van de databank" value="{{ $db_host }}">
                <small><span class="help-block">* Database adres poort is standaard <code>3306</code></span></small>
            </div>

            <div class="col-md-2">
                <input type="text" name="DB_PORT" class="form-control" placeholder="DB port" value="{{ $db_port }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">
                Database gebruiker: <span class="text-danger">*</span>
            </label>

            <div class="col-md-9">
                <input type="text" name="DB_USER" class="form-control" placeholder="Database gebruiker" value="{{ $db_user }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">
                Database wachtwoord:
            </label>

            <div class="col-md-9">
                <input type="password" name="DB_PASSWORD" class="form-control" placeholder="Database wachtwoord">
                <small class="help-block">Het wachtwoord niet weergegeven uit veiligheid.</small>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-danger">
                    <span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Gegevens opslaan
                </button>

                <button type="reset" class="btn btn-success">
                    <span class="fa fa-undo" aria-hidden="true"></span> Reset formulier
                </button>
            </div>
        </div>

    </form>
@endsection