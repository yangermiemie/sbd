<?php 
require_once '../include.php';
$act=$_REQUEST['act'];
$id=$_REQUEST['id'];
$username=$_REQUEST['username'];
if($act=="logout"){
    logout();
}elseif($act=="addAdmin"){
    $mes=addAdmin();
}elseif($act=="editAdmin"){
    $mes=editAdmin($id);
}elseif($act=="delAdmin"){
    $mes=delAdmin($id);
}elseif($act=="addPro"){
    $mes=addPro();
}elseif($act=="editPro"){
    $pSn=$_REQUEST['pSn'];
    $mes=editPro($id,$pSn);
}elseif($act=="delPro"){
    $mes=delPro($id);
}elseif($act=="addUser"){
    $mes=addUser();
}elseif($act=="delUser"){
        $mes=delUser($username);
}elseif($act=="editUser1"){
    editUser1($_SESSION['userId']); 
}elseif($act=="editUser2"){
    editUser2($_SESSION['userId']); 
}elseif($act=="addShop"){
    $mes=addShop();
}elseif($act=="delShop"){
    $shopId=$_REQUEST['shopId'];
    $mes=delShop($shopId);
}elseif($act=="editShop"){
    $shopId=$_REQUEST['shopId'];
    $mes=editShop($shopId);
}elseif($act=="takeOrder"){
    $orderId=$_REQUEST['orderId'];
    $mes=takeOrder($orderId);
}elseif($act=="cancelOrder"){
    $orderId=$_REQUEST['orderId'];
    $mes=cancelOrder($orderId);
}elseif($act=="loginUser"){
    loginUser();
}elseif($act=="logoutUser"){
    logoutUser();
}elseif($act=="addOrder"){
    addOrder();
}
elseif($act=="waterText"){
    $mes=doWaterText($id);
}elseif($act=="waterPic"){
    $mes=doWaterPic($id);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
    if($mes){
        echo $mes;
    }
?>
</body>
</html>