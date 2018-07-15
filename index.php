<?php include "template/header.php"; ?>
 
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/banner.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Universidad de El Salvador <br>
                  Facultad Multidisciplinaria Oriental <br>
                  Unidad de Proyección Social <br>
                </h2>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section><!-- #intro -->

<<<<<<< HEAD
  <main id="main">
=======
 <!-- Page Content -->
    <div class="container-fluid ">
>>>>>>> 20730d2a03547addff872cd3d768334ae40b36bc


<<<<<<< HEAD

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Sobre nosotros</h3>
          <h4>Servicio social es..</h4>
          <p>Es el conjunto de actividades planificadas que persiguen objetivos académicos, de investigación y de servicio; con el fin de poner a los miembros de la comunidad universitaria en contacto con la realidad, para obtener una toma de conciencia ante la problemática social salvadoreña e incidir en la transformación y superación de la sociedad.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-6 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Misión</a></h2>
              <p class="text-justify">
                Promover la relación de la FMO con la comunidad y sociedad a través de la organización de actividades culturales, científicas, artísticas, deportivas y de capacitación de carácter profesional, contribuyendo mediante los proyectos que desarrollan los estudiantes y docentes para incidir en la transformación y desarrollo de las comunidades de la Zona Oriental del país mediante el uso de los conocimientos científicos,artísticos,culturales, deportivos, humanísticos, que la Facultad Multidisciplinaria Oriental posee.
              </p>
            </div>
          </div>

          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Visión</a></h2>
              <p class="text-justify" >
                La proyección social de la FMO busca incidir en la transformación de la Zona Oriental del país. Además de su integración a las dinámicas estratégicas de la sociedad salvadoreña articulándose con sus actores públicos, sociales y privados, en la construcción de nuevas relaciones sociales que contribuyan al desarrollo humano, justicia, paz y equidad en El Salvador. Consolidando una vinculación fuerte entra la Facultad Multidisciplinaria Oriental y la población del Oriente del País.
              </p>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12" >
            <h3>Directorio</h3>
            <table class="table table-hover">
            <thead>
              <tr>
                <th width="40%" >Nombre</th>
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

=======
                <!-- Sidebar Widgets Column -->
                <div class="col-md-3">
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
        <!-- Blog Entries Column -->
        <div class="col-md-9">
          <!-- Call to Action Well -->
          <div class="row">

        <div class="col-sm-12">
          <hr>
          <h2 class="mt-4" align=center >Proyección Social </h2>
          <hr>
          <p style="text-align:center; font-size: 23px;">Es el conjunto de actividades planificadas que persiguen objetivos académicos, de investigación y de servicio; con el fin de poner a los miembros de la comunidad universitaria en contacto con la realidad, para obtener una toma de conciencia ante la problemática social salvadoreña e incidir en la transformación y superación de la sociedad.</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <hr>
          <h2 class="mt-4" align=center >Actividades</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">

        </div>

      </div>
      <div class="row">

       <div class="col-sm-6 my-4">
         <div class="card">
           <img class="card-img-top" src="assets/img/fut.png" alt="">
           <div class="card-body">
             <h4 class="card-title">Deportes</h4>
             <p class="card-text">
               &bull; Torneos de Futbol Masculino. <br>
               &bull; Torneos de Futbol Femenino. <br>
               &bull; Torneos de Tenis de Mesa. <br>
             </p>
           </div>
         </div>
       </div>
       <div class="col-sm-6 my-4">
         <div class="card">
           <img class="card-img-top" src="assets/img/arte.png" alt="">
           <div class="card-body">
             <h4 class="card-title">Arte y Cultura</h4>
             <p class="card-text">
               &bull; Musicales. <br>
               &bull; Teatro. <br>
                <br>
             </p>
           </div>
         </div>
       </div>

     </div>
     <!-- /.row -->
          <!-- Blog Post -->
          <div class="card mb-4" style="text-align: justify;">
