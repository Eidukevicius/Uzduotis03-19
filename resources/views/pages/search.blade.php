@extends('companyTemplate.app')

@section('content')
    <h1 class="mt-4 d-flex justify-content-center">Kompanijos paieška pagal pavadinimą</h1>
    @include('companyTemplate._partials.errors')
    <form class="container" action="/search" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="query" class="form-control" placeholder="Įveskite kompanijos pavadinimą">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary w-100">Ieškoti</button>
        </div>
    </form>
@endsection