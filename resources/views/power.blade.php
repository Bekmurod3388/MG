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
                                <form action="{{route('power',$powers)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="sensor1" value="{{($powers->sensor1 === 0 ? 1 : 0)}}">
                                    <button class="{{($powers->sensor1 ? 'btn btn-outline-danger' : 'btn btn-outline-success')}}" type="submit">Status {{($powers->sensor1 ? 'O\'chirish':'Yoqish')}}</button>
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


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Harakat sensor 2</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    @if($powers->sensor2 == 1)
                                        Yoniq
                                    @else
                                        Aktiv emas
                                    @endif
                                </div>
                                <form action="{{route('power',$powers)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="sensor2" value="{{($powers->sensor2 === 0 ? 1 : 0)}}">
                                    <button class="{{($powers->sensor2 ? 'btn btn-outline-danger' : 'btn btn-outline-success')}}" type="submit">Status {{($powers->sensor2 ? 'O\'chirish':'Yoqish')}}</button>
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

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Eshik sensor 1</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    @if($powers->sensor3 == 1)
                                        Yoniq
                                    @else
                                        Aktiv emas
                                    @endif
                                </div>
                                <form action="{{route('power',$powers)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="sensor3" value="{{($powers->sensor3 === 0 ? 1 : 0)}}">
                                    <button class="{{($powers->sensor3 ? 'btn btn-outline-danger' : 'btn btn-outline-success')}}" type="submit">Status {{($powers->sensor3 ? 'O\'chirish':'Yoqish')}}</button>
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

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Eshik sensor 2</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    @if($powers->sensor4 == 1)
                                        Yoniq
                                    @else
                                        Aktiv emas
                                    @endif
                                </div>
                                <form action="{{route('power',$powers)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="sensor4" value="{{($powers->sensor4 === 0 ? 1 : 0)}}">
                                    <button class="{{($powers->sensor4 ? 'btn btn-outline-danger' : 'btn btn-outline-success')}}" type="submit">Status {{($powers->sensor4 ? 'O\'chirish':'Yoqish')}}</button>
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

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Eshik sensor 3</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    @if($powers->sensor5 == 1)
                                        Yoniq
                                    @else
                                        Aktiv emas
                                    @endif
                                </div>
                                <form action="{{route('power',$powers)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="sensor5" value="{{($powers->sensor5 === 0 ? 1 : 0)}}">
                                    <button class="{{($powers->sensor5 ? 'btn btn-outline-danger' : 'btn btn-outline-success')}}" type="submit">Status {{($powers->sensor5 ? 'O\'chirish':'Yoqish')}}</button>
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


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Eshik sensor 4</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    @if($powers->sensor6 == 1)
                                        Yoniq
                                    @else
                                        Aktiv emas
                                    @endif
                                </div>
                                <form action="{{route('power',$powers)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="sensor6" value="{{($powers->sensor6 === 0 ? 1 : 0)}}">
                                    <button class="{{($powers->sensor6 ? 'btn btn-outline-danger' : 'btn btn-outline-success')}}" type="submit">Status {{($powers->sensor6 ? 'O\'chirish':'Yoqish')}}</button>
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
        </div>
@endsection
