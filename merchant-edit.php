<?php include('./header.php'); ?>

<section>
    <div class="container-fluid padding-md-0">
        <div class="row margin-sm-0 margin-md-0">
            
            <?php include('./sidebar.php'); ?>

                <div class="col-md-10 col-12 padding-sm-0 main-content-div">

                <div class="row heading-title-row-main">
                    <div class="col-9 p-md-0 padding-sm-0">
                        <h2 class="heading-title">Merchant 2</h2>
                    </div>
                    <div class="col-3 heading-btns-submit p-md-0">
                        <div class="row hidden-sm">
                            <div class="col-6">
                            <a href="" class="btn-empty-custom">Edit</a>
                            </div>
                            <div class="col-6">
                            <button class="btn-important-custom"  data-bs-toggle="modal" data-bs-target="#saveModal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="mb-45"/>

                <div class="row input-section-main-row margin-sm-0">
                    <div class="col-md-9 padding-sm-0">
                        <div class="row margin-sm-0 margin-md-0">
                            <div class="col-md-6 col-12 padding-sm-0 padding-r-sm-0">
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Name</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Merchant 2" disabled>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Validity</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Valid" disabled>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Merchant ID</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="123333334">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Entity ID</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="465646464646">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Back office ID</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="324242">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Payment method</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Payment method">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Fee method</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Fee method">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 padding-sm-0 padding-md-0 padding-r-sm-0 edit-merchant-right padding-l-sm-0">

                            <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            Fixed fee</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            % of transaction value</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>%</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            Min transaction fee</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            Max transaction fee</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="container-fluid hidden-md">
    <div class="row margin-sm-0 mb-5">
                            <div class="col-6">
                            <a href="" class="btn-empty-custom">Edit</a>
                            </div>
                            <div class="col-6">
                            <button class="btn-important-custom"  data-bs-toggle="modal" data-bs-target="#saveModal">Save</button>
                            </div>
                        </div>
    </div>
</section>

<?php include('./footer.php'); ?>
