{{-- @foreach($students as $student)
   Name: {{$student ->name}}
   email: {{$student ->email}}
   Biodata: {{$student ->biodata}}
   Address: {{$student ->Address}}
   phone: {{$student ->phone}}

@endforeach --}}


<!-- resources/views/students/index.blade.php -->

<!-- resources/views/students/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        body {
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    @if (session('message'))
        <div style="background-color:chartreuse;padding:5px; color:white">
            {{ session('message') }}
        </div>
    @endif
    @if (session('error'))
        <div style="background-color:red;padding:5px; color:white">
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
                        <a href="#">Edit</a>
                        <a href="{{route('students.delete',$student->id)}}">Delete</a>
                    </td>
                    <!-- Add other columns as needed -->
                </tr>
                @php $i++; @endphp
            @endforeach
        </tbody>
    </table>

</body>
</html>
