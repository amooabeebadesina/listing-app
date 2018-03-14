<?php
require_once __DIR__.'../../../vendor/autoload.php';
require ('../includes/admin-master.php');

use Modules\Controllers\BusinessController;


$business_controller = new BusinessController();
$businesses = $business_controller->all();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listings</title>
</head>
<body>
<?php include '../includes/admin_header.php' ?>
<div class="grey-background container-fluid">

</div>
</body>
</html>