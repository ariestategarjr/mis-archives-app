                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Arsip</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Button trigger Add Modal Akun -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                        Tambah Arsip
                    </button>

                    <!-- Table Akun -->
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Kode Arsip</th>
                            <th>Nama Customer</th>
                            <th>Bisnis Unit</th>
                            <th>Tanggal Arsip</th>
                            <th>File Arsip</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        <?php foreach($arsips as $arsip) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $arsip->kode_arsip ?></td>
                            <td><?php echo $arsip->nama_customer ?></td>
                            <td><?php echo $arsip->bisnis_unit ?></td>
                            <td><?php echo $arsip->tgl_arsip ?></td>
                            <td><?php echo $arsip->file_arsip ?></td>
                            <td colspan="2">
                                <button type="button" class="btn btn-warning" id="editButton" data-toggle="modal" data-target="#editModal<?php echo $arsip->kode_arsip ?>">Edit</button>
                                <button type="button" class="btn btn-danger" kode="deleteButton" data-toggle="modal" data-target="#deleteModal<?php echo $arsip->kode_arsip ?>">Hapus</button>
                            </td>                      
                        </tr>
                        <?php } ?>
                    </table>

                    <!-- Add Modal Akun -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('arsip/add_arsip'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Insert Arsip</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="kodeArsipAdd">Kode Arsip</label>
                                        <input type="text" class="form-control" id="kodeArsipAdd" name="kode-arsip" autocomplete="off">
                                    </div>  
                                    <div class="form-group">
                                        <label for="namaCustomerArsipAdd">Nama Customer</label>
                                        <input type="text" class="form-control" id="namaCustomerArsipAdd" name="nama-customer-arsip" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="bisnisUnitArsipAdd">Bisnis Unit</label>
                                        <!-- <input type="text" class="form-control" id="bisnisUnitArsipAdd" name="bisnis-unit-arsip" autocomplete="off"> -->
                                        <a class="btn btn-secondary" id="bisnisUnitArsipAdd" data-toggle="modal" data-target="#displayBisnisUnitModal">Pilih...</a>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggalArsipAdd">Tanggal Arsip</label>
                                        <input type="date" class="form-control" id="tanggalArsipAdd" name="tanggal-arsip" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="fileArsipAdd">File Arsip</label>
                                        <input type="text" class="form-control" id="fileArsipAdd" name="file-arsip" autocomplete="off">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End of Add Modal Akun -->

                    <!-- Add Modal Akun -->
                    <div class="modal fade" id="displayBisnisUnitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- <form action="#" method="post"> -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Insert Arsip</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- End of Add Modal Akun -->


         
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
                    <a class="btn btn-primary" href="<?php echo base_url('login/log_out') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const navDashboard = document.querySelector('.nav-dashboard');
        const navArsip = document.querySelector('.nav-arsip');
        
        navDashboard.setAttribute('class', 'nav-item nav-dashboard');
        navArsip.setAttribute('class', 'nav-item nav-arsip active');
    </script>
