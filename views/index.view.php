<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Welkom</h1>
                    <p class="lead">ADSD 2018 2019</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-10 offset-1">
            <h1>Add player</h1>
            <form method="post" action="add_player" class="form-inline">
                <label class="sr-only" for="inlineFormInputFName">First Name</label>
                <input type="text" class="form-control mb-2 mr-sm-2" name="fname" placeholder="first name">
                <label class="sr-only" for="inlineFormInputLName">Last Name</label>
                <input type="text" class="form-control mb-2 mr-sm-2" name="lname" placeholder="last name">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <label class="sr-only" for="inlineFormInputNName">Nick Name</label>
                <input type="text" class="form-control mb-2 mr-sm-2" name="nname" placeholder="nick name">
                <button type="submit" class="btn btn-outline-primary mb-2">Submit</button>
            </form>
            <h4>Users</h4>
            <ul class="list-group">
                <?php
                foreach ($results as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'fname') {
                            echo "<li class='list-group-item'>" . ucfirst($value) . " </li>";
                        }
                    }
                }

                ?>
            </ul>
        </div><!-- End div - user -->
        <hr>
        <div class="col-10 offset-1">


        </div><!-- End div - class Player-->
    </div> <!-- End div row -->
</div> <!-- End container -->
<?php require 'partials/foot.php'; ?>