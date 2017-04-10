@extends('layouts.app')

@section('menu')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="width: 85%; margin-top: 12%; margin-left:8%">
                <div class="panel-body">
                    <h3 style="text-align: center">Login</h3>
                    <img src="https://fimo.hipchat.com/img/sign_in/grey_avatar.svg" style="padding-left: 39%">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" style="padding-top: 1%">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}" style="color: black">Forgot Your Password?</a>
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <a class="btn btn-link" href="{{ url('/admin/login') }}">Admin login</a>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" style="width: 100%">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
       $('.mainbody').hide(); 
    });
</script>
@endsection

