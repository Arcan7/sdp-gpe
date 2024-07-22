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
            <h1>Compte</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Configuration</li>
                    <li class="breadcrumb-item active">Compte</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Compte</h5>

                            <?= $this->include('section/account/create.php') ?>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped table-bordered text-center datatable">
                                <thead>
                                    <tr>
                                        <th>UID</th>
                                        <th>Nom d'utilisateur</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Créé à</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td><?= $user['uid'] ?></td>
                                            <td><?= $user['username'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['role'] ?></td>
                                            <td><?= $user['created_at'] ?></td>
                                            <td>
                                                <a href="<?= base_url('users/edit/' . $user['uid']) ?>" class="btn btn-sm btn-primary">Details</a>
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
    <script>
        const users = <?= json_encode($users) ?>;
        console.log(users);
    </script>

    <?= $this->include('common/script.php') ?>

</body>

</html>