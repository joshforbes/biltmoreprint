<section class="contact alt-section" id="contact">

    <div class="section-header">
        <h2>Contact Us</h2>
        <p>We would love to hear from you</p>
        <hr/>
    </div>

    <div class="contact-wrap">

        <div class="contact-info">
        <h2>828.259.9020</h2>
        <h3 class="contact-email">orders@biltmoreprint.com</h3>
        <hr/>
            <div class="office-wrap">
                <div class="office-location">
                    <h3>Location:</h3>
                    <p>231 Biltmore Avenue
                    <br/>
                    Asheville, NC 28801
                    </p>
                </div>
                <div class="office-hours">
                    <h3>Hours:</h3>
                    <p>8:30am - 5:00pm <br/>
                    Monday - Friday</p>
                </div>
            </div>
            
            <div class="map-wrap">
            <iframe width='100%' height='300px' frameBorder='0'
                src='https://a.tiles.mapbox.com/v4/jdforbes82.kmh1250c/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiamRmb3JiZXM4MiIsImEiOiJ5QlRrRHhjIn0.JyJv_yiF0ngu7GnpJjbk7g'>
            </iframe>
            
            
            </div>
        </div>
        
       

        <div class="contact-form-wrap">

            <h2>Get in touch</h2>
            {{ Form::open(['url' => 'contact', 'class' => 'contact-form']) }}

                <!-- Name Form Input -->
                <div class="form-group">
                    {{ Form::label('name', 'Name: ') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email Address: ') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <!-- Message Form Input -->
                <div class="form-group">
                    {{ Form::label('contactMessage', 'How can we help? ') }}
                    {{ Form::textarea('contactMessage', null, ['class' => 'form-control']) }}
                </div>

                {{ Form::submit('Get in touch ') }}



            {{ Form::close() }}

        </div>
    </div>

</section>