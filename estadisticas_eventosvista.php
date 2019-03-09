<div class="row">
  <div class="col-md-12">
    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
    <h3 class="page-title">
    Programacion de Eventos <small>Panel de estadisticas y metas</small>
    </h3>
    <ul class="page-breadcrumb breadcrumb">
      <li>
        <i class="fa fa-home"></i>
        <a href="inicio.php">
          Inicio
        </a>
        <i class="fa fa-angle-right"></i>
      </li>
      <li>
        <a>
          Prog Eventos
        </a>
        <i class="fa fa-angle-right"></i>
      </li>
      <li>
        <a href="estadisticas_eventos.php">
          Estadisticas y Metas
        </a>
      </li>
    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
  </div>
</div>
<!-- END PAGE HEADER-->

<!-- Comienzo Graficas-->

  <div class="row">
      <!-- Grafico 0-->

      <?php
      include 'datapromedio.php';
      ?>

      <div class="portlet solid bordered light-grey">
          <div class="portlet box purple">
              <div class="portlet-title">
                  <div class="caption">
                      <i class="fa fa-bar-chart-o"></i>PROMEDIO
                  </div>
                  <div class="tools">
                      <a href="javascript:" class="collapse">
                      </a>
                  </div>
              </div>
              <div class="portlet-body">
                  <script src="https://code.highcharts.com/highcharts.js"></script>
                  <script src="https://code.highcharts.com/modules/exporting.js"></script>

                  <div id="container0" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
              </div>
          </div>
      </div>

      <!-- END Grafico 0-->
  </div>

  <div class="row">
      <!-- Primer Grafico-->

      <?php
      include 'dataeventos.php';
      ?>

          <div class="portlet solid bordered light-grey">
              <div class="portlet box blue">
                  <div class="portlet-title">
                      <div class="caption">
                          <i class="fa fa-bar-chart-o"></i>EVENTOS
                      </div>
                      <div class="tools">
                          <a href="javascript:" class="collapse">
                          </a>
                      </div>
                  </div>
                  <div class="portlet-body">
                      <script src="https://code.highcharts.com/highcharts.js"></script>
                      <script src="https://code.highcharts.com/modules/exporting.js"></script>

                      <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                  </div>
              </div>
          </div>

      <!-- END Primer Grafico-->
  </div>

<div class="row">
<!-- segundo Grafico-->


<?php
include 'dataeventosrealizados.php';
?>

<div class="col-md-6 col-sm-6">
<div class="portlet solid bordered light-grey">
    <div class="portlet box green">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-bar-chart-o"></i>Eventos Realizados
        </div>
        <div class="tools">
          <a href="javascript:" class="collapse">
          </a>
        </div>
      </div>
      <div class="portlet-body">
                      <script src="https://code.highcharts.com/highcharts.js"></script>
                      <script src="https://code.highcharts.com/modules/exporting.js"></script>

                      <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
      </div>
    </div>
</div>
</div>
<!-- END segundo Grafico-->

  <!-- tercero Grafico-->


  <?php
  include 'dataeventoscancelados.php';
  ?>


<div class="col-md-6 col-sm-6">

  <div class="portlet solid bordered light-grey">
    <div class="portlet box red">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-bar-chart-o"></i>Eventos Cancelados
        </div>
        <div class="tools">
          <a href="javascript:" class="collapse">
          </a>
        </div>
      </div>
      <div class="portlet-body">
                      <script src="https://code.highcharts.com/highcharts.js"></script>
                      <script src="https://code.highcharts.com/modules/exporting.js"></script>

                      <div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
      </div>
    </div>
  </div>
</div>
<!-- END tercero Grafico-->
</div>
<!-- END Graficas-->

