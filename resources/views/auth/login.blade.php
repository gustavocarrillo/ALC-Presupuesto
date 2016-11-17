<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plantilla para Sistema</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- NProgress -->
    <link rel="stylesheet" href="{{ asset('vendors/nprogress/nprogress.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('vendors/animate.css/animate.min.css') }}">
    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset('build/css/custom.min.css') }}">

</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            @include('flash::message')
            @include('admin.partials.error')
            <section class="login_content">
                <form action="{{url('auth/login')}}" method="post">
                    {{ csrf_field() }}
                    <h1>Introduce tus datos</h1>
                    <div>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="" />
                    </div>

                    <div>
                        <input type="password" name="clave" class="form-control" placeholder="Clave" required="" />
                    </div>
                    <br />
                    <div>
                        <input type="submit" class="btn btn-default submit" value="Entrar">
                        <a class="reset_pass" href="#">Olvide mi Clave</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-cubes"></i> Gustav System</h1>
                            <p>©2016 All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
