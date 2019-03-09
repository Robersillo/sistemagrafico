<!-- BEGIN DASHBOARD STATS -->
<div class="row">
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="dashboard-stat green">
      <div class="visual">
        <i class="fa fa-user"></i>
      </div>
      <div class="details">
        <div class="number">
<?php
include('conex2.php');

$result = mysqli_query($link,"
select count(a.id) as Cantidad, CURRENT_TIMESTAMP as Fecha
from res_asistentes a left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and e.pais='ve' and e.modalidad='presencial' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)");

while ($row=mysqli_fetch_array($result))
{
echo $row["Cantidad"];
}
mysqli_free_result($result);
?>
                          +

                          <?php
                          include('conex2.php');

                          $result = mysqli_query($link,"
select count(a.id) as Cantidad, CURRENT_TIMESTAMP as Fecha
from res_asistentes a left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and e.pais='ve' and e.modalidad='online' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)");

                          while ($row=mysqli_fetch_array($result))
                          {
                              echo $row["Cantidad"];
                          }
                          mysqli_free_result($result);
                          ?>


                      =

                      <?php
                      include('conex2.php');

                      $result = mysqli_query($link,"
select count(a.id) as Cantidad, CURRENT_TIMESTAMP as Fecha
from res_asistentes a left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and e.pais='ve' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)");

                      while ($row=mysqli_fetch_array($result))
                      {
                          echo $row["Cantidad"];
                      }
                      mysqli_free_result($result);
                      ?>

                      </div>

        <div class="desc">
           Asistentes

                          <?php
                          $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-2 as fecha");
                          while($row=mysqli_fetch_array($result))
                          {
                              echo $row['fecha'];
                          }
                          ?>

                      </div>
      </div>
      <a class="more" href="#">
                  <b>Formula:</b> Presencial + Online = Total asistentes <i class="m-icon-swapright m-icon-white"></i>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="dashboard-stat blue">
      <div class="visual">
        <i class="fa fa-user"></i>
      </div>
      <div class="details">
        <div class="number">
                          <?php
                          include('conex2.php');

                          $result = mysqli_query($link,"
select count(a.id) as Cantidad, CURRENT_TIMESTAMP as Fecha
from res_asistentes a left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and e.modalidad='presencial' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)");

                          while ($row=mysqli_fetch_array($result))
                          {
                              echo $row["Cantidad"];
                          }
                          mysqli_free_result($result);
                          ?>
                          +

                          <?php
                          include('conex2.php');

                          $result = mysqli_query($link,"
select count(a.id) as Cantidad, CURRENT_TIMESTAMP as Fecha
from res_asistentes a left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and e.modalidad='online' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)");

                          while ($row=mysqli_fetch_array($result))
                          {
                              echo $row["Cantidad"];
                          }
                          mysqli_free_result($result);
                          ?>


                          =

                          <?php
                          include('conex2.php');

                          $result = mysqli_query($link,"
select count(a.id) as Cantidad, CURRENT_TIMESTAMP as Fecha
from res_asistentes a left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)");

                          while ($row=mysqli_fetch_array($result))
                          {
                              echo $row["Cantidad"];
                          }
                          mysqli_free_result($result);
                          ?>
        </div>
        <div class="desc">
           Asistentes

                          <?php
                          $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                          while($row=mysqli_fetch_array($result))
                          {
                              echo $row['fecha'];
                          }
                          ?>

        </div>
      </div>
      <a class="more" href="#">
                      <b>Formula:</b> Presencial + Online = Total asistentes <i class="m-icon-swapright m-icon-white"></i>
      </a>
    </div>
  </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="dashboard-stat yellow">
                  <div class="visual">
                      <i class="fa fa-user"></i>
                  </div>
                  <div class="details">
                      <div class="number">
                          <?php
                          include('conex2.php');

                          $result = mysqli_query($link,"
select count(a.id) as Cantidad, CURRENT_TIMESTAMP as Fecha
from res_asistentes a left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and e.modalidad='presencial' and r.del_id is null and a.asistencia=1
and e.id not in (528, 949, 2051, 2052, 3007, 3019)");

                          while ($row=mysqli_fetch_array($result))
                          {
                              echo $row["Cantidad"];
                          }
                          mysqli_free_result($result);
                          ?>
                          +

                          <?php
                          include('conex2.php');

                          $result = mysqli_query($link,"
select count(a.id) as Cantidad, CURRENT_TIMESTAMP as Fecha
from res_asistentes a left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and e.modalidad='online' and r.del_id is null and a.asistencia=1
and e.id not in (528, 949, 2051, 2052, 3007, 3019)");

                          while ($row=mysqli_fetch_array($result))
                          {
                              echo $row["Cantidad"];
                          }
                          mysqli_free_result($result);
                          ?>


                          =

                          <?php
                          include('conex2.php');

                          $result = mysqli_query($link,"
select count(a.id) as Cantidad, CURRENT_TIMESTAMP as Fecha
from res_asistentes a left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and e.pais='ve' and r.del_id is null and a.asistencia=1
and e.id not in (528, 949, 2051, 2052, 3007, 3019)");

                          while ($row=mysqli_fetch_array($result))
                          {
                              echo $row["Cantidad"];
                          }
                          mysqli_free_result($result);
                          ?>
                      </div>
                      <div class="desc">
                          Asistentes

                          <?php
                          $result = mysqli_query($link,"SELECT YEAR(CURRENT_TIMESTAMP)-3 as fecha");
                          while($row=mysqli_fetch_array($result))
                          {
                              echo $row['fecha'];
                          }
                          ?>

                      </div>
                  </div>
                  <a class="more" href="#">
                      <b>Formula:</b> Presencial + Online = Total asistentes <i class="m-icon-swapright m-icon-white"></i>
                  </a>
              </div>
          </div>

  </div>
<!-- END DASHBOARD STATS -->
