<div class="row">
  <div class="col-md-12">
    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
    <h3 class="page-title">
    Programacion de Eventos <small>panel de informacion de eventos</small>
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
        <a href="informacion_eventos.php">
          Informacion
        </a>
                      <i class="fa fa-angle-right"></i>
      </li>
                  <li>
                      <a href="informacion_eventos.php">
                          Eventos
                      </a>
                      <i class="fa fa-angle-right"></i>
                  </li>
      <li class="pull-right">
        <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
          <i class="fa fa-calendar"></i>
          <span>
          </span>
          <i class="fa fa-angle-down"></i>
        </div>
      </li>
    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
  </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <!-- END EXAMPLE TABLE PORTLET-->
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
  <div class="col-md-12">
    <div class="portlet box green">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-globe"></i>Todos Los Eventos
        </div>
        <div class="tools">
          <a href="javascript:;" class="collapse">
          </a>
        </div>
      </div>
      <div class="portlet-body">

<?php

include('conex2.php');

$result = mysqli_query($link,"
select *
From
(select e.nombre as 'Evento', e.tipo as tipo_evento, e.id as id_evento, year (e.fecha_1) as 'Ano', MONTH (e.fecha_1) as Mes, DAY (e.fecha_1) as Dia, e.fecha_1 as fecha_completa, e.pais as 'Pais', count(a.id) as 'asistentes', p.nombre as 'Facilitador', l.zona, e.modalidad, e.visible as 'visible'
from eventos e
left join res_reservaciones r on r.id_eventos = e.id
left join res_asistentes a on a.id_reservaciones = r.id
left join ponentes p on e.facilitador_id = p.id
left join lugares l on l.id = e.lugar_id
where year(e.fecha_1)>=2010 and a.asistencia=1
group by e.id

union

select e.nombre as 'Evento', e.tipo as tipo_evento, e.id as id_evento, year (e.fecha_1) as 'Ano', MONTH (e.fecha_1) as Mes, DAY (e.fecha_1) as Dia, e.fecha_1 as fecha_completa, e.pais as 'Pais', count(a.id) as 'asistentes', p.nombre as 'Facilitador', l.zona, e.modalidad, e.visible as 'visible'
from eventos e
left join res_reservaciones r on r.id_eventos = e.id
left join res_asistentes a on a.id_reservaciones = r.id
left join ponentes p on e.facilitador_id = p.id
left join lugares l on l.id = e.lugar_id
where year(e.fecha_1)>=2010 and e.visible=0 and a.asistencia=0
group by e.id

union

select e.nombre as 'Evento', e.tipo as tipo_evento, e.id as id_evento, year (e.fecha_1) as 'Ano', MONTH (e.fecha_1) as Mes, DAY (e.fecha_1) as Dia, e.fecha_1 as fecha_completa, e.pais as 'Pais', count(a.id) as 'asistentes', p.nombre as 'Facilitador', l.zona, e.modalidad, e.visible as 'visible'
from eventos e
left join res_reservaciones r on r.id_eventos = e.id
left join res_asistentes a on a.id_reservaciones = r.id
left join ponentes p on e.facilitador_id = p.id
left join lugares l on l.id = e.lugar_id
where year(e.fecha_1)>=2010 and e.visible=0 and e.tipo=Diplomado
group by e.id

) a

join

(select e.nombre as 'Evento', count(r.id) as 'reservaciones', e.id as id_evento
from eventos e
join res_reservaciones r on r.id_eventos = e.id
where year(e.fecha_1)>=2010 and r.del_id is null
group by e.id) b

on a.id_evento = b.id_evento
");

?>

                      <table class="table table-striped table-bordered table-hover" id="sample_2">
        <thead>
        <tr>
          <th>
             Evento
          </th>
          <th>
             Fecha
          </th>

                          <th>
                              Visible
                          </th>
                          <th>
                              Facilitador
                          </th>
          <th>
             Pais
          </th>
                          <th>
                              Lugar
                          </th>
                          <th>
                              Modalidad
                          </th>
                          <th>
                              Reservaciones
                          </th>
                          <th>
                              Asistentes
                          </th>
        </tr>
        </thead>
        <tbody>

        <?php
while ($row=mysqli_fetch_array($result))
{
echo '<tr><td>'.$row["tipo_evento"].': <a href="http://gerenciales.com/eventos/ver/'.$row["id_evento"].'" target="_blank"> '.$row["Evento"].' </td>';

if($row["Mes"] == 1   ){
echo '<td>'.$row["Ano"].' Enero '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 2   ){
  echo '<td>'.$row["Ano"].' Febrero '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 3   ){
 echo '<td>'.$row["Ano"].' Marzo '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 4   ){
 echo '<td>'.$row["Ano"].' Abril '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 5   ){
 echo '<td>'.$row["Ano"].' Mayo '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 6   ){
 echo '<td>'.$row["Ano"].' Junio '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 7   ){
 echo '<td>'.$row["Ano"].' Julio '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 8   ){
 echo '<td>'.$row["Ano"].' Agosto '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 9   ){
 echo '<td>'.$row["Ano"].' Septiembre '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 10   ){
 echo '<td>'.$row["Ano"].' Octubre '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 11   ){
 echo '<td>'.$row["Ano"].' Noviembre '.$row["Dia"].'</td>';
}
else if($row["Mes"] == 12  ){
 echo '<td>'.$row["Ano"].' Diciembre '.$row["Dia"].'</td>';
}

if($row["visible"] >= 1   ){
  echo '<td><span class="label label-sm label-success">VISIBLE</span> </td>';
}
else if ($row["visible"] < 1   ){
  echo '<td><span class="label label-sm label-danger">OCULTO</span> </td>';
}

echo '<td>'.$row["Facilitador"].'</td>';

if($row["Pais"] == 've'   ){
  echo '<td>Venezuela <img src="http://gerenciales.com/img/icons/flags32/ve.png"></td>';
}
else if ($row["Pais"] == 'pa'  ){
  echo '<td>Panama <img src="http://gerenciales.com/img/icons/flags32/pa.png"></td>';
}
else if ($row["Pais"] == 'rd'   ){
  echo '<td>Rep. Dominicana <img src="http://gerenciales.com/img/icons/flags32/rd.png"></td>';
}
else if ($row["Pais"] == 'la'   ){
  echo '<td>Latino-America <img src="http://gerenciales.com/img/icons/flags32/la.png"></td>';
}

echo '<td>'.$row["zona"].'</td>';
echo '<td>'.$row["modalidad"].'</td>';
echo '<td>'.$row["reservaciones"].'</td>';
echo '<td>'.$row["asistentes"].'</td>';

}
mysqli_free_result($result);


?>

        </tbody>
        </table>
      </div>
    </div>
  </div>
    <!-- END EXAMPLE TABLE PORTLET-->



</div>
</div>
<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTENT-->
