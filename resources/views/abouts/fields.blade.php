<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- About Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about', 'About:') !!}
    {!! Form::textarea('about', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Youtube Field -->
<div class="form-group col-sm-6">
    {!! Form::label('youtube', 'Youtube:') !!}
    {!! Form::text('youtube', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Insta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insta', 'Insta:') !!}
    {!! Form::text('insta', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Twiter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twiter', 'Twiter:') !!}
    {!! Form::text('twiter', null, ['class' => 'form-control', 'required']) !!}
</div>