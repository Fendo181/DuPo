@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    現在ログイン中です！
                </div>
                <li class="nav-item" style="list-style:none;">
                    <a class="nav-link" href="{{ url('/dupo') }}"><i class="fa fa-fw fa-book" aria-hidden="true"></i>Back DuPo Page</a>
                </li>
            </div>
        </div>
    </div>
</div>
@endsection