<!-- Comienzo Informacion Extra-->
<div class="row">
<div class="col-md-6 col-sm-6">
    <!-- BEGIN PORTLET-->
    <div class="portlet">
        <div class="portlet blue box">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="glyphicon glyphicon-list-alt""> </i> Asistentes Presenciales VALENCIA
                    </div>
                    <div class="tools">
                        <a href="javascript:" class="expand">
                        </a>
                    </div>
                </div>
                <div class="portlet-body" style="display: none;">
                    <div class="portlet blue box">

                          <?php
                          include('conex2.php');
                          $result1 = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad1
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2 and e.tipo<>'Diplomado'
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)
");

                          $result2 = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad2
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2 and e.tipo<>'Diplomado'
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)
");

                          $result3 = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad3
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2 and e.tipo<>'Diplomado'
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)
");
                          $ano1=array();
                          $ano2=array();
                          $ano3=array();
                          $meses=array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                          while ($row=mysqli_fetch_array($result1))
                          {
                              $ano1[$row["Mes"]-1] = $row["Cantidad1"];
#array_push($ano1, $row["Cantidad1"]);
                          }
                          while ($row=mysqli_fetch_array($result2))
                          {
                              $ano2[$row["Mes"]-1] = $row["Cantidad2"];
#array_push($ano2, $row["Cantidad2"]);
                          }
                          while ($row=mysqli_fetch_array($result3))
                          {
                              $ano3[$row["Mes"]-1] = $row["Cantidad3"];
#array_push($ano3, $row["Cantidad3"]);

                          }
                          ?>

                          <table class="table table-striped table-bordered table-hover" id="sample_4">
                              <thead>
                              <tr>
                                  <th>
                                      Meses
                                  </th>
                                  <th>
                                      Cantidad  <?php
                                      $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                                      while($row=mysqli_fetch_array($result))
                                      {
                                          echo $row['fecha'];
                                      }
                                      ?>
                                  </th>
                                  <th>
                                      Cantidad  <?php
                                      $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                                      while($row=mysqli_fetch_array($result))
                                      {
                                          echo $row['fecha'];
                                      }
                                      ?>
                                  </th>
                                  <th>
                                      Cantidad  <?php
                                      $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-2 as fecha");
                                      while($row=mysqli_fetch_array($result))
                                      {
                                          echo $row['fecha'];
                                      }
                                      ?>
                                  </th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php
                              for ($i = 0; $i < 12; $i++)
                              {
                                  echo '<tr><td>'.$meses[$i].'</td>';
                                  echo '<td>'.(isset($ano1[$i]) ? $ano1[$i] :'').'</td>';
                                  echo '<td>'.(isset($ano2[$i]) ? $ano2[$i] :'').'</td>';
                                  echo '<td>'.(isset($ano3[$i]) ? $ano3[$i] :'').'</td></tr>';
                              }
                              #mysqli_free_result($result);


                              ?>

                              </tbody>
                          </table>
                              </div>
                          </div>
        </div>
    </div>
