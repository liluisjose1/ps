<?php include"template/header.php"; ?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Consejo</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Consejo</a></li>
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
                                <h4>Consejo </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Departamento / Sección</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                            if(!isset($conexion)){ include("../config/conexion.php");}
                                            $sql = "SELECT * FROM consejo";
                                            $ejecutar = $conexion->query($sql);
                                            $cont=0;
                                            while($reg = $ejecutar->fetch_assoc()){
                                                $cont=$cont+1;
                                                echo "<tr>";
                                                echo "<th scope='row'>".$cont."</th>";
                                                echo "<td>".utf8_encode($reg["nombre"])."</td>";
                                                echo "<td>".utf8_encode($reg["dep_sec"])."</td>";
                                                echo "<td>".utf8_encode($reg["dep_sec"])."</td>";
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