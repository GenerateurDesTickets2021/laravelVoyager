@extends('master')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="row">
    <div class="col-md-4">
        <h2>Gestion des Classes</h2>
    </div>
    <div class="col-md-8">
        <form action="{{'/Classes'}}" method="POST">
            @csrf
        <div class="form-group">

            <div class="form-group">
              <label for="code">Code</label>
              <input type="code" name="code" id="code" class="form-control" placeholder="code" required="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="filiere">Filiere</label>
                <select name="filiere" id="filiere" class="form-control" placeholder="filiere" required="" aria-describedby="helpId">
                @foreach($myf as $ff)
                <option value="{{$ff->code}}">{{$ff->code}}</option> @endforeach</select>
               
              </div>
            <button class="btn btn-primary btn-block" type="submit">Ajouter</button>

        </div>
    </form>
    </div>
</div>
<div>
<table class="table table-hover" border=1 style="width: 100%;border-collapse: collapse">
<thead>
<tr class="table-primary"><th>ID</th><th>Code</th><th>Filiere</th><th>Modifier</th><th>Supprimer</th></tr></thead>
<tbody>
@foreach($myc as $cc)
<tr class="table-active"><td style="text-align: center;padding: 15px;">{{$cc->id}} </td ><td style="text-align: center padding: 15px;">{{$cc->code}} </td><td style="text-align: center;padding: 15px;">{{$cc->filiere}} </td><td style="text-align: center padding: 15px;"><button class="w3-btn w3-round-xxlarge">Modifier</button></td><td style="text-align: center padding: 15px;"><button class="w3-btn w3-round-xxlarge">Supprimer</button></td></tr>
@endforeach
</tbody>
</table>
</div>
@endsection