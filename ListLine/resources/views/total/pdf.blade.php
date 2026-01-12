<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
</head>
<body>
    <div style="text-align: center">
        <img src="images/ListLineClean.png" alt="" style="width: 100px; margin: 0 auto;">
    </div>

    <div style="text-align: center; font-size: 20px; margin-top: 15px; margin-bottom: 5px;">Reporte {{ $date ?? now()->format('d/m/Y') }}</div>


    @foreach ($users as $list)
        <div style="text-align: center; font-size: 20px; margin-top: 15px; margin-bottom: 5px;">{{ $list->name }}</div>
        <table style="border-collapse: collapse; margin: 0 auto">
            <tr style="border: 1px black solid">
                @foreach ($programs as $program)
                    <th style="border: 1px black solid; padding-right: 5px; padding-left: 5px;">{{ $program->name }}</th>
                @endforeach
            </tr>
            @foreach ($types as $type)
                <tr>
                    @foreach($programs as $program)
                        <td style="border: 1px black solid; padding-right: 5px; padding-left: 5px;">{{ $type->name }}: {{ $totals[$list->id][$program->id][$type->id] ?? 0 }}</td>
                    @endforeach
                 </tr>
            @endforeach
        </table>
    @endforeach
</body>
</html>
