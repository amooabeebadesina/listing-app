
<?php
require_once __DIR__.'../../../vendor/autoload.php';
use Modules\Controllers\AdminController;
use Modules\Core\Redirect;

if(isset($_POST['ad-email'])) {
        $data['email'] = $_POST['ad-email'];
        $data['password'] = $_POST['ad-password'];
        $admin_controller = new AdminController();
        $response = $admin_controller->actionLogin($data);
        if ($response['success']) {
            Redirect::to('listings.php');
        } else {
            $error = $response['error'];
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div class="grey-background container-fluid">
    <div class="login-card">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h4 class="text-center">Login</h4><br/>
            <?php if(isset($error)) {
                echo "<div class='alert alert-danger'> $error </div>";
            }?>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="ad-email" id="email" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="ad-password" id="password" class="form-control" required/>
            </div>
            <div class="form-group text-center">
                <input type="submit" value="Login" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
</body>
</html>