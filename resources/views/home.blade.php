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

                    </div>

                    <div class="profile-info">
                        <div class="profile-username"> {{ $user->name }} </div>
                        <div class="profile-score"> {{ $user->score }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default"> 
                <div class="panel-body">
                    <div class="list-group">
                        @foreach($users as $_user)
                        <a class="list-group-item clearfix"> 
                            <img class="img-circle img-responsive" src="https://www.gravatar.com/avatar/{{ md5($_user->email) }}?d=retro">
                            <span class="user-info"> 
                                {{ $_user->name }} <br>
                                <small> Score: {{ $_user->score }}</small>
                            </span>
                            <form action="/new-game" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="user_id" value={{$_user->id}}>
                                <button type="submit" class="btn btn-primary pull-right"> Play </button>
                            </form>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

<script>


<script>
