<?php include('./header.php'); ?>

<section>
    <div class="container-fluid padding-md-0">
        <div class="row margin-sm-0 margin-md-0">
            
            <?php include('./sidebar.php'); ?>

                <div class="col-lg-10 col-md-12 col-12 padding-sm-15rem main-content-div">

                <div class="row heading-title-row-main">
                    <div class="col-9 p-md-0">
                        <h2 class="heading-title">Settings</h2>
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

                <div class="row input-section-main-row margin-sm-0 settings-page">
                    <div class="col-lg-9 col-md-12 col-12 padding-sm-0 main-content-styling-inputs">

                        <div class="row margin-sm-0 margin-md-0">
                            <div class="col-12 padding-sm-0 padding-md-0">
                                <h3 class="mb-5 mt-2">Default fees</h3>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 padding-md-0 padding-sm-0">
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-8 col-form-label">Fixed transaction fee</label>
                                    <div class="col-4 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder=""><span>Eur</span>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-8 col-form-label">% from transaction</label>
                                    <div class="col-4 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder=""><span>%</span>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-8 col-form-label">Min fee</label>
                                    <div class="col-4 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder=""><span>Eur</span>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0 border-bottom-sm"">
                                    <label for="inputPassword" class="col-8 col-form-label">Max fee</label>
                                    <div class="col-4 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder=""><span>Eur</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 padding-sm-0 padding-md-0 paddig-columns-bigger">
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-8 col-form-label">Chargeback</label>
                                    <div class="col-4 padding-sm-0">
                                    <input type="text" class="form-control" id="inputPassword" placeholder=""><span>Eur</span>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0 border-bottom-sm">
                                    <label for="inputPassword" class="col-8 col-form-label">Chargeback representment</label>
                                    <div class="col-4 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder=""><span>Eur</span>
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-8 col-form-label">Refund</label>
                                    <div class="col-4 padding-sm-0">
                                    <input type="text" class="form-control" id="inputPassword" placeholder=""><span>Eur</span>
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

                    <hr class="mt-3"/>

                    <div class="row margin-sm-0 margin-md-0 input-section-main-row settings-providers-main padding-sm-0">
                            <div class="col-12 padding-sm-0 padding-md-0 d-flex">
                                <h3 class="mb-5 mt-2">Service providers</h3>
                                <a href="./new.php" class="heading-btn-highlight"><img src="./images/plus-btn-icon.svg"/><span>Add New</span></a>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 padding-md-0 padding-sm-0 padding-r-sm-0">

                                <div class="row m-0 settings-providers-labels">
                                    <div class="col-md-4 col-4 padding-l-sm-0 padding-l-md-0">
                                        <p>Name</p>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <p>Code</p>
                                    </div>
                                    <div class="col-md-4 col-4 padding-r-sm-0">
                                        <p>IBAN</p>
                                    </div>
                                </div>

                                <div class="row m-0">
                                    <div class="col-md-4 col-4 padding-l-sm-0  padding-l-md-0">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Nuavei">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="90000030">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-4  padding-r-sm-0">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="AT4832000000012345">
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row m-0">
                                    <div class="col-md-4 col-4 padding-l-sm-0  padding-l-md-0">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Nuavei">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="90000030">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-4  padding-r-sm-0">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="AT4832000000012345">
                                        </div>
                                    </div>
                                </div>

                                <div class="row last-providers-row margin-r-sm-0 mt-3 mb-4">
                                    <div class="col-md-4 col-6 text-div padding-l-sm-0">
                                        <div class="form-group">
                                            <p>Payswix IBAN</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="LT00000123000000">
                                        </div>
                                    </div>
                                </div>
                                
                            
                            </div>

                        
                    </div>

                    <hr class="mb-4"/>


                    <div class="row margin-sm-0 margin-md-0 input-section-main-row settings-providers-main padding-sm-0">
                            <div class="col-12 padding-md-0 d-flex padding-sm-0">
                                <h3 class="mb-5 mt-2">CRM users</h3>
                                <a href="./new.php" class="heading-btn-highlight"><img src="./images/plus-btn-icon.svg"/><span>Add New</span></a>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 padding-md-0 padding-r-sm-0 padding-sm-0">

                                <div class="row settings-providers-labels m-0">
                                    <div class="col-md-3 col-3 padding-l-sm-0">
                                        <p class="m-0">User</p>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <p class="m-0">Email</p>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <p class="m-0">Role</p>
                                    </div>
                                    <div class="col-md-3 col-3 padding-sm-0">
                                        <div class="row m-0">
                                            <div class="col-6"><p class="m-0">Password</p></div>
                                            <div class="col-6 padding-r-0"><p class="m-0">Remove user</p></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row settings-users-row m-0">
                                    <div class="col-md-3 col-3 padding-l-sm-0">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Name Surename">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="user1payswix.com">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <div class="form-group row margin-sm-0">

                                            <select class="form-select" aria-label="Administrator">
                                            <option selected>Administrator</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3 p-0">
                                        <div class="row m-0">
                                            <div class="col-6"><a>Reset</a></div>
                                            <div class="col-6 padding-r-0"><a><span>Disable</span><span class="hidden">Enable</span></a></div>
                                        </div>
                                    </div>
                                </div>

                                <hr/>
                                
                                <div class="row settings-users-row m-0">
                                    <div class="col-md-3 col-3 padding-l-sm-0">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Name Surename">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="user1payswix.com">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <div class="form-group row margin-sm-0">

                                            <select class="form-select" aria-label="Administrator">
                                            <option selected>Administrator</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3 p-0">
                                        <div class="row m-0">
                                            <div class="col-6"><a>Reset</a></div>
                                            <div class="col-6 padding-r-0"><a class="btn-click-enable"><span>Disable</span><span class="hidden">Enable</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr/>

                                <div class="row settings-users-row m-0">
                                    <div class="col-md-3 col-3 padding-l-sm-0">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Name Surename">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="user1payswix.com">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <div class="form-group row margin-sm-0">

                                            <select class="form-select" aria-label="Administrator">
                                            <option selected>Administrator</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3 p-0">
                                        <div class="row m-0">
                                            <div class="col-6"><a>Reset</a></div>
                                            <div class="col-6 padding-r-0"><a class="btn-click-enable"><span>Disable</span><span class="hidden">Enable</span></a></div>
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
    <div class="row m-0 mt-3 mb-5">
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
