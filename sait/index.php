<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title>Модуль 2024</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Масштабирование страницы для корректного отображения на разных устройствах -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> <!-- Стили бутстрап -->
	<link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" /> <!-- Применяемые к тегам css-стили -->
</head>

<body>
	<!-- Вступительный баннер -->
	<section class="bg-home d-flex align-items-center" style="background: url('images/index/bg.jpg') top no-repeat; background-size: cover">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="title-heading text-center">
						<h4 class="heading fw-bold text-white title-dark mb-3">Успеваемость студентов<br></h4>
						<h5 class="para-desc mx-auto text-light title-dark">Контролируй успеваемость в нашем колледже
						</h5>
						<?php session_start(); 
						if($_SESSION['auth'] == "")
						{ ?>
						<div class="mt-4 pt-2">
							<a href="auth.php" class="btn btn-light text-dark">Авторизация</a>
						</div>
						<div class="mt-4 pt-2">
							<a href="registr.php" class="btn btn-light text-dark">Регистрация</a>
						</div>
						<?php } else {?>
							<h5 class="para-desc mx-auto text-light title-dark">Дорогая - <?=$_SESSION['auth']?></h5>
							<div class="mt-4 pt-2">
							<a href="logout.php" class="btn btn-light text-dark">Выйти</a>
							</div>
							<?php }?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Конец вступительного баннера -->

	<!-- Блок "Почему мы?" -->
	<section class="section">
		<div class="container">
			<div class="row align-items-center" id="counter">
				<div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0" style="width: 100%;">
					<div class="ms-lg-4 doverie_grid">
						<div class="section-title">
							<h4 class="title mb-4">Почему именно мы?</h4>
							<p class="text-muted">Обсуждаем различные аспекты, такие как методы и формы работы по повышению успеваемости студентов, проблемы, 
								с которыми сталкиваются работающие студенты при поддержании академических успехов, анализ факторов, влияющих на мотивацию обучения студентов, 
								а также внешние факторы, влияющие на успеваемость студентов в вузах.
							</p>
						</div>
						<div class="section-title">
							<h4 class="title mb-4">Наши студенты</h4>
							<p class="text-muted">Вместе с нами Вы приуспеете в вашей учебе. Студенты контролируют свою успеваемость очень быстро и легко, без всяких трудностей.
								Вы замотивируйте себя на превосходную учебу, повысите свои знания и выпуститесть отличными специалистами. 
							</p>
						</div>
						<div class="section-title">
							<h4 class="title mb-4">Наши преподаватели</h4>
							<p class="text-muted">Преподаватели - это мощь и сила в обучающем процессе. Мы помогаем контролировать и анализировать успеаемость студентов. 
								С нами, их работа упрощается в разы. Тем самым, работа приности только удовольствие.
							</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Конец Блока "Почему мы?" -->
	<!-- Блок Слайдер -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<div class="section-title mb-4 pb-2">
						<h4 class="title mb-4">Ярославский градостроительный колледж</h4>
						<p class="text-muted para-desc mx-auto mb-0">
							
						</p>
						<div class="wrapper">
							<button class="prev-btn"><svg width="12" height="20" viewBox="0 0 12 20" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M10.275 1.375L11.25 2.31295L3.45 9.81647L11.25 17.6871L10.275 18.625L2.475 10.7544L1.5 9.81647L10.275 1.375Z"
										fill="black" fill-opacity="0.5" stroke="black" stroke-opacity="0.5" stroke-width="0.75" />
								</svg>
							</button>
							<div class="wrapper_slider">
								<div class="carousel" onload="sliderInit();">
									<div class="teachers_slide">
										<div class="teachers__card">
											<div class="card-img"><img src="images/index/sait1.jpg" alt=""></div>
											<div class="card-info">
												<div class="card-name">Выбирайте именно нас</div>
											</div>
										</div>
									</div>
									<div class="teachers_slide">
										<div class="teachers__card">
											<div class="card-img"><img src="images/index/SAI2.jpg" alt=""></div>
											<div class="card-info">
												<div class="card-name">Выбирайте именно нас</div>
											</div>
										</div>
									</div>
									<div class="teachers_slide">
										<div class="teachers__card">
											<div class="card-img"><img src="images/index/sai3.jpg" alt=""></div>
											<div class="card-info">
												<div class="card-name">Выбирайте именно нас</div>
											</div>
										</div>
									</div>
									<div class="teachers_slide">
										<div class="teachers__card">
											<div class="card-img"><img src="images/index/sai4.jpg" alt=""></div>
											<div class="card-info">
												<div class="card-name">Выбирайте именно нас</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<button class="next-btn"><svg width="12" height="20" viewBox="0 0 12 20" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M1.725 18.625L0.75 17.687L8.55 10.1835L0.75 2.31294L1.725 1.375L9.525 9.24557L10.5 10.1835L1.725 18.625Z"
										fill="black" fill-opacity="0.5" stroke="black" stroke-opacity="0.5" stroke-width="0.75" />
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Конец блока Слайдер -->
	<!-- Блок "Наши лучшие работники" -->
	<section class="section ">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title mb-4 pb-2">
						<h4 class="title mb-4">Наши лучшие студенты</h4>
						<!-- <p class="text-muted para-desc mx-auto mb-0">В нашей компании работают квалифицированные сотрудники.
							Доверьте свой проект настоящим профессионалам!</p> -->
					</div>
				</div><!--end col-->
			</div><!--end row-->

			<div class="row">
				<div class="col-lg-3 col-md-6 mt-4 pt-2">
					<div class="card team text-center bg-transparent border-0">
						<div class="card-body p-0">
							<div class="position-relative">
								<img src="images/people/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle" alt="">

							</div>
							<div class="content pt-3">
								<h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Владислав Красков</a>
								</h5>
								<small class="designation text-muted">ИС1-41</small>
							</div>
						</div>
					</div>
				</div><!--end col-->

				<div class="col-lg-3 col-md-6 mt-4 pt-2">
					<div class="card team text-center bg-transparent border-0">
						<div class="card-body p-0">
							<div class="position-relative">
								<img src="images/people/04.jpg" class="img-fluid avatar avatar-ex-large rounded-circle" alt="">

							</div>
							<div class="content pt-3">
								<h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Дмитрий Морозов</a></h5>
								<small class="designation text-muted">ИС1-41</small>
							</div>
						</div>
					</div>
				</div><!--end col-->

				<div class="col-lg-3 col-md-6 mt-4 pt-2">
					<div class="card team text-center bg-transparent border-0">
						<div class="card-body p-0">
							<div class="position-relative">
								<img src="images/people/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle" alt="">
							</div>
							<div class="content pt-3">
								<h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Евгений Борисов</a></h5>
								<small class="designation text-muted">ИС1-41</small>
							</div>
						</div>
					</div>
				</div><!--end col-->

				<div class="col-lg-3 col-md-6 mt-4 pt-2">
					<div class="card team text-center bg-transparent border-0">
						<div class="card-body p-0">
							<div class="position-relative">
								<img src="images/people/03.jpg" class="img-fluid avatar avatar-ex-large rounded-circle" alt="">

							</div>
							<div class="content pt-3">
								<h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ульяна Дымова</a></h5>
								<small class="designation text-muted">ИС1-41</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Конец блока "Наши лучшие работники" -->

	<!-- Футер -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer-py-60">
						<div class="row">
							<div class="col-lg-5 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
								<a href="#" class="logo-footer">
									<img src="images/logo-light.png" height="24" alt="">
								</a>
								<p class="mt-4">Контролируйте свою успеваемость вместе с нами и твоя работа станет намного легче!</p>
							</div>
						
							<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
								<h5 class="footer-head ">Контактные данные</h5>
								<ul class="list-unstyled footer-list mt-4">
									<li>
										<p href="javascript:void(0)" class="text-foot">+8 (485) 277-20-20</p>
									</li>
									<li>
										<p href="javascript:void(0)" class="text-foot">Мы работаем: с 8:00 до 20:00</p>
									</li>
									<li>
										<p href="javascript:void(0)" class="text-foot">E-mail: ulya.dymova.84@mail.ru</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-py-30 footer-bar">
			<div class="container text-center">
				<div class="row align-items-center">
					<div class="col-sm-6">
						<div class="text-sm-start">
							<p class="mb-0">
								©
								2024 Успеваемость студентов
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Возвращение наверх -->
	<a href="#" onclick="top()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
			class="fea icon-sm icons align-middle"></i></a>

	<!-- javascript -->
	<!-- Отображение иконок -->
	<script src="js/feather.min.js"></script>
	<!-- Main Js -->
	<script src="js/plugins.init.js"></script>
	<!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
	<script src="js/app.js"></script>
	<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>