@extends ('_layouts.layouts-toko.header')
@section ('containt 3')
<div class="container" style="padding-top: 200px;">
    <div class = "title text-center">
        <h3>Ini List Daftar Kucing Kamu Cari</h3>
        <h5>Selamat memilih</h5>
    </div>

    <table class="table table-borderless mt-5">
        <?php $i = 1;?>
        @foreach($daftarCari as $kcg)
         
        
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