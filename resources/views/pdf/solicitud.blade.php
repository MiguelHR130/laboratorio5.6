<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Laboratorio</title>
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
                top: 45px;
                text-transform: uppercase; 
            }
            .letratablamembarazo{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 230px;
                top: 55px;
                text-transform: uppercase; 
            }
            .letratablam2{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 215px;
                top: 160px;
                text-transform: uppercase; 
            }
            .letratablam2treselementos{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 260px;
                top: 160px;
                text-transform: uppercase; 
            }
            .letratablam2embarazo{
                font-size: 22px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 230px;
                top: 200px;
                text-transform: uppercase; 
            }
             .letratablam2glucosa{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 215px;
                top: 260px;
                text-transform: uppercase; 
            }
            .letratablam2tgotgp{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 310px;
                top: 160px;
                text-transform: uppercase; 
            }
            .letratablam2bilirubina{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 290px;
                top: 160px;
                text-transform: uppercase; 
            }
            .letratablambiometria{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 215px;
                top: 120px;
                text-transform: uppercase; 
            }
            .letratablamcopro{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 310px;
                top: 120px;
                text-transform: uppercase; 
            }
            .letratablamlipidos{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 260px;
                top: 160px;
                text-transform: uppercase; 
            }
            .letraresultfebriles{
                font-size: 17px;
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
                color: #000000;
                position: fixed;
                top: 250px;
                left: 100px;
                

            }
            .letratablamcurva{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 180px;
                top: 160px;
                text-transform: uppercase; 
            }
            .letratablamreumatico{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 260px;
                top: 160px;
                text-transform: uppercase; 
            }
            .letratablaorina{
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #000000;
                position: fixed;
                left: 215px;
                top: 120px;
                text-transform: uppercase; 
            }
        .datos{
                font-size: 13px;
                position: fixed;
                top: 80px;
                left: 40px;
                text-transform: uppercase;  
        }    
        .datosembarazo{
                font-size: 13px;
                position: fixed;
                top: 100px;
                left: 40px;
                text-transform: uppercase;  
        }    
        .letraRESULT{
               font-size: 17px;
               font-family: Arial, Helvetica, sans-serif;
               text-align: center;
               color: #000000;
               position: fixed;
               top: 200px;
               left: 45px;
               
            }
            .letraRESULTtreselementos{
               font-size: 17px;
               font-family: Arial, Helvetica, sans-serif;
               text-align: center;
               color: #000000;
               position: fixed;
               top: 330px;
               left: 45px;
               
            }
        .letraresultElse{
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: #000000;
            position: fixed;
            top: 250px;
            left: 45px;
        }
        .letraresultElseembarazo{
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: #000000;
            position: fixed;
            top: 300px;
            left: 45px;
        }
         .letraresultElseglucosa{
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: #000000;
            position: fixed;
            top: 450px;
            left: 45px;
        }
        .letraresultcopro{
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: #000000;
            position: fixed;
            top: 140px;
            left: 35px;
            
        }
        .letraRESULTtgotgp{
               font-size: 17px;
               font-family: Arial, Helvetica, sans-serif;
               text-align: center;
               color: #000000;
               position: fixed;
               top: 300px;
               left: 45px;
               
            }
            .letraRESULTbilirrubina{
               font-size: 17px;
               font-family: Arial, Helvetica, sans-serif;
               text-align: center;
               color: #000000;
               position: fixed;
               top: 330px;
               left: 45px;
               
            }
        .letraRESULT1{
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: #000000;
            position: fixed;
            top: 155px;
            left: 70px;
            
        }
        .resultMaster{
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: #000000;
            position: fixed;
            top: 150px;
            left: 100px;
           
        }
        .letrafirma{
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
            position: fixed;
            top: 950px;
            left: 250px; 
        }
        .letrafirmabiometria{
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
            position: fixed;
            top: 987px;
            left: 250px; 
        }
        .sedimento{
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: left;
            color: #000000;
            position: fixed;
            top: 800px;
            left: 40px; 
            border: 1px solid black;
            text-transform: uppercase; 
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
            font-size: 9px;
            border-collapse: collapse;
            text-align: left;
            position: fixed;
            top: 700px;
            left: 50px; 
        }
        .referencia{
            font-size: 10px;
            position: fixed;
            top: 1020px;
            left: 20px; 
        }    
    </style>
