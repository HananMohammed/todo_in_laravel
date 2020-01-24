@extends('anony_layout.master')
@section('content')
@if(count($all_data)>0)
@foreach($all_data as $data)

 
<div class="card" style="width:300px;height:auto;float:left;margin-left:2%;margin-top:20px;margin-bottom:30px;">
  <img src="images/todo.png" class="card-img-top" alt="picture" style="height:130px;">
  <div class="card-body">
    <h5 class="card-title"> Task Date and Time </h5>
    <time>{{$data->taskDate}}</time>  <time>{{$data->taskTime}}</time>
    <hr></hr>
 
    <p class="card-text" style="height:auto;"> {{$data->task}} </p>

    <button class="btn btn-primary" style=" margin-bottom:10px;margin-top:10px;">
    <a href="todo" style="text-decoration:none;color:white;" >New </a></button>
<div style="float:right;margin-top:-55px;margin-right:20%;">
{!! Form::open(['url' => 'whattodo/delete' ,'files'=>true])!!}

<div style="display:none">  
    {{Form::text('t_id',$data->id,['class'=>'form-control' , 'placeholder'=>'search here'])}}
</div>
{{form::submit('TODO delete ',['class'=>'btn btn-danger' ,'style'=>'margin-top:63px;margin-left:20%;'])}}
{!! Form::close() !!}
  </div>
</div>

 
</div>
 @endforeach
@endif
<div class="space" style="margin-top:1000px;" ></div>

@endsection