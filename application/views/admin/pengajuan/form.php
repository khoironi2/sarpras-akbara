<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
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
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Latar Belakang
                        </h3>
                    </div>
                    <div class="card-body">
                        <textarea id="summernote1">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Tujuan
                        </h3>
                    </div>
                    <div class="card-body">
                        <textarea id="summernote2">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Manfaat
                        </h3>
                    </div>
                    <div class="card-body">
                        <textarea id="summernote3">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Jenis
                        </h3>
                    </div>
                    <div class="card-body">
                        <textarea id="summernote3">
                Place <em>some</em> <u>text</u> <strong>here</strong>
                         </textarea>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->