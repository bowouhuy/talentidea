@extends('user.layouts.main')

@section('body')
<div style="background: -webkit-gradient(linear, left top, right top, from(#7f59dc), to(#655be6)); background: linear-gradient(to right, #7f59dc, #655be6); height: 300px; width: 100%; ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12 text-center">
                            <h4 class="title mb-0">TalentIdea</h4>
                        </div>
                    </div>
                    <div class="row align-items-center mt-5">
                        <div class="col-md-6 mx-auto">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <button class="btn btn-block btn-lg btn-light"><i class="fa fa-search mr-2"></i> Temukan Creator</button>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <button class="btn btn-block btn-lg btn-outline-light">Daftar Sebagai Creator</button>
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
        <div class="col-md-7 mx-auto">
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
                        <h4 class="m-t-30 m-b-20">Kenapa Talentidea?</h4>
                        <h1 class="text-primary font-weight-bold">Karena kami mengubah ide Anda menjadi kenyataan dengan freelancer professional</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stats">
                            <div class="p-3 mini-stats-content">
                                <div class="media text-light">
                                    <i class="mx-3 my-auto thumb-md rounded-circle fa fa-star-o fa-3x"></i>
                                    <div class="media-body my-2">
                                        <h4 class="mt-0">Top Freelancers</h4>
                                        <p class="text-white-70 mb-0">Freelancer telah melalui seleksi dan proses verifikasi dari Talentidea</p>
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
                                        <p class="text-white-70 mb-0">Uang Anda akan kami lindungi, dan Freelancer akan mulai bekerja mengerjakan project Anda.</p>
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
                                        <p class="text-white-70 mb-0">Lebih dari 2 Freelancers tersedia dalam 17 kategori.</p>
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
                        <h4 class="m-t-30 m-b-20">Freelancer Populer</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach ($jasa as $data)
                    <div class="col-md-3">
                        <div class="card">
                            <a href="{{url('jasa/detail',$data->id)}}">
                                @if ($data->image)
                                <img class="card-img-top img-fluid" src="{{asset('images/jasa_image/'.$data->image)}}" alt="Card image cap">
                                @else
                                <img class="card-img-top img-fluid" src="user_template/assets/images/small/img-4.jpg" alt="Card image cap">
                                @endif
                                <div class="card-body">
                                    <h4 class="card-title font-20 mt-0">{{$data->nama}} </h4>
                                    <p class="card-text">{!! Str::limit($data->deskripsi), 50, $end='...' !!}</p>
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
                        <h4 class="m-t-30 m-b-20">Langkah mudah dalam menggunakan jasa Talentidea</h4>
                        <div class="card m-b-20">
                            <div class="card-body">
                                <section id="cd-timeline" class="cd-container">
                                    <div class="cd-timeline-block timeline-right">
                                        <div class="cd-timeline-img bg-success">
                                            <i class="mdi mdi-adjust"></i>
                                        </div>

                                        <div class="cd-timeline-content text-white">
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
    </div>
</div>
@endsection