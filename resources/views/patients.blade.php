<!DOCTYPE html>
<html>
    <head>
        <title>Patients</title>
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
                <th>sex</th>
                <th>date_of_birth</th>
                <th>home_address</th>
                <th>delete</th>
            </tr>
                @for ($i = 0; $i < count($patients); $i++)
                    <tr>
                    <td><a href="/patients/id={{ $patients[$i]['id'] }}">{{ $patients[$i]['id'] }}</a></td>
                    <td>{{ $patients[$i]['name'] }}</td>
                    <td>{{ $patients[$i]['sex'] }}</td>
                    <td>{{ $patients[$i]['date_of_birth'] }}</td>
                    <td>{{ $patients[$i]['home_address'] }}</td>
                    <td>
                        <a href="/patients/delete/id={{ $patients[$i]['id'] }}">
                            <button>Delete</button>
                        </a>
                    </td>
                @endfor
            </tr>
        </table>
    <h3>Add Patient</h3>
    <form method="post">
        @csrf
        <input type="hidden" value="id"/>
        <p>name: <input type="text" name="name"/></p>
        <select name="sex">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <p>date of birth: <input type="date" name="date_of_birth"/></p>
        <p>home address: <input type="text" name="home_address"/></p>
        <input type="submit" value="add patient"/>
    </form>
    </body>
</html>
