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
<h3>Edit Patient</h3>
<form method="post">
    @csrf
    <input type="hidden" name="name" value="{{ $patient['id'] }}"/>
    <p>name <input type="text" name="name" value="{{ $patient['name'] }}"/> </p>
    <select name="sex">
        @if($patient['sex'] == "M")
            <option selected value="M">M</option>
            <option value="F">F</option>
        @else
            <option value="M">M</option>
            <option selected value="F">F</option>
        @endif
    </select>
    <p>date of birth <input type="date" name="date_of_birth" value="{{ $patient['date_of_birth'] }}"/> </p>
    <p>home address <input type="text" name="home_address" value="{{ $patient['home_address'] }}"/> </p>
    <input type="submit" value="Edit patient"/>
</form>
</body>
</html>
