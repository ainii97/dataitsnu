<!DOCTYPE html>
<html>

    <body>
    <div class="container">
        <h2>Kurikulum Program Studi</h2>
        <div class="panel panel-default">

            <div class="panel-heading">
                <h5><i class="fa fa-university"></i>  Fakultas</h5>
                <hr>
            </div>

            <div class="panel-body">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Fakultas Teknik
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Program Studi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="<?= base_url('admin/tekind')?>">S1 Teknik Industri</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="<?= base_url('admin/tekkim')?>">S1 Teknik Kimia</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="<?= base_url('admin/thp')?>">S1 Teknik Hasil Pertanian</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-two">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-Two" aria-expanded="false" aria-controls="collapse-Two">
                            Fakultas Ilmu Pendidikan
                            </button>
                        </h5>
                        </div>
                        <div id="collapse-Two" class="collapse" aria-labelledby="heading-two" data-parent="#accordion">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                                <th>Program Studi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="<?= base_url('admin/penfis')?>">S1 Pendidikan Fisika</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="<?= base_url('admin/penbio')?>">S1 Pendidikan Biologi</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="<?= base_url('admin/penmat')?>">S1 Pendidikan Matematika</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-Three">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-Three" aria-expanded="false" aria-controls="collapse-Three">
                            Fakultas Ilmu Komunikasi
                            </button>
                        </h5>
                        </div>
                        <div id="collapse-Three" class="collapse" aria-labelledby="heading-Three" data-parent="#accordion">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Program Studi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="<?= base_url('admin/dkv')?>">S1 Desain Komunikasi Visual</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                

            </div>

        </div>
    </div>

    </body>

</html>