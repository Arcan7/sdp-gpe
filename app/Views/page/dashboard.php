<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard | sdp-gpe</title>

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
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <?= $this->include('section/dashboard/card_employees.php')?>
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