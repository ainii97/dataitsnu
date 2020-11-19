        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
       
          <table class="table table-bordered table-striped">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Tahun Akademik</th>
                <th class="text-center">Teknik Industri</th>
                <th class="text-center">Teknik Kimia</th>
                <th class="text-center">Teknologi Hasil Pertanian</th>
                <th class="text-center">Pendidikan Fisika</th>
                <th class="text-center">Pendidikan Biologi</th>
                <th class="text-center">Desain Komunikasi Visual</th>
            </tr>
            <?php $no=1; foreach($mhs as $m) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $m->tahun_akademik ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        </div>