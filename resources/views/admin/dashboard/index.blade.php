@extends('admin.layouts.main')

@section('body')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stats">
                    <div class="p-3 mini-stats-content">
                        <div class="mb-4">
                            <div class="float-right text-right">
                                <span class="badge badge-light text-info mt-2 mb-2"> + 11% </span> 
                                <p class="text-white-50">From previous period</p>
                            </div>
                            
                            <span class="peity-pie" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"]}' data-width="54" data-height="54">5/8</span>
                        </div>
                    </div>
                    <div class="ml-3 mr-3">
                        <div class="bg-white p-3 mini-stats-desc rounded">
                            <h5 class="float-right mt-0">1758</h5>
                            <h6 class="mt-0 mb-3">Orders</h6>
                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stats">
                    <div class="p-3 mini-stats-content">
                        <div class="mb-4">
                            <div class="float-right text-right">
                                <span class="badge badge-light text-danger mt-2 mb-2"> - 27% </span> 
                                <p class="text-white-50">From previous period</p>
                            </div>
                            
                            <span class="peity-donut" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"], "innerRadius": 18, "radius": 32 }' data-width="54" data-height="54">2/5</span>
                        </div>
                    </div>
                    <div class="ml-3 mr-3">
                        <div class="bg-white p-3 mini-stats-desc rounded">
                            <h5 class="float-right mt-0">48259</h5>
                            <h6 class="mt-0 mb-3">Revenue</h6>
                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stats">
                    <div class="p-3 mini-stats-content">
                        <div class="mb-4">
                            <div class="float-right text-right">
                                <span class="badge badge-light text-primary mt-2 mb-2"> 0% </span> 
                                <p class="text-white-50">From previous period</p>
                            </div>
                            
                            <span class="peity-pie" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"]}' data-width="54" data-height="54">3/8</span>
                        </div>
                    </div>
                    <div class="ml-3 mr-3">
                        <div class="bg-white p-3 mini-stats-desc rounded">
                            <h5 class="float-right mt-0">$17.5</h5>
                            <h6 class="mt-0 mb-3">Average Price</h6>
                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stats">
                    <div class="p-3 mini-stats-content">
                        <div class="mb-4">
                            <div class="float-right text-right">
                                <span class="badge badge-light text-info mt-2 mb-2"> - 89% </span> 
                                <p class="text-white-50">From previous period</p>
                            </div>
                            <span class="peity-donut" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"], "innerRadius": 18, "radius": 32 }' data-width="54" data-height="54">3/5</span>
                        </div>
                    </div>
                    <div class="ml-3 mr-3">
                        <div class="bg-white p-3 mini-stats-desc rounded">
                            <h5 class="float-right mt-0">2048</h5>
                            <h6 class="mt-0 mb-3">Product Sold</h6>
                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-5">Monthly Earning</h4>
                        <div id="morris-bar-stacked" class="morris-chart-height morris-charts"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Sales Analytics</h4>

                        <div class="row text-center m-t-20">
                            <div class="col-6">
                                <h5 class="">56241</h5>
                                <p class="text-muted font-14">Marketplace</p>
                            </div>
                            <div class="col-6">
                                <h5 class="">23651</h5>
                                <p class="text-muted font-14">Total Income</p>
                            </div>
                        </div>

                        <div id="morris-donut-example" class="dash-chart morris-charts text-center"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
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
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
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
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
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
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
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
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
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
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
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