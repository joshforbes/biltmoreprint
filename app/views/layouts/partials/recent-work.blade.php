<section class="recent-work" id="work">

    <div class="section-header">
        <h2>Recent Work</h2>
        <p>What we have done</p>
        <hr/>
    </div>

    <div class="work-container">
    @foreach($recentWork as $work)
        <a href="{{ route('work.show', $work->id) }}"><div class="work-wrap">
            <div class="work-item" style="background-image: url({{ $work->thumbnailPath() }})"></div>
                <div class="work-overlay"><h3>{{ $work->name }}</h3>
            </div>
        </div></a>
    @endforeach
    <a class="more-work-link" href="{{ route('work.index') }}">See all work >></a>
    </div>



</section>