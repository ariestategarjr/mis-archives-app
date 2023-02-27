                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Edit Arsip</h1>
                    </div>

                    <!-- Form Edit Arsip -->

                    <form action="<?= base_url('arsip/edit_arsip'); ?>" method="post" enctype="multipart/form-data">
    
                        <input type="hidden" class="form-control" id="kodeArsipEdit" name="kode-arsip" value="<?= $arsip->kode_arsip ?>" autocomplete="off" required>

                        <div class="form-group row">
                            <label for="namaCustomerArsipEdit" class="col-sm-2 col-form-label">Nama Customer</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="namaCustomerArsipEdit" name="nama-customer" value="<?= $arsip->nama_customer ?>" autocomplete="off" required>
                            </div>
                            <div class="col-sm-1">
                                <a class="btn btn-secondary w-100" data-toggle="modal" data-target="#displayCustomerModal">Pilih...</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bisnisUnitArsipEdit " class="col-sm-2 col-form-label">Bisnis Unit</label>
                            <select class="form-control col-sm-5 ml-2" id="bisnisUnitArsipEdit" name="bisnis-unit" required>
                                <option id="defaultOption" value="<?= $arsip->bisnis_unit ?>">
                                    <?= $arsip->bisnis_unit ?>
                                </option>
                                <?php foreach($bisnis_units as $bisnis_unit) { ?>
                                <option id="otherOption" value="<?= $bisnis_unit->nama_bisnis_unit?>">
                                    <?= $bisnis_unit->nama_bisnis_unit ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="tanggalArsipEdit" class="col-sm-2 col-form-label">Tanggal Arsip</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggalArsipEdit" name="tanggal-arsip" value="<?= $arsip->tgl_arsip ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fileArsipEdit" class="col-sm-2 col-form-label">File Arsip</label>
                            <div class="col-sm-4">
                                <input type="file" id="fileArsipEdit" name="file-arsip" accept=".pdf" autocomplete="off" required>
                                <small id="fileArsipEditHelp" class="form-text text-muted">File terakhir : <?= $arsip->file_arsip ?></small>
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
  
             

                    <!-- Display Customers Data -->
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
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered table-hover" id="dataTables">
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
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $customer->id_customer ?></td>
                                                    <td><?= $customer->nik ?></td>
                                                    <td><?= $customer->nama_customer ?></td>
                                                    <td><?= $customer->alamat ?></td>
                                                    <td><?= $customer->tanggal_lahir ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" id="selectButton" 
                                                        data-toggle="modal" data-target="#selectModal<?= $customer->id_customer ?>"
                                                        data-nama-customer="<?= $customer->nama_customer ?>">Select
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>                                
                            </div>
                        </div>
                    </div>
                    <!-- End of Display Customers Data -->
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
            // sidebar focus
            $('.nav-dashboard').attr('class', 'nav-item nav-dashboard');
            $('.nav-arsip').attr('class', 'nav-item nav-arsip active');

            // select display customer
            $(document).on('click', '#selectButton', function() {
                const namaCustomer = $(this).data('nama-customer');
                $('#namaCustomerArsipEdit').val(namaCustomer);
                $('#displayCustomerModal').modal('hide');
            });
        });

        // hidden option
        const defaultOption = document.querySelector('#defaultOption');
        const otherOption = document.querySelectorAll('#otherOption');
        otherOption.forEach((option) => {
            if(option.value === defaultOption.value) {
                option.setAttribute('hidden', true);
            }
        });
    </script>
