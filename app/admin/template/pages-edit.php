{{> header.inc}}
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3 class="page-header">Páginas</h3>
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
                                        <form role="form" method="post" action="{{adminInfo.url}}/paginas/editar/{{page.id}}" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="form-group">
                                                        <label><span class="lead">Título</span></label>
                                                        <input type="text" class="form-control input-lg" name="title" value="{{page.title}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><span class="lead">Conteúdo</span></label>
                                                        <textarea class="form-control" rows="16" name="text" required>{{page.content}}</textarea>
                                                    </div>
                                                </div>
                                                 <div class="col-xs-12 col-sm-4 form-aside">
                                                    <!-- <div class="form-group">
                                                        <hr>
                                                        <h4>
                                                            Imagem
                                                            <small>
                                                                <span class="label label-default">.png</span>
                                                                <span class="label label-default">.jpg</span>
                                                                <span class="label label-default">.gif</span>
                                                                <span class="label label-danger">Max: 300kb</span>
                                                            </small>
                                                        </h4>
                                                        <br>
                                                        <input class="form-control" type="file" name="image" onchange="imgPreview(this);">
                                                        <br>
                                                        <div class="img-input">
                                                            <img class="img-input-preview img-input-thumb" src="{{page.image_url}}" alt="">
                                                            <div class="edit-img">
                                                                <a class="edit-img-button" data-toggle="modal" data-target="#editImageModal" href="#" title="Editar imagem">
                                                                    <i class="fa fa-crop" aria-hidden="true"></i>
                                                                </a>
                                                            </div>

                                                            <div class="modal fade" id="editImageModal" tabindex="-1" role="dialog" aria-labelledby="editImageModal">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                            <h4 class="modal-title" id="myModalLabel">Editar Imagem</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="img-crop-container">
                                                                                <img id="img-crop-preview" class="img-input-preview" src="{{page.image_url}}" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <hr>
                                                    <div class="form-submit text-right">
                                                        <button type="submit" class="btn btn-success btn-lg btn-block">Atualizar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
{{> footer.inc}}
