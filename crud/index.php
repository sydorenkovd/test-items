<?php
//$content = file_get_contents(__DIR__ . '/test.json');
//var_dump(json_decode($content));
//die;
//$ob = new stdClass();
//$ob->name = 'Name';
//$ob->method = "Run";
//echo json_encode($ob);
//die;
require_once 'autoload.php';
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';
$classController = 'app\\controllers\\' . $ctrl . 'Controller';
//require __DIR__ . '/classes/DB.php';
$controller = new $classController;
$method = "action" . $act;
$controller->$method();
?>
<?php
if (require_once 'core/init.php') {
    echo 1;
}
use app\models\Session;
use app\models\User;
use app\classes\DB;


$user = DB::connect();
if (Session::exists('home')) {
    echo "<p><b>" . Session::flash('home') . "</b></p>";
}
$user = new User();
if ($user->isLoggedIn()) {
    ?>
    <p>Hello, <a href="profile.php?user=<?= escape($user->data()->username); ?>"><?= $user->data()->username ?></a></p>
    <ul>
        <li>You can <a href="logout.php">log out</a> here!</li>
        <li>You can <a href="update.php">update</a> your profile here!</li>
        <li>You can <a href="changepassword.php">change password</a> here!</li>
    </ul>
    <?php
    if ($user->hasPermission('admin')) {
        echo 'You are  an admin';
    }
} else {
    echo "<p>You need to <a href='login.php'>log in</a> or <a href='register.php'>register</a>!" . "</p>";
}
?>