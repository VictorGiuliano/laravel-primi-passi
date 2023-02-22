<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Credits</title>
</head>
<body>
    <ul>
        @foreach ($credit as $credits)
         <li>{{$credit}}</li>   
        @endforeach
    </ul>
</body>
</html>