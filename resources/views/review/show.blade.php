<x-layout>
  
  <div class="container-fluid pt-5 pb-5 bg-color ">
  
    <div class="row reviews-box justify-content-center">
      
      {{-- CONFIRM REVIEW POSTED --}}
      <div class="col-12 offset-md-3 mt-5">
        @if(session('message'))
        <div class="alert alert-success">
          {{session('message')}}
        </div>
        @endif
      </div>
      
      <div class="col-12 mt-5" >
        <h2 class="card-title text-center" data-aos="zoom-in" data-aos-delay="100">{{$review->title}} - {{$review->author}}</h2>
      </div>
      
      <div class="col-12 col-md-6  d-flex justify-content-center mt-5"> 
        <div class="card" style="width: 30rem;"  data-aos="zoom-in" data-aos-delay="100" >
          <img src="{{Storage::url($review->img)}}" class="card-img-top" alt="{{$review->title}}">
          <div class="card-body">
            <p class="card-text">{{$review->description}}</p>
            <p class="card-text fw-light">Aggiunto da {{$review->user->name}} il
              <span> {{$review->created_at->format('d/m/Y')}}</span>
            </p>
            <div class="card-buttons d-flex justify-content-around my-3">
              <a href="{{route('review.edit', compact('review'))}}" class="btn btn-yellow"><i class="fas fa-edit"></i></a>
              <form action="{{route('review.delete', compact('review'))}}" method="POST">
                @method('DELETE')
                @csrf
                <button class='btn btn-red'><i class="fas fa-trash-alt"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-12 d-flex justify-content-center mt-5">
        <a class='btn btn-main' href="{{route('review.index') }}">Indietro</a>
      </div>
    </div>
  </div>
</x-layout>