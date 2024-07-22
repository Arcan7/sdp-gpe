<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
    Ajouter un employé(e)
</button>
<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Employé(e)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('configuration/employees') ?>" method="post">
                <div class="modal-body row g-3 mb-2">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Prénom" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Nom de famille" name="last_name" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="CIN" name="cin">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Addresse" name="addr">
                    </div>
                    <div class="col-md-6">
                        <select id="inputState" class="form-select" name="project">
                            <option selected disabled>Projet...</option>
                            <option value="Tchat">Tchat</option>
                            <option value="Top">Top</option>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <select id="inputState" class="form-select" name="title" required>
                            <option selected disabled>Titre...</option>
                            <option value="Manager">Manager</option>
                            <option value="Superviseur">Superviseur</option>
                            <option value="Chef de projet">Chef de projet</option>
                            <option value="Agent">Agent</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select id="inputState" class="form-select" name="location" required>
                            <option selected disabled>Localisation...</option>
                            <option value="TMM">TMM</option>
                            <option value="TNR">TNR</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select id="inputState" class="form-select" name="status" required>
                            <option selected disabled>Status...</option>
                            <option value="Confirmer">Confirmer</option>
                            <option value="Prestataire">Prestataire</option>
                            <option value="Formation">Formation</option>
                            <option value="Stagiaire">Stagiaire</option>

                        </select>
                    </div>

                    <div class="col-sm-4">
                        <label for="inputDate" class="col-form-label">Date Onboarding</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="onboarding" required>
                    </div>

                    <div class="col-sm-4">
                        <label for="inputDate" class="col-form-label">Date Offboarding</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="offboarding">
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