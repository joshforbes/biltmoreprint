@extends('layouts.admin')

@section('content')

<h1 class="page-header">Work</h1>

<div class="col-md-6 pull-right">
{{ HTML::image($work->thumbnailPath()) }}
</div>

<ul class="list-group col-md-6">
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Name</h4>
        <p class="list-group-item-text">{{ $work->name }}</p>
    </li>
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Desription</h4>
        <p class="list-group-item-text">{{ $work->description }}</p>
    </li>
</ul>

<div class="button-row pull-right">
<a href="{{ route('work.destroy', $work->id) }}"><button class="btn btn-danger">Delete</button></a>
<a href="{{ route('work.edit', $work->id) }}"><button class="btn btn-success">Edit</button></a>
<a href="{{ route('work.admin.index') }}"><button class="btn btn-primary">Go Back</button></a>
</div>

@stop