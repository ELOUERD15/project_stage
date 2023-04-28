@extends('admin.layout')
@section('content')
    
    <div class="card" style="margin: 20px">
        <div class="card-header">Edit Users</div>
        <div class="card-body">

            <form action="{{url ('courrier/' .$users->id )}}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
               <label >SUBJECT:</label><br>
               <textarea type="text" name="objet" id="objet" value="{{$users->objet}}" class="form-control" placeholder="الموضوع"> </textarea><br>
               <label >expediteur:</label>
               <input type="text" name="expediteur" id="expediteur" value="{{$users->expediteur}}" class="form-control" placeholder="المرسل"><br>
               <label > distinataire:</label>
               <input type="text" name="distinataire" id="distinataire" value="{{$users->distinataire}}" class="form-control" placeholder="المرسل له"><br>
               <label > DATE D'ENVOI:</label>
               <input type="date" name="date_envoi" id="date_envoi" value="{{$users->date_envoi}}" class="form-control" placeholder="تاريخ الاستلام"><br>
               
               <input type="submit" value="Update" class="btn btn-success"> <br>
           </form>

        </div>
    </div>
@stop