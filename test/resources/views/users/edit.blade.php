@extends('layouts.app')

@section('content')

<div class="form-group">

    <h1>Edit User</h1> <br>
        
        {{-- @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error}} </li>
                @endforeach
            </ul>
        </div> 
        @endif

        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p> {{ \Session::get('success') }} </p>
        </div>
        @endif  --}}

        <!-- "{{ url('users')}}" -->

    {{-- <form method = "post" action = "/users/{{$user->id}}" >
        {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT">

            <label class="lb" > UserName :</label><br>
            <input class="form-control" type="text" name="username" placeholder="username" value="{{$user->username}}"><br>
                        
            <label class="lb" > Email : </label><br>
            <input class="form-control"  type="text" name="email" placeholder="email" value="{{$user->email}}"> <br>
                    
            <input type="submit" class="btn btn-info" value="UPDATE" >
            

    </form> <br> --}}

    {!! Form::model($user,['method'=> 'PATCH','action'=>['UserController@update',$user->id]]) !!}
    
    {{csrf_field()}}

    <label  > UserName :</label>
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}


    <label > Email : </label><br>
    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com']) !!}
    
    <br>
    {{Form::submit('SUBMIT', ['class'=>'btn btn-info pull-left'])}}
    {{-- <input type="submit" class="btn btn-primary" > --}}
    

    {!! Form::close() !!}
    <br>

    {{-- <form method = "post" action = "/users/{{$user->id}}" >

        {{csrf_field()}}

        <input type="hidden" name="_method" value="DELETE">

                    
        <input type="submit" class="btn btn-danger" value="DELETE" >
            

    </form> --}}

    {!! Form::open(['method'=> 'DELETE','action'=>['UserController@destroy',$user->id]]) !!}
    
    {{csrf_field()}}

    {{Form::submit('DELETE', ['class'=>'btn btn-danger pull-left'])}}

    {!! Form::close() !!}
    
</div>
    
@endsection