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
    <form method="post">
        @csrf
        <input type="hidden" name="id" value="id"/>
        <p>diagnosis: <input type="text" name="diagnosis" value="{{ $exam['diagnosis'] }}"/></p>
        <p>patient
            <select name="patient_id">
                <option selected value="{{ $one_patient['id'] }}">{{ $one_patient['name'] }}</option>
                @foreach($patients as $other)
                    <option value="{{ $other->id }}">{{ $other->name }}</option>
                @endforeach
            </select>
        </p>
        <p>date: <input type="date" name="date" value="{{ $exam['date'] }}"/></p>
        <p>place: <input type="text" name="place" value="{{ $exam['place'] }}"/></p>
        <p>symptoms: <input type="text" name="symptoms" value="{{ $exam['symptoms'] }}"/></p>
        <p>medical_prescription: <input type="text" name="medical_prescription" value="{{ $exam['medical_prescription'] }}"/></p>
        <p>doctors_name: <input type="text" name="doctors_name" value="{{ $exam['doctors_name'] }}"/></p>
        <input type="submit" value="Edit Examine"/>
    </form>
    </body>
</html>
