@extends('anony_layout.master')
@section('content')
<div class="space" style="margin-top:50px;"> </div>
<form action = "todo/remind"  method= "POST" enctype = "multipart/form-data">
        @csrf 

<div class="card" style="width: 23rem;margin-left:30%;height:auto;">
  <img src="images/to-do-list.jpg" class="card-img-top" alt="todo_img"style="height:130px;">
  <div class="card-body">
    <h6 class="card-title" style="font-family: cursive; color:#0F2547;"> what you will do today </h6>
    <div class="form-group">
        <hr style=" color:#0F2547"></hr>
    <label for="exampleFormControlTextarea1" style="font-family: cursive;">Date and time</label> <br/>
        <input type="date" name="date" class="form-control-sm  " style="margin-right:5%;margin-left:5%;" >
        <input type="time" name="time" class="form-control-sm" placeholder="00:00:00" >
       
        <label for="exampleFormControlTextarea1" style="font-family: cursive;">Today Tasks </label>
    <textarea class="form-control"  name="text" id="exampleFormControlTextarea1" rows="3" placeholder="...TO DO ..."></textarea>
<input type="submit" class="btn btn-primary" value="Reminder" style=" margin-top:40px;margin-left:35%;"/>  
</div> 
</div>
</div>
</form>
<div class="space" style="margin-top:50px;"> </div>
@endsection