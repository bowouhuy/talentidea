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
                        <h5 class="mt-0 mb-4"><i class="ion-monitor h4 mr-2 text-primary"></i> Computers</h5>
                        <div class="row align-items-center mb-4">
                            <div class="col-6">
                                <p class="text-muted">This Month Sales</p>
                                <h4><sup class="mr-1"><small>$</small></sup>14,352</h4>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <span class="peity-pie" data-peity='{ "fill": ["#655be6", "#f2f2f2"]}' data-width="60" data-height="60">70/100</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-muted mb-3">Top Cities Sales</p>
                            <div class="row">
                                <div class="col-6">
                                    <p class="text-muted mb-2">Los Angeles : <b class="text-dark">$ 8,235</b></p>
                                </div>
                                <div class="col-6">
                                    <p class="text-muted mb-2">San Francisco : <b class="text-dark">$ 7,256</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Latest Transactions</h4>
                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">(#) Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col" colspan="2">Amount</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">#16252</th>
                                        <td>
                                            <div>
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Rafael Reardon
                                            </div>
                                        </td>
                                        <td>14/10/2018</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>$80</td>
                                        <td>1</td>
                                        <td>$80</td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Invoice</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#16253</th>
                                        <td>
                                            <div>
                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Thomas Hirsch
                                            </div>
                                        </td>
                                        <td>15/10/2018</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>$76</td>
                                        <td>2</td>
                                        <td>$152</td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Invoice</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#16254</th>
                                        <td>
                                            <div>
                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Archer Desaillly
                                            </div>
                                        </td>
                                        <td>15/10/2018</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>$86</td>
                                        <td>1</td>
                                        <td>$86</td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Invoice</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#16255</th>
                                        <td>
                                            <div>
                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Michael Flannery
                                            </div>
                                        </td>
                                        <td>16/10/2018</td>
                                        <td><span class="badge badge-danger">Cancel</span></td>
                                        <td>$82</td>
                                        <td>2</td>
                                        <td>$164</td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Invoice</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#16256</th>
                                        <td>
                                            <div>
                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Jamie Fishbourne
                                            </div>
                                        </td>
                                        <td>17/10/2018</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>$84</td>
                                        <td>2</td>
                                        <td>$84</td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Invoice</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection