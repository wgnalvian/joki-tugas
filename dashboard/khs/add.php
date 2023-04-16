<?php
ini_set('display_errors', 1);
include('../../connection.php');
include('../../config.php');
session_start();
$user = $_SESSION["user"];



$query = "SELECT krs.id,mahasiswa.nama,prodi.fakultas,matkul.nama_matkul FROM krs JOIN mahasiswa ON mahasiswa.id = krs.mhs_id JOIN prodi ON prodi.id = krs.prodi_id JOIN matkul ON matkul.id = krs.matkul_id";


$result = mysqli_query($connect, $query);
$result3 = mysqli_query($connect, $query);
$listKHS = [];
while ($row = mysqli_fetch_array($result)) {

    $id = (int) $row['id'];


    $query1 = "SELECT * FROM khs WHERE krs_id =$id";
    $result1 = mysqli_query($connect, $query1);

    while ($khs = mysqli_fetch_array($result1)) {


        array_push($listKHS, $khs);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "../sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <?php include "../topbar.php" ?>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <p class="text-center"><?php echo $error; ?></p> <!-- tampilkan pesan error jika ada -->
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-12">
                            <h1>DATA KHS</h1>
                        </div>

                        <div class="col-12">
                            <form action="doAdd.php" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">nama</th>

                                            <th scope="col">matkul</th>
                                            <th scope="col">nilai</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $kosong = false; ?>
                                        <?php while ($row = mysqli_fetch_array($result3)) {
                                            $isEmpty = false;
                                            for ($i = 0; $i < count($listKHS); $i++) {

                                                if ($listKHS[$i]['krs_id'] == $row['id']) {
                                                    $isEmpty = true;
                                                }
                                            }
                                            if (!$isEmpty) {
                                                $kosong = true;
                                            }
                                            if (!$isEmpty) {

                                        ?>


                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><?= $row["nama"] ?></td>
                                                    <td><?= $row["nama_matkul"] ?></td>
                                                    <td><input type="text" name="nilai_<?= $row["id"] ?>" /></td>


                                                </tr>
                                        <?php   }
                                        } ?>
                                    </tbody>
                                </table>
                                <?php if($kosong){ ?>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <?php }?>

                            </form>
                            <?php if(!$kosong){ ?>
                                <h1>DATA KHS KOSONG ATAU SUDAH DIBERI NILAI </h1>
                            <?php }?>

                        </div>









                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Putri Wulandari 2023</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="auth/aksi_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>


</body>

</html>