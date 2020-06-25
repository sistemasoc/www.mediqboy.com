	<!-- Mobile Menu Start -->
	<div class="container">        
    	<div id="page">

			<header class="header">
				<a href="#menu"></a>
			</header>
			 
			<nav id="menu">
				<ul>
					<li class="select"><a href="index.html">Inicio</a></li>
					<li><a href="#.">Nosotros</a>
                    	<ul>
                        	<li> <a href="<?php echo SERVERURLGLOBAL;?>about-us2.php?men=2">Misión</a> </li>
							<li> <a href="<?php echo SERVERURLGLOBAL;?>about-us2.php?men=2">Visión</a> </li>
							<li> <a href="<?php echo SERVERURLGLOBAL;?>about-us2.php?men=2">Objetivo Social</a> </li>
                        </ul>
                    </li>                   
                    
                    <li class="<?php if($menu==8){echo 'item-select';} ?> parent">
                        <a href="<?php echo SERVERURL;?>?categoria=principalShop&men=8" >Categorias</a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo SERVERURL;?>?categoria=promocion&men=8">Promoción</a>
                            </li>  
                            
                            <?php
                                if ($_SESSION['nit_usuario'] != '') {                                            
                            ?>
                                    <li class="parent">
                                        <a href="#">Medicamentos</a> <i class="icon-chevron-small-right"></i>
                                        <ul class="submenu">
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=controlados&men=8">Controlados</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=genericos&men=8">Genericos</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=liquidos&men=8">Liquidos</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=maarcaRegistrada&men=8">Marca Registrada</a></li>
                                        </ul>
                                    </li>
                            <?php
                                }
                            ?>
                            
                            <li class="parent"> <a href="#">Dispositivos M.Quirurgicos</a> <i class="icon-chevron-small-right"></i>
                                <ul class="submenu">
                                    <li> <a href="<?php echo SERVERURL;?>?categoria=medicoquirurgicos&men=8">Medicoquirurgicos</a> </li>
                                    <li> <a href="<?php echo SERVERURL;?>?categoria=otrosMq&men=8">Otros M.Q</a> </li>
                                    <li> <a href="<?php echo SERVERURL;?>?categoria=suturas&men=8">Suturas</a> </li>
                                </ul>
                            </li>
                            
                            <?php
                                if ($_SESSION['nit_usuario'] != '') {                                            
                            ?>
                                    <li class="parent"> <a href="#">Resolucion</a> <i class="icon-chevron-small-right"></i>
                                        <ul class="submenu">
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=controladosResolucion&men=8">Controlados Resolucion</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=genericosResolucion&men=8">Genericos Resolucion</a> </li>
                                            <li> <a href="<?php echo SERVERURL;?>?categoria=marcaResolucion&men=8">Marca Resolucion</a> </li>
                                        </ul>
                                    </li>
                            <?php
                                }
                            ?>
                            
                            <li class="parent">
                                <a href="<?php echo SERVERURL;?>?categoria=odontologicos&men=8">Odontologicos</a>
                            </li>
                            
                            <li class="parent">
                                <a href="<?php echo SERVERURL;?>?categoria=laboratorio&men=8">Laboratorio</a>
                            </li>
                            
                        </ul>
                    </li>    
                   
                    
                    <li>
                        <a href="<?php echo SERVERURLGLOBAL;?>inicioClientes.php">Clientes</a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo SERVERURLGLOBAL;?>FORMATO DE CREACIÓN DE CLIENTES 2018.pdf" target="_blank" rel="noopener" title="Formato de privacidad de datos">Formato clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo SERVERURLGLOBAL;?>inicioProveedores.php">Proveedores</a></li>
										                   
                    
                    <li><a href="#.">Empleo</a>
                    	<ul>
                        	<li> <a href="../../empleo/index.php?company=1">Mediqboy</a> </li>
							<li> <a href="../../empleo/index.php?company=2">Mi Farmacia</a> </li>
							<li> <a href="../../empleo/index.php?company=3">Club El Llano</a> </li>							
                        </ul>
                    </li>
                    
					
					
					<li><a href="#.">Contacto</a>
                    	<ul>
                        	<li> <a href="<?php echo SERVERURLGLOBAL;?>contact-us2.php?men=3">Contáctenos</a> </li>
							<li> <a href="<?php echo SERVERURLGLOBAL;?>contact-us2.php?men=3">Directorio</a> </li>
                        </ul>
                    </li>
					
                    <li><a href="<?php echo SERVERURLGLOBAL;?>gallery-simple-two.php">Galeria</a></li>

				</ul>                                
			</nav>
		</div>
	</div>
    <!-- Mobile Menu End -->
    