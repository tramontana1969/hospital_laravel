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
<br>
<a href="/prescribed"><button>Back</button></a>
<br>
<br>
<table>
    <tr>
        <th>id</th>
        <th>way of using</th>
        <th>medicine_id</th>
        <th>examine_id</th>
    </tr>
    <tr>
        <td>{{ $pres_med['id'] }}</td>
        <td>{{ $pres_med['way_of_using'] }}</td>
        <td><a href="/medicine/id={{ $pres_med['medicine_id'] }}">{{ $pres_med['medicine_id'] }}</a></td>
        <td><a href="/examine/id={{ $pres_med['examine_id'] }}">{{ $pres_med['examine_id'] }}</a></td>
    </tr>
</table>
<h3>Edit data</h3>
<form method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $pres_med['id'] }}"/>
    <p>way of using: <input type="text" name="way_of_using" value="{{ $pres_med['way_of_using'] }}"/></p>
    <p>medicine_id
        <select name="medicine_id">
            <option selected value="{{ $one_med['id'] }}">{{ $one_med['name'] }}</option>
            @foreach($other_meds as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
    </p>
    <p>examine_id:
        <select name="examine_id">
            <option selected value="{{ $one_exam['id'] }}">{{ $one_exam['diagnosis'] }}, {{ $one_exam['date'] }}</option>
            @foreach($other_exams as $data)
                <option value="{{ $data->id }}">{{ $data->diagnosis }}, {{ $data->date }}</option>
            @endforeach
        </select>
    </p>
    <input type="submit" value="Add data"/>
</form>
</body>
</html>
