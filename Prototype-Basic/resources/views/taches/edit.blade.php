@include('layouts.head')


<form  action="{{route('taches.update',$taches->id)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du tache :<input type="text" class="form-control" value="{{$taches->Task_name}}" name="task_name" >
      </div>
      <div class="form-group col-md-2">
        Début de la tache:<input type="datetime-local" class="form-control" value="{{$taches->start_Date}}" name="start_Date" >
      </div>
      <div class="form-group col-md-2">
        Fin de la tache:<input type="datetime-local" class="form-control" value="{{$taches->end_Date}}" name="end_Date" >
      </div>
      <div class="form-group col-md-2">
        Descreption:<input type="text" class="form-control" value="{{$taches->descreption}}" name="descreption" >
      </div>
      <input type="hidden" value="{{$taches->Briefs_id}}" name="briefs_id">
    
    </div>

    <button type="submit" class="btn btn-warning">Editer</button>
  </form>
 