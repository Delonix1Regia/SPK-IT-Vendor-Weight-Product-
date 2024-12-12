<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Bobot</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('Home/viewBobot') ?>">Data Bobot</a></li>
                        <li class="breadcrumb-item active">Tambah Data</li>
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
                    <h3 class="card-title">Form Tambah Data Bobot</h3>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('Home/tambahBobot') ?>" method="post">
                        <div class="form-group">
                            <label for="keterangan">Keterangan <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                name="keterangan" 
                                id="keterangan" 
                                class="form-control" 
                                placeholder="Masukkan keterangan (contoh: Sangat Penting)"
                                required
                            >
                            <!-- <small class="form-text text-muted">Isi dengan keterangan bobot, misalnya: 'Sangat Penting' atau 'Kurang Penting'.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="nilai_bobot">Nilai Bobot <span class="text-danger">*</span></label>
                            <input 
                                type="number" 
                                step="0.01" 
                                name="nilai_bobot" 
                                id="nilai_bobot" 
                                class="form-control" 
                                placeholder="Masukkan nilai bobot (contoh: 0.5)" 
                                required
                            >
                            <!-- <small class="form-text text-muted">Isi dengan nilai bobot dalam angka desimal (contoh: 0.5).</small> -->
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="<?= site_url('Home/viewBobot') ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
