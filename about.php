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

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h3 class="my-4">Directorio</h3>
          <table class="table table-hover" style="font-size: 15px;">
            <thead>
              <tr>
                <th >Nombre</th>
                <th >Cargo</th>
              </tr>
            </thead>
              <tbody>
              <tr>
                <td>Lic. Santiago Alberto Ulloa</td>
                <td>Jefe de la Unidad de Proyección Social</td>
              </tr>
              <tr>
                <td>Sra. Marta Alicia Portillo</td>
                <td>Asistente Administrativa</td>
              </tr>
              <tr>
                <td>Juan Ramón Galeas</td>
                <td>Coordinador del Área de Arte y Cultura</td>
              </tr>
              <tr>
                <td>Lic. José Rubén Cerna García</td>
                <td>Coordinador del Área de Recreación y Deporte</td>
              </tr>
              <tr>
                <td>Jorge Alberto Romero Sánchez</td>
                <td>Encargado del Área de Fortalecimiento de Teatro, Poesía y Literatura</td>
              </tr>
            </tbody>
          </table>

          <h3 class="my-4">Consejo</h3>
          <table class="table table-hover" style="font-size: 15px;">
            <thead>
              <tr>
                <th >Nombre</th>
                <th >Departamento / Sección</th>
              </tr>
            </thead>
              <tbody>
                <?php 
                if(!isset($conexion)){ include("config/conexion.php");}
                $sql = "SELECT * FROM consejo";
                $ejecutar = $conexion->query($sql);
                while($reg = $ejecutar->fetch_assoc()){
                  echo "<tr>";
                   echo "<td>".utf8_encode($reg["nombre"])."</td>";
                   echo "<td>".utf8_encode($reg["dep_sec"])."</td>";
                  echo "</tr>";
                   }
                  ?>

            </tbody>
          </table>

          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
         <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Facultad</h5>
            <div class="card-body">
            	<center>
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffmoues%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1584763541776868" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            	</center>
            </div>
          </div>
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Sección de Deportes</h5>
            <div class="card-body">
            	<center>
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSecci%25C3%25B3n-de-Deportes-Facultad-Multidisciplinaria-Oriental-1096150557191677%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1584763541776868" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</center>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php include "template/footer.php"; ?>