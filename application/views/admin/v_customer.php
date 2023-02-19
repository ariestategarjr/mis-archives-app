                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Button trigger Add Modal Customer -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                        Tambah Customer Baru
                    </button>

                    <!-- Table Customer -->
                    <table class="table table-bordered" id="tableCustomer">
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        <?php foreach($customers as $customer) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td id="idCustomer"><?php echo $customer->id_customer ?></td>
                            <td id="nikCustomer"><?php echo $customer->nik ?></td>
                            <td id="nameCustomer"><?php echo $customer->nama_customer ?></td>
                            <td id="dateCustomer"><?php echo $customer->tanggal_lahir ?></td>
                            <td id="addressCustomer"><?php echo $customer->alamat ?></td>
                            <td colspan="2">
                                <button type="button" class="btn btn-warning" id="editButton" data-toggle="modal" data-target="#editModal<?php echo $customer->id_customer ?>">Edit</button>
                                <button type="button" class="btn btn-danger" id="deleteButton" data-toggle="modal" data-target="#deleteModal<?php echo $customer->id_customer ?>">Hapus</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>


                    <!-- Add Modal Customer -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('admin/customer/add_customer'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Insert Customer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="idCustomerAdd">Id</label>
                                        <input type="text" class="form-control" id="idCustomerAdd" name="id-customer" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nikCustomerAdd">NIK</label>
                                        <input type="text" class="form-control" id="nikCustomerAdd" name="nik" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nameCustomerAdd">Nama</label>
                                        <input type="text" class="form-control" id="nameCustomerAdd" name="nama-customer" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dateCustomerAdd">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="dateCustomerAdd" name="tanggal-lahir" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="addressCustomerAdd">Alamat</label>
                                        <textarea class="form-control" id="addressCustomerAdd" rows="3" name="alamat" required></textarea>
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
                    <!-- End of Add Modal Customer -->

                    <!-- Edit Modal Customer -->
                    <?php $no = 1; ?>
                    <?php foreach($customers as $customer) { $no++; ?>
                    <div class="modal fade" id="editModal<?php echo $customer->id_customer ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('admin/customer/edit_customer'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Customer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" class="form-control" id="idCustomerEdit" name="id-customer" value="<?php echo $customer->id_customer ?>" autocomplete="off">
                                    
                                    <div class="form-group">
                                        <label for="nikCustomerEdit">NIK</label>
                                        <input type="text" class="form-control" id="nikCustomerEdit" name="nik" value="<?php echo $customer->nik ?>" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nameCustomerEdit">Nama</label>
                                        <input type="text" class="form-control" id="nameCustomerEdit" name="nama-customer" value="<?php echo $customer->nama_customer ?>" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dateCustomerEdit">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="dateCustomerEdit" name="tanggal-lahir" value="<?php echo $customer->tanggal_lahir ?>" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="addressCustomerEdit">Alamat</label>
                                        <textarea class="form-control" id="addressCustomerEdit" rows="3" name="alamat" placeholder="" autocomplete="off" required><?php echo $customer->alamat ?></textarea>
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
                    <!-- End of Edit Modal Customer -->

                    <!-- Delete Modal Customer -->
                    <?php $no = 1; ?>
                    <?php foreach($customers as $customer) { $no++; ?>
                    <div class="modal fade" id="deleteModal<?php echo $customer->id_customer ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('admin/customer/delete_customer'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id-customer" value="<?php echo $customer->id_customer ?>">
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
                    <!-- End of Delete Modal Customer -->
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

    <!-- get id_customer send to input edit form -->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.nav-dashboard').attr('class', 'nav-item nav-dashboard');
            $('.nav-customer').attr('class', 'nav-item nav-customer active');
        });
    </script>
