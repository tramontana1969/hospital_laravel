<!DOCTYPE html>
<html>
<head>
    <title>Patient</title>
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
<a href="/patients"><button>Back</button></a>
<br>
<br>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>sex</th>
        <th>date_of_birth</th>
        <th>home_address</th>
    </tr>
    <tr>
        <td>{{ $patient['id'] }}</td>
        <td>{{ $patient['name'] }}</td>
        <td>{{ $patient['sex'] }}</td>
        <td>{{ $patient['date_of_birth'] }}</td>
        <td>{{ $patient['home_address'] }}</td>
    </tr>
</table>
</body>
</html>
