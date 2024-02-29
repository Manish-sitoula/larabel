<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        body {
            margin: 20px;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin-top: 20px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            display: block;
        }

        button:hover {
            background-color: #45a049;
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
    </style>
</head>
<body>

    <h1>Insert Student Data</h1>
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
    @if ($errors->any())
        <div class="message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('students.store')}}">            
        {{csrf_field()}}
        <input type="text" placeholder="Enter name" name="name">
        <input type="email" placeholder="Enter email" name="email">
        <input type="text" placeholder="Enter address" name="address">
        <input type="text" placeholder="Enter phone" name="phone">
        <textarea placeholder="Enter biodata" name="biodata"></textarea>
        <button type="submit">Insert Student</button>
    </form>

</body>
</html>
