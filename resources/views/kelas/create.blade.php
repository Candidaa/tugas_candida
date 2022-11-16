@extends('template.master')

@section ('judul')
<h1> Manajemen Kelas</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="/kelas" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="inputNIS" placeholder="Enter Nomor Indux Siswa">
                  </div>

                  <div class="form-group">
                    <label for="inputNama">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputNIS" placeholder="Enter Nama Siswa">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection