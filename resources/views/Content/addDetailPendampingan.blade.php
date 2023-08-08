@extends('Layout.layout')
@section('content')
    <div class="container w-50 mt-5">
        <h1>Add Detail Pendampingan Page</h1>
        <form action="add" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="floatingInput">Harap Isi Tanggal Pendampingan</label>
                <input type="date" class="form-control mt-2" name="tanggal">
            </div>
            <div class="row g-2">
                <div class="col-md-6">
                    <label for="floatingInput">Isi Deskripsi</label>
                    <textarea type="text" class="form-control mt-2" name="deskripsi"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="floatingInput">Upload File Pendukung</label>
                    <input type="file" class="form-control mt-2">
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md-12 mb-3">
                    <label for="floatingInput">Isi Keterangan</label>
                    <textarea type="text" class="form-control mt-2" name="keterangan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary col-md-12">Submit</button>
            </div>
        </form>
    </div>
@endsection
