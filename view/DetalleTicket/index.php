<?php
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){
?>


<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");
    ?>

    <title>HaNick::Detalle Ticket</title>

</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");
        ?>

	<div class="mobile-menu-left-overlay"></div>
    
    <?php require_once("../MainNav/nav.php");
        ?>

	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>Detalle Ticket</h3>
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="../home/index.php">Home</a></li>
                                <li class="active" id="lblnomid"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>

            <section class="activity-line" id="lbldetalle">
			<!-- aca se realizan el listado de las conversaciones o historial del ticket -->
			</section><!--.activity-line-->
            
			<div class= "box-typical box-typical-padding">
            <p> <label class="form-label semibold" for="tickd_descrip">Ingrese sus comentarios</label></p>
                <div class="row">
                    <form method="post" id="ticket_form">

                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                
                                <div class="summernote-theme-1" >
                                    <textarea id= "tickd_descrip" class="summernote" name="tickd_descrip"></textarea>
                                </div>
                            </fieldset>
                            
                        </div>
                        <div class="col-lg-12">
                            <button type="button" id="btnenviar" class="btn btn-rounded btn-inline btn-warning">Enviar</button>
							<button type="button" id="btncerrar" class="btn btn-rounded btn-inline btn-success">Cerrar</button>
							<button type="button" id="btncancelar" class="btn btn-rounded btn-inline btn-default">Cancelar</button>
                        </div>
                    </form>
                    
                </div><!--.row-->
        </div>

		</div><!--.container-fluid-->
	</div><!--.page-content-->

    <?php require_once("../MainJs/js.php"); ?>
    <script type="text/javascript" src="detalleticket.js"></script>
</body>
</html>
<?php
    } else{
        header("Location: ".conectar::ruta()."index.php");
    }
?>