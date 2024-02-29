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

    <h1>Edit and update Student Data</h1>
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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{route('students.store')}}">
        {{csrf_field()}}
        <input type="text" placeholder="Enter name" value="{{$students->name}}" name="name">
        <input type="email" placeholder="Enter email" name="email">
        <input type="text" placeholder="Enter address" name="address">
        <input type="text" placeholder="Enter phone" name="phone">
        <textarea placeholder="Enter biodata" name="biodata"></textarea>
        <button type="submit">update student</button>
    </form>

</body>
</html>
