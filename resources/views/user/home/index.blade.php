@extends('user.layouts.main')

@section('body')
<div style="background: -webkit-gradient(linear, left top, right top, from(#7f59dc), to(#655be6)); background: linear-gradient(to right, #7f59dc, #655be6); height: 300px; width: 100%; ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12 text-center">
                            <h4 class="title mb-0">Talenttra</h4>
                        </div>
                    </div>
                    <div class="row align-items-center mt-5">
                        <div class="col-md-6 mx-auto">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <button class="btn btn-block btn-lg btn-light" data-toggle="modal" data-target="#kategoriModal"><i class="fa fa-search mr-2"></i> Temukan Creator</button>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <a href="{{url('/register')}}" class="btn btn-block btn-lg btn-outline-light">Daftar Sebagai Creator</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: -6em; padding-top: 0px">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card py-2">
                <div class="card-body text-center">
                    <div id="topnav">
                        <div class="navbar-custom">
                            <div id="navigation">
                                <ul class="navigation-menu">
                                    @foreach ($menu as $main)
                                    <li class="has-submenu">
                                        <a href="#" class="text-secondary" style="padding-left:0px; padding-right:0px;">
                                            <i class="{{$main->icon}} mx-2" style="font-size:25px; margin:10px"></i> <br>
                                            <div class="font-weight-bold px-4">{{$main->nama}}</div>
                                        </a>
                                        <ul class="submenu">
                                            @foreach ($main->subkategori as $sub)
                                            <li><a href="{{url('jasa',$sub->id)}}">{{$sub->nama}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
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
            <div class="col-xl-12 col-md-12">
                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="m-t-30 m-b-20">Kenapa Talenttra?</h4>
                        <h1 class="text-primary font-weight-bold">Jasa berkualitas,Harga terjangkau, pelayanan cepat, transaksi aman</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stats">
                            <div class="p-3 mini-stats-content">
                                <div class="media text-light">
                                    <i class="mx-3 my-auto thumb-md rounded-circle fa fa-star-o fa-3x"></i>
                                    <div class="media-body my-2">
                                        <h4 class="mt-0">Top Creators</h4>
                                        <p class="text-white-70 mb-0">Creator telah melalui seleksi dan proses verifikasi dari Talenttra</p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stats">
                            <div class="p-3 mini-stats-content">
                                <div class="media text-light">
                                    <i class="mx-3 my-auto thumb-md rounded-circle fa fa-shield fa-3x"></i>
                                    <div class="media-body my-2">
                                        <h4 class="mt-0">Jaminan kerja</h4>
                                        <p class="text-white-70 mb-0">Uang Anda akan kami lindungi, dan creator akan mulai bekerja mengerjakan project Anda.</p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stats">
                            <div class="p-3 mini-stats-content">
                                <div class="media text-light">
                                    <i class="mx-3 my-auto thumb-md rounded-circle fa fa-th-list fa-3x"></i>
                                    <div class="media-body my-2">
                                        <h4 class="mt-0">Berbagai pilihan layanan</h4>
                                        <p class="text-white-70 mb-0">Pilihan layanan dengan lebih dari 2 creators tersedia dalam 17 kategori.</p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="m-t-30 m-b-20">Creator Populer</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach ($mitra as $data)
                    <div class="col-md-3">
                        <div class="card">
                            <a href="{{url('jasa/detail',$data->id)}}">
                                <div class="card-header">
                                    @if ($data->user_image)
                                    <img src="{{asset('images/user_image/'.$data->user_image)}}" height="40px" alt="user" class="rounded-circle mb-1">
                                    @else
                                    <img src="{{ asset('user_template/assets/images/users/avatar-6.jpg') }}" height="40px" alt="user" class="rounded-circle mb-1">
                                    @endif
                                    <span class="d-md-inline-block ml-2">
                                    <h6 class="card-title font-10 my-0">{{$data->first_name}} {{$data->last_name}}</h6>
                                    <small class="text-muted my-0">Total {{$data->total}} jasa digunakan</small>
                                    </span>
                                </div>
                                @if ($data->image)
                                <img class="card-img-top img-fluid" style="height: 200px;" src="{{asset('images/jasa_image/'.$data->image)}}" alt="Card image cap">
                                @else
                                <img class="card-img-top img-fluid" height="200px" src="user_template/assets/images/small/img-4.jpg" alt="Card image cap">
                                @endif
                                <div class="card-body">
                                    <h6 class="card-title font-10 mt-0">{{$data->nama}} </h6>
                                    <!-- <p class="card-text">{!! Str::limit($data->deskripsi), 50, $end='...' !!}</p> -->
                                    <p class="card-text">
                                        <small class="text-muted">Last updated {{$data->created_at}}</small>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="m-t-30 m-b-20">Jasa Populer</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach ($jasa as $data)
                    <div class="col-md-3">
                        <div class="card">
                            <a href="{{url('jasa/detail',$data->id)}}">
                                @if ($data->image)
                                <img class="card-img-top img-fluid" style="height: 200px;" src="{{asset('images/jasa_image/'.$data->image)}}" alt="Card image cap">
                                @else
                                <img class="card-img-top img-fluid" height="200px" src="user_template/assets/images/small/img-4.jpg" alt="Card image cap">
                                @endif
                                <div class="card-body">
                                    <h6 class="card-title font-10 mt-0">{{$data->nama}} </h6>
                                    <!-- <p class="card-text">{!! Str::limit($data->deskripsi), 50, $end='...' !!}</p> -->
                                    <p class="card-text">
                                        <small class="text-muted">Last updated {{$data->created_at}}</small>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="m-t-30 m-b-20">Langkah mudah dalam menggunakan jasa Talenttra</h4>
                        <div class="card m-b-20">
                            <div class="card-body">
                                <section id="cd-timeline" class="cd-container">
                                    <div class="cd-timeline-block timeline-right">
                                        <div class="cd-timeline-img bg-success">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>

                                        <div class="cd-timeline-content text-white mx-0">
                                            <h3>Mendaftarkan diri dan mengelola data profil</h3>
                                            <span class="cd-date">STEP 1</span>
                                        </div>
                                    </div>
                                    <div class="cd-timeline-block timeline-left">
                                        <div class="cd-timeline-img bg-info">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>

                                        <div class="cd-timeline-content text-white">
                                            <h3>Mencari creator</h3>
                                            <span class="cd-date">STEP 2</span>
                                        </div>
                                    </div>
                                    <div class="cd-timeline-block timeline-right">
                                        <div class="cd-timeline-img bg-primary">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>

                                        <div class="cd-timeline-content text-white">
                                            <h3>Berdiskusi dengan creator</h3>
                                            <span class="cd-date">STEP 3</span>
                                        </div>
                                    </div>
                                    <div class="cd-timeline-block timeline-left">
                                        <div class="cd-timeline-img bg-warning">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>

                                        <div class="cd-timeline-content text-white">
                                            <h3>Transaksi</h3>
                                            <span class="cd-date">STEP 4</span>
                                        </div>
                                    </div>
                                    <div class="cd-timeline-block timeline-right">
                                        <div class="cd-timeline-img bg-danger">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>

                                        <div class="cd-timeline-content text-white">
                                            <h3>Persetujuan</h3>
                                            <span class="cd-date">STEP 5</span>
                                        </div>
                                    </div>
                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-content last text-white">
                                            <h3>Kritik dan saran</h3>
                                            <span class="cd-date">STEP 6</span>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="row mb-5 mt-3">
                    <div class="col-md-12">
                        <h4 class="text-center font-weight-bold">FAQ</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" data-toggle="modal" data-target="#modal1">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Ketentuan penggunaan Talenttra </h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" data-toggle="modal" data-target="#modal2">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Kontrak umum </h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal3">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Creator </h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal4">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Kerja </h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal5">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Penarikan pendapatan </h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal6">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Pemberi kerja </h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal7">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Pembelian</h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal8">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Pesanan</h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal17">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Status pesanan: freelancer mulai bekerja</h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal10">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Review dan nilai</h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal11">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Permintaan pembatalan dan pembatalan pesanan/order </h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal12">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Pengembalian pembayaran</h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal14">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Penggunaan yang tidak semestinya</h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal15">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Kepemilikan kerja</h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#modal16">
                                    <div class="card" height="350px">
                                        <div class="p-3 card-body">
                                            <div class="media text-secondary">
                                                <div class="media-body my-auto">
                                                    <h5 class="my-auto">Garansi</h5>
                                                </div>
                                                <i class="mx-3 my-auto fa fa-angle-right fa-2x"></i>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="kategoriModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">creator kategori apa yang Anda cari?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                @foreach ($menu as $main)
                    <div class="col-md-6">
                        <a onclick="searchKategori('{{$main->subkategori}}')" href="#">
                            <div class="card border" height="350px">
                                <div class="p-3 card-body">
                                    <div class="media text-secondary">
                                        <i class="mx-3 my-auto thumb-md rounded-circle {{$main->icon}} fa-3x"></i>
                                        <div class="media-body my-auto">
                                            <h5 class="my-auto">{{$main->nama}}</h5>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@extends('user.home.faq')
<script>
    function searchKategori(data){
        console.log(data);
    }
</script>
@endsection