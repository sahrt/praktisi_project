@extends ('_layouts.layouts-toko.header')

@section('containt 1')
<div class="jumbotron jumbotron-fluid" style="padding: 150px; margin-top:40px;">
  <div class="container">
    @foreach($viewKucing as $kcg)
    <div class="d-flex">
        <div class="p-2 flex-fill back-link">
            <a href="{{ route('member') }}"><img src="{{ asset('asset/img/back.png')}}" alt="" ></a>
             
        </div>
     
        <div class="p-2 flex-fill">
            <img src="{{asset('asset/img_product')}}/{{$kcg->foto}}" alt=""class="shadow-lg" style="width: 400px; height: 460px;">
        </div>
        
        <div class="p-2 flex-fill">
            <div class="row">
           
                <h3>{{$kcg -> nama}}</h3>
                <h4>Rp.{{$kcg->harga}},00</h4>
                <p>Jenis: {{$kcg -> jenis}} </p>
                <p>{{$kcg -> deskripsi_detail}}</p>
                
            </div>
            <div class="row">
                <div class="col-2" style="margin-right:2px;">
                     <button type="button" class="btn btn-primary buy-link"> <img src="{{asset('asset/img/beli.png')}}"  class=" mx-auto d-block" alt="" style="width: 30px;"></button>
                </div>
                <div class="col-2" >
                     <button type="button" class="btn btn-primary buy-link"><img src="{{asset('asset/img/chat.png')}}"  class=" mx-auto d-block" alt="" style="width: 30px;"></button>
                </div>
                <div class="mb-3 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Coment me</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            
       
    </div>
    </div>
   @endforeach
  </div>
</div>
@endsection