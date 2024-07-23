<?php
$employeeId = session()->get('user')['employees_id'];
$employee = null;

if (isset($employees) && !empty($employees)) {
    foreach ($employees as $emp) {
        if ($emp['employee_id'] == $employeeId) {
            $employee = $emp;
            break;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>My Profil | sdp-gpe</title>

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
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <?php if (isset($employee)) : ?>
            <section class="section profile">
                <div class="row">
                    <div class="col-xl-4">

                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                <img src="<?= base_url('assets/img/profile-img.jpg') ?>" alt="Profile" class="rounded-circle">
                                <h2><?= esc($employee['first_name']) ?></h2>
                                <h3><?= esc($employee['title']) ?></h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-8">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Aperçu</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editer le profil</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Paramètres</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer le mot de passe</button>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">Détails du profil</h5>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Nom et prénom</div>
                                            <div class="col-lg-9 col-md-8"><?= esc($employee['first_name']) . ' ' . esc($employee['last_name']) ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Company</div>
                                            <div class="col-lg-9 col-md-8"><?= esc($employee['company']) ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Job</div>
                                            <div class="col-lg-9 col-md-8"><?= esc($employee['title']) ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Address</div>
                                            <div class="col-lg-9 col-md-8"><?= esc($employee['addr']) ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Phone</div>
                                            <div class="col-lg-9 col-md-8"><?= esc($employee['phone']) ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8"><?= esc(session()->get('user')['email']) ?></div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                        <!-- Profile Edit Form -->
                                        <form>
                                            <div class="row mb-3">
                                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Image de profil</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <img src="<?= base_url('assets/img/profile-img.jpg') ?>" alt="Profile">
                                                    <div class="pt-2">
                                                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="last_name" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="last_name" type="text" class="form-control" id="last_name" value="<?= esc($employee['last_name']) ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="first_name" class="col-md-4 col-lg-3 col-form-label">Prénom</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="first_name" type="text" class="form-control" id="first_name" value="<?= esc($employee['first_name']) ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="company" type="text" class="form-control" id="company" value="<?= esc($employee['company']) ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="job" type="text" class="form-control" id="Job" value="<?= esc($employee['title']) ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="address" type="text" class="form-control" id="Address" value="<?= esc($employee['addr']) ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="phone" type="text" class="form-control" id="Phone" value="<?= esc($employee['phone']) ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="email" type="email" class="form-control" id="Email" value="<?= esc(session()->get('user')['email']) ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->

                                    </div>

                                    <div class="tab-pane fade pt-3" id="profile-settings">

                                        <!-- Settings Form -->
                                        <form>

                                            <div class="row mb-3">
                                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                        <label class="form-check-label" for="changesMade">
                                                            Changes made to your account
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                                        <label class="form-check-label" for="newProducts">
                                                            Information on new products and services
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="proOffers">
                                                        <label class="form-check-label" for="proOffers">
                                                            Marketing and promo offers
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                                        <label class="form-check-label" for="securityNotify">
                                                            Security alerts
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </form><!-- End settings Form -->

                                    </div>

                                    <div class="tab-pane fade pt-3" id="profile-change-password">
                                        <!-- Change Password Form -->
                                        <form>

                                            <div class="row mb-3">
                                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mot de passe actuel</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="password" class="form-control" id="currentPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">nouveau mot de passe</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Ré-entrez le nouveau mot de passe</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Changer le mot de passe</button>
                                            </div>
                                        </form><!-- End Change Password Form -->

                                    </div>

                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        <?php endif; ?>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $this->include('layouts/footer.php') ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?= $this->include('common/script.php') ?>

</body>

</html>