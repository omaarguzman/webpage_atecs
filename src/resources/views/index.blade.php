@extends('components.layouts.app')
@section('content')
    @livewire('slider')
    @livewire('pago-redirect')
    @livewire('noticias')
    <div>
        <x-icon name="airplane" class="w-5 inline" duotone color="#ff2600" />
        Index
    </div>
@endsection
