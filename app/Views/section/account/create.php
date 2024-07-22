<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
    Créer un compte
</button>
<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Compte d'utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('configuration/account') ?>" method="post">
                <div class="modal-body row g-3 mb-2">

                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="username" required>
                    </div>
                    <div class="col-md-12">
                        <input type="password" class="form-control" placeholder="Mot de passe" name="password" required>
                    </div>

                    <div class="col-md-12">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <span class="text-muted" style="font-size: 0.875em;">*L'email n'est pas nécessaire.</span>
                    </div>

                    <div class="col-md-12">
                        <select id="inputState" class="form-select" name="role" required>
                            <option selected disabled>Accès...</option>
                            <option value="Admin">Admin</option>
                            <option value="Personnelle">Personnelle</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <select id="inputState" class="form-select" name="role">
                            <option selected disabled>Compte employé pour...</option>
                            <?php foreach ($employees as $employee) : ?>
                                <option value="<?= $employee['employee_id'] ?>"><?= $employee['first_name'] . ' ' . $employee['last_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>