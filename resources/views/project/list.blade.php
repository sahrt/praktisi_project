@extends ('_layouts.layouts-toko.header')
@section('containt 1')
<div class="jumbotron jumbotron-fluid" style="padding: 150px; margin-top:40px;">
  <div class="container">
    <h1 class="display-4"><img  class="rounded-circle shadow-lg jumb_img" src="{{asset('asset/img/cat-lover.png')}}" alt="" >Toko Kucing</h1>
    <p class="lead">Pilih Type apa Yang Dinginkan ?</p>
    @foreach($daftarType as $type)
	 <div class="d-flex flex-row">
	  	<div class="alert alert-primary p-2 link-list" role="alert" style="margin-right:10px;"><a href="{{route('daftar',$type->jenis)}}" class="alert-link">{{$type->jenis}}</a>

	  </div>
	</div>

	 @endforeach
	 	

 </div>
</div>
@endsection


