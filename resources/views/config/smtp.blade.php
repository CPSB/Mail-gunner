@extends('layouts.config')

@section('panel-icon', 'fa fa-btn fa-color fa-envelope')
@section('panel-title', 'SMTP configuratie')


@section('content')
    <div class="alert alert-warning alert-important alert-dismissible" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Waarshuwing:</strong>

        Het configureren van de smtp kan de mailer in het systeem kapot maken :(. Bij het instellen van de SMTP gegevens
        raden we aan om vrij zeker te zijn van je gegevens.
    </div>

    <form class="form-horizontal" method="" action="">
        {{ csrf_field() }}

        <fieldset>
            <legend>Server Gegevens</legend>

            <div class="form-group">
                <label class="control-label col-md-3">
                    SMTP adres: <span class="text-danger">*</span>
                </label>

                <div class="col-md-6">
                    <input type="text" value="{{ $mail_host }}" class="form-control" name="MAIL_HOST" placeholder="Mail server address">
                </div>

                <div class="col-md-3">
                    <input type="text" value="{{ $mail_port }}" class="form-control" name="MAIL_PORT" placeholder="Port">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3">
                    SMTP Server info: <span class="text-danger">*</span>
                </label>

                <div class="col-md-6">
                    <select name="MAIL_DRIVER" class="form-control">
                        <option value="">-- Selecteer je driver --</option>
                        <option value="smtp">SMTP</option>
                        <option value="sendmail">Sendmail</option>
                        <option value="mailgun">Mailgun</option>
                        <option value="mandrill">Mandrill</option>
                        <option value="ses">SES</option>
                        <option value="sparkpost">Sparkpost</option>
                        <option value="log">Log</option>
                        <option value="array">Array</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select name="MAIL_ENCRYPTION" class="form-control">
                        <option value="">-- Encryptie --</option>
                        <option value="tls">TLS</option>
                        <option value="ssl">SSL</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3">
                    Mail server user: <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Mailer server gebruikersnaam" value="{{ $mail_username }}" name="M">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3">
                    Mail server wachtwoord: <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                    <input type="password" class="form-control" placeholder="Mailer server gebruikers wachtwoord" name="MAIL_PASSWORD">
                    <small class="help-block">* De mail server zijn wachtwoord word niet weergegeven uit veiligheid.</small>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Gegevens van de verzender.</legend>

            <div class="form-group">
                <label class="control-label col-md-3">
                    Verzender naam: <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                    <input type="text" value="" class="form-control" placeholder="Verzender zijn naam">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3">
                    Verzender E-mail: <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                    <input type="email" value="" class="form-control" placeholder="Verzender zijn email adres">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-success">
                        <span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Mailer aanpassen
                    </button>

                    <button type="reset" class="btn btn-danger">
                        <span class="fa fa-undo" aria-hidden="true"></span> Reset formulier.
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection