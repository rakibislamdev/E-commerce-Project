<?php
require_once('private/init.php');
login_required();

include './include/dash_header.php';
include './include/dash_asidebar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cat_name       = $_POST['cat_name'];
    $file_tmp_name  = $_FILES['cat_image']['tmp_name'];
    $file_name  = $_FILES['cat_image']['name'];
    $status         = $_POST['status'];

    $file_name = $file_name . '_' . time() . ".png";
    move_uploaded_file($file_tmp_name, "../uploads/" . $file_name);
    $cat_image = 'uploads/' . $file_name;


    $sql    = "INSERT INTO `product_categorey` (`cat_name`, `cat_image`, `status`, `created_at`, `updated_at`) VALUES ('$cat_name', '$cat_image', '$status', current_timestamp(), current_timestamp())";



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
    <form method="post" action="#" enctype="multipart/form-data">
        <div class=" card-body">
            <div class="form-group">
                <label for="cat_name">Category Name</label>
                <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Enter Category Name">
            </div>
            <div class="form-group">
                <label for="cat_image">Category Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="cat_image" class="custom-file-input" id="cat_image">
                        <label class="custom-file-label" for="cat_image">Choose Image</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="active" value="active">
                    <label class="form-check-label">Active</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="inactive" value="inactive">
                    <label class="form-check-label">Inactive</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>

    </form>
    <!-- /category add form -->

    <?php include './include/dash_footer.php'; ?>