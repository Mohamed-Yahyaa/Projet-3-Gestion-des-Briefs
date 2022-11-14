@include('layouts.head')

<a href="{{route('promotion.create')}}" style="margin-bottom: 14px" class="btn btn-primary"> Ajouter Promotion</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom de Brief</th>
        <th scope="col">Action</th>
       
    </thead>
    <tbody>
        @foreach ($promotion as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
     
     
      <td>
     <a href="{{route('promotion.edit',$value->id)}}">{{$value->Nom_promotion}}
        
    </form>
</td>

<td>
    <form action="{{route('promotion.destroy',$value->id)}}" method="POST">
        @method("DELETE")
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
        
    </td>
</tr>
@endforeach
    </tbody>
  </table>