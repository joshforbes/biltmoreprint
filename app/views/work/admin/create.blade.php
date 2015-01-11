@extends('......layouts.admin')

@section('content')

@include('layouts.partials.form-error')

<h1 class="page-header">Add New Work</h1>

@include('layouts.partials.form-error')

{{ Form::open(['route' => 'work.store', 'files' => true]) }}

<!-- Name Form Input -->
<div class="form-group">
    {{ Form::label('name', 'Name: ') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<!-- Description Form Input -->
<div class="form-group">
    {{ Form::label('description', 'Description: ') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<!-- File Form Input -->
<div class="form-group">
    {{ Form::label('image', 'Image: ') }}
    {{ Form::file('image') }}
</div>


{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}

@stop