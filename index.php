<?php include('./header.php'); ?>

<section>
    <div class="container-fluid padding-md-0">
        <div class="row margin-sm-0 margin-md-0">
            
            <?php include('./sidebar.php'); ?>

                <div class="col-lg-10 col-md-12 col-12 padding-sm-15rem main-content-div">

                <div class="row heading-title-row-main">
                    <div class="col-9 p-md-0 padding-sm-0">
                        <h2 class="heading-title">New</h2>
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
                    <div class="col-lg-9 col-md-12 col-12 padding-sm-0">
                        <div class="row margin-sm-0 margin-md-0">
                            <div class="col-lg-6 col-md-12 padding-l-sm-0 col-12 padding-r-sm-0">
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Name</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Merchant 2">
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
                                <div class="form-group row margin-sm-0 border-bottom-sm">
                                    <label for="inputPassword" class="col-6 col-form-label">Account number</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="LT11111111111111111111">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 padding-l-sm-0 padding-md-0 padding-r-sm-0">
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Vadility</label>
                                    <div class="col-6 padding-sm-0">
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>Merchant 2</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Remittance schedule</label>
                                    <div class="col-6 padding-sm-0">
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>123333334</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Contract start date</label>
                                    <div class="col-6 padding-sm-0">
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>465646464646</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Expiration date</label>
                                    <div class="col-6 padding-sm-0">
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>324242</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Agent<button class="add-agent-btn-modal"  data-bs-toggle="modal" data-bs-target="#addAgentModal"><img src="./images/plus-btn-icon.svg"></button></label>
                                    <div class="col-6 padding-sm-0">
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>LT11111111111111111111</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="col-12 merchants-history-main">
                            <h3>Merchant fees history</h3>
                            <p><b>2022-03-01 16:00</b> Name Usser 1 changed added Payment method Card a(x), Free method - Card type, Fixed fee-0.5eur; % of transaction value - 0.5%</p>
                            <p><b>2022-02-27 13:24</b> Name User 2 New Merchant was created </p>  
                        </div>
                    </div>

                    <hr class="hr-divider hidden-sm"/>

                    <div class="row mb-55 margin-sm-0 padding-sm-0">
                        <div class="col-lg-9 col-md-12 col-12 padding-sm-0">
                            <div class="row margin-sm-0">
                                <div class="col-lg-6 col-md-12 col-12 padding-l-sm-0 padding-r-md-0 padding-r-sm-0">
                                    <div class="form-group row margin-md-0 margin-sm-0">
                                        <label for="inputPassword" class="col-6 col-form-label">Payment method</label>
                                        <div class="col-6 padding-sm-0">
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>Payment method</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-md-0 margin-sm-0">
                                        <label for="inputPassword" class="col-6 col-form-label">Fee method</label>
                                        <div class="col-6 padding-sm-0">
                                        <select class="form-select fee-method-select" aria-label="Default select example">
                                        <option selected>Fee method</option>
                                        <option value="Blended" data-id="blended-type-check">Blended</option>
                                        <option value="Card Type" data-id="card-type-check">Card Type</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row margin-sm-0 padding-r-sm-0 hidden" id="blended-type-check">
                        <div class="col-lg-9 col-md-12 col-12 padding-sm-0">
                            <div class="row margin-sm-0">

                                <div class="col-lg-6 col-md-12 col-12 padding-sm-0 mb-sm-5">
                                    <div class="tab-container-main">
                                        <h2 class="heading-title">Blended</h2>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            Fixed fee</label>
                                            <div class="col-4">
                                            <input type="number" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            % of transaction value</label>
                                            <div class="col-4">
                                            <input type="number" class="form-control" id="inputPassword" placeholder="0.2"><span>%</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            Minimum transaction fee</label>
                                            <div class="col-4">
                                            <input type="number" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-5">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            Max transaction fee</label>
                                            <div class="col-4">
                                            <input type="number" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            Chargeback</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            Chargeback representment</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            Refund</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-12 padding-sm-0 mb-sm-5 hidden">
                                    <div class="tab-container-main tab-container-important">
                                            <h2 class="heading-title">Private</h2>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Paid:</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Fixed fee</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>%</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                % of transaction value</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Min transaction fee</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Max transaction fee</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                            </div>
                                            
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row margin-sm-0 padding-r-sm-0 hidden" id="card-type-check">
                        <div class="col-lg-9 col-md-12 col-12 padding-sm-0">
                            <div class="row margin-sm-0">
                                <div class="col-md-6 col-12 padding-sm-0 mb-sm-5">
                                    <div class="tab-container-main">
                                        <h2 class="heading-title">Business</h2>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            Paid:</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            Fixed fee</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>%</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            % of transaction value</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            Min transaction fee</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-5">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            Max transaction fee</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            Chargeback</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            Chargeback representment</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-8 col-form-label">
                                            Refund</label>
                                            <div class="col-4">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6 col-12 padding-sm-0 mb-sm-5">
                                    <div class="tab-container-main tab-container-important">
                                            <h2 class="heading-title">Private</h2>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Paid:</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Fixed fee</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>%</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                % of transaction value</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Min transaction fee</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Max transaction fee</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="row mb-55 edit-merchant-right margin-sm-0  padding-md-0 margin-md-0 padding-sm-0">
                            <div class="col-lg-9 col-md-12 col-12 padding-sm-0">
                                <div class="row margin-sm-0">
                                    <div class="col-lg-6 col-md-12 col-12 padding-r-sm-0">


                                    <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Chargeback</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                    </div>

                                    <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Chargeback representment</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                    </div>

                                    <div class="form-group row">
                                                <label for="inputPassword" class="col-8 col-form-label">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                Refund</label>
                                                <div class="col-4">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="0.2"><span>Eur</span>
                                                </div>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="container-fluid hidden-md">
    <div class="row mb-5 margin-sm-0">
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
