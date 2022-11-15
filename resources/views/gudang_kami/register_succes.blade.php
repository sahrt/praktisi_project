@extends ('_layouts.app')
<section class="vh-100">
  <div class="container" style="margin-top: 150px; padding-bottom:80px;">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">


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

                            <p>
                                Silahkan melakukan pengecekan email untuk proses verifikasi <br>
                                Apabila kamu tidak mendapatkan silahkan <a href="{{ route('verification.send',$userID) }}">Kirim Ulang Verifikasi</a>

                            </p>

         
        </form>
      </div>
    </div>
  </div>
</section>