<!--             <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
            <div class="card-body">
              <h2 class="card-title">Objetivos</h2>
              <p class="card-text" style="margin-left:50px;" >• Promover entre la población Salvadoreña, la ciencia, el arte y la cultura, orientadas a la búsqueda de su propia identidad y contribuir en su proceso de desarrollo. <br><br>
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
>>>>>>> 20730d2a03547addff872cd3d768334ae40b36bc
          </div>
          <br>
          <div class="col-md-12" >
            <h3>Consejo</h3>
            <table class="table table-hover" style="font-size: 15px;">
            <thead>
              <tr>
                <th width="40%" >Nombre</th>
                <th >Departamento / Sección</th>
              </tr>
            </thead>
              <tbody>
                <?php 
                if(!isset($conexion)){ include("config/conexion.php");}
                $sql = "SELECT c.id,c.nombre, d.nombre AS dep_sec  FROM consejo AS c INNER JOIN departamentos AS d ON c.dep_sec=d.id";
                $ejecutar = $conexion->query($sql);
                while($reg = $ejecutar->fetch_assoc()){
                  echo "<tr>";
                   echo "<td>".($reg["nombre"])."</td>";
                   echo "<td>".($reg["dep_sec"])."</td>";
                  echo "</tr>";
                   }
                  ?>

            </tbody>
          </table>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Servicios</h3>
          <p>Este es un sitio web informativo creado a fin de mantener al dia a la comunidad estudiantil de informacion relativa a los proyectos y actividades de la unidad de proyección social.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Acceso a infromación</a></h4>
            <p class="description">Podras consultar estado de tus proyectos y memorias.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Formularios</a></h4>
            <p class="description">Tendras la facilidad de descargar los formatos y cartas para tu servicio social.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Noticias</a></h4>
            <p class="description">Te daras cuenta del acontecer de la unidad.</p>
          </div>

        </div>

<<<<<<< HEAD
      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Registros recientes</h3>
                     <?php
                              if(!isset($conexion)){ include("config/conexion.php");}
                              $sql = "SELECT p.dep_sec,p.mes,p.anio,d.nombre FROM proyectos AS p INNER JOIN departamentos AS d ON p.dep_sec=d.id ORDER BY p.id DESC LIMIT 15";
                              $ejecutar = $conexion->query($sql);
                              while($reg = $ejecutar->fetch_assoc()){
                                echo "<b><a style='color:#8A0808;' href="."getviewproject.php?dep=".($reg["dep_sec"])."&mes=".($reg["mes"])."&anio=".($reg["anio"]).">".($reg["nombre"])." ".($reg["mes"])." ".($reg["anio"])."</a></b><br>";
                                 }
                                 ?>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Busca tu proyecto</h3>
          <p>Ve información importante a cerca del estado de tu proyecto</p>
        </header>

        <div class="skills-content">
<form method="POST" action="viewproject.php" >
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
                        echo "<option value=".$reg["id"].">".($reg["nombre"])."</option>";
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
          <button type="submit" class="btn btn-success">Ver Información</button>
          </center>
        </form>

      </div>
    </section>


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todo</li>
              <li data-filter=".filter-app">Deportes</li>
              <li data-filter=".filter-card">Arte y Cultura</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>
=======
>>>>>>> 20730d2a03547addff872cd3d768334ae40b36bc

      </div>
    </section><!-- #portfolio -->


    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Formularios y Guías</h3>
          <!-- <p></p> -->
        </div>

        <br>
        <br>
        <div class="row">

          <div class="col-lg-4 col-md-4 wow fadeInUp">
            <center><h3>Proceso de Inscripción</h3>
            <button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Ver</button></center>
          </div>

          <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <center><h3>Formatos</h3>
            <button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#myModal1">Ver</button></center>
          </div>

          <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <center><h3>Tramites Generales</h3>
            <button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#myModal2">Ver</button></center>
          </div>

        </div>

      </div>
    </section><!-- #team -->


  </main>
