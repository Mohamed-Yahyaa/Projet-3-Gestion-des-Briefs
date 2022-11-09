@include('layouts.head')

<form action="{{route ('briefs.store')}}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-2">
          Nom du brief :<input type="text" class="form-control"name="name" >
        </div>
        <div class="form-group col-md-2">
          Date/heure de livraison :<input type="datetime-local" class="form-control"  name="Delivery" >
        </div>
        <div class="form-group col-md-2">
          Date/heure de récupération :<input type="datetime-local" class="form-control" name="Recovery" >
        </div>
      </div>
  
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    <a href="{{route('briefs.index')}}">Retour</a>

    