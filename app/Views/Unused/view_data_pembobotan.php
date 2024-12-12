<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pembobotan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pembobotan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pembobotan Nilai</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Alternatif</th>
                                <th>Kode Kriteria</th>
                                <th>Nilai Ternormalisasi</th>
                                <th>Bobot</th>
                                <th>Nilai Berbobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($datamb)): ?>
                                <?php $no = 1; foreach ($datamb as $row): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= esc($row['kode_alternatif']) ?></td>
                                        <td><?= esc($row['kode_kriteria']) ?></td>
                                        <td><?= esc($row['nilai_ternormalisasi']) ?></td>
                                        <td><?= esc($row['bobot']) ?></td>
                                        <td><?= esc($row['nilai_berbobot']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">Data tidak ditemukan</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
