                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Button trigger Add Modal Akun -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                        Tambah Akun
                    </button>

                    <!-- Table Akun -->
                    <table class="table table-bordered" id="tableAkun">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Akun</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($akuns as $akun) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $akun->id_akun ?></td>
                                <td><?= $akun->username ?></td>
                                <td><?= $akun->password ?></td>
                                <td><?= $akun->status ?></td>
                                <td colspan="2">
                                    <button type="button" class="btn btn-warning" id="editButton" data-toggle="modal" data-target="#editModal<?= $akun->id_akun ?>">Edit</button>
                                    <button type="button" class="btn btn-danger" id="deleteButton" data-toggle="modal" data-target="#deleteModal<?= $akun->id_akun ?>">Hapus</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <!-- Add Modal Akun -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('admin/akun/add_akun'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Insert Akun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="idAkunAdd">Id Akun</label>
                                        <input type="text" class="form-control" id="idAkunAdd" name="id-akun" autocomplete="off" required>
                                    </div>  
                                    <div class="form-group">
                                        <label for="usernameAkunAdd">Username</label>
                                        <input type="text" class="form-control" id="usernameAkunAdd" name="username-akun" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="passwordAkunAdd">Password</label>
                                        <input type="text" class="form-control" id="passwordAkunAdd" name="password-akun" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="statusAkunAdd">Status</label>
                                        <select class="form-control" name="status-akun" id="statusAkunAdd" autocomplete="off" required>
                                            <option value="" <?php if(set_value('status-akun' == '')) : echo 'selected'; endif ?>>--Pilih--</option>
                                            <option value="admin" <?php if(set_value('status-akun' == 'admin')) : echo 'selected'; endif ?>>Admin</option>
                                            <option value="user" <?php if(set_value('status-akun' == 'user')) : echo 'selected'; endif ?>>User</option>
                                        </select>
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

                    <!-- Edit Modal Akun -->
                    <?php $no = 1; ?>
                    <?php foreach($akuns as $akun) { $no++; ?>
                    <div class="modal fade" id="editModal<?= $akun->id_akun ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('admin/akun/edit_akun'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Akun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" class="form-control" id="idAkunEdit" name="id-akun" value="<?= $akun->id_akun ?>" autocomplete="off" required>
                                    
                                    <div class="form-group">
                                        <label for="usernameAkunEdit">Username</label>
                                        <input type="text" class="form-control" id="usernameAkunEdit" name="username-akun" value="<?= $akun->username ?>" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="passwordAkunEdit">Password</label>
                                        <input type="text" class="form-control" id="passwordAkunEdit" name="password-akun" value="<?= $akun->password ?>" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="statusAkunEdit">Status</label>
                                        <select class="form-control" name="status-akun" id="statusAkunEdit" autocomplete="off" required>
                                            <option class="defaultOption" value=""><?= $akun->status ?> (default)</option>
                                            <option class="adminOption" value="admin" <?php if(set_value('status-akun' == 'admin')) : echo 'selected'; endif ?>>admin</option>
                                            <option class="userOption" value="user" <?php if(set_value('status-akun' == 'user')) : echo 'selected'; endif ?>>user</option>
                                        </select>                                    
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
                    <!-- End of Edit Modal Akun -->

                    <!-- Delete Modal Akun -->
                    <?php $no = 1; ?>
                    <?php foreach($akuns as $akun) { $no++; ?>
                    <div class="modal fade" id="deleteModal<?= $akun->id_akun ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('admin/akun/delete_akun'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Akun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id-akun" value="<?= $akun->id_akun ?>">
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
                    <!-- End of Delete Modal Akun -->
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
        $(document).ready(function() {
            $('.nav-dashboard').attr('class', 'nav-item nav-dashboard');
            $('.nav-akun').attr('class', 'nav-item nav-akun active');

            if($('.defaultOption').text() === 'admin') {
                $('.adminOption').attr('hidden', true);
            } else if($('.defaultOption').text() === 'user') {
                $('.userOption').attr('hidden', true);
            }
        });
    </script>
