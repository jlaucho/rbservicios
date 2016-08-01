<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | RB_Servicios</title>

    <!-- Bootstrap -->
    <link href="{{ asset('plugins.bootstrap.css.bootstrap.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('plugins.css.font-awesome.css.font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body style="background:#F7F7F7;">
    <div class="">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>

      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
              {!! csrf_field() !!}
              <h1>Accesa</h1>
              <!-- PARA EL EMAIL -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input type="email" class="form-control" name='email' placeholder="e-mail" required="required" />
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
              <!-- PARA EL PASSWORD-->

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <input type="password" name="password" class="form-control" placeholder="clave" required="required" />
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                  <button type="submit" class="btn btn-link"> Login </button>


                  <a class="btn btn-link" href="{{ url('/password/reset') }}">¿ Olvidaste tu clave ?</a>
                </div>
                <div class="clearfix"></div>
                <div class="separator">

                  <p class="change_link">¿ eres Nuevo ?
                    <a href="#toregister" class="to_register"> Registrate </a>
                  </p>
                  <div class="clearfix"></div>
                  <br />
                  <div>
                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> RB Servicios te da la bienvenida !!!</h1>

                    <p>©2016 Todos los derechos reservados. Rangel Briceño Servicios C.A.</p>
                  </div>
                </div>
            </form>
          </section>
        </div>

        <div id="register" class=" form">
          <section class="login_content">
            <form>
              <h1>Crear Cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Registrar</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">

                <p class="change_link">¿ estas registrado ?
                  <a href="#tologin" class="to_register"> Ingresa </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw" style="font-size: 26px;"></i> RB Servicios </h1>

                  <p>©2016 Todos los derechos reservados. Rangel Briceño Servicios C.A.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>