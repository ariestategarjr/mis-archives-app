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
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        <?php foreach($customers as $customer) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td id="idCustomer"><?php echo $customer->id_customer ?></td>
                            <td id="nikCustomer"><?php echo $customer->nik ?></td>
                            <td id="nameCustomer"><?php echo $customer->nama_customer ?></td>
                            <td id="addressCustomer"><?php echo $customer->alamat ?></td>
                            <td id="dateCustomer"><?php echo $customer->tanggal_lahir ?></td>
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
                                        <input type="text" class="form-control" id="idCustomerAdd" name="id-customer">
                                    </div>
                                    <div class="form-group">
                                        <label for="nikCustomerAdd">NIK</label>
                                        <input type="text" class="form-control" id="nikCustomerAdd" name="nik">
                                    </div>
                                    <div class="form-group">
                                        <label for="nameCustomerAdd">Nama</label>
                                        <input type="text" class="form-control" id="nameCustomerAdd" name="nama-customer">
                                    </div>
                                    <div class="form-group">
                                        <label for="addressCustomerAdd">Alamat</label>
                                        <input type="text" class="form-control" id="addressCustomerAdd" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="dateCustomerAdd">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="dateCustomerAdd" name="tanggal-lahir">
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
                                    <input type="hidden" class="form-control" id="idCustomerEdit" name="id-customer" value="<?php echo $customer->id_customer ?>">
                                    
                                    <div class="form-group">
                                        <label for="nikCustomerEdit">NIK</label>
                                        <input type="text" class="form-control" id="nikCustomerEdit" name="nik" value="<?php echo $customer->nik ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nameCustomerEdit">Nama</label>
                                        <input type="text" class="form-control" id="nameCustomerEdit" name="nama-customer" value="<?php echo $customer->nama_customer ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="addressCustomerEdit">Alamat</label>
                                        <input type="text" class="form-control" id="addressCustomerEdit" name="alamat" value="<?php echo $customer->alamat ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="dateCustomerEdit">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="dateCustomerEdit" name="tanggal-lahir" value="<?php echo $customer->tanggal_lahir ?>">
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
    <script>
        const navDashboard = document.querySelector('.nav-dashboard');
        const navCustomer = document.querySelector('.nav-customer');
        
        navDashboard.setAttribute('class', 'nav-item nav-dashboard');
        navCustomer.setAttribute('class', 'nav-item nav-customer active');
        // $('#tableCustomer').on('click', '#editButton', function() {
        //     const id_customer = $(this).data('id_customer');
        //     $('#idCustomerEdit').val(id_customer);
        //     // console.log($('#idCustomerEdit'));
        // });
        // const editButtons = document.querySelectorAll('#editButton');

        // const idCustomers = document.querySelectorAll('#idCustomer');
        // const nikCustomers = document.querySelectorAll('#nikCustomer');
        // const nameCustomers = document.querySelectorAll('#nameCustomer');
        // const addressCustomers = document.querySelectorAll('#addressCustomer');
        // const dateCustomers = document.querySelectorAll('#dateCustomer');
        
        // const idCustomerEdit = document.querySelector('#idCustomerEdit');
        // const nikCustomerEdit = document.querySelector('#nikCustomerEdit');
        // const nameCustomerEdit = document.querySelector('#nameCustomerEdit');
        // const addressCustomerEdit = document.querySelector('#addressCustomerEdit');
        // const dateCustomerEdit = document.querySelector('#dateCustomerEdit');
        
        // editButtons.forEach((editButton, index) => {
        //     editButton.addEventListener('click', (event) => {
        //         event.preventDefault();
                
        //         const idCustomer = idCustomers[index].innerText;
        //         const nikCustomer = nikCustomers[index].innerText;
        //         const nameCustomer = nameCustomers[index].innerText;
        //         const addressCustomer = addressCustomers[index].innerText;
        //         const dateCustomer = dateCustomers[index].innerText;

        //         idCustomerEdit.value = idCustomer;
        //         nikCustomerEdit.value = nikCustomer;
        //         nameCustomerEdit.value = nameCustomer;
        //         addressCustomerEdit.value = addressCustomer;
        //         dateCustomerEdit.value = dateCustomer;
        //     }); 
        // });
        // console.log(idCustomerInput.value);
    </script>
