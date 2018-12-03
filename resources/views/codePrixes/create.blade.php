@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Ajouter un code prix')
        @endslot
        <form action="" method="GET">
            @include('partials.dropdown',[
                'title' => __("Maison d'édition"),
                'type' => 'button',
                'name' => 'idCollectionEdition',

            ]) 
        </form>
        <form method="POST" action="{{ route('codePrix.store') }}">
            {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('Code prix'),
                'type' => 'text',
                'name' => 'libellePrix',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Prix'),
                'type' => 'text',
                'name' => 'prix',
                'required' => true,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection