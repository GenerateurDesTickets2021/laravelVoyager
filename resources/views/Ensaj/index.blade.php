@extends('master')
<div class="row">
@section('content')
@foreach($myf as $ff)
<div>{{$ff->code}}</div>
@endforeach
</div>
@endsection