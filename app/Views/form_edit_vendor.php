<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('Home/viewVendor') ?>">Data Vendor</a></li>
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
                    <h3 class="card-title">Form Edit Data Vendor</h3>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('Home/updatevendor/' . $vendor['kode_vendor']) ?>" method="post">
                        <div class="form-group">
                            <label for="kode_vendor">Kode Vendor <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                name="kode_vendor" 
                                id="kode_vendor" 
                                class="form-control" 
                                value="<?= esc($vendor['kode_vendor']) ?>" 
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <label for="nama_vendor">Nama Vendor <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                name="nama_vendor" 
                                id="nama_vendor" 
                                class="form-control" 
                                value="<?= esc($vendor['nama_vendor']) ?>" 
                                placeholder="Masukkan nama vendor (contoh: PT Abadi Jaya)" 
                                required
                            >
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="<?= site_url('Home/viewvendor') ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
