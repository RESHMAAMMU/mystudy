@extends('master')
@section('content')
<div>

<div class="card">
<div id="button-edit">
    <!-- <button type="button" value ="Edit" href="{{ route('user-edit',['id'=>$task->id]) }}"></button> -->
    <a href="{{route('user-edit',['id'=>$task->id])}}" class="btn btn-primary btn-lg active" role="button" id="edit">Edit</a>
    <a href="{{route('logout')}}" class="btn btn-primary btn-lg active" role="button" id="logout">Logout</a>
</div>
    <div class="col-md-6">
        Name:{{$task->name}}
    </div>
    <div class="col-md-6">
        Email:{{$task->email}}
    </div>
    <div class="col-md-6">
        Address :{{$task->address}}
    </div>
  

    
</div>
</div>

@endsection

@push('css')
<style>
#edit{
    float:right;
}
#logout{
    float:right;
}
</style>
@endpush