@extends('Backend/admin/index_master')
@section('admin')
    


<div class="py-5 my-5 min-vh-100">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Header Setting</h4>


                <form class="forms-sample" action="{{route('header_update')}}" method="post" >
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="">


                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                            value="{{$header->title}}">
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="colorTitle">Color Title</label>
                        <input type="text" class="form-control" id="colorTitle" name="colorTitle" placeholder="Color Title"
                            value="{{$header->colorTitle}}">
                    </div>
                    @error('colorTitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="detail">Details</label>
                        <textarea required="" name="detail" id="detail" value="" class="form-control" rows="5">{{$header->detail}}</textarea>
                    </div>
                    @error('detail')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="link"
                            value="{{$header->link}}">
                    </div>
                    @error('link')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
       
                    <!-- end Image Input -->
                    <br><br>

                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-danger">Cancel</button>   

                </form>
            </div>
        </div>
    </div>

</div>





@endsection