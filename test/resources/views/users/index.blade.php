@extends('layouts.admin')

@section('content')

<table class="table table-hover"> 
        @if($users) 
        {{-- {{url('/driver/'.$driver->id.'/edit')}} --}}

        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                        
                <th width="150px">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user) 
                <tr>
                    <td> <a href="{{route('users.edit',$user->id)}}"> {{ $user->name}} </a> </td>
                    <td> <a href="{{route('users.edit',$user->id)}}"> {{ $user->email}} </a> </td>
                    <td width="150px">
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        @endif
        
</table>




@endsection