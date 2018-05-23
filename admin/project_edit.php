<?php 
ob_start();
include("../config/conexion.php");


$id= $_GET["id"];


$sql = "SELECT p.id,p.registro,p.dep_sec,p.mes,p.anio, d.nombre FROM proyectos AS p INNER JOIN departamentos AS d ON p.dep_sec=d.id WHERE p.id='$id'";
$ejecutar_consulta = $conexion->query($sql);
$row = mysqli_fetch_row($ejecutar_consulta);
?>

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
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <form method="POST" action="logica/project_update.php" >
                <div class="row">
                              <input type="hidden" name="id" value='<?php echo $id;?>'>
                    <div class="col-12">
                                     <?php
                                    error_reporting(E_ALL ^ E_NOTICE);
                                    if($_GET["error"]=="no"){
                                        echo "<div class='alert alert-primary alert-dismissable'>";
                                        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                        echo "Registro se actualizo con exito";
                                        echo "</div>";
                                    } else if($_GET["error"]=="si"){
                                        echo "<div class='alert alert-danger alert-dismissable'>";
                                        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                                        echo "Error al registrar";
                                        echo "</div>";
                                    } 

                                    
                                ?>
                        <div class="card">
                            <div class="card-body"> 
                              <div class="row">
                                <div class="col-md-8">

                                <textarea id="summernote" name="contenido" style="height:100px" ><?php echo ($row[1]);  ?></textarea>
                              </div>
                                <div class="col-md-4">
                                    <br><br>


          <center>

                <div class="form-group">
                  <label for="exampleSelect1">*Seleccione Departamento / Sección</label>
                  <select class="form-control" name="dep" required id="exampleSelect1">
                    <option value='<?php echo ($row[2]);?>' ><?php echo ($row[5]);?></option>
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
                    <option value="<?php echo $row[3];?>" ><?php echo $row[3];?></option>
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
                    <option value="<?php echo $row[4];?>"><?php echo $row[4];?></option>
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
                  </form>
                </div>
                <!-- End PAge Content -->
<?php include"template/footer.php"; ?>

    <script src="assets/summer/summernote.js"></script>
    <script src="assets/summer/summernote-bs4.js"></script>
<!--     <script src="assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="assets/js/lib/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-init.js"></script> -->
<script >
  $(document).ready(function() {      
    $('#summernote').summernote({
        height: 300
      });
});
</script>
<?php print($id); ?>
<!--         <script>
        $(document).ready(function() {
            $('.content').richText();
        });
        </script>* -->