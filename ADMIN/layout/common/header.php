<?php 
    if (isset($_POST["logout"])) {
		session_destroy();
		header("Location:./../../../index.php");
	}
?>
<a href="./../../../index.php">
<div class="header">
        <div class="left">
            <span>
                <img src="../../img/logo.png" width="60px" height="60px" style="border-radius: 50%;">
            </span>
            <span>
                <i class="fas fa-bars" id="bar" style="padding: 12px;"></i>
            </span>
        </div>
        <div class="right">
            <span>
                <i class="fas fa-bell" style="padding: 20px"></i>
            </span>
            <span>
                <i class="fas fa-comment-alt" style="padding: 20px"></i>
            </span>
            <span>
                
                <form method="POST" id="logoutForm" >
						<input type="submit" name="logout" value="Đăng xuất" style="background-color: #ff6d00;color:white;padding: 10px 15px;border-style:none;">
				</form>
            </span>
        </div>
    </div>