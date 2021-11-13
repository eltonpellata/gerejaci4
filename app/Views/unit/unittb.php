<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Tambah Data &mdash; GPM</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('unit/unit01')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
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
                    <form action="<?=site_url('unit/save1'); ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                            <div class="form-grup">
                                <label><h6>sektor :</h6></label>
                                <input type="text" name="sektor" class="form-control" required autofocus>
                            </div>
                            <div class="form-grup">
                                <label><h6>unit :</h6></label>
                                <input type="text" name="unit" class="form-control" required autofocus>
                            </div>
                            <div class="form-grup">
                                <label><h6>norumah :</h6></label>
                                <input type="text" name="norumah" class="form-control" required autofocus>
                            </div>
                            <div class="form-grup">
                                <label><h6>nokeluarga :</h6></label>
                                <input type="text" name="nokeluarga" class="form-control" required autofocus>
                            </div>
                            <div class="form-grup">
                                <label><h6>alamat :</h6></label>
                                <input type="text" name="alamat" class="form-control" required autofocus>
                            </div>
                            </div>
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