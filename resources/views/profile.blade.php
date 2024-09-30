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
            margin-left: 20px;
            border-bottom: 1px solid #ccc;
        }
        b{
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
        <div><b>ID:</b>{{$profile->id}}</div>
        <div><b>Name:</b>{{$profile->name}}</div>
        <div><b>Email:</b>{{$profile->email}}</div>
        <div><b>Birthdate:</b>{{$profile->birthdate}}</div>
        <div><b>Home Address:</b>{{$profile->home_address}}</div>
        <div><b>Contact Number:</b>{{$profile->contact_number}}</div>
</body>
</html>
