<div class="contact-info">
    <legend>Contact Information</legend>
    <!-- Name Form Input -->
    <div class="form-group">
        {{ Form::label('name', 'Name: ') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>

    <!-- Company Form Input -->
    <div class="form-group">
        {{ Form::label('company', 'Company Name: ') }}
        {{ Form::text('company', null, ['class' => 'form-control']) }}
    </div>

    <!-- Email Form Input -->
    <div class="form-group">
        {{ Form::label('email', 'Email Address: ') }}
        {{ Form::email('email', null, ['class' => 'form-control']) }}
    </div>

    <!-- Phone Form Input -->
    <div class="form-group">
        {{ Form::label('phone', 'Phone Number: ') }}
        {{ Form::text('phone', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="project-info">
    <legend>Project Information</legend>
    <!-- Project Form Input -->
    <div class="form-group">
        {{ Form::label('project', 'Project Name: ') }}
        {{ Form::text('project', null, ['class' => 'form-control']) }}
    </div>

    <!-- Quantity Form Input -->
    <div class="form-group">
        {{ Form::label('quantity', 'Quantity: ') }}
        {{ Form::text('quantity', null, ['class' => 'form-control']) }}
    </div>

    <!-- Due Form Input -->
    <div class="form-group">
        {{ Form::label('due', 'Due Date: ') }}
        {{ Form::text('due', null, ['class' => 'form-control']) }}
    </div>

    <!-- Description Form Input -->
    <div class="form-group">
        {{ Form::label('description', 'Describe your Project: ') }}
        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
    </div>


    <!-- File Form Input -->
    <div class="form-group">
        {{ Form::label('file', 'Attach Files: ') }}
        {{ Form::file('file[]', ['class' => 'form-control', 'multiple' => true]) }}
    </div>
</div>

{{ Form::submit('Submit') }}