@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($all_dresses_data as $item)
            <h1>Abbigliamento N° {{ $item->id }} </h1>
            <li>Il brand: {{ $item->brand }}</li>
            <li>Il colore: {{ $item->colore }}</li>
            <li>La taglia: {{ $item->taglia }}</li>
        @endforeach
    </ul>
@endsection
