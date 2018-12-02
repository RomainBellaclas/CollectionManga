@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Ajouter un public de destination')
        @endslot
        <form method="POST" action="{{ route('publicVise.store') }}">
            {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('Public de destination'),
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