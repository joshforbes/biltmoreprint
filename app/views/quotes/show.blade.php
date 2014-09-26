@extends('layouts.admin')

@section('content')

{{ $quote->name }}
<br/>
{{ $quote->company }}
<br/>
{{ $quote->description }}

@stop