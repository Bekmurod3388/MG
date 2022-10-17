@extends('layout')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Harakat sensor 1</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    @if($powers->sensor1 == 1)
                                        Yoniq
                                    @else
                                        Aktiv emas
                                    @endif
                                </div>
                                <form action="{{route('power',[$powers])}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="1" name="sensor1">
                                    <button type="submit" class="btn btn-success">
                                        @if($powers->sensor1 == 1)
                                            O'chirish
                                        @else
                                            Yoqish
                                        @endif</button>
                                </form>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Harakat sensor 2</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">650</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                </div>
                            </div>
                            <div class="col-auto">
                                <img src="person-walking-solid.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