</head>
@foreach($arreglo as $item)
    @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->id==9)
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
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}}</td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
        
        <div>
        @foreach($item['categorias'] as $itemp)
                <table class="letratablaorina">
                    <tr>
                    <th align="left" width="40%" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
                    </tr>
                </table>   
        </div>

        <div>
            <table class="resultMaster" width="100%">
                <tr>
                    <th align="left">PARÁMETRO</th><br><br>
                    <th>RESULTADO</th><br><br>
                   <!--  <th>U.M</th><br><br>
                    <th>VALORES DE REFERENCIA</th><br><br> -->
                </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    @foreach($itemp['partidas'] as $child)
                    <tr>
                        <td align="left">{{$child->nombreSubcategoria}}</td>
                        <td>{{$child->descripcionResultado}}</td>
         <!--                <td>{{$child->unidadMedida}}</td>
                        <td>{{$child->vminH}}-{{$child->vmaxH}}</td> -->
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    @endforeach
            @endforeach
            </table>        
        </div>

        @foreach($item['categorias'] as $itemp)
        <div>
            <table class="sedimento" width="100%">
            <tr>
                <th align="left">Sedimento Urinario</th>
            </tr>
            <tr>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
            </tr>
            </table>
        </div>
        @endforeach

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
@endforeach
</div>
</body>
        @elseif($itemp['categoria']->id==1)
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
    @foreach($arreglo as $item)
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
                <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
                <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
                <td style="background-color: #fdddca;">EDAD</td>
                <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
                <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
                <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
            </tr>
            <tr>
                <td style="background-color: #fdddca;">FECHA </td>
                <td >&nbsp;&nbsp;{{$fecha_final}}</td>
                <td style="background-color: #fdddca;">SEXO</td>
                <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
            </tr>
            </table>
    </div>
    <div>
    @foreach($item['categorias'] as $itemp)
      <table class="letratablambiometria">
        <tr>
        <th align="center">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
      </table>   
    </div>  
    <div>
      <table class="letraRESULT1" width="100%">
        <tr>
            <th width="40%" align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
           <!-- <th>VALORES DE REFERENCIA</th><br><br>  --> 
        </tr>
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left" width="30%">{{$child->nombreSubcategoria}}</td>
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
            </tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
       <!--  <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr> -->
        @endforeach
      </table>
