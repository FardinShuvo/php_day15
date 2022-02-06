<?php include 'header.php';?>
<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <?php foreach ( $products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card ">
                        <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top">
                        <div class="card-body bg-info">
                            <h3 class="card-title"><?php echo $product['name']; ?></h3>
                            <h4><?php echo $product['brand']; ?></h4>
                            <h4><?php echo $product['price']; ?></h4>
                            <h4><?php echo $product['catagory']; ?></h4>
                            <hr/>
                            <a href="" class="btn btn-success bg-danger">Description</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php';?>

