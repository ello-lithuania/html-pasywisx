<!DOCTYPE html>
<html>

    <title>HTML</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" href="./css/style.css"/>
<body>

<?php if(basename($_SERVER['PHP_SELF']) ==!"login.php") { ?>
<header>
    <div class="container-fluid p-md-0">
        <div class="row first-row m-mb-0">
            <div class="col-md-2 col-4 navbar-brand-div">
                <a href="./new.php"><img src="./images/payswix_logo.svg"/></a>
                <button class="main-menu-toggle"><img src="./images/search-icon.svg"/></button>
            </div>

            <?php if(basename($_SERVER['PHP_SELF']) =="agents-edit2.php") { ?>
                <div class="col-md-10 col-8 navbar-brand-right">
                <div class="row">
                    <div class="col-md-9 col-4">
                    </div>
                    <div class="col-md-3 col-12">
                            <form>
                            <input placeholder="Search"/>
                            <button><img src="./images/search-icon.svg"/></button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } else if(basename($_SERVER['PHP_SELF']) =="agents-edit.php" || basename($_SERVER['PHP_SELF']) =="new.php") { ?>
            <div class="col-md-10 col-8 navbar-brand-right">
            </div>
            <?php } else if(basename($_SERVER['PHP_SELF']) =="settings.php") { ?>
            <div class="col-md-10 col-8 navbar-brand-right">
                <div class="row">
                    <div class="col-md-12 col-12">
                    <a href="./new.php"><img src="./images/plus-btn-icon.svg"/><span>Add New</span></a>
                    </div>
                </div>
            </div>
            <?php } else if(basename($_SERVER['PHP_SELF']) =="merchant-fees.php" || basename($_SERVER['PHP_SELF']) =="history.php") { ?>
            <div class="col-md-10 col-8 navbar-brand-right">
                <div class="row">
                    <div class="col-md-9 col-4">
                    <a href="./new.php"><img src="./images/plus-btn-icon.svg"/><span>Add New</span></a>
                    </div>
                    <div class="col-md-3 col-8">
                            <form>
                            <input placeholder="Search by ID’s, Merchant name, Shop name"/>
                            <button><img src="./images/search-icon.svg"/></button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="col-md-10 col-8 navbar-brand-right">
                <div class="row">
                    <div class="col-md-9 col-4">
                    <a href="./new.php"><img src="./images/plus-btn-icon.svg"/><span>Add New</span></a>
                    </div>
                    <div class="col-md-3 col-8">
                            <form>
                            <input placeholder="Search"/>
                            <button><img src="./images/search-icon.svg"/></button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</header>
<?php } ?>