@extends('layouts.app2', ['title' => 'Inscription d\'un eleve'])

@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/icheck/skins/all.css') }}">
@endsection

@section('js')
    <template id="inscriptions">
    
    </template>

    <script src="{{ asset('js/vues/inscription.js') }}" type="module"></script>
@endsection

@section('content')
    <Inscriptions></Inscriptions>
@endsection

