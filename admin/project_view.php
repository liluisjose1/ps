<?php include"template/header.php"; ?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Registros</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Registros</a></li>
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
                                <h4>Registro</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID Registro</th>
                                                <th>ID Departamento</th>
                                                <th>Mes</th>
                                                <th>Año</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                            if(!isset($conexion)){ include("../config/conexion.php");}
                                            $sql = "SELECT p.id,p.mes,p.anio, d.nombre FROM proyectos AS p INNER JOIN departamentos AS d ON p.dep_sec=d.id;";
                                            $ejecutar = $conexion->query($sql);
                                            $cont=0;
                                            while($reg = $ejecutar->fetch_assoc()){
                                                $cont=$cont+1;
                                                echo "<tr>";
                                                echo "<td>".utf8_encode($reg["id"])."</td>";
                                                echo "<td>".utf8_encode($reg["nombre"])."</td>";
                                                echo "<td>".utf8_encode($reg["mes"])."</td>";
                                                echo "<td>".utf8_encode($reg["anio"])."</td>";
                                                echo "<td><a href="."project_edit.php?id=".$reg['id']."><i class='fa fa-edit'>Editar</i></a></td>";
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
                <a href=""></a>
                <!-- End PAge Content -->
<?php include"template/footer.php"; ?>