@extends ('_layouts.layouts-toko.header')

@section('containt 1')
<div class="jumbotron jumbotron-fluid" style="padding: 150px; margin-top:40px;">
  <div class="container"> 
    <h1 class="display-4" style="font-weight: 500;"><img  class="rounded-circle shadow-lg jumb_img" src="{{asset('asset/img/cat-lover.png')}}" alt="" >Toko Kucing</h1>
    <p class="lead">Hello sobat Cat Lover, {{ $name->name }} Selamat Datang !!!</p>
  </div>
</div>
@endsection

@section('containt 2')
<div class="container ">
  <div class = "title text-center">
  
   <h3>Daftar Top Type Kucing</h3>    
  </div>

  <div class="d-flex flex-row mb-3 justify-content-center">
    <?php $i=1 ?>
       @foreach($daftarKucing as $kcg)
        @if($i < 4)
    <div class="p-3">
    <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 18rem;">
            <img src="{{asset('asset/img_product')}}/{{$kcg->foto}}" class="card-img-top " alt="..." style="max-width: 300px; max-height: 300px;">
            <div class="card-body">
                <h5 class="card-title">{{($kcg->nama)}}</h5>
                <p>Jenis: <span style="color:cornflowerblue">{{($kcg->jenis)}}</span></p>
                <p class="card-text">Rp.{{($kcg->harga)}},00</p>
                <a href="{{route('view',['jenis'=>$kcg->jenis, 'id'=>$kcg->id, 'nama'=>$kcg->nama])}}" class="btn btn-primary p-2 rounded-circle buy-link"><img src="{{asset('asset/img/beli.png')}}"  class=" mx-auto d-block" alt="" ></a>
            </div> 
        </div>
    </div>     
        @endif 
        <?php  $i++; ?>
    @endforeach
            
  
  </div>

</div> 

  
@endsection

@section ('containt 3')
<div class="container">
    <div class = "title text-center">
        <h3>Daftar Kucing</h3>
        <h5>Di sini saya menjual berbagai jenis kucing</h5>
    </div>

    <table class="table table-borderless mt-5">
        <?php $i = 1;?>
        @foreach($daftarKucing as $kcg)
         
        
            @if($i == 1 OR $i ==3)
            <tr>
            @endif
                    <td>
                        <div class="card mb-3 shadow-lg" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="{{asset('asset/img_product')}}/{{$kcg->foto}}" class="img-fluid rounded-start" alt="..." style="height: 300px;">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$kcg->nama}}</h5>
                                <p class="card-text">jenis: {{$kcg->jenis}}</p>
                                <p class="card-text">{{$kcg->deskripsi_view}}</p>
                                <p class="card-text"><small class="text-muted">Rp.{{$kcg->harga}},00</small></p>
                                <a href="{{route('view',['jenis'=>$kcg->jenis, 'id'=>$kcg->id, 'nama'=>$kcg->nama])}}" class="btn btn-primary p-2 rounded-circle buy-link"><img src="{{asset('asset/img/beli.png') }}"  class=" mx-auto d-block" alt=""></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </td> 
            @if( $i == 2)
            </tr>
               
            @endif
            <?php $i++; ?>
            @if($i == 3)
               <?php $i = 1 ?>
            @endif
            
        @endforeach
    
            
      
       


        </table>
</div>

@endsection


