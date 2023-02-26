@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">KMI Skaičiuoklė</div>

                        <div class="card-body">
                            <p><strong>Jūsų ūgis:</strong> {{ $ugis }}</p>
                            <hr>
                            <p><strong>Jūsų svoris:</strong> {{ $svoris }}</p>
                            <hr>
                            Jūsų kūno masės indeksas (KMI) yra {{ $kmiRezultatas }}
                            <hr>
                            {!! $reiksme !!}
                            <hr>
                            <a class="btn btn-success" href="{{ route('forma') }}">Atgal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