<!-- Modal Inscripcion -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Inscripción</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <center><h4>Cartas y Formularios para la Incripción</h4></center>

        <p style="font-size: 15px; text-align: justify;" >
            1) NOTA DE LA INSTITUCIÓN DONDE SE DESARROLLARÁN LAS HORAS SOCIALES.<br>
            2) CARTA No. 1. ASIGNACIÓN DE TUTOR DE SERVICIO SOCIAL<br>
            3) FORMULARIO No. 1. HOJA DE INSCRIPCIÓN PARA REALIZAR EL SERVICIO SOCIAL<br>
            4) CONSTANCIA DE LA ADMINISTRACIÓN ACADÉMICA DEL 60% DE LA CARRERA<br>
            5) CARTA No. 2. CONSTANCIA DE APROBACIÓN DEL PLAN DE TRABAJO DEL SERVICIO SOCIAL. <br>
        </p>
        <p style="text-align: center;font-size: 18px;" >
          <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Carta_de_solicitud.docx" target='_blank' title="Click here to open a Word document">Formato Nota de la Institución</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Cartas_para_Inscripcion.docx" target='_blank'
          title="Click here to open a Word document">Cartas para Inscripción</a> <br>
        </p>
        <p style="color: #B40404; font-size: 15px; text-align: center;">NOTA: Despues de haber realizado la inscripcion, tienes 15 dias para entrega de proyecto <a href="cartas/Formato_de_Proyecto.docx" target='_blank' title="Click here to open a Word document">(Ver Formulario)</a> </p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>
<!-- Modal Formatos -->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Formatos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <p style="text-align: center;font-size: 18px;" >
          <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Formato_de_Inscripcion.docx" target='_blank' title="Click here to open a Word document">Formato para la Inscripción</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Formato_de_Proyecto.docx" target='_blank' title="Click here to open a Word document">Formato para presentación de Proyecto</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Formato_de_Memoria.docx" target='_blank' title="Click here to open a Word document">Formato para presentación de Memoria</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Formato_para_Prorroga_a_Junta.docx" target='_blank' title="Click here to open a Word document">Formato para solicitud de prorroga a Junta</a> <br>
        </p>
        <p style="color: #B40404; font-size: 15px; text-align: center;">NOTA: Despues de haber realizado las horas sociales,tienes 3 meses para Presentación de Memoria </p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>
<!-- Modal Tranmites Generales -->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Formatos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <p style="text-align: center;" >
          <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Carta_de_Ampliacion_de_Tiempo.docx" target='_blank' title="Click here to open a Word document">Ampliación de tiempo <br>(Proyecto)</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Carta_de_Eliminacion_de_Estudiante_del_Proyecto_(grupo).docx" target='_blank' title="Click here to open a Word document">Eliminación de <br> Estudiante del Proyecto (grupo)</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Carta_de_Eliminacion_de_un_estudiante_(estudiante).docx" target='_blank' title="Click here to open a Word document">Eliminación de <br> Estudiante del Proyecto(Estudiante)</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Carta_de_Eliminacion.docx" target='_blank' title="Click here to open a Word document">Eliminación de Proyecto</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Carta_de_Recepcion_de_Proyecto.docx" target='_blank' title="Click here to open a Word document">Recepción de Proyecto</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Carta_de_Prorroga_a_Jefe_de_Unidad.docx" target='_blank' title="Click here to open a Word document">Solicitud de Prórroga a Jefe de UPS <br> (antes de vencer los tres meses de entrega)</a> <br>
          <br> <a class="btn btn-warning" style="text-decoration: none;" href="cartas/Carta_de_Prorroga_a_Junta_Directiva.docx" target='_blank' title="Click here to open a Word document">Solicitud de Prórroga a Junta Directiva FMO</a> <br>
        </p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
<<<<<<< HEAD
  </div>
=======
    <!-- /.container -->
>>>>>>> 20730d2a03547addff872cd3d768334ae40b36bc
<?php include "template/footer.php"; ?>
