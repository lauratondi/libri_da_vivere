<x-layout>

<div class="container-fluid bg-image pt-5 pb-5" >

  <div class="row mt-5">
    <div class="col-12 text-center">
      <h2 class=" text-light shadow-text">Registrati</h2>
    </div>
  </div>
  <div class="row justify-content-center mt-5">
    <div class="col-12 col-md-3">
      @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
      
      <form method="POST" action='{{route('register')}}'">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Nome</label>
          <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
        </div>
        <div class="mb-3">
          <label  class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" value={{old('email')}}>
        </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" class="form-control" name="password" >
        </div>
        <div class="mb-3">
          <label  class="form-label">Conferma password</label>
          <input type="password" class="form-control" name="password_confirmation" >
        </div>
        
        
        <button type="submit" class="btn btn-third d-flex mx-auto">Invia</button>
      </form>

    </div>
  </div>
</div>  
</x-layout>