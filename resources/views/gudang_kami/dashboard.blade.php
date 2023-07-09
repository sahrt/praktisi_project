   @extends('_layouts\main-dashboard')

   @section('navbar')
       @extends('_layouts\app-dashboard')
   @endsection
   
   
   @section('content1')
        <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data User</h1>
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
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Email Verifikasi</th>
                <th scope="col">Type</th>
                <th scope="col">Dibuat</th>
                <th scope="col">Diupdate</th>
                <th scope="col">Aksi</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach ($member as $item)
               <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->email_verified_at	}}</td>
                <td>
                    @if($item->type == 1)
                    {{ "Admin" }}  
                    @elseif ($item->type == 0)
                    {{ "Member" }}
                    @endif
                </td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a href=""><button type="button" class="btn btn-warning">Update</button></a>
                    <br>
                    <br>
                    <a href="" style=""><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>  

              @php
                  {{ $i++; }}
              @endphp
            @endforeach
             
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
  