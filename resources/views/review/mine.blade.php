<x-layout>
  
  <div class="container-fluid pt-5 pb-5 bg-color">
   <div class="container">
    <div class="row mt-5 reviews-box">
      <div class="col-12 text-center">
        <h2 class='text-light fw-bold shadow-text'>Le tue recensioni</h2>
      </div>
    </div>

    <div class="row mt-5 reviews-box">
      @foreach ($reviews as $review)
      <div class="col-12 col-md-4 d-flex justify-content-center">
        
        {{-- <div class="card mb-5" style="width: 18rem;"  data-aos="zoom-in" data-aos-delay="100">
          <img src="{{Storage::url($review->img)}}" class="card-img-top" alt="{{$review->title}}">
          <div class="card-body">
            <h4 class="card-title">{{$review->title}}</h4>
            <h5 class="card-title"> {{$review->author}}</h5>
            <p class="card-text ">{{$review->getPreview()}}</p>
            <p class="card-text fw-light">{{$review->creator}}
            <span> {{$review->created_at}}</span>
            </p>

            <button class="btn btn-sec d-flex mx-auto">
            <a href="{{route('review.show', compact('review'))}}" class="text-light" >Dettagli</a>
          </button>
          </div>
        </div> --}}


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
                <p class="card-text"><small class="text-muted">{{$review->creator}} {{$review->created_at->format('d/m/Y')}}</small></p>
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