<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title>Модуль 2024</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Масштабирование страницы для корректного отображения на разных устройствах -->
	<link rel="shortcut icon" href="images/favicon.ico"> <!-- Отображение иконки на вкладке -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> <!-- Стили бутстрап -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css"> <!-- Иконки -->
	<link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" /> <!-- Применяемые к тегам css-стили -->
</head>

<body>


	<div class="back-to-home rounded d-none d-sm-block">
		<a href="index.php" class="btn btn-icon btn-primary"><i data-feather="home" class="icons"></i></a>
	</div>

	<!-- Hero Start -->
	<section class="cover-user bg-white">
		<div class="container-fluid px-0">
			<div class="row g-0 position-relative">
				<div class="col-lg-4 cover-my-30 order-2">
					<div class="cover-user-img d-lg-flex align-items-center">
						<div class="row">
							<div class="col-12">
								<div class="card border-0" style="z-index: 1; padding:25px 50px">
									<div class="card-body p-0">
										<h4 class="card-title text-center">Регистрация</h4>
										<form class="login-form mt-4" method="POST" action="registraciya.php">
											<div class="row">
												<div class="col-md-12">
													<div class="mb-3">
														<label class="form-label">Фамилия<span class="text-danger">*</span></label>
														<div class="form-icon position-relative">
															<input type="text" class="form-control ps-5"
																placeholder="Фамилия" name="Familya" required>
														</div>
													</div>
												</div><!--end col-->
												<div class="col-md-12">
													<div class="mb-3">
														<label class="form-label">Имя<span class="text-danger">*</span></label>
														<div class="form-icon position-relative">
															<input type="text" class="form-control ps-5"
																placeholder="Имя" name="Name" required>
														</div>
													</div>
												</div><!--end col-->
												<div class="col-md-12">
													<div class="mb-3">
														<label class="form-label">Почта<span class="text-danger">*</span></label>
														<div class="form-icon position-relative">
															<input type="email" class="form-control ps-5" placeholder="ulya.dymova.84@mail.ru"
																name="email" required>
														</div>
													</div>
												</div><!--end col-->
												<div class="col-md-12">
													<div class="mb-3">
														<label class="form-label">Телефон<span class="text-danger">*</span></label>
														<div class="form-icon position-relative">
															<input type="tel" class="form-control ps-5" placeholder="7-901-050-06-59"
																name="phone" required>
														</div>
													</div>
												</div><!--end col-->

												<div class="col-md-12">
													<div class="mb-3">
														<label class="form-label">Логин<span class="text-danger">*</span></label>
														<div class="form-icon position-relative">
															<input type="text" class="form-control ps-5"
																placeholder="Логин" name="login" required>
														</div>
													</div>
												</div><!--end col-->

												<div class="col-md-12">
													<div class="mb-3">
														<label class="form-label">Пароль<span class="text-danger">*</span></label>
														<div class="form-icon position-relative">
															<input type="password" class="form-control ps-5"
																placeholder="Пароль" name="password" required>
														</div>
													</div>
												</div><!--end col-->

												<div class="col-md-12">
													<div class="d-grid">
														<br>
														<button class="btn alert-js"
															style="background-color:rgb(210, 232, 240); border: 1px solid black">Зарегистрироваться</button>
													</div>
												</div><!--end col-->
											</div><!--end row-->
										</form>
									</div>
								</div>
							</div>
						</div><!--end row-->
					</div> <!-- end about detail -->
				</div> <!-- end col -->
			</div><!--end row-->
		</div><!--end container fluid-->
	</section><!--end section-->
	<!-- Hero End -->

	<!-- javascript -->
	<script src="js/feather.min.js"></script>

	<script src="js/plugins.init.js"></script>
	<!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
	<script src="js/app.js"></script>
	<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>