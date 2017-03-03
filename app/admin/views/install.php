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
                    <div class="alert alert-info" role="alert">Preencha os dados de acesso ao seu Banco de Dados.</div>
                    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Server</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="dbserver" disabled>
                                    <option value="mysql">MySQL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nome do DB</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="" name="dbname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Usuário</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="" name="dbuser">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="" name="dbpass">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Host</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="localhost" name="dbhost">
                            </div>
                            <label class="col-sm-1 control-label">Port</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="3306" name="dbport">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Prefixo da Tabela</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="stun_" name="dbprefix">
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
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
