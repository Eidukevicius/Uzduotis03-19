@extends('companyTemplate.app')

@section('content')
@if($companies->isEmpty())
    <p>Rezultatų nėra</p>
@else
    <ul>
        @foreach($companies as $company)
            <h2>{{ $company->title }}</h2>
            <p><strong>Kodas:</strong> {{ $company->code }}</p>
            <p><strong>PVM kodas:</strong> {{ $company->vat_code }}</p>
            <p><strong>Adresas:</strong> {{ $company->address }}</p>
            <p><strong>Telefonas:</strong> {{ $company->phone }}</p>
            <p><strong>El. paštas:</strong> {{ $company->email }}</p>
            <p><strong>Veikla:</strong> {{ $company->activity }}</p>
            <p><strong>Vadovas:</strong> {{ $company->director }}</p>
        @endforeach
    </ul>
@endif
@endsection

