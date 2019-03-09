<!-- COMIENZA Data de Eventos realizados -->
<script type="text/javascript">
    $(function () {
        Highcharts.chart('container2', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Eventos Anuales Realizados'
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
                },
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Año 2017',
                data: [             <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=1 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?> , <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=2 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=3 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=4 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=5 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=6 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=7 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=8 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=9 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=10 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=11 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-2 and MONTH(e.fecha_1)=12 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
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
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=1 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=2 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=3 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=4 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=5 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=6 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=7 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=8 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=9 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=10 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=11 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=12 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
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
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=1 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=2 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=3 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=4 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=5 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=6 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=7 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=8 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=9 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=10 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=11 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
group by year(e.fecha_1), MONTH(e.fecha_1)");

        while ($row=mysqli_fetch_array($result))
        {
            echo $row["Cantidad"];
        }
        mysqli_free_result($result);
        ?>, <?php
                include('conex2.php');

        $result = mysqli_query($link,"
SELECT year(e.fecha_1) as ano,MONTH(e.fecha_1) as Mes, count(e.id) as Cantidad
FROM eventos e
left JOIN lugares l on l.id = e.lugar_id
where year(e.fecha_1)=YEAR(CURRENT_TIMESTAMP)-3 and MONTH(e.fecha_1)=12 and e.visible = '1' and e.modalidad='presencial' and e.pais='ve' and e.id not in (528, 949, 2051, 2052, 3007, 3019)
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
<!-- TERMINA Data de Eventos realizados-->
