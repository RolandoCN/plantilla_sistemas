<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Dr Napoleon Davila</title>
    <link rel="icon" href="logo_icono.png" sizes="32x32" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>

        .modulos {
        
            border:  1px solid #7982E4;
            border-radius: 10px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            background:#fafffc;
            overflow:hidden;
        }

        .modulos:hover{
            transform: translateY(-3%)
        }
        a{
            text-decoration:none
        }

        #descripcion{
            margin-left:0.8em; 
            margin-right:0.8em; 
            margin-top: 0.8em;
            display: block;
            display: -webkit-box;
            
            line-height: 1.3;
            -webkit-line-clamp:3;
            -webkit-box-orient:vertical;
            text-overflow: ellipsis;
            overflow: hidden;

        }

        #textotitulo{
            margin-left:0.8em; 
            margin-right:0.8em; 
            margin-top: 0.8em;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;

        }


        #parrafo{
            height: 100px;
        }

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
       
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="img_">

    <nav class="navbar_ bg-primary" style="height:50px" data-bs-theme="dark">
        <div class="container-fluid_" style="text-align:center; ">
            <p style="color:white; line-height:50px">
                <img src="imagenes/logo_icono.png"  width="50px" alt="">
                HOSPITAL GENERAL DR. NAPOLEÓN DÁVILA CÓRDOVA
            </p>
          
        </div>
    </nav>

    <div class="container" style="max-width:65%; margin-top:30px; margin-bottom:60px">

        <div class="row">
           
                <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 7px;" id="r1">
                    <a target="_blank" href="/sisAli">
                        <div class="modulos" style="display: block;">
                                
                            <div style="margin-top:10px !important; text-align:center">
                                <img src="imagenes/alimentos.jpg" width="70%" height="70px">
                            </div>
                            <p style="text-align:center"><b>SisAli</b></p>
                    
                        </div>
                    </a>
                </div>
            
            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 7px;" id="r1">
                <a target="_blank" href="/sisPer">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/permisos.jpg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>SisPer</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 7px;" id="r1">
                <a target="_blank" href="/sisVehi">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/ambu.jpg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>SisVehi</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 7px;" id="r1">
                <a target="_blank" href="http://172.10.150.97/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/rayos-x.jpg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>RX-PACS</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://hospitalgeneralchone.gob.ec:2096/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/mail.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Correo Institucional</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a onclick="irExe()" href="">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/CRDFLE13.ico" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>SiGesh</b></p>
                
                    </div>
                </a>

            </div>


            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://sgrdacaa.msp.gob.ec/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/pra.jpg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Prass</b></p>
                
                    </div>

                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://web.gestiondocumental.gob.ec/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/quipux.jpeg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Quipux</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://coresalud.msp.gob.ec/coresalud/app.php/publico/rpis/afiliacion/consulta">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/rpis.png" width="50%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Cobertura MSP</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://app.iess.gob.ec/gestion-calificacion-derecho-web/public/formulariosContacto.jsf">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/iess.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Calificación IESS</b></p>
                
                    </div>
                </a>

            </div>


            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://sive.msp.gob.ec/Account/Login">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/paho.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Pahoflu</b></p>
                
                    </div>
                </a>
            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://tamizaje.msp.gob.ec/tamen/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/tamizaje.jpeg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Tamizaje</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://sisainventariospp.msp.gob.ec/web/login">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/sgi.jpg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>SGI Medicamentos</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://viepi.msp.gob.ec/login.php">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/viepi.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Sistema Viepi</b></p>
                
                    </div>
                </a>

            </div>


            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://drive.mspz4.gob.ec/owncloud/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/cloud.jpg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Cloud Zonal</b></p>
                
                    </div>
                </a>
            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://capacitacion.msp.gob.ec/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/capacitacion.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Capacitación MSP</b></p>
                
                    </div>
                </a>
            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://rpis.msp.gob.ec/RPS-MSP/Home/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/rpis2.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>RPIS MSP</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://servicios.registrocivil.gob.ec/esiddconsulweb/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/registro.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Registro Civil</b></p>
                
                    </div>
                </a>

            </div>


            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://drive.mspz4.gob.ec/owncloud/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/hep.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Referencias HEP</b></p>
                
                    </div>
                </a>
            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="http://servicios1.registrocivil.gob.ec/#_">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/revit.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Revit Nacimiento</b></p>
                
                    </div>
                </a>
            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://revit.registrocivil.gob.ec/revit_defunciones-war/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/sies_inicio.jpg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Revit Defunciones</b></p>
                
                    </div>
                </a>

            </div>

            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
                <a target="_blank" href="https://aplicaciones3.ecuadorencifras.gob.ec/sat_inec-war/">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/inec.png" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>INEC</b></p>
                
                    </div>
                </a>

            </div>

         

            
        </div>
    
        
    </div>

    <footer style="background-color:#0d6efd ; height:50px">
        <center><b style="color:white">Derechos reservados © <?php echo date('Y')?> Tics</b></center>
    </footer>

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