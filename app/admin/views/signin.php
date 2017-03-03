<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{adminInfo.title}}</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="container" style="width: 700px;">
                <div>
                    <h1>Stun CMS <small>/ Installer</small></h1>
                </div>
            </div>
            <hr>
        </header>
        <section>
            <div class="container">
                <div class="page-content center-block" style="width: 700px;">
                    <div class="alert alert-info" role="alert">Preencha os dados do seu novo site.</div>
                    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nome do Site</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="" name="siteName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="" name="pass" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-right">
                                <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
        <footer>
            <hr>
            <div class="container">
                <div class="page-footer">
                    <h1></h1>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <!-- Form tvalidation -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.54/jquery.form-validator.min.js" integrity="sha256-5VwOpyg2kEYgLB11mE4s0ViCuoWD6MjmrXeo97UI5O8=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
