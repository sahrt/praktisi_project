@extends ('_layouts.app')
<section class="vh-100">
  <div class="container" style="margin-top: 150px; padding-bottom:80px;">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <h1 class="title">Register</h1>
        <p class="text-tiltle">Yuk Marih Gabung dengan Kami</p>


                  <!-- Alert ketika success dan error -->
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-warning">
                                    {{ Session::get('error') }}
                                    @php
                                        Session::forget('error');
                                    @endphp
                                </div>
                            @endif

                            <!-- Menampilkan Error form validation -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <b>Terjadi kesalahan pada proses input data</b> <br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


        <form method="post" action="{{route('registerProcess')}}">
          <!--security protection -->
          @csrf
               <!-- name input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Name</label>
            <input type="text" id="form1Example13" class="form-control form-control-lg" name="name" required />
            
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
             <label class="form-label" for="form1Example14">Email</label>
            <input type="email" id="form1Example14" class="form-control form-control-lg" name="email" required />
           
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
             <label class="form-label" for="form1Example23">Password</label>
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" required/>
           
          </div>
           <!-- confirm input -->
           <div class="form-outline mb-4">
            <label class="form-label" for="form1Example24">Confirm</label>
            <input type="password" id="form1Example24" class="form-control form-control-lg" name="confirm" required/>
            
          </div>

          <div class="d-flex justify-content-around align-items-start mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="{{route('login')}}">Kamu sudah punya account</a>
          </div>

          <!-- Submit button -->
          

         
        </form>
      </div>
    </div>
  </div>
</section>