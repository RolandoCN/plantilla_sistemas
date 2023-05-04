<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Dr Napoleon Davila</title>
    <link rel="icon" href="logo_icono.png" sizes="32x32" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>

        @media screen and (max-width: 960px){
            .img{
                height: auto !important;
            }

            #listado{
                margin-top:10px !important;
            }
        }

        .img {
            background-image: url("fond.jpg");
            background-color: #cccccc;
            height: 60vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        img::before {
            opacity: 1.0;
        }

        .btn-plan {
            background-color: #0D6EFD !important;
            border: 1px solid #0D6EFD !important;
            color: white
        }

        .contenido {
            margin-left: 122px;
            margin-right: 122px;
        }

        .lista li {
            color: white;
            /* Bullet Color */
        }

        li span {
            color: black;
            /* Text Color */
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem;
            margin-left: -10px;
        }

        .card_tama{
            height: 220px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- <body style="background-color: #f3f3f3;"> -->
<body class="img">
    <div class="col-md-12 imgx">
      
        <div class="container contenido-">
            <div class="col-md-12" style=" margin-top:100px;" id="listado">
                <!-- <center><img style="opacity: 0.3" width="70%" height="100%" src="fondo.jpg"></center> -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card_tama " style="margin-bottom:12px">
                        
                            <h5 class="card-header text-center" style="background: #0D6EFD; color:white">
                                <i class="fa fa-user"></i> SISPER
                            </h5>
                            <div class="card-body">
                                <h2 class="text-center" style="margin-top:0; font-size:30px !important">
                                    <b style="font-size: 18px !important">Sistema de Permisos</b>
                                </h2>


                                <ul class="lista">
                                    <li>
                                        <span style="font-size:12px"> <i class="fa fa-check-circle" style="color:#0D6EFD"></i>
                                            Sistema de registros de permisos laboral de los funcionarios de la institución
                                        </span>
                                    </li>                              
                                </ul>
                                <center>
                                    <button type="button" class="btn btn-plan" onclick="irPagina('SisPer')">Visitar</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card_tama" style="margin-bottom:12px">
                            <h5 class="card-header text-center" style="background: #0D6EFD; color:white">
                                <i class="fa fa-cutlery"></i>  SISALI
                            </h5>
                            <div class="card-body">
                                <h2 class="text-center" style="margin-top:0; font-size:30px !important">
                                    <b style="font-size: 18px !important">Sistema de Alimentación</b>
                                </h2>


                                <ul class="lista">
                                    <li>
                                        <span style="font-size:12px"> <i class="fa fa-check-circle" style="color:#0D6EFD"></i>
                                            Sistema de aprobación de personal autorizado para la alimentación
                                        </span>
                                    </li>
                                
                                </ul>
                                <center>
                                    <button type="button"
                                        onclick="irPagina('SisAli')"
                                        class="btn btn-plan">Visitar</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card_tama" style="margin-bottom:12px">
                            <h5 class="card-header text-center" style="background: #0D6EFD; color:white">
                                <i class="fa fa-car"></i> SISVEHI
                            </h5>
                            <div class="card-body">
                                <h2 class="text-center" style="margin-top:0; font-size:30px !important">
                                    <b style="font-size: 18px !important">Sistema vehícular</b>
                                </h2>


                                <ul class="lista">
                                    <li>
                                        <span style="font-size:12px"> <i class="fa fa-check-circle" style="color:#0D6EFD"></i>
                                            Sistema de registro de movilización y despacho de combustibles 
                                        </span>
                                    </li>
                                </ul>
                                <center>
                                    <button type="button"
                                        onclick="irPagina('SisVehi')"
                                        class="btn btn-plan">Visitar</button>
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card_tama" style="margin-bottom:12px">
                            <h5 class="card-header text-center" style="background: #0D6EFD; color:white">
                                <i class="fa fa-car"></i> SIGESH
                            </h5>
                            <div class="card-body">
                                <h2 class="text-center" style="margin-top:0; font-size:30px !important">
                                    <b style="font-size: 18px !important">Sistema xxxgfg</b>
                                </h2>


                                <ul class="lista">
                                    <li>
                                        <span style="font-size:12px"> <i class="fa fa-check-circle" style="color:#0D6EFD"></i>
                                            Sistema de registro de movilización y despacho de combustibles 
                                        </span>
                                    </li>
                                </ul>
                                <center>
                                    <button type="button"
                                        onclick="irExe('Sigesh')"
                                        class="btn btn-plan">Visitar</button>
                                </center>
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
    </div>

    <?php
        function irExe2(){
            // exec("C:\SIGESH\SIGESH.exe");
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>

</html>
<script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
<script>
    function irPagina(tipo){
        if(tipo=="SisPer")
        window.open('http://172.10.150.198:81/sisPer', '_blank')
        else if(tipo=="SisAli")
            window.open('http://172.10.150.198:81/sisAli', '_blank')
        else
            window.open('http://172.10.150.198:81/sisVehi', '_blank')
    }

    function irExe(){
        $.get("sigesh.php", function(data){

        })
    
        
       
    } 
</script>