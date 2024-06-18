
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">GAMES </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                   
                        <div class="row">
                          
                             <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <header>
                                <!-- Button trigger modal -->
                                 <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gamesModal">
                                            <i class="fas fa-plus-circle"></i> Tambah Games
                                        </a>
                                <!-- Modal -->
                            </header>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <td>a</td>
                                                <td>
                                                    <a href="" data-toggle="dropdown" class=" dropdown-toggle"><i class="m-r-10 mdi mdi-account-settings-variant"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="#" class="dropdown-item"><i class="m-r-10 mdi mdi-check"></i> Ubah Data</a>
                                                        <a href="#" class="dropdown-item"><i class="m-r-10 mdi mdi-delete-empty"></i>Hapus Data</a>
                                                        
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>a</td>
                                                <td>
                                                    <a href="" data-toggle="dropdown" class=" dropdown-toggle"><i class="m-r-10 mdi mdi-account-settings-variant"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="#" class="dropdown-item"><i class="m-r-10 mdi mdi-check"></i> Ubah Data</a>
                                                        <a href="#" class="dropdown-item"><i class="m-r-10 mdi mdi-delete-empty"></i>Hapus Data</a>
                                                        
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->

                        </div>

                </div>
            </div>
            
                               


                            <!-- Modal -->
                                                <div class="modal fade" id="gamesModal" tabindex="-1" role="dialog" aria-labelledby="gamesModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="gamesModalLabel"><i class="fas fa-plus-circle"></i> Tambah Games</h5>
                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- FORM -->

                                                                <form action="#" id="basicform" data-parsley-validate="">
                                                                    <div class="mb-3 d-flex justify-content-center">
                                                                        <img id="selectedImage" class="img-fluid shadow rounded" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                                                        alt="example placeholder" style="width: 500px; height: 200px;" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-center">
                                                                        <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                                                            <label class="form-label text-white m-1" for="customFile1">Pilih gambar</label>
                                                                            <input type="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                                                        </div>
                                                                    </div>
                                                                   
                                                                   <div class="form-group">
                                                                        <label for="inputJudul">Judul</label>
                                                                        <input id="inputJudul" type="text" name="judul" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="full-featured">Link Asli</label>
                                                                        <textarea class="form-control" id="summernote" name="editordata" rows="3"></textarea>
                                                                    </div>
                                                                    
                                                                </form>

                                                                <!-- AKHIR FORM -->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="#" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> Batal</a>
                                                                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- modal  -->
                                <!-- ============================================================== -->