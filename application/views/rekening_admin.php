

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
                                <h2 class="pageheader-title">REKENING ADMIN </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">REKENING ADMIN</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Rekening Admin</li>
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
                                            <i class="fas fa-plus-circle"></i> Tambah Rekening Admin
                                        </a>
                                <!-- Modal -->
                            </header>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Kategori</th>
                                                <th>Jenis</th>
                                                <th>Nama</th>
                                                <th>Nomor</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <td>a</td>
                                                <td>a</td>
                                                <td>a</td>
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
                                                <td>a</td>
                                                <td>a</td>
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
                                                <th>Kategori</th>
                                                <th>Jenis</th>
                                                <th>Nama</th>
                                                <th>Nomor</th>
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
                                                                <h5 class="modal-title" id="gamesModalLabel"><i class="fas fa-plus-circle"></i> Tambah Rekening Admin</h5>
                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- FORM -->

                                                                <form action="#" id="basicform" data-parsley-validate="">
                                                                    <div class="form-group">
                                                                        <label for="inputUserName">Kategori</label>
                                                                        <select class="form-control form-control-sm">
                                                                            <option>-- Pilih Kategori --</option>
                                                                            <option>Bank</option>
                                                                            <option>E-Money</option>
                                                                            <option>Pulsa</option>
                                                                        </select>
                                                                    </div>
                                                                     <div class="form-group">
                                                                        <label for="inputUserName">Jenis</label>
                                                                        <select class="form-control form-control-sm">
                                                                            <option>-- Pilih Jenis --</option>
                                                                            <option>BCA</option>
                                                                            <option>BNI</option>
                                                                            <option>BANK LIEUR</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputNama">Nama</label>
                                                                        <input id="inputNama" type="text" name="name" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputNama">Nomor</label>
                                                                        <input id="inputNama" type="text" name="name" data-parsley-trigger="change"  required="" autocomplete="off" class="form-control">
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