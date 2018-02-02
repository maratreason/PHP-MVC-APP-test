<!-- kamil - 1111 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $pageData['title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>

	<header></header>

	<div id="content">
		<div class="container table-block">
			<div class="row table-cell-block">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<h1 class="text-center login-title">Вход в кабинет</h1>
					<div class="account-wall">
						<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
						alt="">
						<form class="form-signin" id="form-signin" method="POST">
							<?php if(!empty($pageData['error'])): ?>
								<p><?php echo $pageData['error']; ?></p>
								<?php endif; ?>
							<input type="text" class="form-control" name="login" id="login" placeholder="Логин" required>
							<input type="password" class="form-control" name="password" id="password" placeholder="Пароль">
							<button class="btn btn-lg btn-primary btn-block" type="submit">
								Войти</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			
		</footer>
	

	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/angular.min.js"></script>
	<script src="/js/script.js"></script>
</body>
</html>