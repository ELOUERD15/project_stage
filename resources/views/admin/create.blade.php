@extends('admin.layout')
@section('content')

<div class="card" style="margin: 20px">
<div class="card-header">Create New Mail</div>

<form action="{{url ('courrier')}}" method="post">
     {!! csrf_field() !!}
    <label >objet:</label><br>
    <textarea type="text" name="objet" id="objet" class="form-control" placeholder="الموضوع"></textarea><br>
    <label >expediteur:</label>
    <input type="text" name="expediteur" id="expediteur" class="form-control" placeholder="المرسل"><br>
    <label > distinataire:المرسل له</label>
    <input type="text" name="distinataire" id="distinataire" class="form-control" placeholder="المرسل له"><br>
    <label > date_envoi:</label>
    <input type="date" name="date_envoi" id="date_envoi" class="form-control" placeholder="تاريخ الاستلام"><br>
  
    <input type="submit" value="Save" class="btn btn-success"> <br>
</form>
</div>
@stop