</div>


  <div class="col-md-6 col-sm-6">
      <!-- BEGIN PORTLET-->
      <div class="portlet">
          <div class="portlet blue box">
              <div class="portlet-title">
                  <div class="caption">
                      <i class="glyphicon glyphicon-list-alt""></i>Asistentes ONLINE
                  </div>
                  <div class="tools">
                      <a href="javascript:" class="expand">
                      </a>
                  </div>
              </div>
              <div class="portlet-body" style="display: none;">
                  <div class="portlet blue box">

                      <?php

                      include('conex2.php');

                      $result1 = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad1
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and e.modalidad='online' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2 and e.tipo<>'Diplomado'
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)
");

                      $result2 = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad2
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and e.modalidad='online' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2 and e.tipo<>'Diplomado'
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)
");

                      $result3 = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad3
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and e.pais='ve' and e.modalidad='online' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2 and e.tipo<>'Diplomado'
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)
");
                      $ano1=array();
                      $ano2=array();
                      $ano3=array();
                      $meses=array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                      while ($row=mysqli_fetch_array($result1))
                      {
                          $ano1[$row["Mes"]-1] = $row["Cantidad1"];
#array_push($ano1, $row["Cantidad1"]);
                      }
                      while ($row=mysqli_fetch_array($result2))
                      {
                          $ano2[$row["Mes"]-1] = $row["Cantidad2"];
#array_push($ano2, $row["Cantidad2"]);
                      }
                      while ($row=mysqli_fetch_array($result3))
                      {
                          $ano3[$row["Mes"]-1] = $row["Cantidad3"];
#array_push($ano3, $row["Cantidad3"]);

                      }
                      ?>

                      <table class="table table-striped table-bordered table-hover" id="sample_4">
                          <thead>
                          <tr>
                              <th>
                                  Meses
                              </th>
                              <th>
                                  Cantidad <?php
                                  $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                                  while($row=mysqli_fetch_array($result))
                                  {
                                      echo $row['fecha'];
                                  }
                                  ?>
                              </th>
                              <th>
                                  Cantidad <?php
                                  $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                                  while($row=mysqli_fetch_array($result))
                                  {
                                      echo $row['fecha'];
                                  }
                                  ?>
                              </th>
                              <th>
                                  Cantidad <?php
                                  $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-2 as fecha");
                                  while($row=mysqli_fetch_array($result))
                                  {
                                      echo $row['fecha'];
                                  }
                                  ?>
                              </th>
                          </tr>
                          </thead>
                          <tbody>

                          <?php
                          for ($i = 0; $i < 12; $i++)
                          {
                              echo '<tr><td>'.$meses[$i].'</td>';
                              echo '<td>'.(isset($ano1[$i]) ? $ano1[$i] :'').'</td>';
                              echo '<td>'.(isset($ano2[$i]) ? $ano2[$i] :'').'</td>';
                              echo '<td>'.(isset($ano3[$i]) ? $ano3[$i] :'').'</td></tr>';
                          }
                          #mysqli_free_result($result);


                          ?>

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
<!-- END Informacion Extra-->

  <!-- Comienzo Informacion Extra-->
  <div class="row">
      <div class="col-md-6 col-sm-6">
          <!-- BEGIN PORTLET-->
          <div class="portlet">
              <div class="portlet green box">
                  <div class="portlet-title">
                      <div class="caption">
                          <i class="glyphicon glyphicon-list-alt""></i>Eventos Realizados VALENCIA
                      </div>
                      <div class="tools">
                          <a href="javascript:" class="expand">
                          </a>
                      </div>
                  </div>
                  <div class="portlet-body" style="display: none;">
                      <div class="portlet green box">
                          <?php
                          include('conex2.php');
                          $result1 = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and l.zona='valencia' and e.id not in (528, 949, 2051, 2052, 3007, 3019) and e.tipo<>'Diplomado'
group by year(e.fecha_1), MONTH(e.fecha_1)
");

                          $result2 = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible = '1' and e.modalidad='presencial'  and e.pais='ve' and l.zona='valencia' and e.id not in (528, 949, 2051, 2052, 3007, 3019) and e.tipo<>'Diplomado'
group by year(e.fecha_1), MONTH(e.fecha_1)
");

                          $result3 = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and l.zona='valencia' and e.id not in (528, 949, 2051, 2052, 3007, 3019) and e.tipo<>'Diplomado'
