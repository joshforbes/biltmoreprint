@extends('layouts.default')

@section('content')
@include('layouts.partials.nav.navSmall')

<div class="subpage-header">
<h1>Our Work</h1>
</div>

<section class="work">

    <div class="work-container">
    @foreach($paginatedWork as $work)
        <a href="{{ route('work.show', $work->id) }}"><div class="work-wrap">
            <div class="work-item" style="background-image: url({{ $work->thumbnailPath() }})"></div>
                <div class="work-overlay"><h3>{{ $work->name }}</h3>
            </div>
        </div></a>
    @endforeach
    </div>

    <?php echo $paginatedWork->links(); ?>



</section>