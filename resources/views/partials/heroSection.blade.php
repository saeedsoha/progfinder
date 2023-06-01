<link rel="stylesheet" href="{{ asset('css/heroSection.css') }}">


<header class="header" id="header">
        @include('partials.nav')
</header>


 <main class="main">
    <section class="section banner banner-section">
       <div class="container banner-column">
          <div class="banner-inner">
             <h1 class="heading-xl">
                Find Your  <span style="color: #8c5ab5">Dream Job</span> <div class="typing-text"></div> 
                {{-- in Germany and Netherlands. --}}
             </h1>
             <p class="paragraph">
                Your ultimate destination for programming jobs in Germany and Netherlands.
             </p>
             <div class="btn-container"">
               <button class="hero-btn btn-darken btn-inline">
                  Get Started<i class="bx bx-right-arrow-alt"></i>
               </button>
               {{-- <p>FREE FOREVER.</p> --}}
             </div>

             {{-- CIO Section --}}
             <div>
                <div class="cio-container">
                    <div class="cio-container-inner">
                        <img
                            src="https://storage.googleapis.com/mixo-files/public/img/avatars/male-22.png" alt="Luke Vella">
                        <div>
                            <p class="cio-comment"> “Our job board is the most comprehensive resource for programming jobs in Germany and the Netherlands. Find the perfect fit for your career goals.” </p>
                            <p class="cio-name">Saeid Alizadeh <!----></p>
                        </div>
                    </div>
                </div>
             </div>




          </div>
          <img class="banner-image" src="{{asset('asset/images/herosection.png')}}" alt="Illustration">
       </div>
    </section>


 </main>

<script src="{{ asset('js/heroSection.js') }}"></script>
