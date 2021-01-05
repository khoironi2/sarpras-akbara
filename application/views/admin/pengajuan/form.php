<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?= $parent; ?></a></li>
                        <li class="breadcrumb-item active"><?= $child; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form action="<?= base_url('pengajuan/form/create'); ?>" method="POST" enctype="multipart/form-data">
        <section class="content ml-4">
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Latar Belakang
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="latar_belakang_pengajuan" id="summernote1">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Tujuan
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="tujuan_pengajuan" id="summernote2">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Manfaat
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="manfaat_pengajuan" id="summernote3">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Jenis Pengajuan
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="jenis_pengajuan" id="summernote4">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Biaya Anggaran
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="biaya_pengajuan" id="summernote5">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Waktu Pelaksanaan
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="dari">Dari</label>
                                <input type="datetime-local" class="form-control" id="dari" name="waktu_pengajuan_awal">
                            </div>
                            <div class="form-group">
                                <label for="sampai">Sampai</label>
                                <input type="datetime-local" class="form-control" id="sampai" name="waktu_pengajuan_akhir">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Peserta
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="peserta_pengajuan" required id="summernote6">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Penutup
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="penutup_pengajuan" required id="summernote7">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                File Proposal
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="file_pengajuan">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file_pengajuan" class="custom-file-input" id="file_pengajuan">
                                        <label class="custom-file-label" for="file_pengajuan">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>

        </section>

    </form>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->