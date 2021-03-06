<x-layout>
  
  <div class="container-fluid pt-5 pb-5 bg-color">

    <div class="row mt-5 reviews-box">
      <div class="col-12">
        <h2 class='text-center text-light fw-bold shadow-text'>Modifica la tua recensione</h2>
      </div>
    </div>
    
    {{-- Confirming review is posted --}}
    <div class="col-12 col-md-6 offset-md-3 mt-5">
      @if(session('message'))
      <div class="alert alert-success">
        {{session('message')}}
      </div>
      @endif
    </div>
      {{-- DISPLAY VALIDATION ERRORS --}}
      @if ($errors-> any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error){
            <li>
              {{$error}}
            </li>
          }
          
          @endforeach
        </ul>
      </div>
      @endif
      
      <div class="row mt-5 offset-md-4 reviews-box">
        <div class="col-12 col-md-6">
          <form method="POST" action='{{route('review.update', compact('review'))}}' enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label  class="form-label">Titolo</label>
              <input type="text" class="form-control" name="title" value="{{$review->title}}">
            </div>
            <div class="mb-3">
              <label  class="form-label">Autore</label>
              <input type="text" class="form-control" name="author" value="{{$review->author}}">
            </div>
            <div class="mb-3 d-flex mx-auto">
              <textarea name="description" cols="42" rows="20" placeholder="Scrivi qui la tua recensione">{{$review->description}}</textarea>
            </div>
            <div class="mb-3">
              <input type="file" name="img" class='d-flex mx-auto'>
            </div>
            <button type="submit" class="btn btn-main d-flex mx-auto">Salva modifica</button>
          </form>
        </div>
      </div>
    
  </div>
</x-layout>