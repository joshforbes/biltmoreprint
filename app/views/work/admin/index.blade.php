@extends('......layouts.admin')

@section('content')

<h1 class="page-header">Work</h1>

<a href="{{ route('work.create') }}"><button class="btn btn-primary">Add New Work</button></a>
<div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($work as $work)
    <tr>
      <td>{{ $work->id }}</td>
      <td class="work-name">{{ $work->name }}</td>
      <td>{{ $work->description }}</td>
      <td>{{ link_to_route('work.admin.show', 'view', $work->id) }}</td>
      <td>{{ link_to_route('work.edit', 'edit', $work->id) }}</td>
      <td>{{ link_to_route('work.destroy', 'delete', $work->id) }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

@stop