@extends('master')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="row">
    <div class="col-md-4">
        <h2>Gestion des Filieres</h2>
    </div>
    <div class="col-md-8">
        <form action="{{'/Filieres'}}" method="POST">
            @csrf
        <div class="form-group">

            <div class="form-group">
              <label for="code">Code</label>
              <input type="code" name="code" id="code" class="form-control" placeholder="code" required="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="libelle">libelle</label>
                <input type="text" name="libelle" id="libelle" class="form-control" placeholder="libelle" required="" aria-describedby="helpId">
              </div>

           
            <button class="btn btn-primary btn-block" type="submit">Ajouter</button>

        </div>
    </form>
    </div>
</div>
<div>
<table class="table table-hover" border=1 style="width: 100%;border-collapse: collapse">
<thead>
<tr class="table-primary"><th>ID</th><th scope="row">Code</th><th>Libelle</th><th>Modifier</th>
<th>Supprimer</th></tr></thead>
<tbody>
@foreach($myf as $ff)
<tr class="table-active"><td style="text-align: center;padding: 15px;">{{$ff->id}} </td >
<td style="text-align: center padding: 15px;">{{$ff->code}} </td>
<td style="text-align: center;padding: 15px;">{{$ff->libelle}} </td>
<td style="text-align: center padding: 15px;"><button class="w3-btn w3-round-xxlarge">Modifier</button></td>
<td style="text-align: center padding: 15px;"><button class="w3-btn w3-round-xxlarge">supprimer</button></td>

</tr>
@endforeach
</tbody>
</table>
</div>




@endsection
