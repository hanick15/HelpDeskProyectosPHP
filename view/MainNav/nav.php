<?php
    if ($_SESSION["rol_id"]==1){
        ?>
            <nav class="side-menu">
        		<ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="../home/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="../NewTicket/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Nuevo Ticket</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="../ConsultarTicket/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>

                    <li class="blue-dirty">
                        <a href="../home/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Mi Perfil</span>
                        </a>
                    </li>    
                        
                    </li>
                </ul>
            </nav>

        <?php
    }else{
        ?>
            <nav class="side-menu">
        		<ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="../home/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="../ConsultarTicket/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="../home/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Reportes</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="../MntUsuario/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Mantenimiento Usuario</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="../home/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Mi Perfil</span>
                        </a>
                    </li>

                </ul>
            </nav>

        <?php
        
    }
?>
            
            
            <!-- <nav class="side-menu">
        		<ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="../home/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="../NewTicket/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Nuevo Ticket</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="../ConsultarTicket/">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
                    </li>
                </ul>
            </nav> -->



			<!-- <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\MntUsuario\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Mantenimiento Usuario</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
                    </li>
                </ul>
            </nav>      -->