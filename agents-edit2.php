<?php include('./header.php'); ?>

<section>
    <div class="container-fluid padding-md-0">
        <div class="row margin-sm-0 margin-md-0">
            
            <?php include('./sidebar.php'); ?>

                <div class="col-lg-10 col-md-12 col-12 padding-sm-0 main-content-div">

                <div class="row heading-title-row-main">
                    <div class="col-9 p-md-0">
                        <h2 class="heading-title">Referral [legal name]</h2>
                    </div>
                    <div class="col-3 heading-btns-submit p-md-0">
                        <div class="row hidden-sm disabled-agents-edit-submit-btns">
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

                <div class="row input-section-main-row margin-sm-0 agents-edit2-page">
                    <div class="col-lg-10 col-md-12 col-12 padding-sm-0">



                <ul class="nav nav-tabs card-header-tabs padding-sm-15rem margin-sm-0" data-bs-tabs="tabs">
                    <li class="nav-item enable-agents-edit-submit">
                        <a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#agent" class="">Agent overview</a>
                    </li>
                    <li class="nav-item disabled-agents-edit-submit">
                        <a class="nav-link" data-bs-toggle="tab" href="#merchants" class="">Merchants</a>
                    </li>
                </ul>

            <div class="tab-content padding-sm-15rem">
                <div class="tab-pane active" id="agent">


                <div class="row margin-sm-0 margin-md-0">
                            <div class="col-md-6 col-12 padding-r-sm-0 padding-sm-0">
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Brand</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Merchant 2">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Legal name</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Country</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Country">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Email</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Phone</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="+370 000 0000">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Website URL</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="www.website.com">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0 border-bottom-sm">
                                    <label for="inputPassword" class="col-6 col-form-label">Contract status</label>
                                    <div class="col-6 padding-sm-0">
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>Valid</option>
                                    <option value="1">Suspended</option>
                                    <option value="2">Canceled</option>
                                    <option value="3">Draft</option>
                                    <option value="3">Expired</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 paddig-columns-bigger padding-r-sm-0 padding-sm-0">
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Contract signed date</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="date" class="form-control" id="inputPassword" placeholder="12/02/2022">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0 border-bottom-sm">
                                    <label for="inputPassword" class="col-6 col-form-label">Agent approved by BoL</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Valid">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Approval date</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="date" class="form-control" id="inputPassword" placeholder="12/02/2022">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Contract Expiry</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="date" class="form-control" id="inputPassword" placeholder="12/02/2022">
                                    </div>
                                </div>
                                <div class="form-group row margin-sm-0">
                                    <label for="inputPassword" class="col-6 col-form-label">Revenue share as a % from net revenue from merchant</label>
                                    <div class="col-6 padding-sm-0">
                                    <input type="password" class="form-control w-auto input-two-char" id="inputPassword" placeholder="22">
                                    </div>
                                </div>
                            </div>
                        </div>       

                </div>
                <div class="tab-pane merchant-fees-table table-responsive" id="merchants">



                <table class="table">
                <thead>
                    <tr>
                    <th scope="col"><span>Name</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Contract ID</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>ID</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>BO ID</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Merchant validity</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    </tr>
                </thead>
                <tbody>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">Name</th>
                    <td>Contract ID</td>
                    <td>ID</td>
                    <td>BO ID</td>
                    <td>Validity</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">Name</th>
                    <td>Contract ID</td>
                    <td>ID</td>
                    <td>BO ID</td>
                    <td>Validity</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">Name</th>
                    <td>Contract ID</td>
                    <td>ID</td>
                    <td>BO ID</td>
                    <td>Validity</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">Name</th>
                    <td>Contract ID</td>
                    <td>ID</td>
                    <td>BO ID</td>
                    <td>Validity</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">Name</th>
                    <td>Contract ID</td>
                    <td>ID</td>
                    <td>BO ID</td>
                    <td>Validity</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">Name</th>
                    <td>Contract ID</td>
                    <td>ID</td>
                    <td>BO ID</td>
                    <td>Validity</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">Name</th>
                    <td>Contract ID</td>
                    <td>ID</td>
                    <td>BO ID</td>
                    <td>Validity</td>
                    </tr>

                </tbody>
                </table> 



                </div>
            </div>



                    
                    

                    </div>
                    <div class="col-md-2 hidden">
                        <div class="col-12 merchants-history-main hidden">
                            <h3>Merchant fees history</h3>
                            <p><b>2022-03-01 16:00</b> Name Usser 1 changed added Payment method Card a(x), Free method - Card type, Fixed fee-0.5eur; % of transaction value - 0.5%</p>
                            <p><b>2022-02-27 13:24</b> Name User 2 New Merchant was created </p>  
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="container-fluid hidden-md disabled-agents-edit-submit-btns2">
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
