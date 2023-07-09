@extends('_layouts\main-dashboard')

@section('navbar')
    @extends('_layouts\app-dashboard')
@endsection


@section('content1')
     <!-- Begin Page Content -->
<div class="container-fluid">

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Data {{ $type }}</h1>
     <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
             class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
 </div>

 <div class="tabel-user bg-white p-5" style="margin-bottom: 200px">
     @php
         {{ $i = 1; }}
     @endphp
     <table class="table">
         <thead>
           <tr>
             <th scope="col">No</th>
             <th scope="col">Kode Barang</th>
             <th scope="col">Nama</th>
             <th scope="col">Produksi</th>
             <th scope="col">Tanggal Produksi</th>
             <th scope="col">Tanggal Expired</th>
             <th scope="col">Jumlah</th>
             <th scope="col">Jenis</th>
             <th scope="col">Kelolah</th>
             
           </tr>
         </thead>
         <tbody>
      
          
         </tbody>
       </table>
 </div>
</div>
 <!-- Content Row -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
 <div class="copyright text-center my-auto">
     <span>Copyright &copy; Your Website 2021</span>
 </div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">×</span>
 </button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
 <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
</div>
</div>
</div>
</div>

@endsection
