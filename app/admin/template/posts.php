{{> header.inc}}
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="admin-produtos">
                        <div class="page-title">
                            <div class="title_left">
                                <h3 class="page-header">Postagens</h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseAddPost" aria-expanded="false" aria-controls="collapseAddPost">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Adicionar
                        </button>
                        <div class="panel-group" id="accordion">
                            <div id="collapseAddPost" class="panel-collapse collapse">
                                <div class="well well-sm">
                                    <form role="form" method="post" action="{{adminInfo.url}}/notas/publicar" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-8">
                                                <div class="form-group">
                                                    <label><span class="lead">Texto</span></label>
                                                    <input type="text" class="form-control input-lg" name="texto" required>
                                                </div>
                                                <div class="form-group">
                                                    <label><span class="lead">Link</span></label>
                                                    <input type="text" class="form-control input-lg" name="url" placeholder="http://">
                                                </div>
                                                <hr>
                                                <div class="form-submit text-right">
                                                    <button type="submit" class="btn btn-success btn-lg">Publicar</button>
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
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Todas as postagens</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li>
                                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Drafts <span class="label label-default">7</span></a></li>
                                                    <li><a href="#">Trash <span class="label label-danger">42</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Texto</th>
                                                    <th>Link</th>
                                                    <th>Criado</th>
                                                    <th>Editado</th>
                                                    <th>Status</th>
                                                    <th>Opções</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{#posts}}
                                                <tr>
                                                    <td class="text-center">{{id}}</td>
                                                    <td>
                                                        <a href="{{adminInfo.url}}/notas/editar/{{id}}">
                                                            {{texto}}
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{url}}" target="_blank">
                                                            {{url}}
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="admin-datetime" data-date="{{createdDate}}"></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="admin-datetime" data-date="{{editedDate}}"></span>
                                                    </td>
                                                    <td class="text-center">{{status}}</td>
                                                    <td class="text-center">
                                                        <a href="{{adminInfo.url}}/notas/editar/{{id}}" class="btn btn-success btn-circle" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="{{adminInfo.url}}/notas/apagar/{{id}}" class="btn btn-danger btn-circle apagar" data-toggle="tooltip" data-placement="top" title="Apagar">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                {{/posts}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
{{> footer.inc}}
