<!-- HTML markup for the homepage -->
@extends('layouts.app')

@section('content')

    <!-- Nav Section --> 
    {{-- @include('partials.nav') --}}

    <!-- Hero Section -->
    @include('partials.heroSection')

    

    <!-- Job Listing Section -->
    @include('partials.jobListing')


    <!-- Video Section -->
    @include('partials.video')


    
    <!-- Video Section -->
    @include('partials.works')




    <!-- Job Listing Section -->
    @include('partials.topCompanies')



    <div class="timeline-section">
        <!-- UserGuidelene Section -->
        <div class="userGuideLine-container">
            @include('partials.userGuideLine')
        </div>
    </div>


   <!-- Hero Section -->
    @include('partials.slideshows')



    <!-- Footer Section -->
    <div class="footer-container">
        @include('partials.footer')
    </div>






    <!-- Add your homepage content here -->
@endsection
