@include('layouts.head')

<form   action="{{route('taches.store')}}" method="POST" >
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du tache :<input type="text" class="form-control"name="task_name" >
      </div>
      <div class="form-group col-md-2">
        Début de la tache:<input type="datetime-local" class="form-control"  name="start_Date" >
      </div>
      <div class="form-group col-md-2">
        Fin de la tache:<input type="datetime-local" class="form-control" name="end_Date" >
      </div>
      <div class="form-group col-md-2">
        Descreption:<input type="text" class="form-control" name="descreption" >
      </div>
      <input type="hidden" value="{{$id}}" name="briefs_id">

    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>