<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Bobot</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('Home/viewbobot') ?>">Data Bobot</a></li>
                        <li class="breadcrumb-item active">Edit Data</li>
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
                    <h3 class="card-title">Form Edit Data Bobot</h3>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('Home/updateBobot/' . $bobot['id_bobot']) ?>" method="post">
                        <div class="form-group">
                            <label for="keterangan">Keterangan <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                name="keterangan" 
                                id="keterangan" 
                                class="form-control" 
                                value="<?= esc($bobot['keterangan']) ?>" 
                                placeholder="Masukkan keterangan (contoh: Sangat Penting)" 
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="nilai_bobot">Nilai Bobot <span class="text-danger">*</span></label>
                            <input 
                                type="number" 
                                step="0.01" 
                                name="nilai_bobot" 
                                id="nilai_bobot" 
                                class="form-control" 
                                value="<?= esc($bobot['nilai_bobot']) ?>"
                                placeholder="Masukkan nilai bobot (contoh: 0.5)" 
                                required
                            >
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="<?= site_url('Home/viewbobot') ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
