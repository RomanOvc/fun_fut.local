@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admins</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <button><a href="{{route('home.create')}}">create</a></button>
            <div class="container">
                <div class="row">
                    <div class="col-md-9  col-md-push-12 col-xs-12">


                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$blog->name_blog}}</td>
                                    <td>{{$blog->content}}</td>
                                    <td>{{$blog->name}}</td>
                                    <td>{{$blog->photo_m}}</td>
                                    <td>{{   Form::open(['route' => ['home.destroy', $blog->id],'method'=>'delete']) }}
                                        {{  Form::submit('Delete')}}
                                        {{  Form::close()}}
                                    </td>
                                    <td>




                                        <a class="btn btn-primary" href="{{ route('home.edit',$blog->id) }}">Edit</a>

                                    </td>
                                </tr>
                            @endforeach

                            <button><a href="{{route('home.create')}}">create</a></button>

                        </table>
                    </div>

                </div>


    </div>
</div>
@endsection
