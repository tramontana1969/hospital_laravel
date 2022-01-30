<!DOCTYPE html>
<html>
    <head>
        <title>Medicine</title>
    </head>
    <body>
    <style>
        TABLE {
            width: 800px;
            border-collapse: collapse;
        }
        TD, TH {
            padding: 3px;
            border: 1px solid black;
        }
        TH {
            background: #b0e0e6;
        }
    </style>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>side_effect</th>
        </tr>
        @for($i = 0; $i < count($meds); $i++)
            <tr>
                <td>{{ $meds[$i]['id'] }}</td>
                <td>{{ $meds[$i]['name'] }}</td>
                <td>{{ $meds[$i]['description'] }}</td>
                <td>{{ $meds[$i]['side_effect'] }}</td>
            </tr>
        @endfor
    </table>
    </body>
</html>
