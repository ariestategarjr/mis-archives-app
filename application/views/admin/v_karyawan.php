                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Button trigger Add Modal Karyawan -->
                    <button class="btn btn-success" data-toggle="modal" data-target="#addModal">Tambah Karyawan Baru</button>
                    
                    <table class="table table-bordered">
                        <!-- id_karyawan	nama_karyawan	jabatan	 -->
                        <tr>
                            <th>No</th>
                            <th>Id Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        <?php foreach($karyawans as $karyawan) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $karyawan->id_karyawan ?></td>
                            <td><?php echo $karyawan->nama_karyawan ?></td>
                            <td><?php echo $karyawan->jabatan ?></td>
                            <td colspan="2">
                                <button type="button" class="btn btn-warning" id="editButton" data-toggle="modal" data-target="#editModal<?php echo $karyawan->id_karyawan ?>">Edit</button>
                                <button type="button" class="btn btn-danger" id="deleteButton" data-toggle="modal" data-target="#deleteModal<?php echo $karyawan->id_karyawan ?>">Hapus</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>

                    <!-- Add Modal Karyawan -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('admin/karyawan/add_karyawan'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Insert Karyawan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="idKaryawanAdd">Id Karyawan</label>
                                        <input type="text" class="form-control" id="idKaryawanAdd" name="id-karyawan">
                                    </div>
                                    <div class="form-group">
                                        <label for="namaKaryawanAdd">Nama Karyawan</label>
                                        <input type="text" class="form-control" id="namaKaryawanAdd" name="nama-karyawan">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamatKaryawanAdd">Jabatan</label>
                                        <input type="text" class="form-control" id="alamatKaryawanAdd" name="jabatan">
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
                    <div class="modal fade" id="editModal<?php echo $karyawan->id_karyawan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('admin/karyawan/edit_karyawan'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Karyawan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" class="form-control" id="idKaryawanEdit" name="id-karyawan" value="<?php echo $karyawan->id_karyawan ?>">
                                    
                                    <div class="form-group">
                                        <label for="namaKaryawanEdit">Nama Karyawan</label>
                                        <input type="text" class="form-control" id="namaKaryawanEdit" name="nama-karyawan" value="<?php echo $karyawan->nama_karyawan ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatanKaryawanEdit">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatanKaryawanEdit" name="jabatan" value="<?php echo $karyawan->jabatan ?>">
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
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('admin/karyawan/delete_karyawan'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Karyawan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id-karyawan" value="<?php echo $karyawan->id_karyawan ?>">
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
        const navKaryawan = document. querySelector('.nav-karyawan');

        navDashboard.setAttribute('class', 'nav-item nav-dashboard');
        navKaryawan.setAttribute('class', 'nav-item nav-karyawan active');
    </script>
