<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div>
    <table>
        <tr>
            <td>
            <img src="img\logo5.png" width="500" height="90"class="img" alignt="left" style="padding-top: 5px;">
            </td>
        </tr>
    </table>
   </div>

   <div>
    <table style="padding-top: 200px;" align="right">
        @foreach($paciente as $item)
        <tr>
            <td>
                Paciente: {{$item->nombreConcatenado}}
            </td>
        </tr>
        @endforeach
    </table>
   </div>
</body>
</html>