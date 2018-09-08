@extends('layouts.app')

@section('content')

    <ul> 
            @foreach($users as $user)

    <li><a href="{{route('users.show',$user->id)}}"> {{ $user->username}} </a></li>
            

            @endforeach

    </ul>




@endsection