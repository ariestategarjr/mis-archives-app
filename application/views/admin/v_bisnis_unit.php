                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Button trigger Add Modal Bisnis Unit -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                        Tambah Bisnis Unit
                    </button>

                    <!-- Table Bisnis Unit -->
                    <div class="table-responsive-sm">
                        <table class="table table-bordered table-hover" id="tableBisnisUnit">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Bisnis Unit</th>
                                    <th>Nama Bisnis Unit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach($bisnis_units as $bisnis_unit) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $bisnis_unit->kode_bisnis_unit ?></td>
                                    <td><?= $bisnis_unit->nama_bisnis_unit ?></td>
                                    <td colspan="2">
                                        <button type="button" class="btn btn-warning btn-sm" id="editButton" data-toggle="modal" data-target="#editModal<?= $bisnis_unit->kode_bisnis_unit ?>">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm" id="deleteButton" data-toggle="modal" data-target="#deleteModal<?= $bisnis_unit->kode_bisnis_unit ?>">Hapus</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Add Modal Bisnis Unit -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('admin/bisnis_unit/add_bisnis_unit'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Insert Bisnis Unit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="kodeBisnisUnitAdd">Kode Bisnis Unit</label>
                                        <input type="text" class="form-control" id="kodeBisnisUnitAdd" name="kode-bisnis-unit" autocomplete="off" required>
                                    </div>  
                                    <div class="form-group">
                                        <label for="namaBisnisUnitAdd">Nama Bisnis Unit</label>
                                        <input type="text" class="form-control" id="namaBisnisUnitAdd" name="nama-bisnis-unit" autocomplete="off" required>
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
                    <!-- End of Add Modal Bisnis Unit -->

                    <!-- Edit Modal Bisnis Unit -->
                    <?php $no = 1; ?>
                    <?php foreach($bisnis_units as $bisnis_unit) { $no++; ?>
                    <div class="modal fade" id="editModal<?= $bisnis_unit->kode_bisnis_unit ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('admin/bisnis_unit/edit_bisnis_unit'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Bisnis Unit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" class="form-control" id="idBisnisUnitEdit" name="kode-bisnis-unit" value="<?= $bisnis_unit->kode_bisnis_unit ?>" autocomplete="off" required>
                                    
                                    <div class="form-group">
                                        <label for="nameBisnisUnitEdit">Nama Bisnis Unit</label>
                                        <input type="text" class="form-control" id="nameBisnisUnitEdit" name="nama-bisnis-unit" value="<?= $bisnis_unit->nama_bisnis_unit ?>" autocomplete="off" required>
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
                    <!-- End of Edit Modal Bisnis Unit -->

                    <!-- Delete Modal Bisnis Unit -->
                    <?php $no = 1; ?>
                    <?php foreach($bisnis_units as $bisnis_unit) { $no++; ?>
                    <div class="modal fade" id="deleteModal<?= $bisnis_unit->kode_bisnis_unit ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('admin/bisnis_unit/delete_bisnis_unit'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Bisnis Unit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="kode-bisnis-unit" value="<?= $bisnis_unit->kode_bisnis_unit ?>">
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
                    <!-- End of Delete Modal Bisnis Unit -->
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
            $('.nav-bisnis-unit').attr('class', 'nav-item nav-bisnis-unit active');
        });
    </script>
