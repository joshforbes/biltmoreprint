@extends('layouts.default')

@section('content')
@include('layouts.partials.nav.navSmall')

<div class="subpage-header">
<h1>Our Work</h1>
</div>


<div class="work-single">
    <div class="work-image-wrap"><img src="{{ $work->imagePath() }}" alt=""/></div>
    <div class="work-detail">
        <h3>{{ $work->name }}</h3>
        <p>{{ $work->description }}</p>
    </div>
    <a class="back-to-work-link" href="{{ route('work.index') }}"><< Go Back</a>

</div>