group by year(e.fecha_1), MONTH(e.fecha_1)
");
                          $ano1=array();
                          $ano2=array();
                          $ano3=array();
                          $meses=array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                          while ($row=mysqli_fetch_array($result1))
                          {
                              $ano1[$row["Mes"]-1] = $row["Cantidad"];

                          }
                          while ($row=mysqli_fetch_array($result2))
                          {
                              $ano2[$row["Mes"]-1] = $row["Cantidad"];

                          }
                          while ($row=mysqli_fetch_array($result3))
                          {
                              $ano3[$row["Mes"]-1] = $row["Cantidad"];


                          }
                          ?>

                          <table class="table table-striped table-bordered table-hover" id="sample_4">
                              <thead>
                              <tr>
                                  <th>
                                      Meses
                                  </th>
                                  <th>
                                      Cantidad <?php
                                      $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                                      while($row=mysqli_fetch_array($result))
                                      {
                                          echo $row['fecha'];
                                      }
                                      ?>
                                  </th>
                                  <th>
                                      Cantidad <?php
                                      $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                                      while($row=mysqli_fetch_array($result))
                                      {
                                          echo $row['fecha'];
                                      }
                                      ?>
                                  </th>
                                  <th>
                                      Cantidad <?php
                                      $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-2 as fecha");
                                      while($row=mysqli_fetch_array($result))
                                      {
                                          echo $row['fecha'];
                                      }
                                      ?>
                                  </th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php
                              for ($i = 0; $i < 12; $i++)
                              {
                                  echo '<tr><td>'.$meses[$i].'</td>';
                                  echo '<td>'.(isset($ano1[$i]) ? $ano1[$i] :'').'</td>';
                                  echo '<td>'.(isset($ano2[$i]) ? $ano2[$i] :'').'</td>';
                                  echo '<td>'.(isset($ano3[$i]) ? $ano3[$i] :'').'</td></tr>';
                              }
                              #mysqli_free_result($result);


                              ?>

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-sm-6">
          <!-- BEGIN PORTLET-->
          <div class="portlet">
              <div class="portlet red box">
                  <div class="portlet-title">
                      <div class="caption">
                          <i class="glyphicon glyphicon-list-alt""></i>Eventos Cancelados VALENCIA
                      </div>
                      <div class="tools">
                          <a href="javascript:" class="expand">
                          </a>
                      </div>
                  </div>
                  <div class="portlet-body" style="display: none;">
                      <div class="portlet red box">
                          <?php
                          include('conex2.php');
                          $result1 = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible = '0' and e.modalidad='presencial' and e.pais='ve' and l.zona='valencia' and e.id not in (528, 949, 2051, 2052, 3007, 3019) and e.tipo<>'Diplomado'
group by year(e.fecha_1), MONTH(e.fecha_1)
");

                          $result2 = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible = '0' and e.modalidad='presencial'  and e.pais='ve' and l.zona='valencia' and e.id not in (528, 949, 2051, 2052, 3007, 3019) and e.tipo<>'Diplomado'
group by year(e.fecha_1), MONTH(e.fecha_1)
");

                          $result3 = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible = '0' and e.modalidad='presencial' and e.pais='ve' and l.zona='valencia' and e.id not in (528, 949, 2051, 2052, 3007, 3019) and e.tipo<>'Diplomado'
group by year(e.fecha_1), MONTH(e.fecha_1)
");
                          $ano1=array();
                          $ano2=array();
                          $ano3=array();
                          $meses=array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                          while ($row=mysqli_fetch_array($result1))
                          {
                              $ano1[$row["Mes"]-1] = $row["Cantidad"];

                          }
                          while ($row=mysqli_fetch_array($result2))
                          {
                              $ano2[$row["Mes"]-1] = $row["Cantidad"];

                          }
                          while ($row=mysqli_fetch_array($result3))
                          {
                              $ano3[$row["Mes"]-1] = $row["Cantidad"];


                          }
                          ?>

                          <table class="table table-striped table-bordered table-hover" id="sample_4">
                              <thead>
                              <tr>
                                  <th>
                                      Meses
                                  </th>
                                  <th>
                                      Cantidad <?php
                                      $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                                      while($row=mysqli_fetch_array($result))
                                      {
                                          echo $row['fecha'];
                                      }
                                      ?>
                                  </th>
                                  <th>
                                      Cantidad <?php
                                      $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                                      while($row=mysqli_fetch_array($result))
                                      {
                                          echo $row['fecha'];
                                      }
                                      ?>
                                  </th>
                                  <th>
                                      Cantidad <?php
                                      $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-2 as fecha");
                                      while($row=mysqli_fetch_array($result))
                                      {
                                          echo $row['fecha'];
                                      }
                                      ?>
                                  </th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php
                              for ($i = 0; $i < 12; $i++)
                              {
                                  echo '<tr><td>'.$meses[$i].'</td>';
                                  echo '<td>'.(isset($ano1[$i]) ? $ano1[$i] :'').'</td>';
                                  echo '<td>'.(isset($ano2[$i]) ? $ano2[$i] :'').'</td>';
                                  echo '<td>'.(isset($ano3[$i]) ? $ano3[$i] :'').'</td></tr>';
                              }
                              #mysqli_free_result($result);


                              ?>

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>
  <!-- END Informacion Extra-->
