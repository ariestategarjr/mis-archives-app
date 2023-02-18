                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Tambah Pinjam</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Form Tambah Pinjam -->
                    <form action="<?= base_url('arsip/add_pinjam'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="kodePinjamAdd" class="col-sm-2 col-form-label">Kode Pinjam</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="kodePinjamAdd" name="kode-pinjam" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idKaryawanAdd" class="col-sm-2 col-form-label">Id Karyawan</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="idKaryawanAdd" name="id-karyawan" autocomplete="off" required>
                            </div>
                            <div class="col-sm-1">
                                <a class="btn btn-secondary w-100" data-toggle="modal" data-target="#displayKaryawanModal">Pilih...</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaKaryawanAdd" class="col-sm-2 col-form-label">Nama Karyawan</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="namaKaryawanAdd" name="nama-karyawan" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fileArsipAdd" class="col-sm-2 col-form-label">File Arsip</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="fileArsipAdd" name="file-arsip" autocomplete="off" required>
                            </div>
                            <div class="col-sm-1">
                                <a class="btn btn-secondary w-100" data-toggle="modal" data-target="#displayArsipModal">Pilih...</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaCustomerAdd" class="col-sm-2 col-form-label">Nama Customer</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="namaCustomerAdd" name="nama-customer" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggalPinjamAdd" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggalPinjamAdd" name="tanggal-pinjam" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="durasiAdd" class="col-sm-2 col-form-label">Durasi</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="durasiAdd" name="durasi" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggalKembaliAdd" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggalKembaliAdd" name="tanggal-kembali" autocomplete="off" required>
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
             

                    <!-- Add Modal Karyawan -->
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
                                    <table class="table table-responsive" id="dataTablesOther">
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
                                <div class="modal-footer"></div>                                
                            </div>
                        </div>
                    </div>
                    <!-- End of Add Modal Karyawan -->

                    <!-- Add Modal Arsip -->
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
                                    <table class="table table-responsive" id="dataTables">
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
                                <div class="modal-footer"></div>                                
                            </div>
                        </div>
                    </div>
                    <!-- End of Add Modal Arsip -->
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
        let uniqueKodePinjam = "PJ" + Math.random().toString(8).slice(4);

        let currentTime = new Date();
        let dd = ("0" + currentTime .getDate()).slice(-2);
        let mm = ("0" + (currentTime .getMonth() + 1)).slice(-2);
        let currentDate = currentTime .getFullYear()+"-"+(mm)+"-"+(dd);

        

        $(document).ready(function(){
            $('.nav-dashboard').attr('class', 'nav-item nav-dashboard');
            $('.nav-pinjam').attr('class', 'nav-item nav-pinjam active');

            $('#kodePinjamAdd').val(uniqueKodePinjam);
            $('#tanggalPinjamAdd').val(currentDate);

            $(document).on('click', '#selectButtonKaryawan', function() {
                const idKaryawan = $(this).data('id-karyawan');
                const namaKaryawan = $(this).data('nama-karyawan');
                
                $('#idKaryawanAdd').val(idKaryawan);
                $('#namaKaryawanAdd').val(namaKaryawan);
                $('#displayKaryawanModal').modal('hide');
            });

            $(document).on('click', '#selectButtonArsip', function() {
                const fileArsip = $(this).data('file-arsip');
                const namaCustomer = $(this).data('nama-customer');

                $('#fileArsipAdd').val(fileArsip);
                $('#namaCustomerAdd').val(namaCustomer);
                $('#displayArsipModal').modal('hide');
            });

            // let durasi = document.getElementById('durasiAdd').value;
            $(document).on('change', '#durasiAdd', function() {
                // const durasi = Number($(this).text());
                // const durasi = document.getElementById('#durasiAdd').innerText;
                // const durasi = $(this);
                
                // let afterDate = durasi + currentDate;
                console.log(durasi);
                // $('#tanggalKembaliAdd').val(durasi);
            });
        });
    </script>