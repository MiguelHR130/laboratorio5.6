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
                text-align: left;
                font-weight: bold;
                padding-left: 10px;
                color: #000000;
            }
        .letraRESULT{
               font-size: 14px;
               font-family: Arial, Helvetica, sans-serif;
               text-align: center;
               padding-left: 10px;
               color: #000000;
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
    
        @foreach($arreglo as $item)
        <table  style="padding-top: -100px;" align="center">
          <tr>
            <td class="letratablam">INFORMACIÓN DEL PACIENTE</td>
          </tr>
        </table>
        <table width="100%" align="center" style="border-collapse: collapse;  padding-top: 10px; padding-right: -10px;  color: #e66900;">
          <tr>
            <td style="background-color: #ffc890;">NOMBRE</td>
            <td >{{$item['registro']->nombreConcatenado}}</td>
            <td style="background-color: #ffc890;">EDAD</td>
            <td >{{$item['registro']->edad}}</td>
          </tr>
          <tr>
            <td style="background-color: #ffc890;">FECHA DE MUESTRA</td>
            <td>{{$item['registro']->fecha}}</td>
            <td style="background-color: #ffc890;">SEXO</td>
            <td>{{$item['registro']->sexo}}</td>
          </tr>
        </table>
      </table>

      <table align="center" class="letratablam" style="padding-top: 30px;">
        <tr>
            <td>RESULTADOS DE LABORATORIO</td>
        </tr>
      </table>   

      <table width="100%" align="left" class="letraRESULT" style="padding-top: 10px;">
        <tr>
            <th>EXAMEN</th><br><br>
            <th>RESULTADO</th><br><br>
            <th>U.M</th><br><br>
            <th>VALORES DE REFERENCIA</th><br><br>
        </tr>
    @foreach($item['categorias'] as $itemp)
            <tr>
                <th align="left">{{$itemp['categoria']->nombreCategoria}}</th>
            </tr>
            @foreach($itemp['partidas'] as $child)
            <tr>
                <td align="left">{{$child->nombreSubcategoria}}</td>
                @if($child->descripcionResultado>$child->vmaxH||$child->descripcionResultado<$child->vminH)
                <td><font color ="#ff0000">{{$child->descripcionResultado}}</font></td>
                <td>{{$child->unidadMedida}}</td>
                <td><font color ="#ff0000">{{$child->vminH}}-{{$child->vmaxH}}</font></td>
                @elseif($child->descripcionResultado<$child->vmaxH||$child->descripcionResultado>$child->vminH)
                <td>{{$child->descripcionResultado}}</td>
                <td>{{$child->unidadMedida}}</td>
                <td>{{$child->vminH}}-{{$child->vmaxH}}</td>
                @endif
            </tr>
            @endforeach
    @endforeach
      </table>
@endforeach
            <div>
            <table align="center" style="padding-top: 475px;padding-left:40px">
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