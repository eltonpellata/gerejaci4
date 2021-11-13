<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>unit &mdash; unit</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <h1 class="text-primary"><strong>Data</strong> sektor</h1>
            
        </div>
                <?php if (session()->getflashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">X</button>
                                <b>Success !</b>
                                <?= session()->getflashdata('success'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php if (session()->getflashdata('warning')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <div class="alert-body">
                                <b>Data</b>
                                <button class="close" data-dismiss="alert">X</button>
                                <?= session()->getflashdata('warning'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                <div class="section-body">
                    <div class="card">
                        <div class="card-header">
                        <a href="<?=site_url('unit/unittb')?>" class="btn btn-primary btn-sm"> Tambah data</a>
                        </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-md">
                        <tbody><tr class="table-info text-black">
                            <th>No</th>
                            <th>sektor</th>
                            <th>unit</th>
                            <th>nomor rumah</th>
                            <th>nomor keluarga</th>
                            <th>alamat</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($unit as $key => $value) : ?>
                        <tr>
                            <td><?= $key + 1?></td>
                            <td><?= $value->sektor; ?></td>
                            <td><?= $value->unit; ?></td>
                            <td><?= $value->norumah; ?></td>
                            <td><?= $value->nokeluarga; ?></td>
                            <td><?= $value->alamat; ?></td>
                            <td>
                                <!-- buttom edit -->
                                <a href="<?=site_url('home/edit/'.$value->id); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>

                                <!-- button delete -->
                                <form action="<?=site_url('home/'.$value->id); ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                    </div>
                                    <button class="btn btn-danger btn-sm">
                                    <i class=" fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
                </div>
                <!-- <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
<div class="btn-group me-2" role="group" aria-label="First group">
<button type="button" class="btn btn-primary">1</button>
<button type="button" class="btn btn-primary">2</button>
<button type="button" class="btn btn-primary">3</button>
<button type="button" class="btn btn-primary">4</button>
</div>
                </div> -->
    </section>
<?= $this->endSection() ?>