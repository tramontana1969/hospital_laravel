<!DOCTYPE html>
<html>
    <head>
        <title>Prescribed</title>
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
            <th>way of using</th>
            <th>medicine_id</th>
            <th>examine_id</th>
        </tr>
        @for ($i = 0; $i < count($pres_meds); $i++)
            <tr>
                <td><a href="/prescribed/id={{ $pres_meds[$i]['id'] }}">{{ $pres_meds[$i]['id'] }}</a></td></td>
                <td>{{ $pres_meds[$i]['way_of_using'] }}</td>
                <td><a href="/medicine/id={{ $pres_meds[$i]['medicine_id'] }}">{{ $pres_meds[$i]['medicine_id'] }}</a></td>
                <td><a href="/examine/id={{ $pres_meds[$i]['examine_id'] }}">{{ $pres_meds[$i]['examine_id'] }}</a></td>
            </tr>
        @endfor
    </table>
    <h3>Add data</h3>
    <form method="post">
        @csrf
        <p>way of using: <input type="text" name="way_of_using"/></p>
        <p>medicine_id
        <select name="medicine_id">
            @for($i = 0; $i < count($meds); $i++)
                <option value="{{ $meds[$i]['id'] }}">{{ $meds[$i]['name'] }}</option>
            @endfor
        </select>
        </p>
        <p>examine_id:
            <select name="examine_id">
                @for($i = 0; $i < count($exams); $i++)
                    <option value="{{ $exams[$i]['id'] }}">{{ $exams[$i]['diagnosis'] }}, {{ $exams[$i]['date'] }}</option>
                @endfor
            </select>
        </p>
        <input type="submit" value="Add data"/>
    </form>
    </body>
</html>
