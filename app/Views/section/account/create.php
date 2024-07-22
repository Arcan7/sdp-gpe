<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
    Create Account
</button>
<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('configuration/account') ?>" method="post">
                <div class="modal-body row g-3 mb-2">
                    <div class="col-md-12">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="col-md-12">
                        <select id="inputState" class="form-select" name="role">
                            <option selected disabled>Role...</option>
                            <option value="Admin">Admin</option>
                            <option value="Employee">Employee</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <select id="inputState" class="form-select" name="role">
                            <option selected disabled>Employee Account For...</option>
                            <?php foreach ($employees as $employee) : ?>
                                <option value="<?= $employee['employee_id'] ?>"><?= $employee['first_name'] . ' ' . $employee['last_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>