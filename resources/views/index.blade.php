@extends('layouts.master')
@section('title')
    Laravel
@endsection
@section('footer')
    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
@endsection

@push('page-js')
    <script>alert("Hallo Lukman Ganteng");</script>
@endpush

@section('dashboard-link')
    Dashboard
@endsection

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Konten</h5>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

