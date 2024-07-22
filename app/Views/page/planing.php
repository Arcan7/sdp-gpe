<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Account | sdp-gpe</title>
    <?= $this->include('common/style.php') ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <?= $this->include('layouts/header.php') ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?= $this->include('layouts/sidebar.php') ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Account</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Configuration</li>
                    <li class="breadcrumb-item active">Account</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Account</h5>
                            
                            <?= $this->include('section/account/create.php') ?>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            <b>N</b>ame
                                        </th>
                                        <th>Ext.</th>
                                        <th>City</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Completion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Unity Pugh</td>
                                        <td>9958</td>
                                        <td>Curicó</td>
                                        <td>2005/02/11</td>
                                        <td>37%</td>
                                    </tr>
                                    <tr>
                                        <td>Theodore Duran</td>
                                        <td>8971</td>
                                        <td>Dhanbad</td>
                                        <td>1999/04/07</td>
                                        <td>97%</td>
                                    </tr>
                                    <tr>
                                        <td>Kylie Bishop</td>
                                        <td>3147</td>
                                        <td>Norman</td>
                                        <td>2005/09/08</td>
                                        <td>63%</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $this->include('layouts/footer.php') ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?= $this->include('common/script.php') ?>

</body>

</html>