<?php include "template/header.php"; ?>
 <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/banner.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
<!--             <center><img style="width: 200px;" src="assets/img/min-w.png"></center> -->
              <h2>Universidad de El Salvador <br> Facultad Multidisciplinaria Oriental</h2>
              <span class="subheading">Unidad de Proyección Social</span>
            </div>
          </div>
        </div>
      </div>
    </header>

 <!-- Page Content -->
    <div class="container">
          <center><h3 class="my-4">Estado de Proyectos</h3></center><br><br>


        <form method="POST" action="#" >
          <center>
          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleSelect1">*Seleccione Departamento / Sección</label>
                  <select class="form-control" name="dep" required id="exampleSelect1">
                    <option value="" ></option>
                      <?php 
                      if(!isset($conexion)){ include("config/conexion.php");}
                      $sql = "SELECT * FROM departamentos";
                      $ejecutar = $conexion->query($sql);
                      while($reg = $ejecutar->fetch_assoc()){
                        echo "<option value=".$reg["id"].">".utf8_encode($reg["nombre"])."</option>";
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
          <center><button type="submit" class="btn btn-success">Ver Información</button></center>
          </center>
        </form>
        <br>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php include "template/footer.php"; ?>