@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        @lang('action.title')
                        <i><strong class="pull-right">0 / 0 mails verzonden</strong></i>
                    </div>
                    <div class="panel-body">
                        @lang('action.text')
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

                <div style="margin-bottom: 10px;">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.welzijn.activisme.be" class="btn btn-block btn-social btn-facebook">
                        <span class="fa fa-facebook"></span> Deel op Facebook
                    </a>
                    <a href="https://twitter.com/home?status=Ik%20kom%20op%20voor%20mijn%20welzijn.%20%0A%0A-%20http%3A//www.welzijn.activisme.be%20%23ActivismeBE" class="btn btn-block btn-social btn-twitter">
                        <span class="fa fa-twitter"></span> Deel op Twitter
                    </a>
                    <a href="https://plus.google.com/share?url=http%3A//www.welzijn.activisme.be" class="btn btn-block btn-social btn-google">
                        <span class="fa fa-google"></span> Deel op Google+
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A//www.welzijn.activisme.be&amp;title=Ik%20kom%20op%20voor%20mijn&20welzijn&amp;summary=&amp;source=" class="btn btn-block btn-social btn-linkedin">
                        <span class="fa fa-linkedin"></span> Deel op LinkedIn
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
