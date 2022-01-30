<!DOCTYPE html>
<html>
    <head>
        <title>med</title>
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
    <br>
    <a href="/medicine">
        <button>Back</button>
    </a>
    <br>
    <br>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>side_effect</th>
        </tr>
        <tr>
            <td>{{ $med['id'] }}</td>
            <td>{{ $med['name'] }}</td>
            <td>{{ $med['description'] }}</td>
            <td>{{ $med['side_effect'] }}</td>
        </tr>
    </table>
    <h3>Edit med</h3>
    <form method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $med['id'] }}"/>
        <p>name: <input type="text" name="name" value="{{ $med['name'] }}"/></p>
        <p>description: <input type="text" name="description" value="{{ $med['description'] }}"/></p>
        <p>side_effect: <input type="text" name="side_effect" value="{{ $med['side_effect'] }}"/></p>
        <input type="submit" value="Edit med"/>
    </form>
    </body>
</html>
