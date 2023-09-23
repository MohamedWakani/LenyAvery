<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $about->title }}</p>
</div>

<!-- About Field -->
<div class="col-sm-12">
    {!! Form::label('about', 'About:') !!}
    <p>{{ $about->about }}</p>
</div>

<!-- Youtube Field -->
<div class="col-sm-12">
    {!! Form::label('youtube', 'Youtube:') !!}
    <p>{{ $about->youtube }}</p>
</div>

<!-- Insta Field -->
<div class="col-sm-12">
    {!! Form::label('insta', 'Insta:') !!}
    <p>{{ $about->insta }}</p>
</div>

<!-- Facebook Field -->
<div class="col-sm-12">
    {!! Form::label('facebook', 'Facebook:') !!}
    <p>{{ $about->facebook }}</p>
</div>

<!-- Twiter Field -->
<div class="col-sm-12">
    {!! Form::label('twiter', 'Twiter:') !!}
    <p>{{ $about->twiter }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $about->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $about->updated_at }}</p>
</div>

