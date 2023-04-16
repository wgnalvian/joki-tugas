<?php
include "../../connection.php";
$queryMat = "SELECT * FROM matkul";
$queryDos = "SELECT * FROM dosen";
$queryRu = "SELECT * FROM ruang";
$matFetch = mysqli_query($connect, $queryMat);
$dosFetch = mysqli_query($connect, $queryDos);
$ruFetch = mysqli_query($connect, $queryRu);
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
                            <form method="POST" action="doAdd.php">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mata Kuliah</label>
                                    <select class="form-control" name="mat">
                                        <?php while ($mat = mysqli_fetch_array($matFetch)) { ?>
                                            <option value="<?= $mat["id"] ?>"><?= $mat["nama_matkul"] ?></option>
                                        <?php  } ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dosen</label>
                                    <select class="form-control" name="dos">
                                        <?php while ($dos = mysqli_fetch_array($dosFetch)) { ?>
                                            <option value="<?= $dos["id"] ?>"><?= $dos["nama"] ?></option>
                                        <?php  } ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ruang</label>
                                    <select class="form-control" name="ru">
                                        <?php while ($ru = mysqli_fetch_array($ruFetch)) { ?>
                                            <option value="<?= $ru["id"] ?>"><?= $ru["ruang"] ?></option>
                                        <?php  } ?>
                                    </select>

                                </div>
                                <div class="form-group">
    <label for="exampleInputEmail1">Waktu</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="waktu" name="waktu">

  </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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