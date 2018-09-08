@extends('layouts.app')

@section('content')

<div>

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
    
        <form method = "post" action = "/users/{{$user->id}}" >
            {{csrf_field()}}

            <input type="hidden" name="_method" value="PUT">

                <label class="lb" > UserName :</label><br>
                <input class="form-control" type="text" name="username" placeholder="username" value="{{$user->username}}"><br>
                          
                <label class="lb" > Email : </label><br>
                <input class="form-control"  type="text" name="email" placeholder="email" value="{{$user->email}}"> <br>
                       
                <input type="submit" class="btn btn-info" value="UPDATE" >
                
    
            </form> <br>

            <form method = "post" action = "/users/{{$user->id}}" >
                {{csrf_field()}}
    
                <input type="hidden" name="_method" value="DELETE">
    
                          
                <input type="submit" class="btn btn-danger" value="DELETE" >
                    
        
            </form>
    
    </div>
    
    @endsection