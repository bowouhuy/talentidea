@extends('user.layouts.main')

@section('body')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="row mb-3">
            <div class="col-12">
                <h4 class="m-t-30 m-b-20">Jasa Terbaru</h4>
                <div class="card-columns">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="user_template/assets/images/small/img-4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">Card title</h4>
                            <p class="card-text">This is a longer card with supporting text below as
                                a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
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
                <h4 class="m-t-30 m-b-20">Cara Pemesanan</h4>
                <div class="card m-b-20">
                    <div class="card-body">
                        <section id="cd-timeline" class="cd-container">
                            <div class="cd-timeline-block timeline-right">
                                <div class="cd-timeline-img bg-success">
                                    <i class="mdi mdi-adjust"></i>
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content text-white">
                                    <h3>Timeline Event One</h3>
                                    <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <span class="cd-date">STEP 1</span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->
                            <div class="cd-timeline-block timeline-left">
                                <div class="cd-timeline-img bg-danger">
                                    <i class="mdi mdi-adjust"></i>
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content text-white">
                                    <h3>Timeline Event Two</h3>
                                    <p class="m-b-20 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                    <button type="button" class="btn btn-light waves-effect waves-light m-t-5">See more detail</button>

                                    <span class="cd-date">STEP 2</span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-content last text-white">
                                    <h3>Timeline Event End</h3>
                                    <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                                    <span class="cd-date">STEP 3</span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection