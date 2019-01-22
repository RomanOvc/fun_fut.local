<html>
<head>

</head>
<body>
<table>
    <tr>
        <td>username</td>
        <td>message</td>
    </tr>
    @foreach($players as $player)
    <tr>
        <td>{{$player->username}}</td>
        <td>{{$player->message}}</td>
    </tr>
        @endforeach
</table>
</body>
</html>