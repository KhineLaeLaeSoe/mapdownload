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
                   <label>Select Region/States:</label>
                   <select name="region" required>
                   <option value="yangon">Yangon Region</option>
                   <option value="mandalay">Mandalay Region</option>
                   <option value="sagaing">Sagaing Region</option>
                   <option value="bago">Bago Region</option>
                   <option value="tanitharyi">Tanintharyi Region</option>
                   <option value="ayeyarwady">Ayeyarwady Region</option>
                   <option value="magway">Magway Region</option>
                  
                 </select>
               
                 <select name="states" required>
                  <option value="kachin">Kachin State</option>
                   <option value="kayah">Kayah State</option>
                   <option value="kayin ">Kayin  State</option>
                   <option value="chin">Chin State</option>
                   <option value="mon ">Mon State</option>
                   <option value="rakhine ">Rakhine  State</option>
                   <option value="shan ">Shan State</option>
                   </select>
              {{-- <button type="submit"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="planning" >
             Download Map
            </button> --}}

            
               <a href="{{ url('/buy-map') }}"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
                 Buy Map
             </a>
          </form>
         {{--  --}}

      @foreach($maps as $map)
     <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 10px;">
      <img src="{{ asset($map->image) }}" alt="Map Image" style="width:200px;">
      {{-- <img src="{{ asset('storage/' . $map->preview_image) }}" alt="{{ $map->title }}"
             style="width: 100%; max-width: 300px; height: auto; border-radius: 5px; margin-bottom: 10px;"> --}}
        
        <h3>{{ $map->title }}</h3>
        <img src="{{ asset($map->image) }}" alt="Map Image" style="width:200px;">
        <p>Type: {{ $map->type }}</p>
        <p>Price: {{ $map->price ?? 'Free' }}</p>
        
        <a href="{{ asset('storage/' . $map->file_path) }}" download
           class="text-blue-600 underline">
            Download
        </a>

         <button type="submit" a href="{{ url('/buy-map') }}"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
                 Buy Map
         </a>
    </div>
@endforeach
         </section>