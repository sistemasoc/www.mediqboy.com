<?php 
    //variables globales
    $fechaActual = date('d M Y H:i a');
    $usuario = $_SESSION['nombre_usuario'];
    if ($usuario == '') {
        $usuario = 'Cliente Nuevo';
    }
?>
<div class="container" style="margin-top: 5%;" >
    <div class="row">
        <div class="col-md-12">
        
            <!-- Inicio chat -->
            <div class="box box-aqua direct-chat direct-chat-warning collapsed-box">
                <div class="box-header with-border bg-aqua-active" data-widget="collapse">
                    <h3 class="box-title">Como añadir un producto al carrito</h3>

                    <div class="box-tools pull-right">                    
                        <button type="button" class="btn btn-box-tool" style="color:white;">
                            <i class="fa fa-plus fa-2x"></i>
                        </button> 
                    </div>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body bg-info" style="display: none;">
                    <!-- Conversacion -->
                    <div class="direct-chat-messages">
                        <!-- Mensaje de usuario. -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left"><?php echo $usuario; ?></span>
                                <span class="direct-chat-timestamp pull-right">
                                    <?php  echo $fechaActual; ?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/comment-img3.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              ¿como puedo añadir un producto al carrito?
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Mediqboy oc S.A.S</span>
                                <span class="direct-chat-timestamp pull-left"><?php echo $fechaActual?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/news-dr1.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, eveniet? Delectus culpa labore, saepe pariatur consectetur iure. Quo doloremque necessitatibus, asperiores tempora neque cumque eius quis assumenda odio, nihil delectus.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->
                </div>
            </div>
            <!--/.Fin chat -->

            <!-- Inicio chat -->
            <div class="box box-aqua direct-chat direct-chat-warning collapsed-box">
                <div class="box-header with-border bg-aqua-active" data-widget="collapse">
                    <h3 class="box-title">Que debo hacer si mi cotizacion no es respondida</h3>

                    <div class="box-tools pull-right">                    
                        <button type="button" class="btn btn-box-tool" style="color:white;">
                            <i class="fa fa-plus fa-2x"></i>
                        </button> 
                    </div>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body bg-info" style="display: none;">
                    <!-- Conversacion -->
                    <div class="direct-chat-messages">
                        <!-- Mensaje de usuario. -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left"><?php echo $usuario; ?></span>
                                <span class="direct-chat-timestamp pull-right">
                                    <?php  echo $fechaActual; ?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/comment-img3.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              ¿Que debo hacer si mi cotizacion no es respondida?
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Mediqboy oc S.A.S</span>
                                <span class="direct-chat-timestamp pull-left"><?php echo $fechaActual?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/news-dr1.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, eveniet? Delectus culpa labore, saepe pariatur consectetur iure. Quo doloremque necessitatibus, asperiores tempora neque cumque eius quis assumenda odio, nihil delectus.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->
                </div>
            </div>
            <!--/.Fin chat -->

            <!-- Inicio chat -->
            <div class="box box-aqua direct-chat direct-chat-warning collapsed-box">
                <div class="box-header with-border bg-aqua-active" data-widget="collapse">
                    <h3 class="box-title">No puedo eliminar un producto que ya no necesito</h3>

                    <div class="box-tools pull-right">                    
                        <button type="button" class="btn btn-box-tool" style="color:white;">
                            <i class="fa fa-plus fa-2x"></i>
                        </button> 
                    </div>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body bg-info" style="display: none;">
                    <!-- Conversacion -->
                    <div class="direct-chat-messages">
                        <!-- Mensaje de usuario. -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left"><?php echo $usuario; ?></span>
                                <span class="direct-chat-timestamp pull-right">
                                    <?php  echo $fechaActual; ?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/comment-img3.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              ¿Que debo hacer si no puedo eliminar un producto que ya no necesito?
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Mediqboy oc S.A.S</span>
                                <span class="direct-chat-timestamp pull-left"><?php echo $fechaActual?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/news-dr1.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, eveniet? Delectus culpa labore, saepe pariatur consectetur iure. Quo doloremque necessitatibus, asperiores tempora neque cumque eius quis assumenda odio, nihil delectus.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->
                </div>
            </div>
            <!--/.Fin chat -->

            <!-- Inicio chat -->
            <div class="box box-aqua direct-chat direct-chat-warning collapsed-box">
                <div class="box-header with-border bg-aqua-active" data-widget="collapse">
                    <h3 class="box-title">No encuentro el producto que necesito</h3>

                    <div class="box-tools pull-right">                    
                        <button type="button" class="btn btn-box-tool" style="color:white;">
                            <i class="fa fa-plus fa-2x"></i>
                        </button> 
                    </div>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body bg-info" style="display: none;">
                    <!-- Conversacion -->
                    <div class="direct-chat-messages">
                        <!-- Mensaje de usuario. -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left"><?php echo $usuario; ?></span>
                                <span class="direct-chat-timestamp pull-right">
                                    <?php  echo $fechaActual; ?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/comment-img3.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              ¿Que debo hacer si no encuentro el producto que necesito?
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Mediqboy oc S.A.S</span>
                                <span class="direct-chat-timestamp pull-left"><?php echo $fechaActual?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/news-dr1.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, eveniet? Delectus culpa labore, saepe pariatur consectetur iure. Quo doloremque necessitatibus, asperiores tempora neque cumque eius quis assumenda odio, nihil delectus.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->
                </div>
            </div>
            <!--/.Fin chat -->

            <!-- Inicio chat -->
            <div class="box box-aqua direct-chat direct-chat-warning collapsed-box">
                <div class="box-header with-border bg-aqua-active" data-widget="collapse">
                    <h3 class="box-title">Que beneficios tengo al registrarme</h3>

                    <div class="box-tools pull-right">                    
                        <button type="button" class="btn btn-box-tool" style="color:white;">
                            <i class="fa fa-plus fa-2x"></i>
                        </button> 
                    </div>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body bg-info" style="display: none;">
                    <!-- Conversacion -->
                    <div class="direct-chat-messages">
                        <!-- Mensaje de usuario. -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left"><?php echo $usuario; ?></span>
                                <span class="direct-chat-timestamp pull-right">
                                    <?php  echo $fechaActual; ?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/comment-img3.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              ¿Que beneficios tengo al registrarme?
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Mediqboy oc S.A.S</span>
                                <span class="direct-chat-timestamp pull-left"><?php echo $fechaActual?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/news-dr1.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, eveniet? Delectus culpa labore, saepe pariatur consectetur iure. Quo doloremque necessitatibus, asperiores tempora neque cumque eius quis assumenda odio, nihil delectus.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->
                </div>
            </div>
            <!--/.Fin chat -->

            <!-- Inicio chat -->
            <div class="box box-aqua direct-chat direct-chat-warning collapsed-box">
                <div class="box-header with-border bg-aqua-active" data-widget="collapse">
                    <h3 class="box-title">Que debo hacer si no me muestra la informacion de un producto</h3>

                    <div class="box-tools pull-right">                    
                        <button type="button" class="btn btn-box-tool" style="color:white;">
                            <i class="fa fa-plus fa-2x"></i>
                        </button> 
                    </div>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body bg-info" style="display: none;">
                    <!-- Conversacion -->
                    <div class="direct-chat-messages">
                        <!-- Mensaje de usuario. -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left"><?php echo $usuario; ?></span>
                                <span class="direct-chat-timestamp pull-right">
                                    <?php  echo $fechaActual; ?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/comment-img3.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              ¿Que debo hacer si no me muestra la informacion de un producto?
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Mediqboy oc S.A.S</span>
                                <span class="direct-chat-timestamp pull-left"><?php echo $fechaActual?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/news-dr1.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, eveniet? Delectus culpa labore, saepe pariatur consectetur iure. Quo doloremque necessitatibus, asperiores tempora neque cumque eius quis assumenda odio, nihil delectus.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->
                </div>
            </div>
            <!--/.Fin chat -->

            <!-- Inicio chat -->
            <div class="box box-aqua direct-chat direct-chat-warning collapsed-box">
                <div class="box-header with-border bg-aqua-active" data-widget="collapse">
                    <h3 class="box-title">No puedo agregar un producto a mi carrito</h3>

                    <div class="box-tools pull-right">                    
                        <button type="button" class="btn btn-box-tool" style="color:white;">
                            <i class="fa fa-plus fa-2x"></i>
                        </button> 
                    </div>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body bg-info" style="display: none;">
                    <!-- Conversacion -->
                    <div class="direct-chat-messages">
                        <!-- Mensaje de usuario. -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left"><?php echo $usuario; ?></span>
                                <span class="direct-chat-timestamp pull-right">
                                    <?php  echo $fechaActual; ?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/comment-img3.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              ¿Que debo hacer si no puedo agregar un producto a mi carrito?
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Mediqboy oc S.A.S</span>
                                <span class="direct-chat-timestamp pull-left"><?php echo $fechaActual?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="../images/news-dr1.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, eveniet? Delectus culpa labore, saepe pariatur consectetur iure. Quo doloremque necessitatibus, asperiores tempora neque cumque eius quis assumenda odio, nihil delectus.
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->
                </div>
            </div>
            <!--/.Fin chat -->


        </div>
    </div>
</div>