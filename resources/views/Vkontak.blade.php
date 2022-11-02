@extends('Layout')
@section('Content')

<!-- <a href="#" class="btn btn-success"> + Add New Data</a> -->
<a href="#" onclick="ModalTambahBerita()"  class="btn btn-success"> + Add New Data</a>




<table class="table table-bordered">
    <tr>
        <th>Kode_Kontak</th>
        <th>Nama_Kontak</th>
        <th>Opsi</th>
    </tr>
    @foreach($kontak as $Get)
    <tr>
        <td>{{ $Get->kd_kontak}}</td>
        <td>{{ $Get->nama_kontak}}</td>
        <td>
            <a href="/controller/edit/{{ $Get->kd_kontak }}" class="btn btn-info">Update</a>
            
            <a href="/controller/hapus/{{ $Get->kd_kontak }}"class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Form Modal Tambah Berita -->
<form action="berita/tambah" method="post">
    @csrf
<div class="modal fade" id="ModalTambahBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Berita</label>
                <input type="text" class="form-control" name="kd_berita" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Berita</label>
                <textarea name="nama_berita" class="form-control" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Tambah Berita -->


<script>

    // Modal Tambah Berita
    function ModalTambahBerita () {
           $('#ModalTambahBerita').modal('show');
       }
    // Modal Tambah Berita
   

          
   </script>
    
@endsection




