@extends('Backend/admin/index_master')
@section('admin')
<link rel="stylesheet" href="{{ asset('css/Tag.css') }}">
   
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Page Settings </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Page settings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Home</li>
          </ol>
        </nav>
      </div>
      <div class="row">

      <!------------- HEADER CONTENT START ---------------- -->
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Header</h4>
              <p class="card-description"> Section <code class="text-success"> 1 </code>
              </p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Color Title</th>
                      <th>Details</th>
                      <th>Updated At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$header->id}}</td>
                      <td>{{$header->title}}</td>
                      <td>{{$header->colorTitle}}</td>
                      <td>{{$header->detail}}</td>
                      <td>
                        {{ $header->updated_at ? $header->updated_at->diffForHumans() : $header->created_at->diffForHumans()}}
                      </td>
                      <td>
                        <a href="{{route('header_edit')}}" class="btn btn-danger">Edit</a>
                        {{-- <label class="badge badge-danger">Edit</label> --}}
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      <!------------- HEADER CONTENT START ---------------- -->

      <!------------- SLIDESHOW CONTENT START ---------------- -->
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Slide show</h4>
              <p class="card-description"> Slidshow <code class="text-success"> 4 </code>
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Detail</th>
                      <th>icon</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($slideshow as $item)                    
                      <tr> 
                        <td>{{$item->id}}</td>
                        <td><img src="{{asset($item->image)}}" alt="" class="rounded avatar-lg" style="width: 50px"></td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->detail}}</td>
                        <td><i class="{{$item->icon}}"></i></td>
                        <td><a href="{{route('slideshow_edit' , $item->id)}}" class="badge badge-info">Edite</a></td>
                        <td>
                          <form action="{{route('slideshow_delete' , $item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="badge badge-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <br>
              <a href="{{route('slideshow_add')}}" class="btn btn-primary ">Add Slideshow</a>
            </div>
          </div>
        </div>
      <!------------- SLIDESHOW CONTENT END ---------------- -->



    <!------------- TAGS CONTENT START ---------------- -->

      <div class="col-md-12 col-xl-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tag Section</h4>

            <form action="{{route('tags.store')}}" method="POST">
              @csrf
              <div class="add-items d-flex">

                <input type="text" id="tagName" name="tagName"  class="form-control" placeholder="Add new Tag" required>
                <button type="submit" class="add btn btn-primary">Add</button>
                </div>
              </form>

            <div class="container " style="padding: 0;">
              <div class="row justify-content-start row-costum" >
                @foreach ($tags as $tag)
                  <div class="col-1 tag-container">
                    <a href="" class="btn btn-info">#{{ $tag->tagName }}</a>
                    <form action="{{route('tags.destroy', $tag->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit">
                        <i class="fa-solid fa-circle-xmark" style="color:red;"></i>
                      </button>
                    </form>
                    
                    </div>
                @endforeach
              </div>
            </div>

          </div>
        </div>
      </div>
    <!------------- TAGS CONTENT END ---------------- -->


     <!------------- Overview CONTENT START ---------------- -->
     <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Overview Section</h4>
          <p class="card-description"> Overview Cards <code class="text-success"> 4 </code>
          </p>
          {{-- title --}}
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Intro</th>
                  <th>Title</th>
                  <th>Detail</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>              
                  <tr> 
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td><a href="{{route('slideshow_edit' , $item->id)}}" class="badge badge-info">Edite</a></td>
                  </tr>
              </tbody>
            </table>
          </div>
          
          {{-- Cards --}}
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Detail</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($slideshow as $item)                    
                  <tr> 
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset($item->image)}}" alt="" class="rounded avatar-lg" style="width: 50px"></td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->detail}}</td>
                    <td><a href="{{route('slideshow_edit' , $item->id)}}" class="badge badge-info">Edite</a></td>
                    <td>
                      <form action="{{route('slideshow_delete' , $item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="badge badge-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <br>
          <a href="{{route('slideshow_add')}}" class="btn btn-primary ">Add Slideshow</a>
        </div>
      </div>
    </div>
  <!------------- Overview CONTENT END ---------------- -->









        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Striped Table</h4>
              <p class="card-description"> Add class <code>.table-striped</code>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> User </th>
                      <th> First name </th>
                      <th> Progress </th>
                      <th> Amount </th>
                      <th> Deadline </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                      </td>
                      <td> Herman Beck </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                      </td>
                      <td> Messsy Adam </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $245.30 </td>
                      <td> July 1, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                      </td>
                      <td> John Richards </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $138.00 </td>
                      <td> Apr 12, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                      </td>
                      <td> Peter Meggik </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                      </td>
                      <td> Edward </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 160.25 </td>
                      <td> May 03, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                      </td>
                      <td> John Doe </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 123.21 </td>
                      <td> April 05, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                      </td>
                      <td> Henry Tom </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 150.00 </td>
                      <td> June 16, 2015 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description"> Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> First name </th>
                      <th> Progress </th>
                      <th> Amount </th>
                      <th> Deadline </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td> Herman Beck </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr>
                      <td> 2 </td>
                      <td> Messsy Adam </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $245.30 </td>
                      <td> July 1, 2015 </td>
                    </tr>
                    <tr>
                      <td> 3 </td>
                      <td> John Richards </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $138.00 </td>
                      <td> Apr 12, 2015 </td>
                    </tr>
                    <tr>
                      <td> 4 </td>
                      <td> Peter Meggik </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr>
                      <td> 5 </td>
                      <td> Edward </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 160.25 </td>
                      <td> May 03, 2015 </td>
                    </tr>
                    <tr>
                      <td> 6 </td>
                      <td> John Doe </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 123.21 </td>
                      <td> April 05, 2015 </td>
                    </tr>
                    <tr>
                      <td> 7 </td>
                      <td> Henry Tom </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 150.00 </td>
                      <td> June 16, 2015 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Inverse table</h4>
              <p class="card-description"> Add class <code>.table-dark</code>
              </p>
              <div class="table-responsive">
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> First name </th>
                      <th> Amount </th>
                      <th> Deadline </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td> Herman Beck </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr>
                      <td> 2 </td>
                      <td> Messsy Adam </td>
                      <td> $245.30 </td>
                      <td> July 1, 2015 </td>
                    </tr>
                    <tr>
                      <td> 3 </td>
                      <td> John Richards </td>
                      <td> $138.00 </td>
                      <td> Apr 12, 2015 </td>
                    </tr>
                    <tr>
                      <td> 4 </td>
                      <td> Peter Meggik </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr>
                      <td> 5 </td>
                      <td> Edward </td>
                      <td> $ 160.25 </td>
                      <td> May 03, 2015 </td>
                    </tr>
                    <tr>
                      <td> 6 </td>
                      <td> John Doe </td>
                      <td> $ 123.21 </td>
                      <td> April 05, 2015 </td>
                    </tr>
                    <tr>
                      <td> 7 </td>
                      <td> Henry Tom </td>
                      <td> $ 150.00 </td>
                      <td> June 16, 2015 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table with contextual classes</h4>
              <p class="card-description"> Add class <code>.table-{color}</code>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered table-contextual">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> First name </th>
                      <th> Product </th>
                      <th> Amount </th>
                      <th> Deadline </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-info">
                      <td> 1 </td>
                      <td> Herman Beck </td>
                      <td> Photoshop </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr class="table-warning">
                      <td> 2 </td>
                      <td> Messsy Adam </td>
                      <td> Flash </td>
                      <td> $245.30 </td>
                      <td> July 1, 2015 </td>
                    </tr>
                    <tr class="table-danger">
                      <td> 3 </td>
                      <td> John Richards </td>
                      <td> Premeire </td>
                      <td> $138.00 </td>
                      <td> Apr 12, 2015 </td>
                    </tr>
                    <tr class="table-success">
                      <td> 4 </td>
                      <td> Peter Meggik </td>
                      <td> After effects </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr class="table-primary">
                      <td> 5 </td>
                      <td> Edward </td>
                      <td> Illustrator </td>
                      <td> $ 160.25 </td>
                      <td> May 03, 2015 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
      </div>
    </footer>
    <!-- partial -->
  </div>


  <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
       case 'info':
       toastr.info(" {{ Session::get('message') }} ");
       break;
   
       case 'success':
       toastr.success(" {{ Session::get('message') }} ");
       break;
   
       case 'warning':
       toastr.warning(" {{ Session::get('message') }} ");
       break;
   
       case 'error':
       toastr.error(" {{ Session::get('message') }} ");
       break; 
    }
    @endif 
   </script>





@endsection