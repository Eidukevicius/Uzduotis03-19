@extends('companyTemplate.app')

@section('content')
    <div class="container">
        <h2>Visos įmonės</h2>
        <div class="row">
            @foreach ($companies as $company)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $company->title }}</h5>
                            <p class="card-text">{{ $company->address }}</p>
                            <p class="card-text">{{ $company->email }}</p>
                            <a href="/companies/{{ $company->id }}" class="btn btn-primary">Plačiau</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $companies->links() }}
    </div>
@endsection