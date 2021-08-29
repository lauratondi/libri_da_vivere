<x-layout>
  
  <div class="container-fluid pt-5 pb-5 bg-color">
   <div class="container">
    <div class="row mt-5 reviews-box">
      <div class="col-12 text-center">
        <h2 class='text-light fw-bold shadow-text'>Tutte le recensioni</h2>
      </div>
      {{-- CONFIRM REVIEW POSTED --}}
      <div class="col-12 col-md-6 offset-md-3 mt-5">
        @if(session('message'))
        <div class="alert alert-success">
          {{session('message')}}
        </div>
        @endif
        {{-- DISPLAY VALIDATION ERRORS --}}
        @if ($errors-> any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>
              {{$error}}
            </li>
            
            @endforeach
          </ul>
        </div>
        @endif
        
      </div>
    </div>
    
    <div class="row mt-5 reviews-box">
      @foreach ($reviews as $review)
      <div class="col-12 col-lg-4 d-flex justify-content-center">
        
        <div class="card mb-3" style="max-width: 540px;" data-aos="zoom-in" data-aos-delay="100">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{Storage::url($review->img)}}" alt="{{$review->title}}" class="img-fluid rounded-start" >
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h4 class="card-title fw-bold">{{$review->title}}</h4>
                <h5 class="card-title"> {{$review->author}}</h5>
                <p class="card-text">{{$review->getPreview()}}</p>
                <p class="card-text"><small class="text-muted">{{$review->user->name}} {{$review->created_at->format('d/m/Y')}}</small></p>
                <button class="btn btn-sec d-flex mx-auto">
                  <a href="{{route('review.show', compact('review'))}}" class="text-light">
                  Dettagli
                </a>
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
      @endforeach
    </div>
   </div>
  </div>
    
    
  </x-layout>