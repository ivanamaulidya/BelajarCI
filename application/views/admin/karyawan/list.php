<table class="table table-hover" id="dataTable" width="50%" cellspacing="0" border="3px">
  <thead>
    <tr>
      <th>Id Karyawan</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Telepon</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($karyawan as $karyawan): ?>
    <tr>
      <td width="50">
        <?php echo $karyawan->id_karyawan ?>
      </td>
      <td>
        <?php echo $karyawan->nama_karyawan ?>
      </td>
      <td>
        <?php echo $karyawan->alamat ?>
      </td>
      <td>
        <?php echo $karyawan->telepon ?>
      </td>

    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
