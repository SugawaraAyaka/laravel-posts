@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h1 class="display-4 text-center">Laravel Post <i class="fas fa-mail-bulk"></i></h1>
</div>

<div class="col-md-8 col-md-2 mx-auto">
  @include('commons.error')
</div>

@foreach ($posts as $post)

<div class="col-md-8 col-md-2 mx-auto">
    <div class="card-wrap">
        <div class="card mt-3">
            <div class="card-header align-items-center d-flex">
                <a class="no-text-decoration" href="">
                    <i class="fas fa-user-circle fa-2x mr-1"></i>
                </a>
                <a class="black-color" title="" href="">
                    <strong>
                       {{ $post->user->name }}
                    </strong>
                </a>
            </div>
            <div class="card-body">
                <div class="post_edit text-right">
                    <a class="btn btn-primary btn-sm" 
                        href="{{ route('post.edit',['id' => $post->id ]) }}"><i class="far fa-edit"></i>編集
                    </a>
                    <a class="btn btn-danger btn-sm" rel="nofollow"
                        href="{{ route('post.destroy', ['id' => $post->id]) }}">
                        <i class=" far fa-trash-alt"></i>削除
                    </a>
                </div>
                <h3 class="h5 title">
                    {{ $post->title }}
                </h3>
                <div class="mb-5">
                    {{ $post->message }}
                </div>
                
                <div class="m-4">
                @include('comments.comment_create')
                </div>
            </div>
        </div>
    </div>
</div>
                
@endforeach

@endsection
