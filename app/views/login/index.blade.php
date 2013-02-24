@extends('layout.main')

@section('style')
    <style type="text/css">
      body {
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        /*font-size: 16px;*/
        height: auto;
        margin-bottom: 15px;
        /*padding: 7px 9px;*/
      }

    </style>
@stop

@section('content')

      <form class="form-signin">
        <h2 class="form-signin-heading">Sign in</h2>
        <br/>
        <div class="input-prepend">
          <span class="add-on"><i class="icon-envelope"></i></span>
          <input class="span3" type="text" placeholder="Email address">
        </div>
        <div class="input-prepend">
          <span class="add-on"><i class="icon-key"></i></span>
          <input class="span3" type="password" placeholder="Password">
        </div>
        <button class="btn btn-primary  pull-right" type="submit">Sign in</button>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </form>


@stop
