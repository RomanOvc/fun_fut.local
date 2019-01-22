<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
</head>
<body>


{{Form::open(['route'=>'addPlayer'])}}
<div class="form-group">
{{Form::label('username')}}
{{Form::text('username',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('message')}}
    {{Form::text('message',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::submit('create',['class'=>'btn btn-primary'])}}
</div>
{{Form::open()}}
</body>
</html>