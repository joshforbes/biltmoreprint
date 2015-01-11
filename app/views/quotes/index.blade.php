@extends('layouts.admin')

@section('content')

<h1 class="page-header">Quotes</h1>
<div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Customer Name</th>
      <th>Company Name</th>
      <th>Project Name</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($quotes as $quote)
    <tr>
      <td>{{ $quote->id }}</td>
      <td>{{ $quote->name }}</td>
      <td>{{ $quote->company }}</td>
      <td>{{ $quote->project }}</td>
      <td>{{ link_to_route('quotes.show', 'view', $quote->id) }}</td>
      <td>{{ link_to_route('quotes.destroy', 'delete', $quote->id) }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

@stop