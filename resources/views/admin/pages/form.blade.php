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
    'name' => 'keywords',
    'label' => 'Keywords',
    'translated' => true,
    'note'       => 'Please separate keywords using commas'
    ])
    @formField('checkbox', [
    'name' => 'is_menu_item',
    'label' => 'Is a menu item',
    'translated' => true,
    'note'       => 'Please select this only if you want the page to appear in the navbar'
    ])
    @formField('block_editor')
@stop
