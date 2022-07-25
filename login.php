<?php include('./header.php'); ?>

<section class="loginMain">
    <div class="container-fluid">
        <div class="row margin-sm-0">
            <div class="col-lg-6 col-12 leftSide">
                <h2>Connecting Payments</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-lg-6 col-12 rightSide">
                <h1>Login</h1>

                <form>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <label for="exampleInputEmail1" class="form-label mt-3">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <a class="input-group-text" id="basic-addon2">Reset password</a>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember password</label>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                </form>

            </div>
        </div>
    </div>
</section>

<?php include('./footer.php'); ?>