@endforeach
    </div>
        <div>

    <div> 
        <table class="notacion" width="100%">
            <tr>
                <th>
                    HEMATOCRITO
                </th>
                <th>
                   &nbsp;
                </th>
                <th>
                    HEMOGLOBINA
                </th>
                <th>
                    &nbsp;
                </th>
                <th>
                    LEUCOCITOS
                </th>
                <th>
                    &nbsp;
                </th>
                <th>
                    LINFOCITOS#
                </th>
                <th>
                    &nbsp;
                </th>
            </tr>    
            <tr>
                <td width="6%">
                    Recien nacido
                </td>
                <td>
                    42-60
                </td>
                <td width="6%">
                    Recien nacido
                </td>
                <td>
                    14.0 - 19.0
                </td>
                <td>
                    Recien nacido
                </td>
                <td>
                    9.0 - 30.0
                </td>
                <td>
                    Recien nacido
                </td>
                <td>
                    2.0 - 7.3
                </td>
            </tr>
            <tr>
                <td>
                    1 mes
                </td>
                <td>
                    29 - 41
                </td>
                <td>
                    1 mes
                </td>
                <td>
                    10.2 - 18.2
                </td>
                <td>
                    2 semanas
                </td>
                <td>
                    5.0 - 21.0
                </td>
                <td>
                    2 semanas
                </td>
                <td>
                    2.0 - 7.3
                </td>
            </tr>
            <tr>
                <td>
                    6 meses
                </td>
                <td>
                    34 - 40
                </td>
                <td>
                    6 meses
                </td>
                <td>
                    10.1 - 12.9
                </td>
                <td>
                    6 meses
                </td>
                <td>
                    6.0 - 17.5
                </td>
                <td>
                    6 meses
                </td>
                <td>
                    2.0 - 7.3
                </td>
            </tr>
            <tr>
                <td>
                    1 año
                </td>
                <td>
                    35 - 42
                </td>
                <td>
                    1 año
                </td>
                <td>
                    10.7 - 13.1
                </td>
                <td>
                    1 año   
                </td>
                <td>
                    6.0 - 17.5
                </td>
                <td>
                    1 año
                </td>
                <td>
                    4.0 - 10.5
                </td>
            </tr>
            <tr>
                <td>
                    5 años
                </td>
                <td>
                    35 - 42
                </td>
                <td>
                    5 años
                </td>
                <td>
                    10.7 - 14.7
                </td>
                <td>
                    4 años 
                </td>
                <td>
                    5.5 - 15.5
                </td>
                <td>
                    4 años
                </td>
                <td>
                    2.0 - 8.0
                </td>
            </tr>
            <tr>
                <td>
                    6 - 11  años
                </td>
                <td>
                    35 - 47
                </td>
                <td>
                    6 - 11 años
                </td>
                <td>
                    11.8 - 14.6
                </td>
                <td>
                    8 años 
                </td>
                <td>
                    4.5 - 13.5
                </td>
                <td>
                    8 años
                </td>
                <td>
                    1.5 - 6.8
                </td>
            </tr>
            <tr>
                <td>
                    12 - 15  años
                </td>
                <td>
                    35 - 48
                </td>
                <td>
                    12 - 15 años
                </td>
                <td>
                    11.7 - 16.0
                </td>
                <td>
                    10 años 
                </td>
                <td>
                    4.5 - 13.5
                </td>
                <td>
                    10 años
                </td>
                <td>
                    1.5 - 6.5
                </td>
            </tr>
            <tr>
                <td>
                    Mayor de 18 años
                </td>
                <td>
                    35.0 - 50.0
                </td>
                <td>
                    Mayor de 18 años
                </td>
                <td>
                    11.5 - 17.5
                </td>
                <td>
                    Mayor de 18 años
                </td>
                <td>
                    4.1 - 11.0
                </td>
                <td>
                    Mayor de 18 años
                </td>
                <td>
                    1.10 - 3.8
                </td>
            </tr>
            <tr>
                <th>
                    CONT.MED.Hgb.CORPUSCULAR
                </th>
                <th>
                   &nbsp;
                </th>
                <th>
                    M.C.V
                </th>
                <th>
                    &nbsp;
                </th>
                <th>
                    NEUTROFILOS #
                </th>
                <th>
                    &nbsp;
                </th>
                <th>
                    ANCHO DIST.ERITROCITARIA
                </th>
                <th>
                    &nbsp;
                </th>
            </tr>
            <tr>
                <td>
                    Recien nacido
                </td>
                <td>
                    ----
                </td>
                <td>
                    Recien nacido
                </td>
                <td>
                    98 - 118
                </td>
                <td>
                    Recien nacido
                </td>
                <td>
                    2.0 - 6.0
                </td>
                <td>
                    Recien nacido
                </td>
                <td>
                    ----
                </td>
            </tr>
            <tr>
                <td>
                    1 mes
                </td>
                <td>
                    29 - 36
                </td>
                <td>
                    1 mes
                </td>
                <td>
                    86 - 124
                </td>
                <td>
                    2 semanas
                </td>
                <td>
                    1.8 - 5.4
                </td>
                <td>
                    1 mes
                </td>
                <td>
                    ----
                </td>
            </tr>
            <tr>
                <td>
                    6 meses
                </td>
                <td>
                    25 - 35
                </td>
                <td>
                    6 meses
                </td>
                <td>
                    74 - 108
                </td>
                <td>
                    6 meses
                </td>
                <td>
                    1.0 - 8.5
                </td>
                <td>
                    6 meses
                </td>
                <td>
                    10.8 - 14.2
                </td>
            </tr>
            <tr>
                <td>
                    1 año
                </td>
                <td>
                    25 - 31
                </td>
                <td>
                    1 año
                </td>
                <td>
                    74 - 86
                </td>
                <td>
                    1 año   
                </td>
                <td>
                    1.5 - 8.5 
                </td>
                <td>
                    1 año
                </td>
                <td>
                    11.6 - 15.6
                </td>
            </tr>
            <tr>
                <td>
                    5 años
                </td>
                <td>
                    25 - 33
                </td>
                <td>
                    5 años
                </td>
                <td>
                    75 - 87
                </td>
                <td>
                    4 años 
                </td>
                <td>
                    1.5 - 8.5
                </td>
                <td>
                    5 años
                </td>
                <td>
                    11.6 - 14.0
                </td>
            </tr>
            <tr>
                <td>
                    6 - 11  años
                </td>
                <td>
                    25 - 33
                </td>
                <td>
                    6 - 11 años
                </td>
                <td>
                    77 - 91
                </td>
                <td>
                    8 años 
                </td>
                <td>
                    1.5 - 8.0
                </td>
                <td>
                    6 - 11 años
                </td>
                <td>
                    11.6 - 14.0
                </td>
            </tr>
            <tr>
                <td>
                    12 - 15  años
                </td>
                <td>
                    25 - 33
                </td>
                <td>
                    12 - 15 años
                </td>
                <td>
                    77 - 95
                </td>
                <td>
                    10 años 
                </td>
                <td>
                    1.8 - 8.0
                </td>
                <td>
                    12 - 15 años
                </td>
                <td>
                    11.6 - 14.0
                </td>
            </tr>
            <tr>
                <td>
                    Mayor de 18 años
                </td>
                <td>
                    31 - 38
                </td>
                <td>
                    Mayor de 18 años
                </td>
                <td>
                    80 - 97
                </td>
                <td>
                    Mayor de 18 años
                </td>
                <td>
                    1.5 - 6.5
                </td>
                <td>
                    Mayor de 18 años
                </td>
                <td>
                    11.6 - 16.0
                </td>
            </tr>            
        </table>
    </div>
    <div>
            <table class="letrafirmabiometria">
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
@elseif($itemp['categoria']->id==17)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      @foreach($item['categorias'] as $itemp)
      <table class="letratablam2">
        <tr>
        <th align="left" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
      </table>   
      </div>  
      <div>
      <table class="letraRESULT" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
   
            <tr>
                <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if($child->descripcionResultado>$child->vmaxH)
                 @if($child->id==121)
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @elseif($child->descripcionResultado<$child->vminH)
                @if($child->id==121)
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @else
                @if($child->id==121)
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @endif
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
</div>
<div>
            <table class="referencia">
                <tr>
                    <td align="left"><b>Valor de referencia:</b></td>
                    <td><b><font color ="#007fff">ALTO</font></b><b>&nbsp;<font color ="#ff0000">BAJO</font></b></td>
                </th>
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
@elseif($itemp['categoria']->id==15)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      @foreach($item['categorias'] as $itemp)
      <table class="letratablam2">
        <tr>
        <th align="left" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
      </table>   
      </div>  
      <div>
      <table class="letraRESULT" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
    
            <tr>
            <td>&nbsp;</td> 
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if(($child->id==74 || $child->id==75) || ($child->id==76 || $child->id==77))
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
            </tr>
            <tr>
            <td>&nbsp;</td>
            </tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
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
@elseif($itemp['categoria']->id==10)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      <table class="letratablamlipidos">
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr> <td>&nbsp;</td></tr>
        @foreach($item['categorias'] as $itemp)           
            <th align="center">{{$itemp['categoria']->nombreCategoria}}</th>
            <td>&nbsp;</td>
        @endforeach
      </table>   
      </div>  
      <div>
      <table class="letraresultElse" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if($child->descripcionResultado>$child->vmaxH)
                @if(($child->id==51 || $child->id==52 || $child->id==53 || $child->id==54))
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @elseif($child->descripcionResultado<$child->vminH)
                @if(($child->id==51 || $child->id==52 || $child->id==53 || $child->id==54))
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @else
                @if(($child->id==51 || $child->id==52 || $child->id==53 || $child->id==54))
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @endif
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
</div>
<div>
            <table class="referencia">
                <tr>
                    <td align="left"><b>Valor de referencia:</b></td>
                    <td><b><font color ="#007fff">ALTO</font></b><b>&nbsp;<font color ="#ff0000">BAJO</font></b></td>
                </th>
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
@elseif($itemp['categoria']->id==11)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      <table class="letratablam2">
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr> <td>&nbsp;</td></tr>
        @foreach($item['categorias'] as $itemp)           
            <th align="center" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
            <td>&nbsp;</td>
        @endforeach
      </table>   
      </div>  
      <div>
      <table class="letraresultElse" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if($child->descripcionResultado>$child->vmaxH)
                @if(($child->id==58))
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}} {{$child->vmaxH}}</td>
                @endif
                @elseif($child->descripcionResultado<$child->vminH)
                @if(($child->id==58))
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}} {{$child->vmaxH}}</td>
                @endif
                @else
                @if(($child->id==58))
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}} {{$child->vmaxH}}</td>
                @endif
                @endif
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
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
@elseif($itemp['categoria']->id==12)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      <table class="letratablamcurva">
        @foreach($item['categorias'] as $itemp)       
        <tr>
        <th align="center">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
        @endforeach
      </table>   
      </div>  
      <div>
      <table class="letraresultElse" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
