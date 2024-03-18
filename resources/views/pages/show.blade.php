@extends('companyTemplate.app')

@section('content')
    <div class="container">
        <h2>{{ $company->title }}</h2>
        <p><strong>Kodas:</strong> {{ $company->code }}</p>
        <p><strong>PVM kodas:</strong> {{ $company->vat_code }}</p>
        <p><strong>Adresas:</strong> {{ $company->address }}</p>
        <p><strong>Telefonas:</strong> {{ $company->phone }}</p>
        <p><strong>El. paštas:</strong> {{ $company->email }}</p>
        <p><strong>Veikla:</strong> {{ $company->activity }}</p>
        <p><strong>Vadovas:</strong> {{ $company->director }}</p>
        <a href="/companies/{{ $company->id }}/edit" class="btn btn-primary">Redaguoti</a>
        <form action="/companies/{{ $company->id }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Ar tikrai norite ištrinti šią įmonę?')">Ištrinti</button>
        </form>
    </div>
@endsection