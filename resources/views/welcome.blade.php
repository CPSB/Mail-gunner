@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        {title mailing artillery}
                        <i><strong class="pull-right">0 / 0 mails verzonden</strong></i>
                    </div>
                    <div class="panel-body">
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <span class="fa fa-envelope" aria-hidden="true"></span> Ik steun deze mailingactie:
                    </div>
                    <div class="panel-body">
                        <form id="support" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control input-sm" name="name" placeholder="Uw naam">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" class="form-control input-sm" name="email" placeholder="Uw E-mail adres">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-sm" name="postal_code" placeholder="Code">
                                </div>

                                <div class="col-md-8">
                                    <input type="text" class="form-control input-sm" name="city" placeholder="Stad">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <button form="support" type="submit" class="btn btn-xs btn-success">
                            <span aria-hidden="true" class="fa fa-check"></span> Zend mijn mail
                        </button>
                        <button form="support" class="btn btn-xs btn-danger">
                            <span class="fa fa-undo"></span> Reset
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
