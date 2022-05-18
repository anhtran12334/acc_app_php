<?php
	session_start();
	var_dump($_SESSION['quantity']);
?>
<header class="header">
	<div class="top">
		<div class="container">
			<ul>
				<li><a href="">Liên hệ</a></li>
				<li><a href="">Giới thiệu</a></li>
				<li><a href="register.php">Đăng ký</a></li>
				<li><a href="/ACC_APP/common/login.php">Đăng nhập</a></li>
			</ul>
		</div>
	</div>
	<div class="middle">
		<div class="container">
			<a href="../../index.php" class="logo"><img src="" alt="" /><i class="fa-solid fa-square-caret-right"></i>ACC smart phone</a>
			<div class="search">
				<input type="text" name="search" placeholder="Hôm nay bạn cần tìm gì?" />
				<button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
			</div>
			<div class="header-cart">
				
				<a <?php echo isset($_SESSION['ID'])? " href='/ACC_APP/user/layout/cart.php'"  :  " href='/ACC_APP/user/layout/cart_empty.php'" ?> >
					<i class="fa-solid fa-cart-shopping"></i>
					<span class="amount badge badge-primary"><?php echo $_SESSION['quantity']?></span>
				</a>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="container">
			<ul>
				<li><a href="product-list.php">Samsung</a></li>
				<li><a href="">Apple</a></li>
				<li><a href="">Oppo</a></li>
				<li><a href="">Xiaomi</a></li>
				<li><a href="">Realme</a></li>
				<li><a href=""> Vivo</a></li>
			</ul>
		</div>
	</div>
</header>
