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
    <form action="{{ route() }}">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="kode_barang" placeholder="masukan kode barang">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_barang" placeholder="masukan kode barang">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Produksi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="produksi" placeholder="masukan kode barang">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Produksi</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal_produksi" placeholder="masukan kode barang">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Expired</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="expired" placeholder="masukan kode barang">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="jumblah" placeholder="masukan kode barang">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="type">
                <option selected>Pilih Type Barang</option>
                <option value="sabun">Sabun</option>
                <option value="beras">Beras</option>
                <option value="saos">Saos</option>
            </select>
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
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
