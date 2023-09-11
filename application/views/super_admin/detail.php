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
        <?php $this->load->view("super_admin/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("super_admin/components/sidebar.php") ?>

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
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>Lapor/view_super_admin">Home</a></li>
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
                                    <button onclick="window.print()" class="btn btn-danger float-right"> <i class="fa fa-print"> Cetak Data</i>
                                    </button>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <?php

                                        $no = 0;
                                        foreach ($mahasiswa as $i) :
                                            $no++;
                                            $id_mahasiswa = $i['id_mahasiswa'];
                                            $id_user = $i['id_user'];
                                            $nama = $i['nama'];
                                            $nik = $i['nik'];
                                            $tempat_lahir = $i['tempat_lahir'];
                                            $tgl_lahir = $i['tgl_lahir'];
                                            $jenis_kelamin = $i['jenis_kelamin'];
                                            $no_wa = $i['no_wa'];
                                            $email_simpkb = $i['email_simpkb'];
                                            $ptk_id = $i['ptk_id'];
                                            $nama_darurat = $i['nama_darurat'];
                                            $no_darurat = $i['no_darurat'];
                                            $no_peserta = $i['no_peserta'];
                                            $nim = $i['nim'];
                                            $lptk = $i['lptk'];
                                            $bidang_studi = $i['bidang_studi'];
                                            $nama_kelas = $i['nama_kelas'];
                                            $alamat = $i['alamat'];
                                            $provinsi = $i['provinsi'];
                                            $kabupaten = $i['kabupaten'];
                                            $kode_pos = $i['kode_pos'];
                                            $nama_rekening = $i['nama_rekening'];
                                            $npwp = $i['npwp'];
                                            $nama_bank = $i['nama_bank'];
                                            $bank_cabang = $i['bank_cabang'];
                                            $no_rekening = $i['no_rekening'];
                                            $dokumen = $i['dokumen'];
                                            $foto = $i['foto'];
                                            $id_status_mahasiswa = $i['id_status_mahasiswa'];

                                        ?>
                                            <tr>
                                                <th>Nama</th>
                                                <td><?= $nama ?></td>
                                            </tr>
                                            <tr>
                                                <th>NIK</th>
                                                <td><?= $nik ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <td><?= $tempat_lahir ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td><?= $tgl_lahir ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <td><?= $jenis_kelamin ?></td>
                                            </tr>
                                            <tr>
                                                <th>NO WA</th>
                                                <td><?= $no_wa ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email SIMPKB</th>
                                                <td><?= $email_simpkb ?></td>
                                            </tr>
                                            <tr>
                                                <th>PTK ID</th>
                                                <td><?= $ptk_id ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Kontak Darurat</th>
                                                <td><?= $nama_darurat ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nomor Kontak Darurat</th>
                                                <td><?= $no_darurat ?></td>
                                            </tr>
                                            <tr>
                                                <th>No Peserta</th>
                                                <td><?= $no_peserta ?></td>
                                            </tr>
                                            <tr>
                                                <th>NIM</th>
                                                <td><?= $nim ?></td>
                                            </tr>
                                            <tr>
                                                <th>LPTK</th>
                                                <td><?= $lptk ?></td>
                                            </tr>
                                            <tr>
                                                <th>Bidang Studi</th>
                                                <td><?= $bidang_studi ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Kelas</th>
                                                <td><?= $nama_kelas ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td><?= $alamat ?></td>
                                            </tr>
                                            <tr>
                                                <th>Provinsi</th>
                                                <td><?= $provinsi ?></td>
                                            </tr>
                                            <tr>
                                                <th>Kabupaten</th>
                                                <td><?= $kabupaten ?></td>
                                            </tr>
                                            <tr>
                                                <th>Kode Pos</th>
                                                <td><?= $kode_pos ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Rekening</th>
                                                <td><?= $nama_rekening ?></td>
                                            </tr>
                                            <tr>
                                                <th>NPWP</th>
                                                <td><?= $npwp ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Bank</th>
                                                <td><?= $nama_bank ?></td>
                                            </tr>
                                            <tr>
                                                <th>Bank Cabang</th>
                                                <td><?= $bank_cabang ?></td>
                                            </tr>
                                            <tr>
                                                <th>No Rekening</th>
                                                <td><?= $no_rekening ?></td>
                                            </tr>
                                            <tr>
                                                <th>Berkas Lapor Diri</th>
                                                <td><a target="_blank" class="btn btn-success" href="<?php echo base_url("assets/dokumen/") . $dokumen ?>">Lihat Berkas <?= $nama ?></a></td>
                                            </tr>
                                            <tr>
                                                <th>Foto Lapor Diri</th>
                                                <td><img src="<?= base_url("assets/foto/") . $foto ?>" alt="" style="max-width: 700px; max-height: 700-x;"></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>


                                </div>
                                <!-- /.card-body -->
                                <!-- <a href="<?= base_url(); ?>Lapor/Dashboard/dashboard_super_admin" class="btn btn-success"><i class="fas">Kembali</i></a> -->
                                <a href="<?= base_url(); ?>Lapor/view_super_admin" class="btn btn-warning"><i class="fas">Kembali</i></a>
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
</body>

</html>