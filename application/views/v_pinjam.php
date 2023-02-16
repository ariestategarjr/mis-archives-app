                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pinjam</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Button trigger Add Modal Akun -->
                    <a href="<?= base_url('pinjam/add_pinjam_page'); ?>" class="btn btn-success">
                        Tambah Pinjam Baru
                    </a>

                    <!-- Table Pinjam -->
                    <table class="table table-responsive" id="dataTables">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pinjam</th>
                            <th>Id Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>Kode Arsip</th>
                            <th>Nama Customer</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($pinjams as $pinjam) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $pinjam->kode_pinjam ?></td>
                            <td><?= $pinjam->id_karyawan ?></td>
                            <td><?= $pinjam->nama_karyawan ?></td>
                            <td><?= $pinjam->kode_arsip ?></td>
                            <td><?= $pinjam->nama_customer ?></td>
                            <td><?= $pinjam->tgl_pinjam ?></td>
                            <td><?= $pinjam->tgl_kembali ?></td>
                            <td colspan="2">
                                <a href="<?= base_url('pinjam/edit_pinjam_page/' . $pinjam->kode_pinjam); ?>" class="btn btn-warning" id="editButton">Edit</a>
                                <button type="button" class="btn btn-danger" id="deleteButton" data-toggle="modal" data-target="#deleteModal<?= $arsip->kode_arsip ?>">Hapus</button>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>

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
        const navPinjam = document.querySelector('.nav-pinjam');
        
        navDashboard.setAttribute('class', 'nav-item nav-dashboard');
        navPinjam.setAttribute('class', 'nav-item nav-pinjam active');
    </script>