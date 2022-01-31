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
            <th>delete</th>
        </tr>
        @for($i = 0; $i < count($meds); $i++)
            <tr>
                <td><a href="/medicine/id={{ $meds[$i]['id'] }}">{{ $meds[$i]['id'] }}</a></td>
                <td>{{ $meds[$i]['name'] }}</td>
                <td>{{ $meds[$i]['description'] }}</td>
                <td>{{ $meds[$i]['side_effect'] }}</td>
                <td>
                    <a href="/medicine/delete/id={{ $meds[$i]['id'] }}">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
        @endfor
    </table>
    <h3>Add Medicine</h3>
    <form method="post">
        @csrf
        <input type="hidden" name="id"/>
        <p>name: <input type="text" name="name"/></p>
        <p>description: <input type="text" name="description"/></p>
        <p>side_effect: <input type="text" name="side_effect"/></p>
        <input type="submit" value="Add medicine"/>
    </form>
    </body>
</html>
