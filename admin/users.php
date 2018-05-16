<?php include"template/header.php"; ?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Usuarios</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Usuarios</a></li>
                        <li class="breadcrumb-item active">Ver</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Usuarios </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Usuario</th>
                                                <th>Nombre</th>
                                                <th>Fecha de Creación</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                            if(!isset($conexion)){ include("../config/conexion.php");}
                                            $sql = "SELECT * FROM usuario";
                                            $ejecutar = $conexion->query($sql);
                                            $cont=0;
                                            while($reg = $ejecutar->fetch_assoc()){
                                                $cont=$cont+1;
                                                echo "<tr>";
                                                echo "<th scope='row'>".$cont."</th>";
                                                echo "<td>".utf8_encode($reg["usuario"])."</td>";
                                                echo "<td>".utf8_encode($reg["nombre"])."</td>";
                                                echo "<td>".utf8_encode($reg["fecha"])."</td>";
                                                echo "<td>".utf8_encode($reg["fecha"])."</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
<?php include"template/footer.php"; ?>