<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html, body{
            margin: 0;
            padding: 0;
        }
        header{
            background-color: rgb(8, 105, 141);
            padding: 10px;
            text-align: center;
            color: white;
        }
        div{
            font-size: 20px;
            margin-bottom: 20px;
            margin-left: 10px;;
            border-bottom: 1px solid #ccc;
        }
        b{
            margin-bottom: 10px;
            margin-right: 5px;
            font-size: 22px;
        }
        hr{
            border: 1px solid #ccc;
            margin: 28px 0;
        }
    </style>
</head>
<body>
    <header>
    <h1>Profile</h1>
    </header>

    @foreach ($boss as $allProfiles)
    <main>
        <div><b>ID:</b>{{$allProfiles->id}}</div>
        <div><b>Name:</b>{{$allProfiles->name}}</div>
        <div><b>Email:</b>{{$allProfiles->email}}</div>
        <div><b>Birthdate:</b>{{$allProfiles->birthdate}}</div>
        <div><b>Home Address:</b>{{$allProfiles->home_address}}</div>
        <div><b>Contact Number:</b>{{$allProfiles->contact_number}}</div>
        <hr>
    </main>

    @endforeach
</body>
</html>
