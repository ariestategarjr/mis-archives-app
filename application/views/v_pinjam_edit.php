                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Edit Pinjam</h1>
                    </div>

                    <!-- Form Edit Pinjam -->
                    <form action="<?= base_url('pinjam/edit_pinjam'); ?>" method="post" enctype="multipart/form-data">

                        <input type="hidden" class="form-control" id="kodePinjamEdit" name="kode-pinjam" value="<?= $pinjam->kode_pinjam ?>" autocomplete="off" required>

                        <div class="form-group row">
                            <label for="idKaryawanEdit" class="col-sm-2 col-form-label">Id Karyawan</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="idKaryawanEdit" name="id-karyawan" value="<?= $pinjam->id_karyawan ?>" autocomplete="off" required>
                            </div>
                            <div class="col-sm-1">
                                <a class="btn btn-secondary w-100" data-toggle="modal" data-target="#displayKaryawanModal">Pilih...</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaKaryawanEdit" class="col-sm-2 col-form-label">Nama Karyawan</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="namaKaryawanEdit" name="nama-karyawan" value="<?= $pinjam->nama_karyawan ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fileArsipEdit" class="col-sm-2 col-form-label">File Arsip</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="fileArsipEdit" name="file-arsip" value="<?= $pinjam->file_arsip ?>" autocomplete="off" required>
                            </div>
                            <div class="col-sm-1">
                                <a class="btn btn-secondary w-100" data-toggle="modal" data-target="#displayArsipModal">Pilih...</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaCustomerEdit" class="col-sm-2 col-form-label">Nama Customer</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="namaCustomerEdit" name="nama-customer" value="<?= $pinjam->nama_customer ?>" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggalPinjamEdit" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggalPinjamEdit" name="tanggal-pinjam" value="<?= $pinjam->tgl_pinjam ?>" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="durasiEdit" class="col-sm-2 col-form-label">Durasi</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="durasiEdit" name="durasi" value="<?= $pinjam->durasi ?>" autocomplete="off" required>
                                <small id="durasiEditHelp" class="form-text text-muted">(durasi dalam hari)</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </form>
             

                    <!-- Edit Modal Karyawan -->
                    <div class="modal fade" id="displayKaryawanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Karyawan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered table-hover" id="dataTablesOther">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id Karyawan</th>
                                                    <th>Nama Karyawan</th>
                                                    <th>Jabatan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach($karyawans as $karyawan) { ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $karyawan->id_karyawan ?></td>
                                                    <td><?= $karyawan->nama_karyawan ?></td>
                                                    <td><?= $karyawan->jabatan ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" id="selectButtonKaryawan" 
                                                        data-toggle="modal" data-target="#selectModal<?= $karyawan->id_karyawan ?>"
                                                        data-id-karyawan="<?= $karyawan->id_karyawan ?>"
                                                        data-nama-karyawan="<?= $karyawan->nama_karyawan ?>">
                                                            Select
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>                                
                            </div>
                        </div>
                    </div>
                    <!-- End of Edit Modal Karyawan -->

                    <!-- Edit Modal Arsip -->
                    <div class="modal fade" id="displayArsipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Arsip</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered table-hover" id="dataTables">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Arsip</th>
                                                    <th>Nama Customer</th>
                                                    <th>Bisnis Unit</th>
                                                    <th>Tanggal Arsip</th>
                                                    <th>File Arsip</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach($arsips as $arsip) { ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $arsip->kode_arsip ?></td>
                                                    <td><?= $arsip->nama_customer ?></td>
                                                    <td><?= $arsip->bisnis_unit ?></td>
                                                    <td><?= $arsip->tgl_arsip ?></td>
                                                    <td><?= $arsip->file_arsip ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" id="selectButtonArsip" 
                                                        data-toggle="modal" data-target="#selectModal<?= $arsip->kode_arsip ?>"
                                                        data-file-arsip="<?= $arsip->file_arsip ?>"
                                                        data-nama-customer="<?= $arsip->nama_customer ?>">
                                                            Select
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>                                
                            </div>
                        </div>
                    </div>
                    <!-- End of Edit Modal Arsip -->
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('login/log_out') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script>
        // let uniqueKodePinjam = "PJ" + Math.random().toString(8).slice(4);

        let currentTime = new Date();
        let dd = ("0" + currentTime .getDate()).slice(-2);
        let mm = ("0" + (currentTime .getMonth() + 1)).slice(-2);
        let currentDate = currentTime .getFullYear()+"-"+(mm)+"-"+(dd);

        $(document).ready(function(){
            $('.nav-dashboard').attr('class', 'nav-item nav-dashboard');
            $('.nav-pinjam').attr('class', 'nav-item nav-pinjam active');

            // $('#kodePinjamEdit').val(uniqueKodePinjam);
            $('#tanggalPinjamEdit').val(currentDate);

            $(document).on('click', '#selectButtonKaryawan', function() {
                const idKaryawan = $(this).data('id-karyawan');
                const namaKaryawan = $(this).data('nama-karyawan');
                
                $('#idKaryawanEdit').val(idKaryawan);
                $('#namaKaryawanEdit').val(namaKaryawan);
                $('#displayKaryawanModal').modal('hide');
            });

            $(document).on('click', '#selectButtonArsip', function() {
                const fileArsip = $(this).data('file-arsip');
                const namaCustomer = $(this).data('nama-customer');

                $('#fileArsipEdit').val(fileArsip);
                $('#namaCustomerEdit').val(namaCustomer);
                $('#displayArsipModal').modal('hide');
            });;
        });
    </script>