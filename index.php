<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Dr Napoleon Davila</title>
    <!-- <link rel="icon" href="http://172.10.150.198:81/sisAli/logo_icono.png" sizes="32x32" /> -->
    <link rel="icon" href="imagenes/logo_icono.png" sizes="32x32" />
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

    <div class="container" style="max-width:65%; margin-top:10px; margin-bottom:60px">

        <div class="row">

            <div class="col-sm-12 col-xs-12" style="height: auto; margin-top: 0px;" id="r1">
                <a >
                    <div class="modulos" style="display: block; border: 1px solid #198754;">
                            
                        
                        <p style="text-align:center; ">
                            <b style="color:#0660fd; font-size:18px">
                            <!-- <b style="color:red"> -->
                                Plataformas De Trabajo
                            </b>
                        </p>
                
                    </div>
                </a>
            </div>
            
            <div class="col-sm-6 col-xs-12" style="height: auto; margin-top: 7px;" id="r1">
                <a onclick="verModalContig()">
                    <div class="modulos" style="display: block;  border: 1px solid #198754;"">
                            
                        
                        <p style="text-align:center; ">
                            <b style="color:#0660fd">
                            <!-- <b style="color:red"> -->
                                <i class="fa fa-exclamation-circle" style="color:red"></i> Plan Contigencia
                            </b>
                        </p>
                
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-xs-12" style="height: auto; margin-top: 7px;" id="r1">
                <a onclick="verModalAgenda()">
                    <div class="modulos" style="display: block;  border: 1px solid #198754;"">
                            
                        
                        <p style="text-align:center; ">
                            <b style="color:#0660fd">
                            <!-- <b style="color:red"> -->
                                <i class="fa fa-phone" style="color:red"></i> Agenda Telefónica
                            </b>
                        </p>
                
                    </div>
                </a>
            </div>
           
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
                <!-- <a onclick="irExe()" href=""> -->
                <a href="sigesh://" target="_blank">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/CRDFLE13.ico" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>SiGesh</b></p>
                
                    </div>
                </a>

            </div>


            <div class="col-sm-3 col-xs-12" style="height: auto; margin-top: 17px;" id="r1">
            
                <a href="siglab://" target="_blank">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/lab.ico" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>SigLab</b></p>
                
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
                <a target="_blank" href="https://srienlinea.sri.gob.ec/sri-en-linea/SriPagosWeb/ConsultaDeudasFirmesImpugnadas/Consultas/consultaDeudasFirmesImpugnadas">
                    <div class="modulos" style="display: block;">
                            
                        <div style="margin-top:10px !important; text-align:center">
                            <img src="imagenes/sri.jpg" width="70%" height="70px">
                        </div>
                        <p style="text-align:center"><b>Consulta SRI</b></p>
                
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

    <?php
        @include('modalAgenda.php');
        @include('modalContigencia.php');
    ?>

    <footer style="background-color:#0d6efd ; height:50px">
        <center><b style="color:white">Derechos reservados © <?php echo date('Y')?> Tics</b></center>
    </footer>

   
</body>

</html>



<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 



<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script>

    function verModalAgenda(){
        $('#myModal').modal('show');
        
    }

    function verModalContig(){
        $('#modalContigencia').modal('show');
    }

    $(document).ready(function () {

        $('#example').DataTable({
            Title:'HOSPITAL GENERAL NAPOLEON DAVILA CORDOVAR',
            "order": [[ 0, 'asc' ]],
            "language": {
                    "lengthMenu": "MOSTRAR _MENU_ REGISTROS POR PÁGINA",
                    "zeroRecords": "NO HAY REGISTROS",
                    "info": "PÁGINA _PAGE_ DE _PAGES_ PÁGINA/S",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(FILTRADO DE _MAX_ REGISTROS TOTALES)",
                    "search": "FILTRAR",
                    "paginate": {
                        "first":      "PRIMERO",
                        "last":       "ÚLTIMO",
                        "next":       "SIGUIENTE",
                        "previous":   "PREVIO"
                    } 
            }, dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy',
                    text: 'COPIAR',title:'HOSPITAL NAPOLEON DAVILA CORDOVAR',
                    messageTop: 'UNIDAD DE TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN'
                }, {
                    extend: 'excel',
                    text: 'CONVERTIR A EXCEL',title:'HOSPITAL NAPOLEON DAVILA CORDOVAR',
                    messageTop: 'UNIDAD DE TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN'
                }, {
                    extend: 'pdf',
                    text: 'CONVERTIR A PDF', messageTop: 'HOSPITAL NAPOLEON DAVILA CORDOVAR',title:'HOSPITAL NAPOLEON DAVILA CORDOVAR',
                    messageTop: 'UNIDAD DE TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN'

                },{
                    extend: 'print',
                    text: 'IMPRIMIR',title:'HOSPITAL NAPOLEON DAVILA CORDOVAR',
                    messageTop: 'UNIDAD DE TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN'
                }
            ]
        });
    });

    function cerrarModalAgenda(){
        $('#myModal').modal('hide');
    }

    function cerrarModalCont(){
        $('#modalContigencia').modal('hide');
    }

</script>