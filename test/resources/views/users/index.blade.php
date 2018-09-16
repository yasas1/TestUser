@extends('layouts.admin')

@section('content')

    <ul> 
            @foreach($users as $user)

    <li><a href="{{route('users.show',$user->id)}}"> {{ $user->name}} </a></li>
            

            @endforeach

    </ul>




@endsection