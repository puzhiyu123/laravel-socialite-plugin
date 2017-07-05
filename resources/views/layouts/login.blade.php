@extends('layouts.master')
@section('page-title', 'Please login')
@section('page-content')
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <ul>
                <li>
                    <a href="#" class="btn btn-block btn-lg btn-social btn-facebook social-button">
                        <span class="fa fa-facebook"></span> login with Facebook
                    </a>
                </li>
                <li>
                    <a href="#" class="btn btn-block btn-lg btn-social btn-google social-button">
                        <span class="fa fa-google"></span> login with Google
                    </a>
                </li>
                <li>
                    <a href="#" class="btn btn-block btn-lg btn-social btn-twitter social-button">
                        <span class="fa fa-twitter"></span> login with Twitter
                    </a>
                </li>
            </ul>
        </div>
    </div>
@stop
