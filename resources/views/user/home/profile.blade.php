@extends('user.layouts.main')

@section('body')
<div style="background: -webkit-gradient(linear, left top, right top, from(#7f59dc), to(#655be6)); background: linear-gradient(to right, #7f59dc, #655be6); height: 120px; width: 100%; ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title mb-0 mt-0">{{$title}}</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card product-sales">
                    <div class="card-body">
                        <h5 class="mt-0 mb-4"><i class="ion-monitor h4 mr-2 text-primary"></i> Profile</h5>
                        <div class="row align-items-center mb-4">
                            <div class="col-12">
                            <img src="{{asset('images/user_image/'.$image)}}" class="rounded-circle mx-auto d-block" alt="...">
                            <h4 class="text-center">{{Auth::user()->username}}</h4>
                            <div class="text-muted text-center">{{Auth::user()->email}}</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Transaksi</h4>
                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Price</th>
                                        <th scope="col" colspan="2">Bukti Bayar</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- {{$i=0}} -->
                                @foreach ($transaksi as $index => $data)
                                    <tr>
                                        <th scope="row">{{$index+1}}</th>
                                        <td>
                                        {{$data->nama_paket}}
                                        <div class="text-muted">{{$data->nama_jasa}}</div>
                                        </td>
                                        <td>{{$data->tanggal_transaksi}}</td>
                                        <td><span class="badge badge-success">{{$data->status}}</span></td>
                                        <td>{{$data->amount}}</td>
                                        <td>
                                            <div>
                                                <!-- <img id="bukti" src="{{asset('images/user_image/'.$image)}}" alt="" srcset=""> -->
                                                <div class="btn btn-primary btn-sm" id="bukti" alt="{{asset('images/invoice/'.$data->bukti_transaksi)}}">Bukti Bayar</div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection