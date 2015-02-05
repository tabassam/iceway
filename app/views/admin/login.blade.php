<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login | NBC Japan</title>

    <!-- Bootstrap Core CSS -->
    @include('admin.shared.css_links')

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">NBC Japan Admin Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="/admin/login" name="login" method="post">
                        <fieldset>
                            @if(Session::has('error'))
                                <li style="color:red">
                                    {{ Session::get('error') }}
                                </li>
                            @endif
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            {{--<a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>--}}
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
@include('admin.shared.js_links')

</body>

</html>
