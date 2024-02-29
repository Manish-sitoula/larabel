<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        body {
            margin: 10px;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding-left: 150px; /* Increased left padding to center the content */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 10px; /* Decreased button size */
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }

        .delete-button {
            background-color: #ff0000;
            color: white;
            padding: 4px 8px; /* Decreased button size */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .delete-button:hover {
            background-color: #cc0000;
        }

        .message {
            margin-top: 10px;
            padding: 10px;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        .success {
            background-color: chartreuse;
        }

        .error {
            background-color: red;
        }

        tbody tr:hover {
            background-color: #f2f2f2;
        }

        td a {
            margin-right: 8px;
            color: #ffffff;
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    @if (session('message'))
        <div class="message success">
            {{ session('message') }}
        </div>
    @endif
    @if (session('error'))
        <div class="message error">
            {{ session('error') }}
        </div>
    @endif
    <h1>Student List</h1>
    <a href="{{route('students.create')}}">Add Students</a>
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Actions</th>
                <!-- Add other columns as needed -->
            </tr>
        </thead>
        <tbody>
            @php 
                $i=1;
            @endphp
            @foreach ($students as $student)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href="{{route('students.edit',$student->id)}}">Edit</a>
                        <a class="delete-button" href="{{route('students.delete',$student->id)}}">Delete</a>
                    </td>
                    <!-- Add other columns as needed -->
                </tr>
                @php $i++; @endphp
            @endforeach
        </tbody>
    </table>

</body>
</html>
