@extends('layouts.admin')

@section('content')

<div class="quote-container col-md-8">
<h1 class="page-header">Quote Request</h1>
<ul class="list-group col-md-6">
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Name</h4>
        <p class="list-group-item-text">{{ $quote->name }}</p>
    </li>
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Company</h4>
        <p class="list-group-item-text">{{ $quote->company }}</p>
    </li>
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Email</h4>
        <p class="list-group-item-text">{{ $quote->email }}</p>
    </li>
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Phone</h4>
        <p class="list-group-item-text">{{ $quote->phone }}</p>
    </li>
    @foreach($quote->clientFiles as $clientFile)
    <li class="list-group-item">
        {{ link_to_route('clientFiles.download', extract_fileName($clientFile->path), $clientFile->id) }}
    </li>
    @endforeach
</ul>

<ul class="list-group col-md-6">
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Project Name</h4>
        <p class="list-group-item-text">{{ $quote->project }}</p>
    </li>
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Quantity</h4>
        <p class="list-group-item-text">{{ $quote->quantity }}</p>
    </li>
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Due Date</h4>
        <p class="list-group-item-text">{{ $quote->due }}</p>
    </li>
    <li class="list-group-item">
        <h4 class="list-group-item-heading">Description</h4>
        <p class="list-group-item-text">{{ $quote->description }}</p>
    </li>
</ul>
</div>

<div class="col-md-8">
<div class="button-row pull-right">
<a href="{{ route('quotes.destroy', $quote->id) }}"><button class="btn btn-danger">Delete Quote</button></a>
<a href="{{ route('quotes.index') }}"><button class="btn btn-primary">Go Back</button></a>
</div>
</div>

@stop