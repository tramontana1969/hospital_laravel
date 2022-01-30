<!DOCTYPE html>
<html>
    <head>
        <title>Examine</title>
    </head>
    <body>
    <style>
        TABLE {
            width: 900px;
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
            <th>diagnosis</th>
            <th>patient_id</th>
            <th>date</th>
            <th>place</th>
            <th>symptoms</th>
            <th>medical_prescription</th>
            <th>doctors_name</th>
        </tr>
        @for($i = 0; $i < count($examine); $i++)
            <tr>
                <td><a href="examine/id={{ $examine[$i]['id'] }}">{{ $examine[$i]['id'] }}</a></td>
                <td>{{ $examine[$i]['diagnosis'] }}</td>
                <td><a href="/patients/id={{ $examine[$i]['patient_id'] }}">{{ $examine[$i]['patient_id'] }}</a></td>
                <td>{{ $examine[$i]['date'] }}</td>
                <td>{{ $examine[$i]['place'] }}</td>
                <td>{{ $examine[$i]['symptoms'] }}</td>
                <td>{{ $examine[$i]['medical_prescription'] }}</td>
                <td>{{ $examine[$i]['doctors_name'] }}</td>
            </tr>
        @endfor
    </table>
        <h3>Add Examine</h3>
    </table>
    <form method="post">
        @csrf
        <input type="hidden" name="id"/>
        <p>diagnosis: <input type="text" name="diagnosis"/></p>
        <p>patient
            <select name="patient_id">
                @for($i = 0; $i < count($patients); $i++)
                    <option value="{{ $patients[$i]['id'] }}">{{ $patients[$i]['name'] }}</option>
                @endfor
            </select>
        </p>
        <p>date: <input type="date" name="date"/></p>
        <p>place: <input type="text" name="place"/></p>
        <p>symptoms: <input type="text" name="symptoms"/></p>
        <p>medical_prescription: <input type="text" name="medical_prescription"/></p>
        <p>doctors_name: <input type="text" name="doctors_name"/></p>
        <input type="submit" value="Add examine"/>
    </form>
    </body>
</html>
