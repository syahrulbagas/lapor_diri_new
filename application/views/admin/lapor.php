<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php if ($this->session->flashdata('edit')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Data Berhasil Diedit!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Data Gagal Diedit !",
                icon: "error"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('hapus')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Data Berhasil Dihapus!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_hapus')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Data Gagal Dihapus !",
                icon: "error"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('input')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Status Lapor Berhasil Diubah!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Status Lapor Gagal Diubah!",
                icon: "error"
            });
        </script>
    <?php } ?>

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url(); ?>assets/admin_lte/dist/img/Loading.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("admin/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("admin/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Status Data Lapor Diri</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Status Data Lapor Diri Mahasiswa</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Lapor Diri Mahasiswa</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>

                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email SIMPKB</th>
                                                <th>PTK ID</th>
                                                <th>No Peserta</th>
                                                <th>NIM</th>
                                                <th>LPTK</th>
                                                <th>Bidang Studi</th>
                                                <th>Status Verifikasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $no = 0;
                                            foreach ($mahasiswa as $i) :
                                                $no++;
                                                $id_mahasiswa = $i['id_mahasiswa'];
                                                $id_user = $i['id_user'];
                                                $nama = $i['nama'];
                                                $email_simpkb = $i['email_simpkb'];
                                                $ptk_id = $i['ptk_id'];
                                                $no_peserta = $i['no_peserta'];
                                                $nim = $i['nim'];
                                                $lptk = $i['lptk'];
                                                $bidang_studi = $i['bidang_studi'];
                                                $id_status_mahasiswa = $i['id_status_mahasiswa'];

                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $nama ?></td>
                                                    <td><?= $email_simpkb ?></td>
                                                    <td><?= $ptk_id ?></td>
                                                    <td><?= $no_peserta ?></td>
                                                    <td><?= $nim ?></td>
                                                    <td><?= $lptk ?></td>
                                                    <td><?= $bidang_studi ?></td>
                                                    <td><?php if ($id_status_mahasiswa == 1) { ?>
                                                            <div class="table-responsive">
                                                                <div class="table table-striped table-hover ">
                                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#edit_data_mahasiswa">
                                                                        Menunggu Konfirmasi
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php } elseif ($id_status_mahasiswa == 2) { ?>
                                                            <div class="table-responsive">
                                                                <div class="table table-striped table-hover ">
                                                                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#edit_data_mahasiswa">
                                                                        Data Diverifikasi
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php } elseif ($id_status_mahasiswa == 3) { ?>
                                                            <div class="table-responsive">
                                                                <div class="table table-striped table-hover ">
                                                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#edit_data_mahasiswa">
                                                                        Data Ditolak
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </td>

                                                    <!-- <td><?php if ($id_status_mahasiswa == 2) { ?>
                                                    <a href="<?= base_url(); ?>Cetak/surat_cuti_pdf/<?= $id_mahasiswa ?>"
                                                        class="btn btn-info" target="_blank"> 
                                                        Cetak Surat
                                                    </a>
                                                    <?php } else { ?>
                                                    <a href="#" class="btn btn-danger">
                                                        Belum Dapat Mencetak
                                                    </a>
                                                    <?php } ?>
                                                </td> -->

                                                    <td>
                                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $id_mahasiswa ?>">
                                                            <i class="fas fa-edit"></i>
                                                        </a>

                                                        <a href="" data-toggle="modal" data-target="#hapus<?= $id_mahasiswa ?>" class="btn btn-danger"><i class="fas fa-trash"></i>
                                                        </a>

                                                        <a href="<?= base_url("Lapor/detail/") .$id_mahasiswa; ?>" class="btn btn-success"><i class="fas fa-search-plus"></i>
                                                        </a>

                                                    </td>



                                                </tr>
                                                <!-- Modal Edit Cuti -->
                                                <div class="modal fade" id="edit<?= $id_mahasiswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                                    Lapor
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <form action="<?= base_url(); ?>Lapor/edit_lapor_admin" method="POST">
                                                                    <input type="text" value="<?= $id_mahasiswa ?>" name="id_mahasiswa" hidden>
                                                                    <div class="form-group">
                                                                        <label for="nama">Nama</label>
                                                                        <textarea class="form-control" id="nama" rows="3" name="nama" required><?= $nama ?></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nim">NIM</label>
                                                                        <textarea class="form-control" id="nim" rows="3" name="nim" required><?= $nim ?></textarea>
                                                                    </div>
                                                                    <!-- <div class="form-group">
                                                                        <label for="tgl_diajukan">Tanggal Diajukan</label>
                                                                        <input type="date" class="form-control" id="tgl_diajukan" aria-describedby="tgl_diajukan" name="tgl_diajukan" value="<?= $tempat_lahir ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="mulai">Mulai Cuti</label>
                                                                        <input type="date" class="form-control" id="mulai" aria-describedby="mulai" name="mulai" value="<?= $mulai ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="berakhir">Berakhir Cuti</label>
                                                                        <input type="date" class="form-control" id="berakhir" aria-describedby="berakhir" name="berakhir" value="<?= $berakhir ?>" required>
                                                                    </div> -->
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Hapus Cuti -->
                                                <div class="modal fade" id="hapus<?= $id_mahasiswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data
                                                                    Lapor
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?php echo base_url() ?>Lapor/hapus_lapor_admin" method="post" enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <input type="hidden" name="id_mahasiswa" value="<?php echo $id_mahasiswa ?>" />
                                                                            <input type="hidden" name="id_user" value="<?php echo $id_user ?>" />

                                                                            <p>Apakah kamu yakin ingin menghapus data
                                                                                ini?</i></b></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Tidak</button>
                                                                        <button type="submit" class="btn btn-success ripple save-category">Ya</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("admin/components/js.php") ?>
    <?php $this->load->view("admin/components/footer.php") ?>
</body>

</html>