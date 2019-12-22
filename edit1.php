<?php
  include 'koneksi.php';
  include 'header.php';
  include 'sidebar.php';
  $ID = $_SESSION['username'];
  $query=mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='".$ID."'");
  $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div><!-- /.container-fluid -->
    </section>


            <!-- Horizontal Form -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"><li class="fa fa-edit"> Edit Data Diri</h3>
              </div>
              <form class="form-horizontal" action="sql_update.php?id=<?php echo $ID; ?>" method="POST">
              <div class="panel-body">
                <!-- Nis --> 
                <div class="form-group">
                  <label class="col-sm-2">NIS</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nis" value="<?php echo $data['nis']; ?>"placeholder="nis">
                  </div>
                </div>
              <!-- nisn -->
                <div class="form-group">
                  <label class="col-sm-2">NISN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nisn" value="<?php echo $data['nisn']; ?>"placeholder="nisn">
                  </div>
                </div>
              <!-- Nama -->
                <div class="form-group">
                  <label class="col-sm-2">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'];?>" placeholder="Nama Lengkap">
                  </div>
                </div>
                <!--Jenis Kelamin-->
                <div class="form-group">
                  <label class="col-sm-2">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select class="form-control"name="jenis_kelamin" >
                        <option <?php if ($data['jenis_kelamin']=='L') echo "selected"; ?> value="L">Laki-laki</option>
                        <option <?php if ($data['jenis_kelamin']=='P') echo "selected"; ?> value="P">Perempuan</option>
                    </select>
                  </div>
                </div>
                <!--alamat-->
                <div class="form-group">
                  <label class="col-sm-2">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'];?>" placeholder="Alamat">
                  </div>
                </div>
                <!--kelas-->
                <div class="form-group">
                  <label class="col-sm-2">Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'];?>" placeholder="Kelas">
                  </div>
                </div>
                <!-- nisn -->
                <div class="form-group">
                  <label class="col-sm-2">Tempat lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tmp_lahir" value="<?php echo $data['tmp_lahir'];?>" placeholder="Tempat lahir">
                  </div>
                </div>
                <!-- tgl_lahir -->
                <div class="form-group">
                  <label class="col-sm-2">Tanggal lahir (bln/tgl/thn)</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir'];?>" placeholder="Tanggal lahir">
                  </div>
                </div>
                <!--agama-->
                <div class="form-group">
                  <label class="col-sm-2">Agama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="agama" value="<?php echo $data['agama'];?>" placeholder="Agama">
                  </div>
                </div>
                <!--status-->
                <div class="form-group">
                  <label class="col-sm-2">Status</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" value="<?php echo $data['status'];?>" placeholder="Status">
                  </div>
                </div>
                <!--anak ke-->
                <div class="form-group">
                  <label class="col-sm-2">Anak ke</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="anak_ke" value="<?php echo $data['anak_ke'];?>" placeholder="Anak Ke">
                  </div>
                </div>
                <!--nomor telepon-->
                <div class="form-group">
                  <label class="col-sm-2">No. telpon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_hp" value="<?php echo $data['no_hp'];?>" placeholder="Nomor telepon">
                  </div>
                </div>
                <!--asal sekolah-->
                <div class="form-group">
                  <label class="col-sm-2">Asal sekolah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="asal_sekolah" value="<?php echo $data['asal_sekolah'];?>" placeholder="Asal sekolah">
                  </div>
                </div>
                <!--diterima dikelas-->
                <div class="form-group">
                  <label class="col-sm-2">Diterima dikelas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="diterima_kelas" value="<?php echo $data['diterima_kelas'];?>" placeholder="Diterima dikelas">
                  </div>
                </div>
                <!--tanggal diterima-->
                <div class="form-group">
                  <label class="col-sm-2">Diterima tanggal (bln/tgl/thn)</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="diterima_tgl" value="<?php echo $data['diterima_tgl'];?>" placeholder="Diterima tanggal">
                  </div>
                </div>
                <!--golongan darah-->
                <div class="form-group">
                  <label class="col-sm-2">Golongan darah</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="darah" >
                        <option value="-">-</option>
                        <option <?php if ($data['darah']=='O') echo "selected"; ?> value="O">O</option>
                        <option <?php if ($data['darah']=='A') echo "selected"; ?>  value="A">A</option>
                        <option <?php if ($data['darah']=='B') echo "selected"; ?> value="B">B</option>
                        <option <?php if ($data['darah']=='AB') echo "selected"; ?> value="AB">AB</option>
                    </select>
                  </div>
                </div>
                <!--email-->
                <div class="form-group">
                  <label class="col-sm-2">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?php echo $data['email'];?>" placeholder="Email">
                  </div>
                </div>
                <br>
                <br>
                <!--nama ayah-->
                <div class="form-group">
                  <label class="col-sm-2">Nama ayah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ayah" value="<?php echo $data['ayah'];?>" placeholder="Nama ayah">
                  </div>
                </div>
                <!--nama ibu-->
                <div class="form-group">
                  <label class="col-sm-2">Nama ibu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ibu" value="<?php echo $data['ibu'];?>" placeholder="Nama ibu">
                  </div>
                </div>
                <!--pekerjaan ayah-->
                <div class="form-group">
                  <label class="col-sm-2">Pekerjaan ayah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo $data['pekerjaan_ayah'];?>" placeholder="Pekerjaan ayah">
                  </div>
                </div>
                <!--pekerjaan ibu-->
                <div class="form-group">
                  <label class="col-sm-2">Pekerjaan ibu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo $data['pekerjaan_ibu'];?>" placeholder="Pekerjaan ibu">
                  </div>
                </div>
                <!--alamat ortu-->
                <div class="form-group">
                  <label class="col-sm-2">Alamat Orangtua</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_ortu" value="<?php echo $data['alamat_ortu'];?>" placeholder="Alamat Orangtua">
                  </div>
                </div>
                <!--nomor ortu-->
                <div class="form-group">
                  <label class="col-sm-2">No. Telepon Orangtua</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_ortu" value="<?php echo $data['nomor_ortu'];?>" placeholder="Nomor Telepon Orangtua">
                  </div>
                </div>
                <br>
                <br>
                <!--wali-->
                <div class="form-group">
                  <label class="col-sm-2">Nama Wali</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="wali" value="<?php echo $data['wali'];?>" placeholder="Nama Wali">
                  </div>
                </div>
                <!--pekerjaan wali-->
                <div class="form-group">
                  <label class="col-sm-2">Pekerjaan wali</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pekerjaan_wali" value="<?php echo $data['pekerjaan_wali'];?>" placeholder="Pekerjaan wali">
                  </div>
                </div>
                <!--alamat wali-->
                <div class="form-group">
                  <label class="col-sm-2">Alamat Wali</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_wali" value="<?php echo $data['alamat_wali'];?>" placeholder="Alamat Wali">
                  </div>
                </div>
                <!--nomor wali-->
                <div class="form-group">
                  <label class="col-sm-2">No. Telepon Wali</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_wali" value="<?php echo $data['no_wali'];?>" placeholder="Nomor Telepon Wali">
                  </div>
                </div>
                <!--submit-->
                <div class="card-footer pull-right">
                  <button type="button" onclick="history.go(-1); return false;" class="btn btn-warning"><li class="fa fa-angle-double-left"></li> Kembali</button>
                  <button type="submit" class="btn btn-success" href=sql_update.php?page=edit&id=<?php echo $data['id_siswa']; ?>><li class="fa fa-save"></li> Simpan</button>
                </div>
              </div>
              <!-- /.panel-body -->
            </form>
          </div>
<?php include 'footer.php'; ?>
  <script src="../asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
</body>
</html>