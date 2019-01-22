<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<button><a href="{{route('blog.create')}}">create</a></button>
<div class="container">
    <div class="row">
        <div class="col-md-9  col-md-push-12 col-xs-12">
            <div class="container">
                <div class="row">
                    <br>
                    <div class="card-columns">
                        @foreach($blogs as $blog)
                            <div class="card">
                                <img class="card-img-top" src="{{$blog->photo_m}}" alt="Card image cap">
                                <div class="card-body">
                                    <a href=""><h5 class="card-title">{{$blog->name_blog}}</h5></a>
                                </div>
                                <div class="card-footer">
                                    <ul>
                                        <li>
                                            <small class="text-muted">data</small>
                                        </li>
                                        <li>
                                            <small class="text-muted">{{$blog->name}}</small>
                                        </li>
                                    </ul>
                                    {{  Form::open(['route' => ['blog.destroy', $blog->id],'method'=>'delete']) }}
                                    {{  Form::submit('Delete')}}
                                    {{  Form::close()}}
                                    <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</table>
{{--@foreach($blogs as $blog)--}}
{{--<div class="card-deck">--}}
{{--<div class="card">--}}
{{--<img class="card-img-top" src="..." alt="Card image cap">--}}
{{--<div class="card-body">--}}
{{--<h5 class="card-title">{{$blog->name_blog}}</h5>--}}
{{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
{{--</div>--}}
{{--<div class="card-footer">--}}
{{--<small class="text-muted">Last updated 3 mins ago</small>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card">--}}
{{--<img class="card-img-top" src="..." alt="Card image cap">--}}
{{--<div class="card-body">--}}
{{--<h5 class="card-title">Название карточки</h5>--}}
{{--<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>--}}
{{--</div>--}}
{{--<div class="card-footer">--}}
{{--<small class="text-muted">Last updated 3 mins ago</small>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card">--}}
{{--<img class="card-img-top" src="..." alt="Card image cap">--}}
{{--<div class="card-body">--}}
{{--<h5 class="card-title">Название карточки</h5>--}}
{{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>--}}
{{--</div>--}}
{{--<div class="card-footer">--}}
{{--<small class="text-muted">Last updated 3 mins ago</small>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}
</body>
</html>