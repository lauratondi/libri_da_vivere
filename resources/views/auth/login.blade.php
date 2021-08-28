<x-layout>

  <div class="container-fluid bg-image pt-5 pb-5">
  
    <div class="row mt-5">
      <div class="col-12 text-center">
        <h2 class="text-light shadow-text">Effettua il login</h2>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-12 col-md-3">
        
        <form method="POST" action='{{route('login')}}'>
          @csrf
         
          <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control" name="email" >
          </div>
          <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password" >
          </div>
          
          <button type="submit" class="btn btn-third d-flex mx-auto">Invia</button>
        </form>
  
      </div>
    </div>
  </div>  
  </x-layout>