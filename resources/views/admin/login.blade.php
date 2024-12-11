<!DOCTYPE html>
<html lang="es">
	<!--begin::Head-->
	<head>
		<title>Login SUBCAFAE - DIRIS Lima Norte</title>
		<meta charset="utf-8" />
		<meta name="description" content="Sistema de votaciones de DIRIS LN" />
		<meta name="keywords" content="votaciones, diris ln, 2024" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Login SUBCAFAE - DIRIS Lima Norte" />
		<meta property="og:url" content="https://votaciones.dirisln.gob.pe:2024/" />
		<meta property="og:site_name" content="Keenthemes | Oswald HTML Free" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="canonical" href="https://votaciones.dirisln.gob.pe:2024/" />
		<link rel="shortcut icon" href="img/icono.png" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
        <style>
            .form-wrapper {
                display: flex; /* Flexbox para colocar el formulario y el contenedor de imágenes en línea */
                align-items: flex-start;
                gap: 20px; /* Espaciado entre el formulario y las imágenes */
            }

            form {
                flex: 1; /* El formulario ocupa el espacio necesario */
            }


            .form-group input {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                box-sizing: border-box;
            }
            #image-container {
                width: 400px; /* Tamaño fijo del contenedor de imágenes */
                text-align: center;
            }

            #image-container img {
                width: 100%;
                height: auto;
                max-height: 300px;
                object-fit: cover;
                border: 2px solid #ccc;
                border-radius: 8px;
                display: none; /* Oculta la imagen inicialmente */
            }
            .imagen-referencia{
                position: absolute;
                top: 50%;
                left: 43%;
                margin-top: -125px;
                margin-left: -140px;
                width: 300px !important;
                height: 245px !important;
                background-color: white;
            }
            @media (max-width: 412px) {
                .imagen-referencia {
                    position: relative !important;
                    top: auto;
                    left: auto;
                    margin-top: 0px;
                    margin-left: 0px;
                }
            }
            @media (max-width: 1166px) {
                .imagen-referencia {
                    position: relative !important;
                    top: auto;
                    left: auto;
                    margin-top: 0px;
                    margin-left: 0px;
                }
            }

        </style>
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<!--begin::Header-->
						<div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
							<a href="../dist/index.html" class="py-2 py-lg-20">
                                <img alt="Logo" src="img/logo.png" class=" h-40px h-lg-50px" width="350px"/>
							</a>
							<h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">Votaciones SUB CAFAE</h1>
							<p class="d-none d-lg-block fw-semibold fs-2 text-white">Plataforma virtual para el proceso electoral</p>
						</div>
						<!--end::Header-->
						<!--begin::Illustration-->
						<div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100x min-h-lg-550px" style="background-image: url(assets/media/illustrations/sketchy-1/wallpaper.png)"></div>
						<!--end::Illustration-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST"  action="{{ route('login') }}" >
                                @csrf
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-dark mb-3">Login</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-400 fw-semibold fs-4">Aún no has realizado tu voto?, <br>ingresa los siguiente datos:
									</div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label fw-bold text-dark fs-6">Numero de DNI / DNIe / CE</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="ingrese su número de DNI ó DNIe ó CE" name="dni" id="dni" autocomplete="off" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
								<!--begin::Label-->
									<label class="form-label fw-bold text-dark fs-6">Código de Verificación del DNI</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="ingrese el Código de verificación" name="codigo_verificador" id="codigo_verificador" autocomplete="off"  />
									<!--end::Input-->
								</div>
								<div class="fv-row mb-10">
								<!--begin::Label-->
									<label class="form-label fw-bold text-dark fs-6">Fecha de Emision del DNI</label>
									<input class="form-control form-control-lg form-control-solid" type="date" placeholder="ingrese la Fecha de Emisión de su DNI" name="fecha_emision" id="fecha_emision" autocomplete="off"  />
								</div>
								<div class="text-center">
									<!--begin::Submit button-->
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                        <span class="indicator-label" id="btn-text">Ingresar</span>
                                        <span class="indicator-progress" id="textV">Validando...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2" id="load"></span></span>
                                    </button>
                                    <!--end::Submit button-->
									<!--begin::Separator-->
									<div class="text-center text-muted text-uppercase fw-bold mb-5">Ver</div>
									<!--end::Separator-->

									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="assets/media/svg/brand-logos/webpack-icon.svg" class="h-20px me-3" />Manual</a>
									<!--end::Google link-->
									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="assets/media/svg/brand-logos/youtube-play.svg" class="h-20px me-3" />Video</a>
									<!--end::Google link-->
								</div>
                                <div id="image-container" class="imagen-referencia">
                                    <img id="dynamic-image" src="" alt="Imagen dinámica">
                                </div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->

						</div>
						<!--end::Wrapper-->
					</div>

					<!--end::Content-->
					<!--begin::Footer-->
					<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
						<!--begin::Links-->
						<div class="d-flex flex-center fw-semibold fs-6">
							<a href="#" class="text-muted text-hover-primary px-2" target="_blank">Soporte</a>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->

			</div>

			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
        <script>
            var urlLogin ="{{ route('login') }}";
            // Array de URLs de imágenes
            const images = [
                "img/1.jpeg",
                "img/2.jpeg",
                "img/3.jpeg"
            ];

            const inputFields = document.querySelectorAll('.form-control');
            const dynamicImage = document.getElementById('dynamic-image');

            inputFields.forEach((input, index) => {
                input.addEventListener('focus', () => {
                    // Muestra la imagen asociada al campo seleccionado
                    dynamicImage.src = images[index % images.length];
                    dynamicImage.style.display = 'block';
                });

                input.addEventListener('blur', () => {
                    // Oculta la imagen cuando el campo pierde el foco
                    dynamicImage.style.display = 'none';
                });
            });
        </script>

		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
        <!--<script src="assets/js/custom/authentication/sign-in/general.js"></script>-->
        <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
