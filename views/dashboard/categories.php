<?php
require_once __DIR__.'../../../vendor/autoload.php';
require ('../includes/admin-master.php');

use Modules\Controllers\CategoryController;

$category_controller = new CategoryController();
$categories = $category_controller->allCategories();
if (isset($_POST['new_category'])) {
    $response = $category_controller->createCategory($_POST['new_category']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
</head>
<body>
<?php include '../includes/admin_header.php' ?>
<div class="grey-background container-fluid">
    <?php
        if (isset($response) && ($response)) {
            echo "<div class='alert alert-success'>Category successfully added</div>";
        }
    ?>
    <div class="add-category">
        <button type="button" class="btn btn-primary btn-lg pull-right"
                data-toggle="modal" data-target="#formModal">
            Add New
        </button>
    </div>
    <?php
    if ($categories == null) {
        echo "<div class='info-card text-center'>
                  <h4> No categories yet</h4>
               </div>";
    }
    ?>
    <div id="formModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                            <label for="new_category">Category Name</label>
                            <input type="text" class="form-control" name="new_category" id="new_category" required/>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Submit" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>