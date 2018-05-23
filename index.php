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

          <br>
          <!-- Blog Post -->
          <div class="card mb-4">
<!--             <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
            <div class="card-body">
              <h2 class="card-title">Quienes somos</h2>
              <p class="card-text">Es el conjunto de actividades planificadas que persiguen objetivos académicos, de investigación y de servicio; con el fin de poner a los miembros de la comunidad universitaria en contacto con la realidad, para obtener una toma de conciencia ante la problemática social salvadoreña e incidir en la transformación y superación de la sociedad.</p>
            </div>
          </div>
          <!-- Blog Post -->
          <div class="card mb-4" style="text-align: justify;">
<!--             <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
            <div class="card-body">
              <h2 class="card-title">Objetivos</h2>
              <p class="card-text">• Promover entre la población Salvadoreña, la ciencia, el arte y la cultura, orientadas a la búsqueda de su propia identidad y contribuir en su proceso de desarrollo. <br><br>
• Incidir eficazmente, en forma interdisciplinaria en la transformación del ser humano y de la sociedad contribuyente a su desarrollo económico, social y cultural. <br><br>
• Contribuir a la formación de profesionales que con juicio crítico e iniciativa produzcan ciencias y tecnologías apropiadas a la realidad Salvadoreña. <br><br>
• Promover el debate y aportar en la solución de la problemática nacional.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                        <div class="card mb-4" style="text-align: justify;">
<!--             <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
            <div class="card-body">
              <h2 class="card-title">Misión</h2>
              <p class="card-text">Promover la relación de la FMO con la comunidad y sociedad a través de la organización de actividades culturales, científicas, artísticas, deportivas y de capacitación de carácter profesional, contribuyendo mediante los proyectos que desarrollan los estudiantes y docentes para incidir en la transformación y desarrollo de las comunidades de la Zona Oriental del país mediante el uso de los conocimientos científicos,artísticos,culturales, deportivos, humanísticos, que la Facultad Multidisciplinaria Oriental posee.</p>
            </div>
          </div>
            </div>
            <div class="col-md-6">
                        <div class="card mb-4" style="text-align: justify;">
<!--             <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
            <div class="card-body">
              <h2 class="card-title">Visión</h2>
              <p class="card-text">La proyección social de la FMO busca incidir en la transformación de la Zona Oriental del país. Además de su integración a las dinámicas estratégicas de la sociedad salvadoreña articulándose con sus actores públicos, sociales y privados, en la construcción de nuevas relaciones sociales que contribuyan al desarrollo humano, justicia, paz y equidad en El Salvador. Consolidando una vinculación fuerte entra la Facultad Multidisciplinaria Oriental y la población del Oriente del País.</p>
            </div>
          </div>
            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
        <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Registros recientes</h5>
            <div class="card-body">
              <div style="font-size: 15px;">
              <?php 
                      if(!isset($conexion)){ include("config/conexion.php");}
                      $sql = "SELECT p.dep_sec,p.mes,p.anio,d.nombre FROM proyectos AS p INNER JOIN departamentos AS d ON p.dep_sec=d.id ORDER BY p.id DESC LIMIT 15";
                      $ejecutar = $conexion->query($sql);
                      while($reg = $ejecutar->fetch_assoc()){
                        echo "<b><a style='color:#8A0808;' href="."getviewproject.php?dep=".($reg["dep_sec"])."&mes=".($reg["mes"])."&anio=".($reg["anio"]).">".($reg["nombre"])." ".($reg["mes"])." ".($reg["anio"])."</a></b><br>";
                         }
                        ?>
        </div>
            </div>
          </div>
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