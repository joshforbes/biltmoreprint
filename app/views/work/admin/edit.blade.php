@extends('layouts.admin')

@section('content')

@include('layouts.partials.form-error')

<div class="edit-work">
{{ Form::model($work, ['route' => ['work.update', $work->id], 'method' => 'put', 'files' => true]) }}

<div class="col-md-6">
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
    {{ Form::label('image', 'Change Image? ') }}
    {{ Form::file('image') }}
</div>

{{ Form::submit('Save', ['class' => 'btn btn-primary btn-lg pull-right']) }}
{{ Form::close() }}
</div>

<div class="col-md-6">
{{ HTML::image($work->thumbnailPath(), '', ['class' => 'edit-image-preview']) }}
</div>

</div>

@stop