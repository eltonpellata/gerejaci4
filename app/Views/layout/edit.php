<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Data &mdash; GPM</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('home')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Update data</h1>
                </div>

                <div class="section-body"> 
                    <div class="container">
                        <div class="row justify-content-center">

                    <div class="card col-md-7">

                        <div class="card-header">
                            <h4>Update Data</h4>
                        </div>
                    <div class="card-body col-md-12 ">
                        <form action="<?=site_url('home/'.$data->id); ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-grup">
                                <label><h6>Nama :</h6></label>
                                <input type="text" name="nama" value="<?= $data->nama; ?>" class="form-control" required>
                            </div>
                            <div class="form-grup">
                            <label><h6>Jenis Kelamin</h6></label>
                            <select name="jenisklm" value="<?= $data->jenisklm; ?>" class="form-control form-select" aria-label="Default select example" required>
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
                                <input type="text" name="tmlahir" value="<?= $data->tmlahir; ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-grup">
                            <label><h6>Tempat/Tanggal lahir</h6></label>
                                <input type="date" name="tgllahir" value="<?= $data->tgllahir; ?>" class="form-control" required>
                            </div>
                            </div>
                            <div class="form-grup">
                            <label><h6>Pendidikan</h6></label>
                            <select name="pekerjaan" value="<?= $data->pekerjaan; ?>"  class="form-control form-select" aria-label="Default select example" required>
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
                                <input type="text" name="tmmeninggal" value="<?= $data->tmmeninggal; ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6 form-grup">
                                <label><h6>Tanggal Meninggal</h6></label>
                                <input type="date" name="tglmeninggal"  value="<?= $data->tglmeninggal; ?>"  class="form-control" required>
                            </div>
                            </div>
                            <div class="form-grup">
                            <label><h6>Pendidikan</h6></label>
                            <select name="pddk"  value="<?= $data->pddk; ?>" class="form-control form-select" aria-label="Default select example" required>
                                <option selected>Pendidikan</option>
                                <option value="SD" >SD</option>
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