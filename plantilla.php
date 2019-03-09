<?php

    session_start();

    if($_SESSION['usuario']!= "rober")
		{
          header('location: index.php');
          }
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- BEGIN HEAD -->
<?php
include 'head.php';
?>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-fixed">
<!-- BEGIN HEADER -->
<?php
include 'header.php';
 ?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
  <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
          <?php
          include 'menu.php';
          ?>
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
		<div class="page-content">

<?php
include 'informacion_eventosvista.php';
 ?>
	<!-- Poner aqui el Contenido -->


			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<?php
include 'footeryscript.php';
?>


</body>
<!-- END BODY -->
</html>
