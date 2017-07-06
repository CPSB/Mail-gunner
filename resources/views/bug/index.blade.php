@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Meld een probleem.</div>

                    <div class="panel-body">
                        <span class="fa fa-bug fa-3x fa-color fa-pull-left fa-border" aria-hidden="true"></span>

                        Heb je een bug gevonden in ons systeem? Dan willen we ons alvast excuseren voor het ongemak.
                        We zijn blij dat je het mogelijk wilt aangeven. En dat kun je doen doormiddel het formulier hieronder.

                        En aan de hand van de data die u invult hieronder gaan wij aan de slag om de fout te verhelpen.
                        Zodat dit niet meer voorvalt. En we ons platform verbeteren.
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{ route('bug.store') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Uw email adres">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea name="body" class="form-control" rows="7" placeholder="Uw beschrijving van de foutmelding"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">
                                        <span class="fa fa-check" aria-hidden="true"></span> Insturen
                                    </button>

                                    <button class="btn btn-danger" type="reset">
                                        <span class="fa fa-undo" aria-hidden="true"></span> Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection