@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang("Ajouter une maison d'édition")
        @endslot
        <form method="POST" action="{{ route('collectionEdition.store') }}">
            {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection