@extends('layouts.default')

@section('content')

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h1>All quotes</h1>

@foreach($quotes as $quote)

{{$quote->name}}
{{$quote->company}}
<br>

@endforeach

@stop