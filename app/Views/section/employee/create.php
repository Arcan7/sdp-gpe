<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
    Add Employee
</button>
<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('configuration/employees') ?>" method="post">
                <div class="modal-body row g-3 mb-2">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Matricule" name="matricule">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First_name" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last_name" name="last_name" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="CIN" name="cin" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Project" name="project">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Title" name="title" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Addresse" name="addr">
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
                            <option value="CDI">CDI</option>
                            <option value="CDD">CDD</option>
                            <option value="PROVIDERS">PROVIDERS</option>
                            <option value="TRAINING">TRAINING</option>
                            <option value="TRY">TRY</option>
                            <option value="STAGIAIRE">STAGIAIRE</option>
                            <option value="AP">AP</option>
                            <option value="DEMISSION">DEMISSION</option>
                            <option value="LICENCIEMENT">LICENCIEMENT</option>
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label for="inputDate" class="col-form-label">Date Onboarding</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="onboarding" required>
                    </div>
                    
                    <div class="col-sm-6">
                        <label for="inputDate" class="col-form-label">Date Offboarding</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="offboarding">
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