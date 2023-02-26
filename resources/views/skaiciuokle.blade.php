@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header fw-bold">Kūno masės indekso (KMI) Skaičiuoklė</div>
                            @csrf
                        <div class="card-body">
                            <form method="post" action="{{ route("rezultatas") }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Įveskite ūgį centimetrais</label>
                                    <input class="form-control" type="text" name="ugis" placeholder="PVZ.: 170" required>
                                    <label class="form-label mt-3">Įveskite svorį kg</label>
                                    <input class="form-control" type="text" name="svoris" placeholder="PVZ.: 80" required>
                                </div>
                                <button class="btn btn-success">Skaičiuoti KMI indeksą</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
