@extends('template.master')

@section('judul')
<h1>ini halaman index</h1>
@endsection

@section('content')
     <div class="card" >
              <div class="card-header">
                <a class="btn btn-primary" href="{{ route('student.create') }}" >
            <i class="fas fa-plus"></i>
            Akun
        </a> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="data-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Jenis Kelamain</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse ($dataSiswa as $item=>$value ) 
                  <tr>
                    <td>{{ $item + 1}} </td>
                    <td>{{ $value -> nomor_induk_siswa}}</td>
                    <td>{{ $value -> nama}}</td>
                    <td>{{ $value -> jenis_kelamin}}</td>
                    <td>
                      <form action="/student/{{$value->id}}"method="POST" >
                       <a class="btn btn-info mr-3" href="student/{{$value->id}}">Detail</a>
                        <a class="btn btn-warning mr-3" href="student/{{$value->id}}/edit">Edit</a>
                          @csrf
                          @method('DELETE')
                        <button class="btn btn-danger ">Delete</button>
                    </td>
                  </tr>

                  @empty
                  <tr>
                    <td>Data Masih Kosong</td>
                  </tr>
                  </tbody>

                  @endforelse
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection

@push('scripts')
    <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script>
    $(function () {
            $("#data-table").DataTable();
        });
    </script>
@endpush