@extends('layouts.app')

@section('content')

    
<h3><a href="{{route('users.edit',$user->id)}}"> Username : {{ $user->username}} </a> </h3>
    <h5>Email : {{ $user->email}} </h5>


@endsection