@extends('layouts.default')

@section('content')
@include('layouts.partials.nav.navFull')
@include('layouts.partials.hero')
@include('flash::message')
@include('layouts.partials.about')
@include('layouts.partials.service')
@include('layouts.partials.recent-work')
@include('layouts.partials.contact')

@stop
