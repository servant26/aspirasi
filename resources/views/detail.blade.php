@extends('master')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <section class="content">
            <div class="container-fluid">
            <div class="container mt-1 mb-5">
                <form action="/crud/update" method="post" enctype="multipart/form-data">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="your-csrf-token">

                <!-- Edit Nama Produk -->
                <div class="mb-3">
                    <label for="inputNama" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="inputNama" name="product_name" required autofocus>
                </div>

                <!-- Edit Kategori Produk -->
                <div class="mb-3">
                    <label for="inputKategori" class="form-label">Kategori</label>
                    <select class="form-select" id="inputKategori" name="category_id" required>
                        <!-- Options will go here -->
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                    </select>
                </div>
                
                <!-- Edit Deskripsi Produk -->
                <div class="mb-3">
                    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="inputDeskripsi" name="description" rows="3"></textarea>
                </div>

                <!-- Edit Harga Produk -->
                <div class="mb-3">
                    <label for="inputHarga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="inputHarga" name="price" required>
                </div>

                <!-- Edit Stok Produk -->
                <div class="mb-3">
                    <label for="inputStok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="inputStok" name="stock" required>
                </div>

                <!-- Edit Link Produk -->
                <div class="mb-3">
                    <label for="inputLink" class="form-label">Link Produk</label>
                    <input type="text" class="form-control" id="inputLink" name="link" required>
                </div>

                <!-- Edit Gambar Produk -->
                <div class="mb-3">
                    <label for="currentImage">Gambar Saat Ini:</label><br>
                    <img src="your-image-url" alt="Gambar Produk" width="25%">
                </div>
                <div class="mb-3">
                    <label for="inputGambar" class="form-label">Unggah Gambar Baru (Maksimal 2MB)</label>
                    <input type="file" class="form-control" id="inputGambar" name="image" accept="image/*">
                </div>
                <div class="d-grid gap-2 d-md-block">
                    <a class="btn btn-danger" href="/crud" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>          
            </div>
            </div><!-- /.container-fluid -->
        </section>
        </div>
    </section>
</div>
@endsection