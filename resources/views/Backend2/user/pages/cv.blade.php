@extends('Backend/user/index_master')
@section('admin')

<link rel="stylesheet" href="{{ asset('css/userCv.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<div class="row">



    {{-- ----------------- LEFT SIDE CONTENT START  -------------------- --}}
    <div class="col-md-5 grid-margin stretch-card d-flex flex-column">


        <!------------------- Title -------------------- -->
        <div class="card mb-2 " id="basic-info">
            <div class="card-body ">
                <div class="card-body1">
                    <h4 class="card-title m-0">Resume</h4>
                    @if ($errors->any)
                        <div class="alert text-danger"> 
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{$error}} </li>    
                                @endforeach
                            </ul>    
                        </div> 
                    @endif
                    {{-- <a href="{{route('profile.edit' )}}" class="btn btn-danger text-center">Edit</a> --}}
                </div>
            </div>
        </div>
        <!------------------- Title -------------------- -->    


        <!------------------- Basic Info -------------------- -->
        <div class="card mb-2 ">
            <div class="card-body ">
                <div class="row basic-info">
                    <div class="col-6 left-col"> 
                        <div>
                            <div>
                                <h4>{{$userData->name}}</h4>
                                <p class="small blockquote-footer">{{$userInfo->title}}</p>
                            </div>
                            <br>
                            <div>
                                <div class="d-flex ">
                                    <span class="mdi mdi-email-check-outline pr-2"></span>
                                    <p class="text-center">{{$userData->email}}</p>
                                </div>
                                <div class="d-flex">
                                    <span class="mdi mdi-cellphone-iphone pr-2"></span>
                                    <p>{{$userInfo->phone}}</p>
                                </div>
                                <div class="d-flex">
                                    <span class="mdi mdi-map-marker-outline pr-2"></span>
                                    <p>{{$userInfo->address}}</p>
                                </div>
                            </div>
                        </div>
     
                    </div> 
                    <div class="col-6 right-col position-relative">
                        <div class="position-absolute top-10" style="right: 10%; transform: translateX(50%);">
                            <a href="#" class="add-form"> <span class="mdi mdi-circle-edit-outline" style="color:red; cursor: pointer"> </span></a>
                        </div>
                        <div class="position-absolute " style="top: 60%; right: 10%; transform: translateY(-50%); ">
                            <img src="{{$userInfo->image ? asset($userInfo->image) : asset('upload/no_image.jpg')}}" class="rounded-circle" alt="Profle Picture" width="100px">
                        </div>
                    </div>
                </div>



                <!-- Add form container to the card   -->
                <div class="form-container2 dropdown" style="display:none " >
                    <form action="{{route('profile.update.full')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$userData->id}}">
                        <div class="form-group">
                            <label for="name">Full name<span>*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="{{$userData->name}}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        <div class="form-group">
                            <label for="title">Job title<span>optional</span></label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$userData->title}}" placeholder="Year">
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span>recommended</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$userData->email}}" placeholder="Email">
                        </div>
                        @error('email')
                         <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        <div class="form-group">
                            <label for="phone">Phone<span>recommended</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$userData->phone}}" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Address <span>recommended</span> </label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$userData->address}}" placeholder="Address">
                        </div>
                        
                        <div class="form-group">
                            <label for="image">Upload Image</label>
                            <div class="input-group col-xs-12">
                                <input id="image" name="image" class="form-control" type="file">
                            </div>
                        </div>
                        
                        <br>
                        <h4>Links</h4>
                        <br>
                        <div class="form-group">
                            <label for="linkedInLink">LinkedIn <span>optional</span> </label>
                            <input type="text" class="form-control" id="linkedInLink" name="linkedInLink" value="{{$userData->linkedInLink}}" placeholder="LinkedIn">
                        </div>
                        <div class="form-group">
                            <label for="dribbbleLink">Dribbble <span>optional</span> </label>
                            <input type="text" class="form-control" id="dribbbleLink" name="dribbbleLink" value="{{$userData->dribbbleLink}}" placeholder="Dribbble">
                        </div>
                        <div class="form-group">
                            <label for="behanceLink">Behance <span>optional</span> </label>
                            <input type="text" class="form-control" id="behanceLink" name="behanceLink" value="{{$userData->behanceLink}}" placeholder="Behance">
                        </div>
                        <div class="form-group">
                            <label for="githubLink">Github <span>recommended</span> </label>
                            <input type="text" class="form-control" id="githubLink" name="githubLink" value="{{$userData->githubLink}}" placeholder="Github">
                        </div>
                        <div class="form-group">
                            <label for="websiteLink">Website <span>optional</span> </label>
                            <input type="text" class="form-control" id="websiteLink" name="websiteLink" value="{{$userData->websiteLink}}" placeholder="Website">
                        </div>
                        <br>

                        <button type="submit" class="btn btn-success">save</button>
                        <a href="" class="btn btn-danger add-work-experience">Cancel</a>
                        <br><br>
                    </form>
                </div>

                <!-- Add "Add Work Experience" button to the card -->

            </div>
        </div>
        <!------------------- Basic Info -------------------- -->


        <!------------------- WORKS EXPERIRNCE START -------------------- -->    
        <div class="card mb-2 dropdown">
            <div class="card-header">
                <div class="card-title">
                    <div class="card-title-left">
                        <span class="mdi mdi-bag-checked"></span>
                        <h4>Wrok Experience </h4>
                    </div>
                    <span class="mdi mdi-chevron-down"></span>
                </div>
            </div>
            <div class="card-body ">

                <!-- Content -->
                
                    
                @if ($workExprience->count() > 0)
                    @foreach ($workExprience as $exp) 
                    <div class="card card-content card-work-experience">
                        <div class="card-body">
                            <div class="card-body-content">
                                <div>
                                    <h4 class="card-title m-0">{{$exp->jobTitle}}</h4> 
                                    <p style="padding-left: 10px">{{$exp->jobTitleStartDate}} - {{$exp->jobTitleEndDate}}</p>
                                </div>
                                <div>
                                    <p>{{$exp->company}}</p>
                                    <p>{{$exp->country}}</p>  
                                </div>
                                <form action="{{route('remove.workexprience' , $exp->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary" style="background: transparent; border:none;"><span class="mdi mdi-delete-outline" style="color: rgb(181, 48, 48) ; font-size: 1.5rem; margin-right:0;" ></span></button>
                                </form>
                                
                                <div class="d-flex flex-column" style="font-size: 1.5rem; ">
                                    <span class="btn-move-up mdi mdi-menu-up"></span>
                                    <span class="btn-move-down mdi mdi-menu-down"></span>   
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                     <p>No work experiences found for this user.</p>
                @endif




                <!-- Add form container to the card -->
                <div class="form-container" style="display:none " >
                    <form  method="POST" action="{{route('add.workexprience')}}">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{{$userData->id}}">

                        <div class="form-group">
                            <label for="jobTitle">Job Title <span>*</span></label>
                            <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Enter Hob Title">
                        </div>
                        @error('jobTitle')
                                <div class="alert dalert-danger">{{ $message }} </div>
                        @enderror
                        <div class="form-group">
                            <label for="jobTitleStartDate">Start Date<span>optional</span></label>
                            <input type="text" class="form-control" id="jobTitleStartDate" name="jobTitleStartDate" placeholder="Year">
                        </div>
                        <div class="form-group">
                            <label for="jobTitleEndDate">End Date<span>optional</span></label>
                            <input type="text" class="form-control" id="jobTitleEndDate" name="jobTitleEndDate" placeholder="Year">
                        </div>
                        <div class="form-group">
                            <label for="company">Employer <span>optional</span> </label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                        </div>
                        <div class="form-group">
                            <label for="country">Country <span>*</span> </label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                        </div>

                        <button type="submit" class="btn btn-success">save</button>
                        <a href="" class="btn btn-danger add-work-experience">Cancel</a>
                    </form>
                </div>
                <!-- Add "Add Work Experience" button to the card -->
                <a href="#" class="btn btn-info mt-5 mb-5 add-form"> <span class="mdi mdi-plus" style="color:white; "></span> Add Work Experience </a>


            </div>
        </div>
        <!------------------- WORKS EXPERIRNCE END -------------------- --> 
  

        <!------------------- EDUCATION START -------------------- --> 
        <div class="card mb-2 dropdown">
            <div class="card-header">
                <div class="card-title">
                    <div class="card-title-left">
                        <span class="mdi mdi-bag-checked"></span>
                        <h4>Education</h4>
                    </div>
                    <span class="mdi mdi-chevron-down"></span>
                </div>
            </div>
            <div class="card-body p-0 ">

                @if($education->count())
                    @foreach ($education as $edu)                       
                        <!-- Content -->
                        <div class="card card-content">
                            <div class="card-body">
                                <div class="card-body-content">
                                    <div>
                                        <h4 class="card-title m-0"> {{$edu->degree}}</h4> 
                                        <p style="padding-left: 10px"> {{$edu->startDate}} -  {{$edu->endDate}}</p>
                                    </div>
                                    <h6>{{$edu->city}} - {{$edu->country}}</h6>
                                    <form action="{{route('remove.education' , $edu->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary" style="background: transparent; border:none;"><span class="mdi mdi-delete-outline" style="color: rgb(181, 48, 48) ; font-size: 1.5rem; margin-right:0;" ></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach               
                @endif

                <!-- Add form container to the card -->
                <div class="form-container" style="display:none " >
                    <form method="POST" action="{{route('add.education')}}" >
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$userData->id}}">
                        <div class="form-group">
                            <label for="degree">Degree <span>*</span></label>
                            <input type="text" class="form-control" value="{{ old('degree') }}" id="degree" name="degree" placeholder="Enter Degree / Field Of Study / Exchange Semester">
                        </div>
                        <div class="form-group">
                            <label for="school">School<span>optional</span></label>
                            <input type="text" class="form-control" value="{{ old('school') }}" id="school" name="school" placeholder="Enter school / university">
                        </div>
                        <div class="form-group">
                            <label for="startDate">Start Date<span>optional</span></label>
                            <input type="text" class="form-control" value="{{ old('startDate') }}" id="startDate" name="startDate" placeholder="Year">
                        </div>
                        <div class="form-group">
                            <label for="endDate">End Date<span>optional</span></label>
                            <input type="text" class="form-control" value="{{ old('endDate') }}" id="endDate" name="endDate" placeholder="Year">
                        </div>
                        <div class="form-group">
                            <label for="city">City <span>optional</span> </label>
                            <input type="text" class="form-control" value="{{ old('city') }}" id="city" name="city" placeholder="Enter City">
                        </div>
                        <div class="form-group">
                            <label for="country">Country <span>*</span> </label>
                            <input type="text" class="form-control" value="{{ old('country') }}" id="country" name="country" placeholder="Enter Country">
                        </div>

                        <button type="submit" class="btn btn-success">save</button>
                        <a href="" class="btn btn-danger add-work-experience">Cancel</a>
                    </form>
                </div>
                <!-- Add "Add Work Experience" button to the card -->
            
                <a href="#" class="btn btn-info mt-5 mb-5 add-form"> <span class="mdi mdi-plus" style="color:white; "></span> Education </a>

            </div>
        </div>

        <!------------------- EDUCATION END -------------------- --> 

        <!------------------- CERTIFICATES START -------------------- --> 
        <div class="card mb-2 dropdown">
            <div class="card-header">
                <div class="card-title">
                    <div class="card-title-left">
                        <span class="mdi mdi-bag-checked"></span>
                        <h4>certificates</h4>
                    </div>
                    <span class="mdi mdi-chevron-down"></span>
                </div>
            </div>
            <div class="card-body p-0 ">

                @if ($userCertificate)
                   @foreach ($userCertificate as $certificate)
                        <!-- Content -->
                        <div class="card card-content">
                            <div class="card-body">
                                <div class="card-body-content">
                                    <div>
                                        <h4 class="card-title m-0">{{$certificate->certificate}}</h4> 
                                        <p style="padding-left: 10px">{{$certificate->additionalinformation}}</p>
                                    </div>
                                    <form action="{{route('remove.certificate' , $certificate->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary" style="background: transparent; border:none;"><span class="mdi mdi-delete-outline" style="color: rgb(181, 48, 48) ; font-size: 1.5rem; margin-right:0;" ></span></button>
                                    </form>                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif
                <!-- Content -->

                <!-- Add form container to the card -->
                <div class="form-container" style="display:none " >
                    <form action="{{route('add.certification')}}" method="POST" >
                        @csrf
                        <input type="hidden" name="id" value="{{$userData->id}}">
                        <div class="form-group">
                            <label for="certificate">Certificate <span>*</span></label>
                            <input type="text" class="form-control" id="certificate" name="certificate" placeholder="Enter Certificate">
                        </div>
                        <div class="form-group">
                            <label for="additionalinformation">Additional informationl<span>optional</span></label>
                            <input type="text" class="form-control" id="additionalinformation" name="additionalinformation" placeholder="eg. Level 1 and 2">
                        </div>

                        <button type="submit" class="btn btn-success">save</button>
                        <a href="" class="btn btn-danger add-work-experience">Cancel</a>
                    </form>
                </div>

                <!-- Add "Add Work Experience" button to the card -->
                <a href="#" class="btn btn-info mt-5 mb-5 add-form"> <span class="mdi mdi-plus" style="color:white; "></span> Certificates </a>
            </div>
        </div>
        <!------------------- CERTIFICATES END -------------------- --> 


        <!------------------- ABILITIES START -------------------- --> 
        <div class="card mb-2 dropdown">
            <div class="card-header">
                <div class="card-title">
                    <div class="card-title-left">
                        <span class="mdi mdi-bag-checked"></span>
                        <h4>Skills</h4>
                    </div>
                    <span class="mdi mdi-chevron-down"></span>
                </div>
            </div>
            <div class="card-body p-0 ">


                @if ($userSkill)
                    @foreach ($userSkill as $skill)               
                    <!-- Content -->
                        <div class="card card-content">
                            <div class="card-body">
                                <div class="card-body-content">
                                    <div>
                                        <h4 class="card-title m-0">{{$skill->skill}} <span style="font-size: 10px; padding-left: 10px"> {{$skill->subSkill}} </span></h4>
                                    </div>
                                    <form action="{{route('remove.skill' , $skill->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary" style="background: transparent; border:none;"><span class="mdi mdi-delete-outline" style="color: rgb(181, 48, 48) ; font-size: 1.5rem; margin-right:0;" ></span></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    @endforeach 
                @endif

                <!-- Add form container to the card -->
                <div class="form-container" style="display:none " >
                    <form  action="{{route('add.skill')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$userData->id}}">
                        <div class="form-group">
                            <label for="skill">Skill <span>*</span></label>
                            <input type="text" class="form-control" id="skill" name="skill" placeholder="Enter Skill">
                        </div>
                        <div class="form-group">
                            <label for="subSkill">Information / Sub-skills<span>recommended</span></label>
                            <input type="text" class="form-control" id="subSkill" name="subSkill" placeholder="Enter information or sub-skills">
                        </div>

                        <div class="form-group">
                            <label for="skillLevel">Select skill level</label>
                            <select class="form-control" id="skillLevel" name="skillLevel">
                                <option value="">Select Select skill level</option>
                                <option value="novice">Novice</option>
                                <option value="beginner">Beginner</option>
                                <option value="skillful">Skillful</option>
                                <option value="experienced">Experienced</option>
                                <option value="expert">Expert</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">save</button>
                        <a href="" class="btn btn-danger add-work-experience">Cancel</a>
                    </form>
                </div>                


                <!-- Add "Add Work Experience" button to the card -->
                <a href="#" class="btn btn-info mt-5 mb-5 add-form"> <span class="mdi mdi-plus" style="color:white; "></span> Skill </a>
                
            </div>
        </div>
        <!------------------- ABILITIES END -------------------- --> 



        <!------------------- LANGUAGES START -------------------- --> 
        <div class="card mb-2 dropdown">
            <div class="card-header">
                <div class="card-title">
                    <div class="card-title-left">
                        <span class="mdi mdi-bag-checked"></span>
                        <h4>Languages</h4>
                    </div>
                    <span class="mdi mdi-chevron-down"></span>
                </div>
            </div>
            <div class="card-body p-0 ">

                @if ($userLanguage)
                    @foreach ($userLanguage as $lang)
                        <!-- Content -->
                        <div class="card card-content">
                            <div class="card-body">
                                <div class="card-body-content">
                                    <div>
                                        <h4 class="card-title m-0"> {{$lang->language}} <span style="font-size: 10px; padding-left: 10px"> {{$lang->languageAddInfo}} - {{$lang->languageLevel}} </span> </h4>
                                    </div>
                                    <form action="{{route('remove.language' , $lang->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary" style="background: transparent; border:none;"><span class="mdi mdi-delete-outline" style="color: rgb(181, 48, 48) ; font-size: 1.5rem; margin-right:0;" ></span></button>
                                    </form>                                </div>
                            </div>
                        </div>                      
                    @endforeach
                @endif


                <!-- Add form container to the card -->
                <div class="form-container" style="display:none " >
                    <form action="{{route('add.lanquage')}}" method="POST" >
                        @csrf
                        <input type="hidden" name="id" value="{{$userData->id}}">
                        <div class="form-group">
                            <label for="language">Language <span>*</span></label>
                            <input type="text" class="form-control" id="language" name="language" placeholder="Enter language">
                        </div>
                        <div class="form-group">
                            <label for="languageAddInfo">Additional information <span>recommended</span></label>
                            <input type="text" class="form-control" id="languageAddInfo" name="languageAddInfo" placeholder="e.g. C2, 4+, TOEFL, IELTS,...">
                        </div>
                        <div class="form-group">
                            <label for="languageLevel">Language level</label>
                            <select class="form-control" id="languageLevel" name="languageLevel">
                                <option value="">Select language level</option>
                                <option value="Beginner">Beginner (A1, 0/0+)</option>
                                <option value="Intermediate">Elementary proficiency (A2, 1)</option>
                                <option value="Advanced">Limited working proficiency (B1, 1+)</option>
                                <option value="profetional">Highly proficient in speaking and writing (B2-C1, 2/2+/3/3+)</option>
                                <option value="native">Native / full working proficiency (C2, 4/4+)</option>
                            </select>
                        </div>
                        

                        <button type="submit" class="btn btn-success">save</button>
                        <a href="" class="btn btn-danger add-work-experience">Cancel</a>
                    </form>
                </div>                


                <!-- Add "Add Work Experience" button to the card -->
                <a href="#" class="btn btn-info mt-5 mb-5 add-form"> <span class="mdi mdi-plus" style="color:white; "></span> Language </a>
                
            </div>
        </div>
        <!------------------- LANGUAGES END -------------------- --> 



        <!------------------- SUMMARY START -------------------- --> 
        <div class="card mb-2 dropdown">
            <div class="card-header">
                <div class="card-title">
                    <div class="card-title-left">
                        <span class="mdi mdi-bag-checked"></span>
                        <h4>Summary</h4>
                    </div>
                    <span class="mdi mdi-chevron-down"></span>
                </div>
            </div>
            <div class="card-body p-0 ">

                @if ($userSummary)  
                    <!-- Content -->
                    <div class="card card-content">
                        <div class="card-body">
                            <div class="card-body-content">
                                <div>
                                    <p class="card-title m-0 " style="color:rgb(170, 170, 170)">
                                       {{$userSummary->summary}}
                                    </p> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Add form container to the card -->
                <div class="form-container" style="display:none " >
                    @if ($userSummary === NULL)
                        <form action="{{route('add.summary')}}" method="POST" >
                            @csrf
                            <input type="hidden" name="id" value="{{$userData->id}}">
                            <div class="form-group">
                                <label for="summary">Summary</label>
                                <textarea class="form-control" id="summary" rows="3" name="summary" placeholder="Add you Summay Here"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">save</button>
                            <a href="" class="btn btn-danger add-form">Cancel</a>
                        </form>
                    @else
                        <form action="{{route('edit.summary')}}" method="POST" >
                            @csrf
                            <input type="hidden" name="id" value="{{$userData->id}}">
                            <div class="form-group">
                                <label for="summary">Summary</label>
                                <textarea class="form-control" id="summary" rows="3" name="summary" placeholder="Add you Summay Here">{{$userSummary->summary}} </textarea>
                            </div>
                            <button type="submit" class="btn btn-success">save</button>
                            <a href="" class="btn btn-danger add-form">Cancel</a>
                        </form>
                        
                    @endif

                </div>                


                <!-- Add "Add Work Experience" button to the card -->
                <a href="#" class="btn btn-info mt-5 mb-5 add-form"> <span class="mdi mdi-plus" style="color:white; "></span> {{$userSummary ? 'Edit' : 'Add Summary' }}</a>
                
            </div>
        </div>
        <!------------------- SUMMARY END -------------------- --> 



    </div>
    {{-- ----------------- LEFT SIDE CONTENT END -------------------- --}}








    {{-- ----------------- RIGHT SIDE CONTENT CV PDF START -------------------- --}}
    <div class="col-md-7 grid-margin stretch-card ">
        <div class="card ">


            <div class="cart-body-right">
                {{-- ----------------- HEADER CV START -------------------- --}}
                <div class="cv-header">
                    <h2>{{$userData->name}}</h2>
                    <h6>{{$userInfo->title}}</h6>
                    <div class="kontact">
                        <div class="kontact-content">
                            <div class="kontact-content-flex">
                                <p class="cv-email">
                                    <span><span class="mdi mdi-email-outline"></span></span> {{$userData->email}}
                                </p>
                                <div class="space"></div>
                                <p class="cv-phone">
                                    <span><span class="mdi mdi-cellphone-basic"></span></span> {{$userInfo->phone}}
                                <p></p>
                                <div class="space"></div>
                                </p>
                                <div class="space"></div>
                                <p class="cv-location">
                                    <span><span class="mdi mdi-map-marker-outline"></span></span> {{$userInfo->address}}
                                <p></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ----------------- HEADER CV END -------------------- --}}
                <div class="Spacer" style="height: 0px;"></div>


                
                {{-- ----------------- WORK EXPERIENCE CV START -------------------- --}}
                <div id="workHeading" style="width: 100%;">
                    <div
                        style="display: flex; align-items: center; font-weight: bold; text-transform: inherit; letter-spacing: 0.5px; font-size: 12pt; line-height: 21px; color: rgb(52, 138, 167);">
                        <div class="sc-1vasfrz-0 fxtRwl">
                            <div class="sc-1vasfrz-1 gFlnqS"></div>
                            Berufserfahrung
                        </div>
                    </div>
                </div>
                <div id="wnSWzBlTCVOeSKpJlyGFX" style="width: 100%;">
                    <div class="sc-gexl0k-0 ddwbeS">
                        @if ($workExprience->count())
                            @foreach ($workExprience as $exp)
                                <div class="sc-gexl0k-1 jvDBuU">
                                    <div style="width: 76%;">
                                        <div class="sc-u9yj7m-0 hOMIkV">
                                            <span class="title"style="font-weight: bold; display: inline-block; white-space: pre-wrap;">{{$exp->jobTitle}}, </span>
                                            <span class="subTitle" style="white-space: pre-wrap; display: inline-block;">{{$exp->company}} </span>
                                            <span class="subTitle" style="white-space: pre-wrap; display: inline-block;">({{$exp->country}} )</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div width="24" class="sc-j56qvh-0 cukNnW">
                                        <span class="sc-16jg1ff-0 bElCIQ">
                                            <span color="#313D5D" class="sc-1aaslc9-0 bkXHir">{{$exp->jobTitleStartDate}} – {{$exp->jobTitleEndDate}}</span>
                                            <span id="styledWrapper" class="sc-64qz07-0 gVWRmV"></span>
                                        </span>
                                    </div>
                                </div>
                            @endforeach   
                        @endif



                    </div>
                </div>
                <div id="workBottomSpace" style="width: 100%;"><div style="height: 20px;"></div></div>
                {{-- ----------------- WORK EXPERIENCE CV END -------------------- --}}



                {{-- ----------------- EDUCATION CV START -------------------- --}}
                <div id="workHeading" style="width: 100%;">
                    <div
                        style="display: flex; align-items: center; font-weight: bold; text-transform: inherit; letter-spacing: 0.5px; font-size: 12pt; line-height: 21px; color: rgb(52, 138, 167);">
                        <div class="sc-1vasfrz-0 fxtRwl">
                            <div class="sc-1vasfrz-1 gFlnqS"></div>
                            Education
                        </div>
                    </div>
                </div>
                <div id="wnSWzBlTCVOeSKpJlyGFX" style="width: 100%;">
                    <div class="sc-gexl0k-0 ddwbeS">
                        @if($education->count())
                            @foreach ($education as $edu) 
                                <div class="sc-gexl0k-1 jvDBuU">
                                    <div style="width: 76%;">
                                        <div class="sc-u9yj7m-0 hOMIkV">
                                            <span class="title"style="font-weight: bold; display: inline-block; white-space: pre-wrap;">{{$edu->degree}} </span>
                                                <span class="subTitle" style="font-weight: normal; font-style: italic; display: inline;">
                                                <span class="subTitle" style="white-space: pre-wrap; display: inline-block;">{{$edu->school}} </span>
                                                <span class="subTitle" style="white-space: pre-wrap; display: inline-block;">{{$edu->city}} - {{$edu->country}} </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div width="24" class="sc-j56qvh-0 cukNnW">
                                        <span class="sc-16jg1ff-0 bElCIQ">
                                            <span color="#313D5D" class="sc-1aaslc9-0 bkXHir">{{$edu->startDate}} - {{$edu->endDate}} </span>
                                            <span id="styledWrapper" class="sc-64qz07-0 gVWRmV"></span>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        @endif        
                    </div>
                </div>
                <div id="educationBottomSpace" style="width: 100%;"><div style="height: 20px;"></div></div>
                {{-- ----------------- EDUCATION CV END -------------------- --}}


                {{-- ----------------- CERTIFICTES CV START -------------------- --}}
                <div id="certificateHeading" style="width: 100%;">
                    <div
                        style="display: flex; align-items: center; font-weight: bold; text-transform: inherit; letter-spacing: 0.5px; font-size: 12pt; line-height: 21px; color: rgb(52, 138, 167);">
                        <div class="sc-1vasfrz-0 fxtRwl">
                            <div class="sc-1vasfrz-1 gFlnqS"></div>
                            Zertifikate
                        </div>
                    </div>
                </div>
                <div id="certificate" style="width: 100%;">
                    <div  class="p-0 m-0">
                        <div class="sc-1kod6m5-0 biZvMu p-0 m-0">
                            <div class="sc-1kod6m5-3 bqrGWN p-0 m-0">
                                @if($userCertificate)
                                    @foreach ($userCertificate as $cer)                                        
                                        <div class="sc-1kod6m5-5 lgiSRU p-0 m-0">
                                            <div class="sc-12h8xym-0 bNeQty">
                                                <div style="display: flex;">
                                                    <div font-family="Source Sans Pro" class="sc-1f5joy6-1 jveQDG">
                                                        <svg viewBox="0 0 20 20"
                                                            version="1.1" preserveAspectRatio="xMidYMid meet" width="4px" height="4px">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <circle fill="#313D5D" fill-opacity="1" fill-rule="nonzero" cx="10" cy="10"
                                                                    r="10"></circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <span class="sc-9mzlfd-0 jDdSJ">{{$cer->certificate}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach    
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div id="certificateBottomSpace" style="width: 100%;"><div style="height: 20px;"></div></div>
                {{-- ----------------- CERTIFICTES CV END -------------------- --}}



                {{-- ----------------- SKILLS CV START -------------------- --}}
                <div id="skillHeading" style="width: 100%;">
                    <div
                        style="display: flex; align-items: center; font-weight: bold; text-transform: inherit; letter-spacing: 0.5px; font-size: 12pt; line-height: 21px; color: rgb(52, 138, 167);">
                        <div class="sc-1vasfrz-0 fxtRwl">
                            <div class="sc-1vasfrz-1 gFlnqS"></div>Skills
                        </div>
                    </div>
                </div>
                <div id="skill" style="width: 100%;">
                    <div>
                        <div class="sc-1kod6m5-0 biZvMu">
                            <div class="sc-1kod6m5-3 bqrGWN">
                                @if($userSkill)
                                    @foreach ($userSkill as $skill)                                     
                                        <div class="sc-1kod6m5-5 lgiSRU">
                                            <div class="sc-12h8xym-0 hKCky">
                                                <span class="sc-9mzlfd-0 bpOIag">
                                                    {{$skill->skill}}
                                                    <span style="white-space: inherit; font-style: normal; font-size: 11pt;">({{$skill->skillLevel}} )  </span>
                                                  </span>
                                                <span style="white-space: inherit; font-style: normal; font-size: 11pt;">{{$skill->subSkill}} - {{$skill->skillLevel}}   </span>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div id="skillBottomSpace" style="width: 100%;"><div style="height: 20px;"></div></div>
                {{-- ----------------- SKILLS CV END -------------------- --}}



                {{-- ----------------- LANGUAGE CV START -------------------- --}}
                <div id="languageHeading" style="width: 100%;">
                    <div
                        style="display: flex; align-items: center; font-weight: bold; text-transform: inherit; letter-spacing: 0.5px; font-size: 12pt; line-height: 21px; color: rgb(52, 138, 167);">
                        <div class="sc-1vasfrz-0 fxtRwl">
                            <div class="sc-1vasfrz-1 gFlnqS"></div>Language
                        </div>
                    </div>
                </div>
                <div id="language" style="width: 100%;">
                    <div >
                        <div class="sc-1kod6m5-0 biZvMu">
                            <div class="sc-1kod6m5-3 bqrGWN">
                                @if ($userLanguage)
                                    @foreach ($userLanguage as $lang) 
                                        <div class="sc-1kod6m5-5 lgiSRU">
                                            <div class="sc-12h8xym-0 ilcNWm">
                                                <div style="display: flex;">
                                                    <div font-family="Source Sans Pro" class="sc-1f5joy6-1 jveQDG"><svg viewBox="0 0 20 20"
                                                            version="1.1" preserveAspectRatio="xMidYMid meet" width="4px" height="4px">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <circle fill="#313D5D" fill-opacity="1" fill-rule="nonzero" cx="10" cy="10"
                                                                    r="10"></circle>
                                                            </g>
                                                        </svg></div><span class="sc-9mzlfd-0 jDdSJ">
                                                            {{$lang->language}}
                                                            <span style="font-size: 10px; padding-left: 10px"> {{$lang->languageAddInfo}} - {{$lang->languageLevel}} </span> 
                                                         </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div id="languageBottomSpace" style="width: 100%;"><div style="height: 20px;"></div></div>
                {{-- ----------------- LANGUAGE CV END -------------------- --}}




                {{-- ----------------- SUMMARY CV START -------------------- --}}
                <div id="d4PbmMV_el4D7KKtUMUkhHeading" style="width: 100%;">
                    <div
                        style="display: flex; align-items: center; font-weight: bold; text-transform: inherit; letter-spacing: 0.5px; font-size: 12pt; line-height: 21px; color: rgb(52, 138, 167);">
                        <div class="sc-1vasfrz-0 fxtRwl">
                            <div class="sc-1vasfrz-1 gFlnqS"></div>Summary
                        </div>
                    </div>
                </div>
                <div id="1iwkhz6Qc4SiJS3xs40vU" style="width: 100%;">
                    <div class="sc-gexl0k-0 ddwbeS">
                        <div class="sc-gexl0k-1 doLwHr">
                            <div style="width: 100%;">
                                <div class="sc-u9yj7m-0 hOMIkV">
                                    <span class="subTitle" style="font-weight: bold; font-style: italic;">
                                        @if ($userSummary)
                                        {{$userSummary->summary}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="d4PbmMV_el4D7KKtUMUkhBottomSpace" style="width: 100%;"><div style="height: 20px;"></div></div>
                {{-- ----------------- SUMMARY CV END -------------------- --}}

                {{-- ----------------- FOOTER CV END -------------------- --}}
                <div color="#313D5D" class="sc-1ae8jxq-0 gdXxex"><span class="sc-1ae8jxq-2 klnqOM">Saeid Eydani Alizadeh</span></div>
                {{-- ----------------- SUFOOTERMARY CV END -------------------- --}}






            </div>


            {{-- <div class="cv-container">
                <div class="cv-header">
                  <h1>John Doe</h1>
                  <h2>Web Developer</h2>
                  <p>123 Main Street, Anytown USA 12345</p>
                  <p>(555) 555-5555</p>
                  <p>john.doe@email.com</p>
                </div>
                <div class="cv-body">
                  <div class="cv-section">
                    <h3>Education</h3>
                    <ul>
                      <li>Bachelor of Science in Computer Science, XYZ University</li>
                      <li>Master of Science in Web Development, ABC University</li>
                    </ul>
                  </div>
                  <div class="cv-section">
                    <h3>Experience</h3>
                    <ul>
                      <li>Web Developer, Acme Corporation (2018 - present)</li>
                      <li>Web Developer, XYZ Company (2016 - 2018)</li>
                    </ul>
                  </div>
                  <div class="cv-section">
                    <h3>Skills</h3>
                    <ul>
                      <li>HTML/CSS</li>
                      <li>JavaScript</li>
                      <li>React.js</li>
                      <li>Node.js</li>
                    </ul>
                  </div>
                </div>
              </div> --}}
              


        </div>
    </div>
    {{-- ----------------- RIGHT SIDE CONTENT CV PDF END -------------------- --}}















</div>



<script>
$(document).ready(function() {
  // Add click event listener to all dropdown headers
  $('.dropdown .card-header').click(function() {
    var dropdown = $(this).parent();
    
    // If this dropdown is already active, deactivate it
    if (dropdown.hasClass('active')) {
      dropdown.removeClass('active');
    } 
    // Otherwise, deactivate all other dropdowns and activate this one
    else {
      $('.dropdown').removeClass('active');
      dropdown.addClass('active');
    }
  });

  // Add click event listener to "Add Work Experience" button
  $('.add-form').click(function(event) {
    event.preventDefault();
    // Toggle visibility of the form container
    $('.form-container').toggle();
    
  });

});




</script>
<script>
    $(document).ready(function() {
  // Move work experience cards up and down
  $('.btn-move-up').click(function() {
    var card = $(this).closest('.card-work-experience');
    card.insertBefore(card.prev());
  });
  $('.btn-move-down').click(function() {
    var card = $(this).closest('.card-work-experience');
    card.insertAfter(card.next());
  });
});

</script>

@endsection