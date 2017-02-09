{{> header.inc}}
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3 class="page-header">Notas</h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Editar</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li>
                                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a></li>
                                                    <li><a href="#">Settings 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <form role="form" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="form-group">
                                                        <label><span class="lead">Texto</span></label>
                                                        <input type="text" class="form-control input-lg" name="texto" value="{{post.texto}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><span class="lead">Link</span></label>
                                                        <input type="text" class="form-control input-lg" name="url" value="{{post.url}}" placeholder="http://">
                                                    </div>
                                                    <hr>
                                                    <div class="form-submit text-right">
                                                        <button type="submit" class="btn btn-success btn-lg">Atualizar</button>
                                                    </div>
                                                </div>
                                                <!-- /.col-sm-8 (nested) -->
                                                <div class="col-xs-12 col-sm-4 form-aside">

                                                </div><!-- /.col-sm-4 (nested) -->
                                            </div><!-- /.row (nested) -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
{{> footer.inc}}
