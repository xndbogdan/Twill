@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'translated' => true,
    'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])
   @formField('input', [
    'name' => 'url',
    'label' => 'URL',
    'translated' => true,
    'note'       => 'Please provide the full URL'
    ])

    @formField('medias', [
    'name' => 'cover',
    'label' => 'Cover image',
    'note'       => 'Image file'
    ])

@stop
