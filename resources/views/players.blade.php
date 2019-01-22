<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
</head>
<body>
<button><a href="{{ route('addPlayer') }}">add</a></button>
<button><a href="{{ route('editPlayer') }}">add</a></button>
<table border="1">
<tr>
    <td>id</td>
    <td>username</td>
    <td>message</td>

</tr>
    @foreach($players as $player)
        <tr>
            <td>{{$player->id}}</td>
            <td>{{$player->username}}</td>
            <td>{{$player->message}}</td>
            <td>
            {!!   Form::open(['action' => ['PlayerController@destroy', $player->id],'method'=>'Post','value'=> $player->id]) !!}
            {{Form::hidden('_method','DELETE')}}
            {{  Form::submit('Delete')}}
            {!!  Form::close()!!}
                <!--<a href="players/$player->id">delete</a>-->
            <td><button>refresh</button></td>
        </tr>
        @endforeach
</table>
</body>
</html>