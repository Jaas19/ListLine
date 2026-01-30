<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
    <style>
        @page {
            margin: 2.5cm;
        }
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 11px;
            line-height: 1.4;
        }
        footer {
            position: fixed;
            bottom: -1cm;
        }
    </style>
</head>
<body>
    <footer>
        Fecha: {{ now() }} <br>
        Emitido por: {{ $user->name }}
    </footer>
    <table style="width: 100%; border: none; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <td style="width: 50%; text-align: left; border: none; vertical-align: middle;">
                <img src="images/ListLineClean.png" alt="" style="width: 100px">
            </td>

            <td style="width: 50%; text-align: right; border: none; vertical-align: middle;">
                <strong>Centro de Apuestas el Manantial</strong><br>
                RIF: V-07008500-0 <br>
                Teléfono: 0245-5520573 <br>
                <em>@hotmail.com</em>
            </td>

        </tr>
    </table>



    <div style="text-align: center; font-size: 15px; margin-top: 15px; margin-bottom: 5px;">Reporte {{ $period }}
        @if ($startDate && $endDate)
                @if ($startDate->format('Y-m-d') != $endDate->format('Y-m-d'))
                    {{ $startDate->format('d/m/Y') }} - {{ $endDate->format('d/m/Y') }}
                @else
                    {{ $startDate->format('d/m/Y') }}
                @endif
        @endif
    </div>
    @foreach ($users as $list)
        <div style="text-align: center; font-size: 20px; margin-top: 15px; margin-bottom: 5px;">{{ $list->name }}</div>

        <table style="border-collapse: collapse; margin: 0 auto; table-layout: fixed; width: 100%;">
            <thead>
                <tr style="border: 1px black solid; background-color: #f0f0f0;">
                    <th style="border: 1px black solid; padding: 5px; width: 15%;"></th>
                    @foreach ($programs as $program)
                        <th style="border: 1px black solid; padding: 5px; word-wrap: break-word;">{{ $program->name }}</th>
                    @endforeach

                    <th style="border: 1px black solid; padding: 5px;">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        @php $total = 0; @endphp

                        <td style="border: 1px black solid; padding: 5px; font-weight: bold; word-wrap: break-word;">{{ $type->name }}</td>

                        @foreach($programs as $program)
                            @php
                                $value = $totals[$list->id][$program->id][$type->id] ?? 0;
                                $total += $value;
                            @endphp

                            <td style="border: 1px black solid; padding: 5px; text-align: center;">
                                {{ $value }}
                            </td>
                        @endforeach

                        <td style="border: 1px black solid; padding: 5px; text-align: center; font-weight: bold; background-color: #f9f9f9;">
                            {{ $total }}
                        </td>
                     </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    @endforeach
</body>
</html>
