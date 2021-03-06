<div class="panel panel-default" style="border-radius:0px;">
  <div class="panel-heading">
    <h4 style="padding:0px;margin:0px;">
      <strong>Data Master Siswa</strong>
    </h4>
      </div>
    <div class="panel-body">
      <a href="<?php echo base_url('siswa/tambah');?>" class="btn btn-success">Tambah Data</a>
      <a href="#" class="btn btn-warning">Cetak Laporan</a>
      <br><br><table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>NO</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>JK</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>KETERANGAN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              if ($query->num_rows() > 0) {
                  $no=1;
                  foreach ($query->result() as $row) {
                    echo '
                      <tr>
                      <td>'.$no.'</td>
                      <td>'.$row->siswa_nisn.'</td>
                      <td>'.$row->siswa_nis.'</td>
                      <td>'.$row->siswa_nama.'</td>
                      <td>'.$row->siswa_jk.'</td>
                      <td>'.$row->siswa_tmp_lahir.'</td>
                      <td>'.$row->siswa_tgl_lahir.'</td>
                      <td><a href="#" class="btn btn-success btn-xs">Edit</a>
                      <a href="#" class="btn btn-danger btn-xs">Hapus</a>
                      </td>
                      </tr>
                    ';$no++;
                  }
              }else {
                echo '<td colspan="8" style="text-align:center;">Tidak Ada Data !</td>';
              }
             ?>
          </tr>
        </tbody>
      </table>
    </div>

</div>
