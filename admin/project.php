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
                        <li class="breadcrumb-item active">Ver</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <form method="POST" action="guadarProject.php" >
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"> 
                            <textarea  name="contenido" class="content"  rows="15" placeholder="Enter text ..." style="height:100px"></textarea>

          <center>
          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleSelect1">*Seleccione Departamento / Sección</label>
                  <select class="form-control" name="dep" required id="exampleSelect1">
                    <option value="" ></option>
                      <?php 
                      if(!isset($conexion)){ include("../config/conexion.php");}
                      $sql = "SELECT * FROM departamentos";
                      $ejecutar = $conexion->query($sql);
                      while($reg = $ejecutar->fetch_assoc()){
                        echo "<option value=".utf8_encode($reg["nombre"]).">".utf8_encode($reg["nombre"])."</option>";
                         }
                        ?>
                  </select>
                </div>
            </div>  
            <div class="col-md-4">
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
            </div>  
            <div class="col-md-4">
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
            </div>           
          </div>
          <br>
          <button type="submit" class="btn btn-success">Guardar</button>
          </center>
        </form>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
<?php include"template/footer.php"; ?>
    <script src="assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="assets/js/lib/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-init.js"></script>


        <script>
        $(document).ready(function() {
            $('.content').richText();
        });
        </script>