<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
</head>
<body>


{{Form::open(['route'=>'blog.index'])}}
<div class="form-group">
    {{Form::label('name_blog')}}
    {{Form::text('name_blog',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('content')}}
    {{Form::text('content',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('photo_m')}}
    {{Form::text('photo_m',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::submit('create',['class'=>'btn btn-primary'])}}
</div>
{{Form::close()}}
</body>
</html>