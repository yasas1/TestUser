@extends('layouts.app')

@section('content')

<div class="form-group">

    <h1>Test User</h1> <br>
        
        @if(count($errors)>0)
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
        @endif 

        <!-- "{{ url('users')}}" -->

    {{-- <form method = "post" action = "/users" >
        {{csrf_field()}}
            <label class="lb" > UserName :</label><br>
            <input class="form-control" type="text" name="username" placeholder="username"><br>
    
            <label class="lb" > Password :</label><br>
            <input class="form-control" type="password" name="password" placeholder="password" ><br>

            <label class="lb" > Email : </label><br>
            <input class="form-control"  type="text" name="email" placeholder="email" > <br>
                
            <input type="submit" class="btn btn-primary" >
            </div>

        </form> --}}
        
        {!! Form::open(['method'=> 'POST','action'=>'UserController@store']) !!}

            <label  > Name :</label>
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
    
            <label > Password :</label><br>
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'password']) !!}
 
            <label > Email : </label><br>
            {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com']) !!}
            
            <br>
            {{Form::submit('SUBMIT', ['class'=>'btn btn-success pull-left'])}}
            {{-- <input type="submit" class="btn btn-primary" > --}}
            
    
        {!! Form::close() !!}
    
</div>
    
@endsection