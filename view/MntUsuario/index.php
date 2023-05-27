<?php
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){
?>


<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");
    ?>

    <title>HaNick::Mantenimiento Usurario</title>

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
                            <h3>Mantenimiento Usuario</h3>
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="../home/index.php">Home</a></li>
                                <li class="active">Mantenimiento Usuario</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>

            <div class="box-typical box-typical-padding">

                <button type="button" id="btnnuevo" class="btn btn-inline">Nuevo Registro</button>    

                <table id="usuario_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 10%;">Nombre</th>
							<th style="width: 15%;">Apellido</th>
							<th class="d-none d-sm-table-cell" style="width: 20%;">Correo</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Contraseña</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Rol</th>
							<th class="text-center" style="width: 5%;"></th>
                            <th class="text-center" style="width: 5%;"></th>
					</thead>

				</table>

            </div>

		</div><!--.container-fluid-->
	</div><!--.page-content-->

    <?php require_once("../MainJs/js.php"); ?>
    <?php require_once("modalmant.php"); ?>
    <script type="text/javascript" src="mntusuario.js"></script>
</body>
</html>
<?php
    } else{
        header("Location: ".conectar::ruta()."index.php");
    }
?>