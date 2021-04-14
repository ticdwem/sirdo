<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SAPI - PILARICA 1.0</title>
    <!-- css stylo base -->
    <link href="<?=base_url?>assets/css/estilo.css" rel="stylesheet" />
    <!-- css stylo propio -->
    <link href="<?=base_url?>assets/css/animated.css" rel="stylesheet" /> 
    <link href="<?=base_url?>assets/css/modern-business.css" rel="stylesheet" /> 
    <!-- css boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- max css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css datatable -->
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- css datepicker -->    
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    
    <!-- js boostrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- max js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- datepicker -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script> 
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript">   </script>    
  <!-- datatables -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <!-- fontawensome -->
    <script src="https://kit.fontawesome.com/1849e1867b.js" crossorigin="anonymous"></script>
    <!-- swet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- 
    <script src="<?=base_url?>assets/js/myjs.js"></script>
    <script src="<?=base_url?>assets/js/validar-campos.js"></script> -->
<!--     <script src="<?=base_url?>assets/demo/chart-area-demo.js"></script>
    <script src="<?=base_url?>assets/demo/chart-bar-demo.js"></script>
    <script src="<?=base_url?>assets/demo/datatables-demo.js"></script> -->

</head>
    <body class="sb-nav-fixed">
        <div id="container">
        <nav class="navbar fixed-top navbar-expand-lg  fixed-top">
 <!--     <div class="container"> -->
      <a class="navbar-brand" href="<?=base_url?>">
     
        <img src="<?=base_url?>assets/img/sirdomx.png"  width="45" height="45" class="logo-sirdo d-inline-block align-top" alt=""></a>  <!-- d-inline-block align-top -->
        GRUPO DE TECNOLOGIA ALTERNATIVA SC
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <!--     <li class="nav-item">
                <a class="nav-link text-white" href="https://www.sirdo.com.mx/" target="_blank">Regresar a pagina SIRDO | </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link text-white" href="<?=base_url?>">Inicio</a>
              </li> 
             <li class="nav-item">
                <a class="nav-link text-white" href="<?=base_url?>Inicio/nosotros">Nosotros</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link text-white" href="<?=base_url?>Inicio/sirdo">SIRDO</a>
              </li>
          
              <li class="nav-item">
                <a class="nav-link text-white" href="<?=base_url?>Productos/producto" >Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?=base_url?>Productos/precio">Lista de Precios</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="<?=base_url?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proyectos Exitosos</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="">Investigaciones</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="?action=tepepan">Tepepan</a></li>
                      <li><a class="dropdown-item" href="?action=tres-marias">Tres Marias</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="?action=proyectos-exitosos-xixim">Xixim</a></li>
                  <li><a class="dropdown-item" href="?action=proyectos-exitosos-los-venados">Los Venados</a></li>
                  <li><a class="dropdown-item" href="?action=proyectos-exitosos-zacatecas">Zacatecas</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="?action=impacto">Impacto</a>
              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Videos</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="?action=video-composteros">Composteros</a></li>
                  <li><a class="dropdown-item" href="?action=video-sirdo-seco">Sirdo Seco</a></li>
                  <li><a class="dropdown-item" href="?action=video-sirdo-humedo">Sirdo Humedo</a></li>
                  <li><a class="dropdown-item" href="?action=otros-videos">Otros Videos</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="?action=premios">Premios</a>
              </li>
               <li class="nav-item">
                <a class="nav-link text-white" href="?action=publicaciones">Publicaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="?action=contacto">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="?action=distribuidores">Distribuidores</a>
              </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="?action=eventos-sirdo">Eventos</a>
              </li>
              <li class="nav-item">
              <a href="?action=productos" type="button" class="btn btn-warning btn-sm" role="button" aria-pressed="true" style="font-size: 18px;">VENTA EN LINEA</a>
               <!--  <a class="nav-link text-white" href="?action=eventos-sirdo">Venta</a> -->
              </li>
            </ul>
            </div>
      <!--     </div> -->
  </nav>
           