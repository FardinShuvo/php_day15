<?php include 'header.php';  ?>
<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-info text-white">Password Genator</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3">Password Length</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="pass_len"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Your Password</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result) ? $result :''; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-secondary" name="btn" value="Submit"/>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</section>





<?php include 'footer.php';  ?>
