@extends('layouts.app')
@section('title', 'つぶやき')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                
                <form class="card mb-3 p-3" action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">

 

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body disabledTextInput">本文</label>
                        <div class="col-md-10">
                            <input class="form-control" name="body" type="text">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    {{ csrf_field() }}
                    <div class="text-right"><input type="submit" class="btn btn-light" value="つぶやく"></div>
                </form>
                <div class="card">
                    @foreach($posts as $post)
                    <div class="card flex justify-between p-3">
                        @foreach($users as $user)
                            @if($post->user_id == $user->id)
                            <div>{{$user->name}}</div>
                            <div class="text-right">{{$post->created_at}}</div>
                            <div>{{$post->body}}</div>                            
                            @if($post->user_id == Auth::id())
                            <div class="text-right"><a href="{{ action('PostController@delete',['post_id'=>$post->id]) }} "class="text-danger">削除</a></div>
                            @endif
                            @endif
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection