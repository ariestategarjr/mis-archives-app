                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Tambah Arsip</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Form Tambah Arsip -->
                    <form action="<?php echo base_url('arsip/add_arsip'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="kodeArsipAdd" class="col-sm-2 col-form-label">Kode Arsip</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="kodeArsipAdd" name="kode-arsip" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaCustomerArsipAdd" class="col-sm-2 col-form-label">Nama Customer</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="namaCustomerArsipAdd" name="nama-customer" autocomplete="off" required>
                            </div>
                            <div class="col-sm-1">
                                <a class="btn btn-secondary w-100" data-toggle="modal" data-target="#displayCustomerModal">Pilih...</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bisnisUnitArsipAdd " class="col-sm-2 col-form-label">Bisnis Unit</label>
 
                            <select class="form-control col-sm-5 ml-2" id="bisnisUnitArsipAdd" name="bisnis-unit" required>
                                <option>--Pilih--</option>
                                <?php foreach($bisnis_units as $bisnis_unit) { ?>
                                <option value="<?php echo $bisnis_unit->nama_bisnis_unit ?>">
                                    <?php echo $bisnis_unit->nama_bisnis_unit ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="tanggalArsipAdd" class="col-sm-2 col-form-label">Tanggal Arsip</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggalArsipAdd" name="tanggal-arsip" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fileArsipAdd" class="col-sm-2 col-form-label">File Arsip</label>
                            <div class="col-sm-4">
                                <input type="file" id="fileArsipAdd" name="file-arsip" accept=".pdf" autocomplete="off" required>
                                <p>Maximal 10MB</p>
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

                    <!-- <table class="table table-responsive" id="dataTables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Customer</th>
                                <th>NIK</th>
                                <th>Nama Customer</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($customers as $customer) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $customer->id_customer ?></td>
                                <td><?php echo $customer->nik ?></td>
                                <td><?php echo $customer->nama_customer ?></td>
                                <td><?php echo $customer->alamat ?></td>
                                <td><?php echo $customer->tanggal_lahir ?></td>
                                <td>
                                    <a>Select</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table> -->
             

                    <!-- Add Modal Akun -->
                    <div class="modal fade" id="displayCustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Customer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-responsive" id="dataTables">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Customer</th>
                                                <th>NIK</th>
                                                <th>Nama Customer</th>
                                                <th>Alamat</th>
                                                <th>Tanggal Lahir</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach($customers as $customer) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $customer->id_customer ?></td>
                                                <td><?php echo $customer->nik ?></td>
                                                <td><?php echo $customer->nama_customer ?></td>
                                                <td><?php echo $customer->alamat ?></td>
                                                <td><?php echo $customer->tanggal_lahir ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" id="selectButton" 
                                                    data-toggle="modal" data-target="#selectModal<?php echo $customer->id_customer ?>"
                                                    data-nama-customer="<?php echo $customer->nama_customer ?>">Select
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
                    <!-- End of Add Modal Akun -->
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

    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script> -->
    <script>
        let uniqueKodeArsip = "AP" + Math.random().toString(8).slice(4);

        let currentTime = new Date();
        let dd = ("0" + currentTime .getDate()).slice(-2);
        let mm = ("0" + (currentTime .getMonth() + 1)).slice(-2);
        let currentDate = currentTime .getFullYear()+"-"+(mm)+"-"+(dd);

        $(document).ready(function(){
            // side active effect
            $('.nav-dashboard').attr('class', 'nav-item nav-dashboard');
            $('.nav-arsip').attr('class', 'nav-item nav-arsip active');

            // select customer table
            $(document).on('click', '#selectButton', function() {
                const namaCustomer = $(this).data('nama-customer');
                $('#namaCustomerArsipAdd').val(namaCustomer);
                $('#displayCustomerModal').modal('hide');
            });

            // set unique kode_arsip 
            $('#kodeArsipAdd').val(uniqueKodeArsip);

            // set default date value 
            $('#tanggalArsipAdd').val(currentDate);
            
        });
    </script>
