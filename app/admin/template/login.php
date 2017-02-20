<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{adminInfo.title}}</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{adminInfo.template_url}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{adminInfo.template_url}}/assets/fonts/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{adminInfo.template_url}}/assets/css/animate.min.css">

        <!-- Custom styling plus plugins -->
        <link rel="stylesheet" href="{{adminInfo.template_url}}/assets/css/custom.css">
        <link rel="stylesheet" href="{{adminInfo.template_url}}/assets/css/icheck/flat/green.css">


      <script src="{{adminInfo.template_url}}/assets/js/jquery.min.js"></script>

      <!--[if lt IE 9]>
            <script src="../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form role="form" method="post" enctype="multipart/form-data">
            <h1>Acesso Restrito</h1>
            <div>
              <input type="text" name="email" class="form-control" placeholder="Email" data-validation="email">
            </div>
            <div>
              <input type="password" name="pass" class="form-control" placeholder="Senha">
            </div>
            <div>
              <button type="submit" class="btn btn-default">Entrar</button>
              <a class="reset_pass" href="#">Esqueci minha senha</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator"></div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>
  <!-- Form tvalidation -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  <script>
    $.validate({
      modules : 'security',
      lang : 'pt'
    });
  </script>
</body>

</html>
