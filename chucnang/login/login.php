<?php 
	if (isset($_SESSION['email'])){
?>
<div id="page-login" class="col-md-4 col-sm-12 col-xs-12 text-right">
    <div class="page-login">
        <div class="user"><p>Xin chào <span><?php echo $_SESSION['email'];?></span></p></div>
        <div class="logout"><button><a href="./quantri/chucnang/dangxuat/dangxuat.php">Logout</a></button></div>
    </div>
</div>
<?php  
	}else{
?>
<div id="login" class="col-md-4 col-sm-12 col-xs-12 text-right" style="padding-top: 1px;margin-bottom: -4px;">
    <div class="login-main">
        <button><a href="./quantri/index.php">Sign In</a></button> <span> / </span> <button><a href="./chucnang/tao_tk/taotk.php">Sign Up</a></button>
    </div>
</div>
<?php  
	}
?>