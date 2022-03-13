<?php
require_once 'private/init.php';
login_required();

include './include/dash_header.php';
include './include/dash_asidebar.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name     = $_POST['product_name'];
    $file_tmp_name    = $_FILES['product_image']['tmp_name'];
    $file_name        = $_FILES['product_image']['name'];
    $product_price    = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_quantity = $_POST['product_quantity'];

    $file_name = $file_name . '_' . time() . ".png";
    move_uploaded_file($file_tmp_name, "../uploads/" . $file_name);
    $product_image = 'uploads/' . $file_name;


    $sql    = "INSERT INTO `product_add` (`product_name`, `product_image`, `price`, `categorey_name`, `quintity`, `created_at`, `updated_at`) VALUES ('$product_name', '$product_image', '$product_price','$product_category', '$product_quantity', current_timestamp(), current_timestamp())";



    $result = mysqli_query($db, $sql);

    if (!$result) {
        echo "failed add category";
    } else {
        echo "category was added successfully";
    }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header p-3 bg-cyan">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item text-bold text-dark"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- category add form -->
    <form class="" method="post" action="#" enctype="multipart/form-data">
        <div class=" card-body">
            <div class="form-group">
                <label for="cat_name">Product Name</label>
                <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                <label>Select Category</label>

                <select class="form-control" name="product_category">
                    <option>--select category--</option>

                    <?php
                    while ($category = categories()) { ?>
                        <option value="<?php $category['categorey_id'] ?>"><?php $category['cat_name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" class="form-control" name="product_image" id="product_image">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="product_price">Product Price</label>
                        <div class="input-group">
                            <div class="custom-price">
                                <input type="number" name="product_price" class="custom-price-input" id="product_price">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="product_price">Product Quantity</label>
                        <div class="input-group">
                            <div class="custom-price">
                                <input type="number" name="product_quantity" class="custom-price-input" id="product_quantity">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Upload Product</button>
            </div>
        </div>
    </form>
    <!-- /category add form -->

    <?php
    include('./include/dash_footer.php');
    ?>