@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="user-card col-md-12">
            <div class="text-center">
                <i class="fas fa-user-circle fa-3x"></i>
                <h3>{{ $user->name }}</h3>
                <div class="col-12">
                    <p>{{ $user->email }}</p>
                </div>
                @if (Auth::id() === $user->id)
                <div class="col-12 mt-3">
                    <a class="btn btn-outline-dark common-btn btn-sm edit-profile-btn" href="/users/edit"><i class="fas fa-user-edit"></i>プロフィール編集</a>
                    <p class="btn btn-outline-dark common-btn btn-sm edit-profile-btn">{!! link_to_route('logout', 'ログアウト',[],['class' => 'fas fa-cog text-dark']) !!}</p>

                    <form id="logout-form" action="" method="POST" style="display: none;">{{ csrf_field() }}
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
