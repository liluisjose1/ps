<?php include"template/header.php"; ?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Proyectos</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Proyectos</a></li>
                        <li class="breadcrumb-item active">Guardar</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <form method="POST" action="logica/project_save.php" >
                <div class="row">
                    <div class="col-12">
                    <?php
                                    error_reporting(E_ALL ^ E_NOTICE);
                                    if($_GET["error"]=="no"){
                                        echo "<div class='alert alert-primary alert-dismissable'>";
                                        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                        echo "Registro Exitoso";
                                        echo "</div>";
                                    } else if($_GET["error"]=="si"){
                                        echo "<div class='alert alert-danger alert-dismissable'>";
                                        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                        echo "Error al registrar";
                                        echo "</div>";
                                    } 

                                    
                    ?>
                        <div class="card">
                            <div class="row">
                                <div class="col-md-8">

                                    <textarea id="summernote" name="contenido" style="height:100px" ></textarea>
                                </div>
                                <div class="col-md-4">
                                    <br><br>
                                <center>
                                    <div class="form-group">
                                      <label for="exampleSelect1">*Seleccione Departamento / Sección</label>
                                      <select class="form-control" name="dep" required id="exampleSelect1">
                                        <option value="" ></option>
                                          <?php 
                                          if(!isset($conexion)){ include("../config/conexion.php");}
                                          $sql = "SELECT * FROM departamentos";
                                          $ejecutar = $conexion->query($sql);
                                          while($reg = $ejecutar->fetch_assoc()){
                                            echo "<option value=".($reg["id"]).">".($reg["nombre"])."</option>";
                                             }
                                            ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleSelect1">*Seleccione Mes</label>
                                      <select class="form-control" name="mes" required id="exampleSelect1">

                                        <option value="" ></option>
                                        <option value="enero">Enero</option>
                                        <option value="febrero">Febrero</option>
                                        <option value="marzo">Marzo</option>
                                        <option value="abril">Abril</option>
                                        <option value="mayo">Mayo</option>
                                        <option value="junio">Junio</option>
                                        <option value="julio">Julio</option>
                                        <option value="agosto">Agosto</option>
                                        <option value="septiembre">Septiembre</option>
                                        <option value="octubre">Octubre</option>
                                        <option value="noviembre">Noviembre</option>
                                        <option value="diciembre">Diciembre</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleSelect1">*Seleccione Año</label>
                                      <select class="form-control" name="anio" required id="exampleSelect1">
                                        <option value=""></option>
                                        <?php 
                                          $anio = Date("Y")-1;
                                          for ($i=-1; $i <=1 ; $i++) { 
                                            # code...
                                              echo "<option value=".$anio.">".$anio."</option>";
                                            $anio+=1;

                                          }
                                        ?>
                                      </select>
                                </div>       
                              <br>
                              <button type="submit" class="btn btn-success">Guardar</button>
                              </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <!-- End PAge Content -->
<?php include"template/footer.php"; ?>

    <script src="assets/summer/summernote.js"></script>
    <script src="assets/summer/summernote-bs4.js"></script>
<script >
  $(document).ready(function() {      
    $('#summernote').summernote({
        height: 300
      });
});
</script>