</div>
<div>
            <table class="referencia">
                <tr>
                    <td align="left"><b>Valor de referencia:</b></td>
                    <td><b><font color ="#007fff">ALTO</font></b><b>&nbsp;<font color ="#ff0000">BAJO</font></b></td>
                </th>
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
@elseif($itemp['categoria']->id==13)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      @foreach($item['categorias'] as $itemp)          
      <table class="letratablamreumatico">
        <tr>
        <th align="center" colspan="4">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
        <tr> <td>&nbsp;</td></tr>
        @endforeach
      </table>   
      </div>  
      <div>
      <table class="letraresultElse" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if($child->descripcionResultado>$child->vmaxH)
                @if(($child->id==65 || $child->id==66 || $child->id==67))
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @elseif($child->descripcionResultado<$child->vminH)
                @if(($child->id==65 || $child->id==66 || $child->id==67))
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @else
                @if(($child->id==65 || $child->id==66 || $child->id==67))
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @endif
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
</div>
<div>
            <table class="referencia">
                <tr>
                    <td align="left"><b>Valor de referencia:</b></td>
                    <td><b><font color ="#007fff">ALTO</font></b><b>&nbsp;<font color ="#ff0000">BAJO</font></b></td>
                </th>
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
@elseif($itemp['categoria']->id==18)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      @foreach($item['categorias'] as $itemp) 
      <table class="letratablam2">
        <tr>
        <th align="left" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
        <tr> <td>&nbsp;</td></tr>
        @endforeach
      </table>   
      </div>  
      <div>
      <table class="letraresultfebriles" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
           
        </tr>
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                <td>{{$child->descripcionResultado}}</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
</div>
<div>

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
@elseif($itemp['categoria']->id==14)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      @foreach($item['categorias'] as $itemp)           
      <table class="letratablam2">
        <tr>
        <th align="center">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
        <tr> <td>&nbsp;</td></tr>
        @endforeach
      </table>   
      </div>  
      <div>
      <table class="letraresultElse" width="100%">
        <tr>
           
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
             
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td rowspan="3">MENOR 5.90% NORMAL NO DIABETICO <br>
                6.0 - 7.0% BUEN CONTROL <br>
                8.0 - 14.0 % MAL CONTROL
                </td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
            <tr><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Glucosa sérica:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
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
     
