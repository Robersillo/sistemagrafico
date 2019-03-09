<!-- COMIENZA Data de Asistentes -->
<script type="text/javascript">
    $(function () {
        Highcharts.chart('container1', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Asistencia Anual por mes'
            },
            xAxis: {
                categories: [
                    'Enero',
                    'Febrero',
                    'Marzo',
                    'Abril',
                    'Mayo',
                    'Junio',
                    'Julio',
                    'Augusto',
                    'Septiembre',
                    'Octubre',
                    'Noviembre',
                    'Diciembre'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Asistentes'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Año 2017',
                data: [             <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=1 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?> , <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=2 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=3 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=4 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=5 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=6 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=7 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=8 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=9 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=10 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=11 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and e.visible=1 and MONTH(e.fecha_1)=12 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>]

            },
                {
                    name: 'Año 2016',
                    data: [ <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=1 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=2 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=3 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=4 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=5 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=6 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=7 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=8 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=9 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=10 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=11 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=12 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>]

                },

                {
                    name: 'Año 2015',
                    data: [ <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=1 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=2 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=3 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=4 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=5 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=6 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=7 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=8 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=9 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=10 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=11 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
select year(e.fecha_1) as Ano, MONTH(e.fecha_1) as Mes,count(a.id) as Cantidad
from res_asistentes a
left join res_reservaciones r on r.id = a.id_reservaciones
left join eventos e on e.id = r.id_eventos
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and e.visible=1 and MONTH(e.fecha_1)=12 and e.pais='ve' and e.modalidad='presencial' and l.zona='valencia' and r.del_id is null and a.asistencia=1 and r.status>=2
and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>]

                }

            ]
        });
    });
</script>
<!-- TERMINA Data de Asistentes -->
