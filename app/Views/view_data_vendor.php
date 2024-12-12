<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Vendor</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Vendor</h3>
                            <!-- Button untuk menambah data vendor -->
                            <button type="button" class="btn btn-success" onclick="window.location.href='<?= site_url('Home/formTambahVendor') ?>'">
                                <i class="fas fa-plus"></i> Tambah Data
                            </button>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Vendor</th>
                                        <th>Nama Vendor</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($datamb)): ?>
                                        <?php $no = 1; foreach ($datamb as $row): ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= esc($row['kode_vendor']) ?></td>
                                                <td><?= esc($row['nama_vendor']) ?></td>
                                                <td>
                                                    <!-- Button Edit untuk vendor -->
                                                    <a href="<?= site_url('Home/editVendor/' . esc($row['kode_vendor'])) ?>" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <!-- Button Hapus untuk vendor -->
                                                    <a href="<?= site_url('Home/hapusVendor/' . esc($row['kode_vendor'])) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                                        <i class="fas fa-trash-alt"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" class="text-center">Data tidak ditemukan</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Content -->
</div>
