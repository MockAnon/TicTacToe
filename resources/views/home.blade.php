@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="profile-picture">
                        <img class="img-circle img-responsive" src="https://www.gravatar.com/avatar/{{ md5($user->email)}}?d=retro&s=200">
                        <div> {{ $user->name }} </div>
                        <div> {{ $user->score }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
