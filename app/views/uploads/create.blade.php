@extends('layouts.default')

@section('content')
@include('layouts.partials.nav.navSmall')

<div class="subpage-header">
<h1>Upload a File</h1>
</div>

@include('layouts.partials.form-error')

{{ Form::open(['url' => 'uploads', 'class' => 'client-form', 'files' => true]) }}

@include('layouts.partials.client-request-form')

{{ Form::close() }}

@stop