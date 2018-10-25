<?php require "partials/head.php"; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
        </div> <!-- End div greeting -->
        <hr>
        <div class="col-10 offset-1">
            <h4>Users</h4>
        </div><!-- End div - user -->
        <hr>
        <div class="col-10 offset-1">
            <p>register form</p>
<!--            <form method="post" action="index.view.php">-->
<!--            <fieldset>-->
<!--                <div class="input-group mb-3">-->
<!--                    <input type="text" class="form-control" placeholder="Voornaam" name="fname" aria-describedby="basic-addon1">-->
<!--                </div>-->
<!--                <div class="input-group mb-3">-->
<!--                    <input type="text" class="form-control" placeholder="Achternaam" name="lname" aria-describedby="basic-addon1">-->
<!--                </div>-->
<!--                <div class="input-group mb-3">-->
<!--                    <input type="email" class="form-control" placeholder="email" name="email" aria-describedby="basic-addon1">-->
<!--                </div>-->
<!--                <div class="input-group mb-3">-->
<!--                    <input type="password" class="form-control" placeholder="Nickname" name="nname" aria-describedby="basic-addon1">-->
<!--                </div>-->
<!--                <button type="submit" class="btn btn-outline-primary" name="reg_user">Account aanmaken</button>-->
<!--            </fieldset>-->
<!--            </form>-->
            <form method="post" action="add_player">
                <fieldset>
                    <div class="signup_form">
                        <label>Voornaam</label>
                        <input type="text" name="fname">
                    </div>
                    <button type="submit" class="btn" name="reg_user">registreren</button>
                </fieldset>
            </form>
        </div><!-- End div - class Player-->
    </div> <!-- End div row -->
</div> <!-- End container -->
<?php require"partials/foot.php"; ?>