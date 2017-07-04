@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Mailing text:</div>

                <div class="panel-body">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="nl">
                            <form method="" class="form-horizontal">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="flag-icon flag-icon-nl"></span></div>
                                            <input type="text" placeholder="Naam van de mailing actie" name="title" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea name="text" id="summernote_nl"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">
                                            <span class="fa fa-check" aria-hidden="true"></span> Aanpassen
                                        </button>

                                        <button type="reset" class="btn btn-danger">
                                            <span class="fa fa-undo" aria-hidden="true"></span> Reset formulier
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="fr">
                            <form method="" class="form-horizontal">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="flag-icon flag-icon-fr"></span></div>
                                            <input type="text" placeholder="Naam van de mailing actie" name="title" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea name="text" id="summernote_fr"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">
                                            <span class="fa fa-check" aria-hidden="true"></span> Aanpassen
                                        </button>

                                        <button type="reset" class="btn btn-danger">
                                            <span class="fa fa-undo" aria-hidden="true"></span> Reset formulier
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="eng">
                            <form method="" class="form-horizontal">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="flag-icon flag-icon-gb"></span></div>
                                            <input type="text" placeholder="Naam van de mailing actie" name="title" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea name="text" id="summernote_en"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">
                                            <span class="fa fa-check" aria-hidden="true"></span> Aanpassen
                                        </button>

                                        <button type="reset" class="btn btn-danger">
                                            <span class="fa fa-undo" aria-hidden="true"></span> Reset formulier
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="list-group">
                <a href="#nl" aria-controls="nl" role="tab" data-toggle="tab" class="list-group-item">
                    <span class="flag-icon flag-icon-nl"></span> Mailing text (Nederlands)
                </a>
                <a href="#fr" aria-controls="fr" role="tab" data-toggle="tab" class="list-group-item">
                    <span class="flag-icon flag-icon-fr"></span> Mailing text (Frans)
                </a>
                <a href="#eng" aria-controls="eng" role="tab" data-toggle="tab" class="list-group-item">
                    <span class="flag-icon flag-icon-gb"></span> Mailing text (Engels)
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
