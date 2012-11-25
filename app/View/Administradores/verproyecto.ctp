
                                    <div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title">Detalles del Proyecto</span>
                                            <div class="toolbar">
                                                <div class="btn-group">
                                                    <span class="btn" rel="popover" data-trigger="hover" data-placement="left" data-content="&lt;code&gt;table table-striped table-detail-view&lt;/code&gt;" title="Detail View Table">
                                                        Show Code
                                                    </span>
                                                    <span class="btn dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-pencil"></i> Acciones <i class="caret"></i>
                                                    </span>
                                                    <ul class="dropdown-menu pull-right">
                                                       <li><a href="#"><i class="icol-magnifier"></i> Ver todos los comentarios de este proyecto </a></li>
                                                        <li><a href="#"><i class="icol-magnifier"></i> Crear </a></li>
                                                        <li><a href="#"><i class="icol-pencil"></i> Editar</a></li>
                                                        <li><a href="#"><i class="icol-cross"></i> Eliminar</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content table-container">
                                            <table class="table table-striped table-detail-view">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2"><i class="icol-exclamation"></i> Información General</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Titulo</th>
                                                        <td><?php echo $proyecto['Proyecto']['titulo'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>País</th>
                                                        <td><?php echo $proyecto['Usuario']['paise_id'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Lenguaje del Proyecto</th>
                                                        <td>Español - Ingles </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Descripción</th>
                                                        <td><?php echo $proyecto['Proyecto']['descripcion'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fecha de fundación</th>
                                                        <td><?php echo $proyecto['Proyecto']['fecha'];?></td>
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr>
                                                        <th colspan="2"><i class="icol-user-business-boss"></i> Lideres del Proyecto</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Fundador</th>
                                                        <td><?php echo $proyecto['Usuario']['full_nombre'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Co-fundador</th>
                                                        <td>Kim Hwang-sik</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Seguidores del proyecto</th>
                                                        <td>Kang Chang-hee</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Patrocinadores</th>
                                                        <td>Kang Chang-hee</td>
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr>
                                                        <th colspan="2"><li class="icol-world"></li> Información ténica</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Lenguaje de desarrollo</th>
                                                        <td>PHP</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Base de datos</th>
                                                        <td>MySQL</td>
                                                    </tr>
                                                     <tr>
                                                        <th>Estrategia de desarrollo</th>
                                                        <td>UML</td>
                                                    </tr>
                                                     <tr>
                                                        <th>De las herramientas ofrecias usa...</th>
                                                        <td>Heroku, Graphics, Gmail, Facebook Group</td>
                                                    </tr>
                                                </tbody>
                          
                                                <thead>
                                                    <tr>
                                                        <th colspan="2"><li class="icol-world"></li> Ultimos 10 comentarios / facebook / twitter / gmail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>De SAM</th>
                                                        <td>Buenisimo</td>
                                                    </tr>
                                                    <tr>
                                                        <th>De Lucia</th>
                                                        <td> Reivsen la tabla * enviado desde facebook</td>
                                                    </tr>
                                                     <tr>
                                                        <th>De Castro</th>
                                                        <td>Estuve diseñando el modelo en UML</td>
                                                    </tr>
                                                     <tr>
                                                        <th>De Villanueva</th>
                                                        <td>Esto mola </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