@elseif($itemp['categoria']->id==16)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
         
      @foreach($item['categorias'] as $itemp)           
      <table class="letratablam2">
        <tr>
            <th>{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
            <td>&nbsp;</td>
        @endforeach
      </table>   
      </div>  
      <div>
      <table class="letraresultElse" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if($child->descripcionResultado>$child->vmaxH)
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @elseif($child->descripcionResultado<$child->vminH)
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
</div>
<div>
            <table class="referencia">
                <tr>
                    <td align="left"><b>Valor de referencia:</b></td>
                    <td><b><font color ="#007fff">ALTO</font></b><b>&nbsp;<font color ="#ff0000">BAJO</font></b></td>
                </th>
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
@elseif($itemp['categoria']->id==23)
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
    
        @foreach($arreglo as $item)
        <div>
            <table class="letratablamembarazo">
                <tr>
                    <td>INFORMACIÓN DEL PACIENTE</td>
                </tr>
            </table>
        </div>
        <div>
        <table class="datosembarazo" width="100%" style="border-collapse: collapse;  color: #e66900;">
          <tr>
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
         
      @foreach($item['categorias'] as $itemp)           
      <table class="letratablam2embarazo">
        <tr>
            <th>{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
            <td>&nbsp;</td>
        @endforeach
      </table>   
      </div>
      
      <div>
      <table class="letraresultElseembarazo" width="100%">
       
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="center">{{$child->nombreSubcategoria}}</td>
                
            </tr>
            <tr>
               <td>&nbsp;</td>
            </tr>
            <tr>
                <td><b>{{$child->descripcionResultado}}</b> </td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
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
@elseif($itemp['categoria']->id==26)

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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      <table class="letratablam2glucosa">
        <tr>
            <td>RESULTADOS DE LABORATORIO</td>
        </tr>
        <tr> <td>&nbsp;</td></tr>
        @foreach($item['categorias'] as $itemp)           
            <th align="center" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
            <td>&nbsp;</td>
        @endforeach
      </table>   
      </div>  
      <div>
      <table class="letraresultElseglucosa" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if($child->descripcionResultado>$child->vmaxH)
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @elseif($child->descripcionResultado<$child->vminH)
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
</div>
<div>
            <table class="referencia">
                <tr>
                    <td align="left"><b>Valor de referencia:</b></td>
                    <td><b><font color ="#007fff">ALTO</font></b><b>&nbsp;<font color ="#ff0000">BAJO</font></b></td>
                </th>
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

@elseif($itemp['categoria']->id==24)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      @foreach($item['categorias'] as $itemp)
      <table class="letratablam2tgotgp">
        <tr>
        <th align="left" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
      </table>   
      </div>  
      <div>
      <table class="letraRESULTtgotgp" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
    
            <tr>
            <td>&nbsp;</td> 
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if(($child->id==143 || $child->id==144))
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
            </tr>
            <tr>
            <td>&nbsp;</td>
            </tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
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
@elseif($itemp['categoria']->id==25)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      @foreach($item['categorias'] as $itemp)
      <table class="letratablam2bilirubina">
        <tr>
        <th align="left" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
      </table>   
      </div>  
      <div>
      <table class="letraRESULTbilirrubina" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
    
            <tr>
            <td>&nbsp;</td> 
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if(($child->id==145 || $child->id==146))
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
            </tr>
            <tr>
            <td>&nbsp;</td>
            </tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
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
@elseif($itemp['categoria']->id==27)
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      @foreach($item['categorias'] as $itemp)
      <table class="letratablam2treselementos">
        <tr>
        <th align="left" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
        </tr>
      </table>   
      </div>  
      <div>
      <table class="letraRESULTtreselementos" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
   
            <tr>
                <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if($child->descripcionResultado>$child->vmaxH)
                 @if($child->id==121)
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @elseif($child->descripcionResultado<$child->vminH)
                @if($child->id==121)
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @else
                @if($child->id==121)
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>Hasta {{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
                @endif
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
</div>
<div>
            <table class="referencia">
                <tr>
                    <td align="left"><b>Valor de referencia:</b></td>
                    <td><b><font color ="#007fff">ALTO</font></b><b>&nbsp;<font color ="#ff0000">BAJO</font></b></td>
                </th>
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
       
    @else
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
    
        @foreach($arreglo as $item)
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
            <td style="background-color: #fdddca;" width="20%">NOMBRE</td>
            <td  width="110%">&nbsp;&nbsp;{{$item['registro']->nombreConcatenado}} </td>
            <td style="background-color: #fdddca;">EDAD</td>
            <td  width="30%">&nbsp;&nbsp;{{$item['registro']->edad }} años </td>
            <td style="background-color: #fdddca;"  width="16%">NACIMIENTO</td>
            <td width="80%">&nbsp;&nbsp;{{$fecha_finalc}}</td>
          </tr>
          <tr>
            <td style="background-color: #fdddca;">FECHA </td>
            <td >&nbsp;&nbsp;{{$fecha_final}}</td>
            <td style="background-color: #fdddca;">SEXO</td>
            <td>&nbsp;&nbsp;{{$item['registro']->sexo}}</td>
          </tr>
        </table>
        </div>
      <div>
      <table class="letratablam2">
        <tr>
            <td>RESULTADOS DE LABORATORIO</td>
        </tr>
        <tr> <td>&nbsp;</td></tr>
        @foreach($item['categorias'] as $itemp)           
            <th align="left" colspan="2">{{$itemp['categoria']->nombreCategoria}}</th>
            <td>&nbsp;</td>
        @endforeach
      </table>   
      </div>  
      <div>
      <table class="letraresultElse" width="100%">
        <tr>
            <th align="left">EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
            @foreach($item['categorias'] as $itemp)
            <tr>
               <td>&nbsp;</td>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if($child->descripcionResultado>$child->vmaxH)
                <td><font color ="#007fff">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @elseif($child->descripcionResultado<$child->vminH)
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @else
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
            </tr>
            <tr><td>&nbsp;</td></tr>
            @endforeach
    @endforeach
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr><td></td></tr>
        @foreach($item['categorias'] as $itemp)
        @if($itemp['categoria']->observaciones==null)
        <tr>
            <td>&nbsp;</td>
        </tr>
        @else
        <tr>
            <th>Observaciones:</th>
            <td colspan="3"><pre>{{$itemp['categoria']->observaciones}}</pre></td>
        </tr>
        <tr><td></td></tr>
        @endif
        @endforeach
      </table>
@endforeach
</div>
<div>
            <table class="referencia">
                <tr>
                    <td align="left"><b>Valor de referencia:</b></td>
                    <td><b><font color ="#007fff">ALTO</font></b><b>&nbsp;<font color ="#ff0000">BAJO</font></b></td>
                </th>
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
        @endif
    @endforeach    
@endforeach

</html>