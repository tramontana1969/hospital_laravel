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
    <br>
    <a href="/examine"><button>Back</button></a>
    <br>
    <br>
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
        <tr>
            <td>{{ $exam['id'] }}</td>
            <td>{{ $exam['diagnosis'] }}</td>
            <td>{{ $exam['patient_id'] }}</td>
            <td>{{ $exam['date'] }}</td>
            <td>{{ $exam['place'] }}</td>
            <td>{{ $exam['symptoms'] }}</td>
            <td>{{ $exam['medical_prescription'] }}</td>
            <td>{{ $exam['doctors_name'] }}</td>
        </tr>
    </table>
    </body>
</html>
