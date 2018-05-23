<?php 
include("config/conexion.php");


$departamento= $_GET["dep"];
$mes=$_GET["mes"];
$anio=$_GET["anio"];

$sql = "SELECT * FROM `proyectos` WHERE `dep_sec`='$departamento' AND `mes`='$mes' AND `anio`='$anio'";
    $ejecutar_consulta = $conexion->query($sql);

//dep
$sqld = "SELECT c.id,c.nombre, d.nombre FROM consejo AS c INNER JOIN departamentos AS d ON c.dep_sec=d.id WHERE c.dep_sec='$departamento'";
$ejecutar_consultad = $conexion->query($sqld);
$rowd = mysqli_fetch_row($ejecutar_consultad);
//existen registros
$sqle = "SELECT * FROM `proyectos` WHERE `dep_sec`='$departamento' AND `mes`='$mes' AND `anio`='$anio'";
$ejecutar_consultae = $conexion->query($sqle);
$rowe = mysqli_fetch_row($ejecutar_consultae);

 if (!isset($rowe)) {
  echo "<script type='text/javascript'>alert('No existen registros');   history.back(); </script>";
 }
?>

<?php include "template/header.php"; ?>
 <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/banner.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h2>Universidad de El Salvador <br> Facultad Multidisciplinaria Oriental</h2>
              <span class="subheading">Unidad de Proyección Social</span>
            </div>
          </div>
        </div>
      </div>
    </header>

 <!-- Page Content -->
    <div class="container">
      <br><br>
           <?php while($reg = $ejecutar_consulta->fetch_assoc()){
             if (isset($rowe)) {?>
                <br><br>
      <div class="pull-right">
        <a href="javascript:imprSelec('page')"><i class="fa fa-print"></i></a>
      </div>

          <div class="row">
            <div class="col-md-12">
              <div id="page" style="" >
                <center><h3 class="my-4">UNIVERSIDAD DE EL SALVADOR <br> FACULTAD MULTIDISCIPLINARIA ORIENTAL <br> UNIDAD DE PROYECCION SOCIAL </h3><p>Ciudad Universitaria de Oriente, <?php echo date("d F") ." de ". date("Y"); ?></p> </center>
          <p><b><?php echo ($rowd[1]); ?> <br>Coordinador Sub-Unidad de Proyección Social <br>  <?php echo ($rowd[2]); ?></b></p> 
          <p>Sirva la presente para saludarle y desearle éxitos en sus funciones administrativas y personales.</p>
          <p style="text-align: justify;">Por medio de la presente: remito a Usted el listado de los Proyecto Aprobados, Proyectos con observaciones y Memorias con observaciones y listado de cartas de servicio social de los Estudiantes pertenecientes al <b><?php echo ($rowd[2]);?></b> Para que pasen a la Unidad de Proyección Social a retirar sus respectivos Proyectos y Memorias para ser corregidos y continuar el proceso correspondiente; así también los proyectos aprobados y cartas de servicio social pasar a retirarlos.</p>
               
                <div class="table-responsive-md">
                 <?php echo ($reg["registro"]); ?>
               </div>
                        
               <br>
               <p>Es de aclarar que: </p>
               <p style="text-align: justify; padding-left: 50px;">

• La constancia no tiene fecha de caducidad por lo tanto todo alumno que presenta su memoria para su aprobación debe de pasar en los próximos 8 días a retirar la constancia de Servicio Social, como unidad estamos resolviendo en el menor tiempo posible, pero es responsabilidad de los estudiantes planificar su tiempo para los tramites de graduación. <br><br>

• Es de aclarar que tiene 15 días consecutivos como máximo después de la fecha   de aprobación del servicio social para entregar el proyecto aprobado por su tutor, de no hacerlo se anulara por abandono <br><br>

• Los proyectos y memorias que se presenten tienen un máximo de 8 días para pasar a retirarlos, por lo cual no debe dejarlos abandonados por más tiempo. <br><br>

• No se recibirán proyectos que estén pendientes de año pasado, se les notifico en 27 de noviembre del 2017 que todo servicio social que estuviera inscrito en el año 2017 se daba como fecha limite la entrega del proyecto hasta el 8 de diciembre del 2017, por lo tanto, se procede a su correspondiente anulación. 
</p>             
              </div>

            </div>           
          </div>
      <?php }else {
        # code..
        //print("no hay");
        echo "<center><h1 style='font-size: 30px;'>No existen registro</h1></center>";
      }} ?>
      <!-- /.row -->
    </div>
    <!-- /.container -->
<?php include "template/footer.php"; ?>
<script type="text/javascript">
function imprSelec(page){
  var ficha=document.getElementById(page);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
}
</script> 
<h1 ></h1>