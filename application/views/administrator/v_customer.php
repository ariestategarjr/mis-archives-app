                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                        Add New Customer
                    </button>

                    <!-- Table Customer -->
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        <?php foreach($customers as $customer) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $customer->id_customer ?></td>
                            <td><?php echo $customer->nik ?></td>
                            <td><?php echo $customer->nama_customer ?></td>
                            <td><?php echo $customer->alamat ?></td>
                            <td><?php echo $customer->tanggal_lahir ?></td>
                            <td colspan="2">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>


                    <!-- Add Modal Customer -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('administrator/customer/add_customer'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Insert Customer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="customerId">Id</label>
                                        <input type="text" class="form-control" id="idCustomer" name="id-customer">
                                    </div>
                                    <div class="form-group">
                                        <label for="customerNik">NIK</label>
                                        <input type="text" class="form-control" id="nikCustomer" name="nik">
                                    </div>
                                    <div class="form-group">
                                        <label for="customerName">Nama</label>
                                        <input type="text" class="form-control" id="customerName" name="nama-customer">
                                    </div>
                                    <div class="form-group">
                                        <label for="customerAddress">Alamat</label>
                                        <input type="text" class="form-control" id="customerAddress" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="customerDate">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="customerDate" name="tanggal-lahir">
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
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('administrator/customer/edit_customer'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Customer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="customerId">Id</label>
                                        <input type="text" class="form-control" id="idCustomer" name="id-customer">
                                    </div>
                                    <div class="form-group">
                                        <label for="customerNik">NIK</label>
                                        <input type="text" class="form-control" id="nikCustomer" name="nik">
                                    </div>
                                    <div class="form-group">
                                        <label for="customerName">Nama</label>
                                        <input type="text" class="form-control" id="customerName" name="nama-customer">
                                    </div>
                                    <div class="form-group">
                                        <label for="customerAddress">Alamat</label>
                                        <input type="text" class="form-control" id="customerAddress" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="customerDate">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="customerDate" name="tanggal-lahir">
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
                    <!-- End of Edit Modal Customer -->

                    <!-- Delete Modal Customer -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url('administrator/customer/delete_customer'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- ... -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
