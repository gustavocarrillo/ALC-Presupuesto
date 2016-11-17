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
        <div>
            <section class="login_content">
                @include('flash::message')
                @include('admin.partials.error')
                <form action="{{ route('registrar') }}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <h1>Create Account</h1>
                    <div>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre" required="" />
                    </div>
                    <div>
                        <input name="cedula" type="text" class="form-control" placeholder="Cedula" required="" maxlength="8" />
                    </div>
                    <div>
                        <input name="usuario" type="text" class="form-control" placeholder="Usuario" required="" />
                    </div>
                    <div>
                        <input name="email" type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input name="clave" type="password" class="form-control" placeholder="Clave" required="" />
                    </div>
                    <div>
                        <input name="clave_confirmation" type="password" class="form-control" placeholder="Confirmar Clave" required="" />
                    </div>
                    <div>
                        <select name="tipo" class="form-control" id="">
                            <option value="instituto">Instituto</option>
                            <option value="admin">admin</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <select name="estatus" class="form-control" id="">
                            <option value="activo">activo</option>
                            <option value="inactivo">inactivo</option>
                        </select>
                    </div>
                    <br />
                    <div>
                        <label for="foto" class="pull-left">Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <br>
                    <div>
                        <input type="submit" class="btn btn-default submit" value="Guardar">
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
