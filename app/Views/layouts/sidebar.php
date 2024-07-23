<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('/dashboard') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Settings</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('settings/profil') ?>">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#config-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear-wide-connected"></i><span>Configuration</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="config-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('configuration/employees') ?>">
                        <i class="bi bi-circle"></i><span>Employees</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('configuration/account') ?>">
                        <i class="bi bi-circle"></i><span>Account</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('configuration/elastix') ?>">
                        <i class="bi bi-circle"></i><span>Elastix</span>
                    </a>
                </li>
            </ul>
        </li> <!-- End Configuration Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('pages/faq') ?>">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('auth/logout')?>">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Login Page Nav -->

    </ul>

</aside>