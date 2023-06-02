@extends('Backend/user/index_master')
@section('admin')
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


{{-- DB Data -> $userData --}}

<div class="py-5 my-5 min-vh-100">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Profile Setting</h4>
                <center>
                    <img class="rounded-circle avatar-xl" width="200px"
                        src="{{asset($userData->img)}}" alt="">
                </center>

                {{-- Form Started --}}
                <form class="forms-sample" action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{$userData->id}}">


                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                            value="{{$userData->name}}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                            value="{{$userData->username}}">
                    </div>
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Username"
                            value="{{$userData->email}}">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                            value="{{$userData->title}}">
                    </div>


                    <!-- Bio -->
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea  name="bio" id="bio" value="" class="form-control" rows="5">{{$userData->bio}}</textarea>
                    </div>

                    <!-- start Image Input -->
                    <div>
                    </div class="form-group">
                    <label for="image">Upload Image</label>
                    <div class="input-group col-xs-12">
                        <input id="image" name="image" class="form-control" type="file">
                    </div>
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!-- end Image Input -->
                    <br><br>

                    <!-- start Show Image -->
                    <div class="row mb-3 ">
                        <div class="col-sm-10 ">
                            <label for="showImage" class="col-sm-2 col-form-label"></label>
                            <img id="showImage" class="rounded-circle avatar-xl" width="100" src="{{$userData->image ? asset($userData->img) : asset('upload/no_image.jpg')}}"
                                alt="Card image cap">
                        </div>
                    </div>
                    <!-- end Show Image -->
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-danger">Cancel</button>   

                </form>
            </div>
        </div>
    </div>

</div>



{{-- show new uploaded image --}}
<script type="text/javascript">
    $(document).ready(function () {
        $("#image").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>


@endsection