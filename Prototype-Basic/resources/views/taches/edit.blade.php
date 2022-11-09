@include('layouts.head')

@foreach ($taches as $value)
<form  action="{{route('taches.update',$value->id)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du tache :<input type="text" class="form-control" value="{{$value->Task_name}}" name="task_name" >
      </div>
      <div class="form-group col-md-2">
        Début de la tache:<input type="datetime-local" class="form-control" value="{{$value->start_Date}}" name="start_Date" >
      </div>
      <div class="form-group col-md-2">
        Fin de la tache:<input type="datetime-local" class="form-control" value="{{$value->end_Date}}" name="end_Date" >
      </div>
      <div class="form-group col-md-2">
        Descreption:<input type="text" class="form-control" value="{{$value->descreption}}" name="descreption" >
      </div>
      <input type="hidden" value="{{$value->Briefs_id}}" name="briefs_id">
    
    </div>

    <button type="submit" class="btn btn-warning">Editer</button>
  </form>
  @endforeach