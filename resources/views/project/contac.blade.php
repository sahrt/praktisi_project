 @extends ('_layouts.layouts-toko.header')

 @section ('containt 1')
 
 	
 </div>
<section id="Contact" class="Contact mt-5 bg-warning pb-4">
  <div class="container" style="padding-top:100px; padding-bottom: 50px;">
    <div class="row pt-4 mb-4">
      <div class="col text-center text-white">
        <h3>Contac Us</h3>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card text-white bg-success mb-3 text-center" >
            <div class="card-body">
             <h5 class="card-title">Contact Me</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
          <ul class="list-group">
          <li class="list-group-item active" aria-current="true">Location</li>
          <li class="list-group-item">Dsn. Bangsri, Ds. Kembangsri</li>
          <li class="list-group-item">Ngoro-Mojokerto Regency</li>
          <li class="list-group-item">East java</li>
        </ul>
      </div>

      <div class="col-lg-4">

          <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-white">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>

        <div class="form-floating text-white">
           <label for="floatingTextarea2">Comments</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
           
            </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label text-white" for="exampleCheck1 ">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>

      </div>
    </div>
  </div>
</section>
 @endsection
