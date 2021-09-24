<x-layout>
  
  <div class="container-fluid pt-5 pb-5 bg-color">
    
    <div class="row mt-5 reviews-box">
      <div class="col-12">
        <h2 class='text-center text-light fw-bold shadow-text'>Crea la tua recensione</h2>
      </div>
    </div>

    <div class="row mt-5 offset-md-4 reviews-box">

      <div class="col-12 col-md-6">

        {{-- CONFIRM REVIEW POSTED --}}
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

        <form method="POST" action='{{route('review.store')}}' enctype="multipart/form-data" >
          @csrf
          <div class="mb-3">
            <label  class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
          </div>
          <div class="mb-3">
            <label  class="form-label">Autore</label>
            <input type="text" class="form-control" name="author" value="{{old('author')}}">
          </div>
          <div class="mb-3 d-flex ">
            <textarea class='mx-auto' name="description" cols="48" rows="20" placeholder="Scrivi qui la tua recensione">{{old('description')}}</textarea>
          </div>
          <div class="mb-3 ">
            <input type="file" name="img"  class='d-flex mx-auto'>
          </div>
          <button type="submit" class="btn btn-main d-flex mx-auto">Pubblica</button>
        </form>
      </div>
    </div>
    
  </div>
</x-layout>