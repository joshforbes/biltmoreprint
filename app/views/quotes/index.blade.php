@extends('layouts.admin')

@section('content')

@foreach($quotes as $quote)

{{$quote->name}}
{{$quote->company}}
<br>

<div class="container-fluid">
<h2 class="sub-header">Quotes</h2>
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
    <tr>
      <td>{{ $quote->id }}</td>
      <td>{{ $quote->name }}</td>
      <td>{{ $quote->company }}</td>
      <td>{{ $quote->project }}</td>
      <td>{{ link_to("quotes/$quote->id", 'view') }}</td>
      <td>{{ link_to("quotes/$quote->id", 'completed') }}</td>
    </tr>
  </tbody>
</table>
</div>
</div>


@endforeach

@stop