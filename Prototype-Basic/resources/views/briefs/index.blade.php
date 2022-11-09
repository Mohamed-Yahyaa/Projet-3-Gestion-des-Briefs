@include('layouts.head')

<a href="{{route('briefs.create')}}" style="margin-bottom: 14px" class="btn btn-primary"> Ajouter Brief</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom de Brief</th>
        <th scope="col">Date de Livraison</th>
        <th scope="col">Date de Récupération</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($briefs as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->Brief_name}}</td>
        <td>{{$value->dateDelivery}}</td>
        <td>{{$value->dateRecovery}}</td>
     
      <td>
     <form action="{{route('briefs.edit',$value->id)}}">
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
</td>
<td>
    <form action="{{route('briefs.destroy',$value->id)}}" method="POST">
        @method("DELETE")
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
        
    </td>
</tr>
@endforeach
    </tbody>
  </table>