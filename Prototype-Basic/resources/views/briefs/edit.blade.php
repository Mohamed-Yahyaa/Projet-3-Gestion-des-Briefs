@include('layouts.head')

<form  action="{{route('briefs.update',$briefs->id)}}" method="POST"  >
    @csrf
    @method("PUT")
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du brief :<input type="text" class="form-control"  value="{{$briefs->Brief_name}}" name="name" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de livraison :<input type="datetime-local" class="form-control" value="{{$briefs->dateDelivery}}" name="Delivery" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de récupération :<input type="datetime-local" class="form-control" value="{{$briefs->dateRecovery}}" name="Recovery" >
      </div>
    </div>

    <button type="submit" class="btn btn-success">Editer</button>
  </form>


<form action="{{route('taches.create')}}" method="get" >

<button type="submit" class="btn btn-primary">Add tache</button>
<input type="hidden" value="{{$briefs->id}}" name="briefs_id">
</form>

<table class="table table-striped">
      <tr>

        <th scope="col">Id</th>
        <th scope="col">Nom de Tache</th>
        <th scope="col">Date de début</th>
        <th scope="col">Date de fin</th>
        <th scope="col">Descreption</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($taches as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->Task_name}}</td>
        <td>{{$value->start_Date}}</td>
        <td>{{$value->end_Date}}</td>
        <td>{{$value->descreption}}</td>
        <td>
            <form action="{{route('taches.edit',$value->id)}}">
                <button type="submit" class="btn btn-success">Edit</button>

            </form>
            </td>
            <td>
            <form action="{{route('taches.destroy',$value->id)}}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
           </td>
      </tr>
      @endforeach

    </tbody>

  </table>

<form action="{{route('briefs.index')}}">
  <button type="submit" class="btn btn-primary">Retourn</button>
</form>