<?php include('./header.php'); ?>

<section>
    <div class="container-fluid padding-md-0">
        <div class="row margin-sm-0 margin-md-0">
            
            <?php include('./sidebar.php'); ?>

                <div class="col-lg-10 col-md-12 col-12 padding-sm-15rem main-content-div">

                <div class="row heading-title-row-main">
                    <div class="col-12 padding-sm-0 p-md-0">
                        <h2 class="heading-title">Transfer report</h2>
                    </div>
                </div>

                <hr class=""/>

                <div class="d-flex colored-facts-main">
                    <div class="colored-facts-tabs" style="background: #E3EAFA87;">
                        <h3>Total debited service fees:</h3>
                        <p>200</p>
                    </div>
                    <div class="colored-facts-tabs" style="background: #E3F25A33;">
                        <h3>Total debited Chargeback representment amount:</h3>
                        <p>200</p>
                    </div>
                    <div class="colored-facts-tabs" style="background: #8000E58F;">
                        <h3>Total debited Chargeback amount:</h3>
                        <p>200</p>
                    </div>
                    <div class="colored-facts-tabs" style="background: #F2AF8A85;">
                        <h3>Total debited Refund amount:</h3>
                        <p>200</p>
                    </div>
                    <div class="colored-facts-tabs" style="background: #E2D4F5;">
                        <h3>Settled (credited) amount:</h3>
                        <p>200</p>
                    </div>
                </div>

                <hr/>

                <div class="filter-by-column-main">
                    <h3>Filter by:</h3>
                    <div class="d-flex">
                        <a class="btn btn-primary active">Merchant name <img src="./images/eye-icon.svg"/></a>
                        <a class="btn btn-primary">Merchant ID <img src="./images/eye-icon.svg"/></a>
                        <a class="btn btn-primary">Backoffice ID <img src="./images/eye-icon.svg"/></a>
                        <a class="btn btn-primary">Date <img src="./images/eye-icon.svg"/></a>
                        <a class="btn btn-primary">Transaction type <img src="./images/eye-icon.svg"/></a>
                    </div>
                </div>



                <div class="merchant-fees-table table-responsive">

                <hr class="hr-padding-right"/>

                <table class="table">
                <thead>
                    <tr>
                    <th scope="col"><span>CRM transaction date</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Transaction type</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Transaction ID</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Transaction description</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Merchant name</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Merchant ID</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Backoffice ID</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Payment method</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Transaction amount</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Applied fee amount,EUR</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Applied fee calculation date</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Shop name</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    <th scope="col"><span>Transaction currency</span><button><img src="./images/icon-sort-bottom.svg"/></th>
                    </tr>
                </thead>
                <tbody>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">yyyy-mm-dd</th>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">yyyy-mm-dd</th>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">yyyy-mm-dd</th>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">yyyy-mm-dd</th>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">yyyy-mm-dd</th>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    </tr>

                    <tr class='clickable-row' data-href='./agents-edit.php'>
                    <th scope="row">yyyy-mm-dd</th>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    </tr>

                </tbody>
                </table> 
                </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include('./footer.php'); ?>
