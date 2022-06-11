<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Page</title>
</head>
<body>

    <center>
        <h1>This is Dashboard Page!</h1>
    </center>

    @extends('layouts.afterlogin')
    @section('content')

    <br>
        <center>
            <div>
                <table border="1">
                    <tr>
                        <th colspan="3">User Details</th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($clients as $cl)
    
                    <tr>
                        <td>{{$cl->id}}</td>
                        <td><a href="{{route('user.details', ['id'=>$cl->id])}}">{{$cl->name}}</a></td>
                        <td>{{$cl->email}}</td>
                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </center>
    @endsection
    
</body>
</html>