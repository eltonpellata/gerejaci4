<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Tambah Data &mdash; GPM</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('home')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah data</h1>
                </div>

                <div class="section-body"> 
                    <div class="container">
                        <div class="row justify-content-center">

                    <div class="card col-md-7">

                        <div class="card-header">
                            <h4>Tambah Data</h4>
                        </div>
                    <div class="card-body col-md-12 ">
                        <form action="<?=site_url('home/save'); ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                            <div class="form-grup">
                                <label><h6>Nama &nbsp;&nbsp;&nbsp; :</h6></label>
                                <input type="text" name="nama" class="form-control" required autofocus>
                            </div>
                            <div class="form-grup">
                            <label><h6>Jenis Kelamin</h6></label>
                            <select name="jenisklm" class="form-control form-select" aria-label="Default select example" required>
                                <option selected>Jenis Kelamin</option>
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>>
                            </select>
                            </div>
                            <!-- <div class="form-grup">
                                <label><h6>Jeniss Kelamin</h6></label>
                                <input type="text" name="jenisklm" class="form-control" required>
                            </div> -->
                            <br>
                            <div class="row g-6">
                            <div class="col-md-6 form-grup">
                                <label><h6>Tempat lahir</h6></label>
                                <input type="text" name="tmlahir" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-grup">
                            <label><h6>Tempat/Tanggal lahir</h6></label>
                                <input type="date" name="tgllahir" class="form-control" required>
                            </div>
                            </div>
                            <div class="form-grup">
                            <label><h6>Pendidikan</h6></label>
                            <select name="pekerjaan" class="form-control form-select" aria-label="Default select example" required>
                                <option selected>Pekerjaan</option>
                                <option value="progeming">progeming</option>
                                <option value="proplayer">proplayer</option>
                                <option value="youtuber">youtuber</option>
                            </select>
                            </div>
                            <!-- <div class="form-grup">
                                <label><h6>Pekerjaan</h6></label>
                                <input type="text" name="pekerjaan" class="form-control" required>
                            </div> -->
                            <div class="row">
                            <div class="col-md-6 form-grup">
                                <label><h6>Tempat Meninggal</h6></label>
                                <input type="text" name="tmmeninggal" class="form-control" required>
                            </div>
                            <div class="col-md-6 form-grup">
                                <label><h6>Tanggal Meninggal</h6></label>
                                <input type="date" name="tglmeninggal" class="form-control" required>
                            </div>
                            </div>
                            <div class="form-grup">
                            <label><h6>Pendidikan</h6></label>
                            <select name="pddk" class="form-control form-select" aria-label="Default select example" required>
                                <option selected>Pendidikan</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                            </select>
                            </div>
                            <!-- <div class="form-grup">
                                <label><h6>Pendidikan</h6></label>
                                <input type="text" name="pddk" class="form-control" required>
                            </div> -->
                            <br>
                            <div>
                                <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
    </section>
<?= $this->endSection(); ?>