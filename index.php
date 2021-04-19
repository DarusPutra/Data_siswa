<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>

    <!-- Load File bootstrap.min.css yang ada difolder css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="css/style.css" href="style.css">
    <style>
    .align-middle{
      vertical-align: middle !important;
    }

    </style>
  </head>
  <body>
    <!-- Membuat Header -->
    <div class="container" style="margin-top: 30px;">
      <div class="row-title" style="padding: 0 15px;">
          <button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">
            <span class="glyphicon glyphicon-plus"></span>  Tambah Data
          </button>
          <h2>Data Siswa</h2>	
          
          <div id="pesan-sukses" class="alert alert-success"></div>
          
          <div id="view" style=" margin-top: 30px"><?php include "view.php"; ?></div>
        </div>
    </div>

    <!-- 
    -- Membuat Modal Dialog untuk Form Tambah dan Ubah
    -- Beri id "form-modal" untuk tag div tersebut
    -->
    <div id="form-modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">
              <!-- Beri id "modal-title" untuk tag span pada judul modal -->
              <span id="modal-title"></span>
            </h4>
          </div>
          <div class="modal-body">
            <!-- Beri id "pesan-error" untuk menampung pesan error -->
            <div id="pesan-error" class="alert alert-danger"></div>
            
            <!-- Beri id "form" untuk tag form -->
            <form id="form">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
              </div>
              <div class="form-group">
                <label>NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                  <option value="">Pilih</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                <select id="jurusan" name="jurusan" class="form-control">
                  <option value="">Pilih Jurusan</option>
                  <option value="TJA">Teknik Jaringan Akses</option>
                  <option value="TKJ">Teknik Komputer dan Jaringan</option>
                  <option value="RPL">Rekayasa Perangkat Lunak</option>
                </select>
              </div>
              <div class="form-group">
                <label>Foto</label>
                <div id="checkbox_foto">
                  <input type="checkbox" id="ubah_foto" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto
                </div>
                <input type="file" class="form-control" id="foto">
              </div>
              <button type="reset" id="btn-reset"></button>
            </form>
          </div>
          <div class="modal-footer">
            <!-- Beri id "loading-simpan" untuk loading ketika klik tombol simpan -->
            <div id="loading-simpan" class="pull-left">
              <b>Sedang menyimpan...</b>
            </div>
            
            <!-- Beri id "loading-ubah" untuk loading ketika klik tombol ubah -->
            <div id="loading-ubah" class="pull-left">
              <b>Sedang mengubah...</b>
            </div>
            
            <!-- Beri id "btn-simpan" untuk tombol simpan nya -->
            <button type="button" class="btn btn-primary" id="btn-simpan">Simpan</button>
            
            <!-- Beri id "btn-ubah" untuk tombol simpan nya -->
            <button type="button" class="btn btn-primary" id="btn-ubah">Ubah</button>
            
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- 
    -- Membuat sebuah tag div untuk Modal Dialog untuk Form Tambah dan Ubah
    -- Beri id "form-modal" untuk tag div tersebut
    -->
    <div id="delete-modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">
              Konfirmasi
            </h4>
          </div>
          <div class="modal-body">
            <!--
            -- Beri id "data-nis" untuk textbox nis yang digunakan untuk menampung
            -- data nis yang akan dihapus
            -->
            <input type="hidden" id="data-nis">
            
            Apakah anda yakin ingin menghapus data ini?
          </div>
          <div class="modal-footer">
            <!-- Beri id "loading-hapus" untuk loading ketika klik tombol hapus -->
            <div id="loading-hapus" class="pull-left">
              <b>Sedang meghapus...</b>
            </div>
            
            <!-- Beri id "btn-hapus" untuk tombol hapus nya -->
            <button type="button" class="btn btn-primary" id="btn-hapus">Ya</button>
            
            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Load File jquery.min.js yang ada difolder js -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Load File bootstrap.min.js yang ada difolder js -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Load file main.js yang ada di folder js -->
    <script src="js/main.js"></script>
  </body>
</html>