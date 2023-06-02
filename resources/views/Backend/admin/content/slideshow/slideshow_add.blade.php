@extends('Backend/admin/index_master')
@section('admin')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<a href="{{route('page.content')}}" class="btn btn-primary mr-2">Back to Dashboard </a>
<div class="py-5 my-5 min-vh-100">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Slideshow</h4>


                <form class="forms-sample" action="{{route('slideshow_store')}}" method="post"enctype="multipart/form-data">
                    @csrf
                    
                    <!-- product Name -->
                    <div class="form-group">
                        <label for="title">Slideshow Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Slideshow Title">
                    </div>
                    @error('title')
                    <div class="pb-2" style="color:red">{{ $message }}</div>
                    @enderror

                    <!-- product sub -->
                    <div class="form-group">
                        <label for="detail"> Detail </label>
                        <input type="text" class="form-control" id="detail" name="detail" placeholder="Detail">
                    </div>
                    @error('detail')
                    <div class="pb-2" style="color:red">{{ $message }}</div>
                    @enderror


                   <!-- Icon  -->
                    <div class="form-group">
                        <label for="icons">Icon</label>
                        <select name="icons" id="icons" class="form-control" >
                                <option value="">Select a category</option>
                                <option value="fas fa-walking"><i class="fas fa-walking"></i>walking</option>
                                <option value="fas fas fa-tree"> <i class="fas fas fa-tree"></i>tree</option>
                                <option value="fas fa-snowflake"><i class="fas fa-snowflake"></i>snowflake</option>
                                <option value="fas fa-tint"><i class="fas fa-tint"></i>tint</option>
                                <option value="fas fa-sun"><i class="fas fa-sun"></i>sun</option>
                        </select>
                    </div>
                    @error('icons')
                    <div class="pb-2" style="color:red">{{ $message }}</div>
                    @enderror


                    {{-- Image Upload --}}
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                    </div>
                    @error('image')
                    <div class="pb-2" style="color:red">{{ $message }}</div>
                    @enderror


                    <!-- start Show Image -->
                    <div class="row mb-3 ">
                        <div class="col-sm-10 ">
                            <label for="showImage" class="col-sm-2 col-form-label"></label>
                            <img id="showImage" class="rounded avatar-xl" width="50" height="50" src="{{asset('upload/no_image.jpg')}}"
                                alt="Card image cap">
                        </div>
                    </div>
                    <!-- end Show Image -->
                    <button type="submit" class="btn btn-primary mr-2">Add</button>

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