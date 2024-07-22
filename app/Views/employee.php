<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Employees | sdp-gpe</title>
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
            <h1>Employees</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Configuration</li>
                    <li class="breadcrumb-item active">Employees</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Employees</h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped table-bordered text-center datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Matricule</th>
                                        <th>Name</th>
                                        <th>CIN</th>
                                        <th>Project</th>
                                        <th>Title</th>
                                        <th>Localisation</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($employees as $employee): ?>
                                        <tr>
                                            <td><?= $employee['employee_id'] ?></td>
                                            <td><?= $employee['matricule'] ?></td>
                                            <td><?= $employee['first_name'] .' '. $employee['last_name'] ?></td>
                                            <td><?= $employee['cin'] ?></td>
                                            <td><?= $employee['project'] ?></td>
                                            <td><?= $employee['title'] ?></td>
                                            <td><?= $employee['location'] ?></td>
                                            <td><?= $employee['status'] ?></td>
                                            <td>
                                                <a href="<?= base_url('configuration/employees/edit/' . $employee['employee_id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?= base_url('configuration/employees/delete/' . $employee['employee_id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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