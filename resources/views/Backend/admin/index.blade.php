@extends('Backend/admin/index_master')
@section('admin')

<?php
    $userData = Auth::user();
?>


{{-- <div class="content-wrapper"> --}}

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                            <img src="{{asset('Backend/assets/images/dashboard/Group126@2x.png')}}"
                                class="gradient-corona-img img-fluid" alt="">
                        </div>
                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                            <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                            <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique
                                layouts!</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                            <span>
                                <a href="#" target="_blank"
                                    class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">$12.34</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Potential growth</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">$17.34</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Revenue current</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">$12.34</h3>
                                <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-danger">
                                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Daily Income</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">$31.53</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Expense current</h6>
                </div>
            </div>
        </div>
    </div>



 

    {{-- DB Data = $userData --}}

    <div class="row">

        {{-- ----------------- Profile Setting Start -------------------- --}}
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Profile</h4>
                    <div class=""><img class="rounded-circle " width="200px" src="" alt=""></div>

                    <div class=" d-flex justify-content-center flex-column text-center">

                        <div class="testimonial-card d-flex justify-content-center flex-column text-center  ">

                            <center>
                                <img src="{{$userData->image ? asset($userData->image) : asset('upload/no_user_image.png')}}"
                                    alt="alan doe" class="rounded-circle img-thumbnail" width="80" height="80">
                            </center>

                            <p class="testimonial-name pt-2">{{$userData->name}}</p>
                            <p class="testimonial-name pt-1">Roll: {{$userData->roll}}</p>
                            <p class="testimonial-name pt-1">EMail: {{$userData->email}}</p>

                            <p class="testimonial-title">CEO & Founder Invision</p>

                            <img src="{{asset('upload/icons/quotes.svg')}}" alt="quotation" class="quotation-img"
                                width="26">
                            <br>
                            <p class="testimonial-desc">
                                Bio:Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                dolor dolor sit amet.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                    {{-- --}}
                    <h6 class=" font-weight-bold mb-0"><a href="{{route('profile.edit' )}}"
                            class="btn btn-danger mb-5">Edit</a>
                    </h6>
                </div>
            </div>
        </div>
        {{-- ----------------- Profile Setting End -------------------- --}}

       
        {{-- ----------------------------- User Sections -------------------------------- --}}
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">All Users</h4>
                        <p class="text-muted mb-1">sort by date</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                {{-- @foreach ($users as $user)
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-primary">
                                            <img src="{{$user->image ? asset($user->image) : asset('upload/no_image.jpg')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">{{$user->name}}</h6>
                                            <p class="text-muted mb-0">Status</p>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <p class="text-muted">Created: {{$user->created_at->diffForHumans()}}</p>
                                            <p class="text-muted mb-0">Update: {{$user->updated_at->diffForHumans()}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ----------------------------- User Sections -------------------------------- --}}


        {{-- ----------------------------- User Sections -------------------------------- --}}
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">New Appleyed</h4>
                        <p class="text-muted mb-1">sort by date</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                {{-- @foreach ($users as $user)
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-primary">
                                            <img src="{{$user->image ? asset($user->image) : asset('upload/no_image.jpg')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">{{$user->name}}</h6>
                                            <p class="text-muted mb-0">Status</p>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <p class="text-muted">Created: {{$user->created_at->diffForHumans()}}</p>
                                            <p class="text-muted mb-0">Update: {{$user->updated_at->diffForHumans()}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ----------------------------- User Sections -------------------------------- --}}

    </div>



    @endsection