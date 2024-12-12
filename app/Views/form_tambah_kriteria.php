<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Kriteria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('Home/viewkriteria') ?>">Data Kriteria</a></li>
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
                    <h3 class="card-title">Form Tambah Data Kriteria</h3>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('Home/tambahKriteria') ?>" method="post">
                        <div class="form-group">
                            <label for="kode_kriteria">Kode Kriteria <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                name="kode_kriteria" 
                                id="kode_kriteria" 
                                class="form-control" 
                                placeholder="Masukkan kode kriteria (contoh: C1)" 
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="nama_kriteria">Nama Kriteria <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                name="nama_kriteria" 
                                id="nama_kriteria" 
                                class="form-control" 
                                placeholder="Masukkan nama kriteria (contoh: Harga)" 
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe <span class="text-danger">*</span></label>
                            <select name="tipe" id="tipe" class="form-control" required>
                                <option value="">-- Pilih Tipe --</option>
                                <option value="Benefit">Benefit</option>
                                <option value="Cost">Cost</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot <span class="text-danger">*</span></label>
                            <input 
                                type="number" 
                                step="0.01" 
                                name="bobot" 
                                id="bobot" 
                                class="form-control" 
                                placeholder="Masukkan bobot kriteria (contoh: 0.5)" 
                                required
                            >
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="<?= site_url('Home/viewkriteria') ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
