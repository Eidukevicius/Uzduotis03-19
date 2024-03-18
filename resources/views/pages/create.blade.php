@extends('companyTemplate.app')

@section('content')
<h1 class="mt-4 d-flex justify-content-center">Pridėti įmonę</h1>
@include('companyTemplate._partials.errors')
<form class="container" action="{{ route('companies.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group m-1">    
        <input type="text" name="title" class="form-control" placeholder="Pavadinimas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="code" class="form-control" placeholder="Kodas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="vat_code" class="form-control" placeholder="PVM kodas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="address" class="form-control" placeholder="Adresas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="phone" class="form-control" placeholder="Telefonas">
    </div>
    <div class="form-group m-1">
        <input type="email" name="email" class="form-control" placeholder="El. paštas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="activity" class="form-control" placeholder="Veikla">
    </div>
    <div class="form-group m-1">
        <input type="text" name="director" class="form-control" placeholder="Vadovas">
    </div>
    <div class="form-group m-1">
        <button type="submit" class="btn btn-primary w-100">Saugoti</button>
    </div>
</form>
@endsection