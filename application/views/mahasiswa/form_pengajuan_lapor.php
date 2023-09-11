<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("mahasiswa/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php if ($this->session->flashdata('input')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Data Berhasil Ditambahkan!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Data Gagal Ditambahkan!",
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
        <?php $this->load->view("mahasiswa/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("mahasiswa/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Form Lapor Diri PPG FKIP UNISSULA</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Form Lapor Diri</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <form action="<?= base_url(); ?>Form_lapor/proses_lapor" method="POST" enctype="multipart/form-data">
                        <input type="text" value="<?= $this->session->userdata('id_user') ?>" name="id_user" hidden>
                        <div class="col-12 pt-0">
                            <div class="dropdown-divider"></div>
                            <div class="divider-text text-center mb-3">INFORMASI DATA DIRI</div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-7 col-12">
                                <label for="" class="labels text-gray-800">Nama Lengkap</label>
                                <input class="form-control editable" type="text" name="nama" id="nama" placeholder="masukkan nama lengkap" aria-describedby="nama" required>
                            </div>

                            <div class="col-md-5 col-12">
                                <label for="" class="labels text-gray-800">NIK</label>
                                <input class="form-control editable" type="number" name="nik" id="nik" placeholder="masukkan 16 digit NIK" aria-describedby="nik" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">TEMPAT LAHIR</label>
                                <input class="form-control editable" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="masukkan tempat lahir" aria-describedby="tempat_lahir" required>
                            </div>
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">TANGGAL LAHIR</label>
                                <input class="form-control editable" type="date" name="tgl_lahir" id="tgl_lahir" placeholder="masukkan tanggal lahir" aria-describedby="tgl_lahir" required>
                            </div>
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">JENIS KELAMIN</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control editable" aria-describedby="jenis_kelamin" required>
                                    <option value="">--Jenis Kelamin--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">NOMOR HANDPHONE (WA)</label>
                                <input class="form-control editable" type="number" name="no_wa" id="no_wa" placeholder="masukkan nomor hp" aria-describedby="no_wa" required>
                            </div>
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">EMAIL SIMPKB</label>
                                <input class="form-control editable" type="email" name="email_simpkb" id="email_simpkb" placeholder="masukkan email SIMPKB" aria-describedby="email_simpkb" required>
                            </div>
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">PTK ID</label>
                                <input class="form-control editable" type="number" name="ptk_id" id="ptk_id" aria-describedby="ptk_id" required>
                            </div>
                        </div>

                        <!--Informasi kontak darurat-->
                        <div class="col-12 pt-2">
                            <div class="dropdown-divider"></div>
                            <div class="divider-text text-center mb-3">INFORMASI KONTAK DARURAT</div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 col-12">
                                <label for="" class="labels text-gray-800">NAMA KONTAK DARURAT</label>
                                <input class="form-control editable" type="text" name="nama_darurat" id="nama_darurat" placeholder="masukkan nama kontak darurat" aria-describedby="nama_darurat" required>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="" class="labels text-gray-800">NOMOR KONTAK DARURAT (WA)</label>
                                <input class="form-control editable" type="number" name="no_darurat" id="no_darurat" placeholder="masukkan nomor kontak darurat" aria-describedby="no_darurat" required>
                            </div>
                        </div>

                        <!--Informasi keikutsertaan PPG-->
                        <div class="col-12 pt-2">
                            <div class="dropdown-divider"></div>
                            <div class="divider-text text-center mb-3">INFORMASI KEPESERTAAN PPG</div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">NOMOR PESERTA</label>
                                <input class="form-control editable" type="number" name="no_peserta" id="no_peserta" placeholder="masukkan nomor peserta" aria-describedby="no_peserta" required>
                            </div>
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">NIM</label>
                                <input class="form-control editable" type="text" name="nim" id="nim" placeholder="masukkan NIM" aria-describedby="nim" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 col-12">
                                <label for="" class="labels text-gray-800">LPTK</label>
                                <input class="form-control editable" type="text" name="lptk" id="lptk" placeholder="masukkan LPTK" aria-describedby="lptk" required>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="" class="labels text-gray-800">BIDANG STUDI PPG</label>
                                <select name="bidang_studi" id="bidang_studi" class="form-control editable" aria-describedby="bidang_studi" required>
                                    <option value="">--Bidang Studi PPG--</option>
                                    <option value="Pendidikan Guru Sekolah dasar">Pendidikan Guru Sekolah Dasar</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                </select>
                            </div>
                            <div class="col-12 pt-3">
                                <label for="" class="labels text-gray-800">NAMA KELAS</label>
                                <input class="form-control editable" type="text" name="nama_kelas" id="nama_kelas" placeholder="masukkan nama kelas" aria-describedby="nama_kelas" required>
                            </div>
                        </div>

                        <!--Informasi Alamat-->
                        <div class="col-12 pt-2">
                            <div class="dropdown-divider"></div>
                            <div class="divider-text text-center mb-3">INFORMASI ALAMAT</div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 col-12">
                                <label for="" class="labels text-gray-800">ALAMAT RUMAH</label>
                                <textarea class="form-control editable" type="text" name="alamat" id="alamat" placeholder="masukkan alamat" aria-describedby="alamat" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 col-12">
                                <label for="" class="labels text-gray-800">PROVINSI</label>
                                <!-- <input class="form-control editable" type="text" name="provinsi" id="provinsi" placeholder="masukkan nama kelas" aria-describedby="provinsi" required> -->
                                <select name="provinsi" id="provinsi" class="form-control editable" aria-describedby="provinsi" required>
                                    <option value="">--Provinsi--</option>
                                    <?php
                                    foreach ($provinsi as $row) {
                                        echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4 col-12">
                                <label for="" class="labels text-gray-800">KOTA/KABUPATEN</label>
                                <select name="kabupaten" id="kabupaten" class="form-control editable" aria-describedby="kabupaten" required>
                                    <option value="">--Pilih Kota/Kabupaten--</option>
                                    <?php

                                    ?>
                                </select>
                                <!-- <input class="form-control editable" type="text" name="kabupaten" id="kabupaten" placeholder="masukkan nama kelas" aria-describedby="kabupaten" required> -->
                                <!-- <select name="bidang" id="bidang" class="form-control editable">
                                    <option value="">--Kota/Kabupaten--</option>
                                </select> -->
                            </div>
                            <div class="col-md-4 col-12">
                                <label for="" class="labels text-gray-800">KODE POS</label>
                                <input class="form-control editable" type="number" name="kode_pos" id="kode_pos" placeholder="masukkan nama kelas" aria-describedby="kode_pos" required>
                                <!-- <select name="bidang" id="bidang" class="form-control editable">
                                    <option value="">--Kode Pos--</option>
                                </select> -->
                            </div>
                        </div>

                        <!--Informasi Rekening-->
                        <div class="col-12 pt-2">
                            <div class="dropdown-divider"></div>
                            <div class="divider-text text-center mb-3">INFORMASI REKENING</div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">NAMA SESUAI REKENING</label>
                                <input class="form-control editable" type="text" name="nama_rekening" id="nama_rekening" placeholder="masukkan nama sesuai rekening" aria-describedby="nama_rekening" required>
                            </div>
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">NPWP</label>
                                <input class="form-control editable" type="number" name="npwp" id="npwp" placeholder="masukkan NPWP" aria-describedby="npwp" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 col-12">
                                <label for="" class="labels text-gray-800">NAMA BANK</label>
                                <select class="form-control editable" type="text" name="nama_bank" id="nama_bank" placeholder="" aria-describedby="nama_bank" placeholder="Pilih Bank" required>
                                    <option value="">--Pilih Bank--</option>
                                    <option value="Bank Mandiri">Bank Mandiri</option>
                                    <option value="Bank Bukopin">Bank Bukopin</option>
                                    <option value="Bank Danamon">Bank Danamon</option>
                                    <option value="Bank Mega">Bank Mega</option>
                                    <option value="Bank CIMB Niaga">Bank CIMB Niaga</option>
                                    <option value="Bank Permata">Bank Permata</option>
                                    <option value="Bank Sinarmas">Bank Sinarmas</option>
                                    <option value="Bank QNB">Bank QNB</option>
                                    <option value="Bank Lippo">Bank Lippo</option>
                                    <option value="Bank UOB">Bank UOB</option>
                                    <option value="Panin Bank">Panin Bank</option>
                                    <option value="Citibank">Citibank</option>
                                    <option value="Bank ANZ">Bank ANZ</option>
                                    <option value="Bank Commonwealth">Bank Commonwealth</option>
                                    <option value="Bank Maybank">Bank Maybank</option>
                                    <option value="Bank Maspion">Bank Maspion</option>
                                    <option value="Bank J Trust">Bank J Trust</option>
                                    <option value="Bank QNB">Bank QNB</option>
                                    <option value="Bank KEB Hana">Bank KEB Hana</option>
                                    <option value="Bank Artha Graha">Bank Artha Graha</option>
                                    <option value="Bank OCBC NISP">Bank OCBC NISP</option>
                                    <option value="Bank MNC">Bank MNC</option>
                                    <option value="Bank DBS">Bank DBS</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BTN">BTN</option>
                                    <option value="Bank DKI">Bank DKI</option>
                                    <option value="Bank BJB">Bank BJB</option>
                                    <option value="Bank BPD DIY">Bank BPD DIY</option>
                                    <option value="Bank Jateng">Bank Jateng</option>
                                    <option value="Bank Jatim">Bank Jatim</option>
                                    <option value="Bank BPD Bali">Bank BPD Bali</option>
                                    <option value="Bank Sumut">Bank Sumut</option>
                                    <option value="Bank Nagari">Bank Nagari</option>
                                    <option value="Bank Riau Kepri">Bank Riau Kepri</option>
                                    <option value="Bank Sumsel Babel">Bank Sumsel Babel</option>
                                    <option value="Bank Lampung">Bank Lampung</option>
                                    <option value="Bank Jambi">Bank Jambi</option>
                                    <option value="Bank Kalbar">Bank Kalbar</option>
                                    <option value="Bank Kalteng">Bank Kalteng</option>
                                    <option value="Bank Kalsel">Bank Kalsel</option>
                                    <option value="Bank Kaltim">Bank Kaltim</option>
                                    <option value="Bank Sulsel">Bank Sulsel</option>
                                    <option value="Bank Sultra">Bank Sultra</option>
                                    <option value="Bank BPD Sulteng">Bank BPD Sulteng</option>
                                    <option value="Bank Sulut">Bank Sulut</option>
                                    <option value="Bank NTB">Bank NTB</option>
                                    <option value="Bank NTT">Bank NTT</option>
                                    <option value="Bank Maluku">Bank Maluku</option>
                                    <option value="Bank Papua">Bank Papua</option>
                                </select>
                                <!-- <input class="form-control editable" type="text" name="nama_bank" id="nama_bank" placeholder="" aria-describedby="nama_bank" required> -->
                            </div>
                            <div class="col-md-4 col-12">
                                <label for="" class="labels text-gray-800">BANK CABANG</label>
                                <input class="form-control editable" type="text" name="bank_cabang" id="bank_cabang" placeholder="" aria-describedby="bank_cabang" required>
                            </div>
                            <div class="col-md-4 col-12">
                                <label for="" class="labels text-gray-800">NO REKENING</label>
                                <input class="form-control editable" type="number" name="no_rekening" id="no_rekening" placeholder="" aria-describedby="no_rekening" required>
                            </div>

                            <!-- <div class="col-md-4 col-12">
                            <label for="" class="labels text-gray-800">Upload File</label>
                            <input class="form-control editable" type="file" name="dokumen" id="dokumen" placeholder="" aria-describedby="dokumen" required>
                        </div> -->

                        </div>


                        <div class="row mb-3">
                            <div class="col-md-12 col-12">
                                <label for="berkas" class="labels text-gray-800">Upload Berkas</label>
                                <input class="form-control editable" type="file" name="dokumen" id="dokumen" placeholder="" aria-describedby="dokumen" required accept="dokumen/*">
                            </div>
                        </div>


                        <button type="submit" class="mb-3 btn btn-primary">Submit</button>
                    </form>

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

    <?php $this->load->view("mahasiswa/components/js.php") ?>
</body>

</html>