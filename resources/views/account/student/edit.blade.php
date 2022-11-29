@extends('template.master')

@section('judul')
<h1>Edit</h1>
@endsection

@section('content')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">NEW STUDENT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student/{{$showSiswaById->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">nomor induk siswa</label>
                    <input type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIS" 
                    value="{{ $showSiswaById->nomor_induk_siswa }}" required >
                    @error('nis')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" 
                    value="{{ $showSiswaById->nama }}" required>
                    @error('nama')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="AlamatNama">Nama</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" 
                    value="{{ $showSiswaById->alamat }}" required>
                    @error('alamat')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>
                 

                      <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="L" required {{ $showSiswaById->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                  <option value="P" required {{ $showSiswaById->jenis_kelamin == "P" ? "selected" : "" }}>Perempuan</option>
                </select>
                @error('jenis_kelamin')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
              </div>
                <!-- /.card-body -->

                  <a class="btn btn-primary mr-3" href="{{ route('student.index') }}">
                 <i class="fa fa-arrow-left"></i>
                Back
                </a>

                <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
@endsection