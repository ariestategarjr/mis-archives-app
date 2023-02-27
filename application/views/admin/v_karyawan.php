                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Button trigger Add Modal Karyawan -->
                    <button class="btn btn-success" data-toggle="modal" data-target="#addModal">Tambah Karyawan Baru</button>
                    
                    <div class="table-responsive-sm">
                        <table class="table table-bordered table-hover" id="tableKaryawan">
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
                                    <td colspan="2">
                                        <button type="button" class="btn btn-warning btn-sm" id="editButton" data-toggle="modal" data-target="#editModal<?= $karyawan->id_karyawan ?>">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm" id="deleteButton" data-toggle="modal" data-target="#deleteModal<?= $karyawan->id_karyawan ?>">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>

                    <!-- Add Modal Karyawan -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('admin/karyawan/add_karyawan'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Insert Karyawan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="idKaryawanAdd">Id Karyawan</label>
                                        <input type="text" class="form-control" id="idKaryawanAdd" name="id-karyawan" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaKaryawanAdd">Nama Karyawan</label>
                                        <input type="text" class="form-control" id="namaKaryawanAdd" name="nama-karyawan" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamatKaryawanAdd">Jabatan</label>
                                        <input type="text" class="form-control" id="alamatKaryawanAdd" name="jabatan" autocomplete="off" required>
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
                    <!-- End of Add Modal Karyawan -->

                    <!-- Edit Modal Karyawan -->
                    <?php $no = 1; ?>
                    <?php foreach($karyawans as $karyawan) { $no++; ?>
                    <div class="modal fade" id="editModal<?= $karyawan->id_karyawan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('admin/karyawan/edit_karyawan'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Karyawan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" class="form-control" id="idKaryawanEdit" name="id-karyawan" value="<?= $karyawan->id_karyawan ?>" autocomplete="off" required>
                                    
                                    <div class="form-group">
                                        <label for="namaKaryawanEdit">Nama Karyawan</label>
                                        <input type="text" class="form-control" id="namaKaryawanEdit" name="nama-karyawan" value="<?= $karyawan->nama_karyawan ?>" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatanKaryawanEdit">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatanKaryawanEdit" name="jabatan" value="<?= $karyawan->jabatan ?>" autocomplete="off" required>
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
                    <?php } ?>
                    <!-- End of Edit Modal Karyawan -->

                    <!-- Delete Modal Karyawan -->
                    <?php $no = 1; ?>
                    <?php foreach($karyawans as $karyawan) { $no++; ?>
                    <div class="modal fade" id="deleteModal<?= $karyawan->id_karyawan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('admin/karyawan/delete_karyawan'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Karyawan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id-karyawan" value="<?= $karyawan->id_karyawan ?>">
                                    <p>Apakah Anda yakin akan menghapus data ini ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- End of Delete Modal Karyawan -->
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
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
        $(document).ready(function() {
            $('.nav-dashboard').attr('class', 'nav-item nav-dashboard');
            $('.nav-karyawan').attr('class', 'nav-item nav-karyawan active');
        });
    </script>
