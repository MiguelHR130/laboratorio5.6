<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Laboratorio</title>
    <style>
        header { 
                position: fixed;
                left: 0px;
                top: -80px;
                right: 0px;
                height: 100px;
                text-align: center;
                }
        footer {
                position: fixed;
                left: 0px;
                bottom: -50px;
                right: 0px;
                height: 40px;
                border-bottom: 2px solid #ddd;
                font-family: Helvetica, Arial, sans-serif;
                }
        footer .page:after {
                content: counter(page);
                }
        footer table {
                width: 100%;
                }
        footer p {
                text-align: right;
                }
        footer .izq {
                text-align: left;
                }
        h4   {  color: black;
                font-family: Helvetica, Arial, sans-serif;
                }
        .div {
                width: 100%;
                margin-left: 10px;
                margin-right: 10px;
                margin-top: 60px;
                font-family: Helvetica, Arial, sans-serif;
            }
        .letratablam{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 230px;
                top: 70px;
            }
        .letratablam2{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 215px;
                top: 150px;
            }
        .datos{
                font-size: 12px;
                position: fixed;
                top: 100px;
                left: 80px; 
        }    
        .letraRESULT{
               font-size: 14px;
               font-family: Arial, Helvetica, sans-serif;
               text-align: left;
               color: #000000;
               position: fixed;
               top: 180px;
               left: 20px; 
               border-width: 1px;
               border-style: solid;
               border-color: white;
            }
        .letrafirma{
               font-size: 12px;
               font-family: Arial, Helvetica, sans-serif;
               position: fixed;
               top: 950px;
               left: 250px; 
            }    
            .linea {
                border-top: 1px solid black;
            }
        div.page_break + div.page_break{
            page-break-before: always;
            }
        .borde{
            margin: 40px 50px 50px 5px;
            }
        .notacion{
            font-size: 8px;
            border-collapse: collapse;
            text-align: left;
            position: fixed;
            top: 710px;
            left: 80px; 
        }
        .pre{
            width:100%;
            border: solid;
            margin: 0;
            padding: 0;
        }

    </style>
</head>
<body class="borde">
            <header>
                <img src="img\logo5.png" width="700" height="130"class="img" alignt="center" style="padding-bottom: 40px; padding-top: 30px;">
            </header>
            <footer>
                <table>
                <tr>
                    <td>
                        <p class="izq">
                        Laboratorio de Análisis Clínicos San Miguel
                        </p>
                    </td>
                    <td>
                    <p class="page">
                        Pág.
                    </p>
                    </td>
                </tr>
                </table>
        </footer>

<div class="div" >

        <div>
                <table class="letratablam">
                <tr>
                    <td>INFORMACIÓN DEL PACIENTE</td>
                </tr>
                </table>
        </div>
        <div>
            <table class="datos" width="100%" style="border-collapse: collapse;  color: #e66900;">
            <tr>
                <td style="background-color: #fdddca;" width="15%">NOMBRE</td>
                <td  width="50%">&nbsp;&nbsp;{{$otropdf->nombreConcatenado}}</td>
                <td style="background-color: #fdddca;"  width="10%">EDAD</td>
                <td width="15%">&nbsp;&nbsp;{{$otropdf->edad}} años</td>
                <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
                <td width="50%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
            </tr>
            <tr>
                <td style="background-color: #fdddca;" width="25%">TOMA MUESTRA</td>
                <td  width="50%">&nbsp;&nbsp;{{$fecha_final}}</td>
                <td style="background-color: #fdddca;">SEXO</td>
                <td>&nbsp;&nbsp;{{$otropdf->sexo}}</td>
            </tr>
            </table>
        </div>
        <div>
                <table class="letratablam2">
                    <tr>
                        <td>RESULTADOS DE LABORATORIO</td>
                    </tr>
                </table>   
        </div>  
        <div>
            <table class="letraRESULT" width="100%">
                <tr>
                    <th>{{$otropdf->encabezado}}</th><br><br>
                </tr>        
                <tr>
                   <td>
                        <pre>
                        {{$otropdf->cuerpo}}
                        </pre>
                   </td>
                        
                   
                    
                </tr>            
            </table>
       
        </div>
        <div>
            <table class="letrafirma">
                <tr>
                    <th>ATENTAMENTE</th>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                </tr>
                <tr >
                    <th class="linea">Q.F.B MALENY GUZMAN HERNANDEZ</th>
                </tr>
                <tr>
                    <th>CED.PROF 10307821</th>
                </tr>
            </table>
        </div>
</div>
</body>
</html>