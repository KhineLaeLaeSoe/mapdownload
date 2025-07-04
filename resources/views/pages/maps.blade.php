 <!-- resources/views/pages/maps.blade.php -->
 @extends('layouts.temp')
@section('title', 'Maps Page')
  @push('meta')
    <meta name="keyword" content="Map download">
    <meta name="description" content="jpg,pdf maps download">
@endpush
 @php
    $isMapsPage = Request::is('maps');
@endphp
 <!-- Maps section -->
      <section id="maps" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
          
            <h2 class="mb-6">Our Recent Works</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <nav
            class="scroll-revealed portfolio-menu mb-[3.750rem] text-center"
            aria-label="Portfolio filter"
          >
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color active"
              data-filter="all"
            >
              All Work
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="branding"
            >
              Branding
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="marketing"
            >
            {{--  --}}
           
            {{--  --}}
              Marketing
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="planning"
            >
              Planning
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="research"
            >
              Research
            </button>
          </nav>
          {{--  --}}
          <ul class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5">

                   <form method="POST" action="{{ route('free.map.download') }}">
                     @csrf
                   <label>Select City:</label>
                   <select name="city" required>
                   <option value="yangon">Yangon</option>
                   <option value="mandalay">Mandalay</option>
                   <option value="myanmar">Myanmar Map(Mya)</option>
                   <option value="pyinoolwin">Pyinoolwin Map</option>
                   <option value="amarapura">Amarapura Map</option>
                   <option value="taunggyi">Taunggyi Map</option>
                    <option value="dagon">Dagon Map</option>
                  </select>


               <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="planning"
            >
             Download Map
            </button>

             <a href="{{ url('/buy-map') }}"
   class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
    Buy Map
</a>
          </form>
         {{--  --}}
         </section>