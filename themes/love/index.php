<style>body > #container {padding: 0;}#nav-not-logged-in, footer#footer{display: none !important;visibility: hidden !important;}</style>
<div class="white_bg">
	<div class="main_header_nav">
		<div class="container">
		<nav role="navigation">
			<div class="nav-wrapper">
				<div class="left header_logo">
					<a id="logo-container" href="<?php echo $site_url;?>/" class="brand-logo"><img src="<?php echo $theme_url;?>assets/img/logo.svg" /></a>
				</div>
				<ul class="right not_usr_nav">
					<li><a href="<?php echo $site_url;?>/login" data-ajax="/login" class="btn btn-flat">Minha Conta</a></li>
					<?php if ($config->user_registration == 1) { ?>
						<li><a href="<?php echo $site_url;?>/register" data-ajax="/register" class="btn-flat btn white waves-effect">Registrar agora</a></li>
					<?php } ?>
				</ul>
			</div>
		</nav>
		</div>
	
		<!-- Top Hero  -->
		<div class="section header_bg">				
			<div class="container">
				<div class="home_pz_rel">
					<h1 class="header">
						<span><?php echo __( 'Encontre' );?></span>
						<?php echo __( 'casais hoje mesmo!' );?>
					</h1>
					<h5 class="header">Pessoas reais em busca de relacionamentos liberais com descrição e sigilo.</h5>
					<?php if( $config->show_user_on_homepage == '1'){
						$siteUsers = GetSiteUsers();
						if( !empty($siteUsers) ){
					?>
						<div class="xuser hide">
							<?php foreach ($siteUsers as $key => $user) { ?>
								<a href="<?php echo $site_url;?>/@<?php echo $user->username;?>" data-ajax="/@<?php echo $user->username;?>">
									<img src="<?php echo $user->avater->avater;?>" alt="<?php echo $user->full_name;?>" class="circle">
								</a>
							<?php } ?>
						</div>
					<?php }} ?>
					<div>
						<?php if ($config->user_registration == 1) { ?>
							<a href="<?php echo $site_url;?>/register" class="btn-large waves-effect waves-light btn_primary lighten-1 bold btn_round main-hdr-bttn"><?php echo __( 'Get Started' );?></a>
						<?php } ?>
						<a href="<?php echo $site_url;?>/about" data-ajax="/about" class="main-know-bttn"><?php echo __( 'Know More' );?></a>
					</div>

					<div class="imageHeader">
						<img src="themes/love/assets/img/sexy.jpg">
					</div>
					
					<div class="section dt_hdr_filters">
						<div class="row">
							<div class="input-field col">
								<select>
								<?php
									$all_gender = array();
									$gender = Dataset::load('gender');
									$iz = 0;
									if (isset($gender) && !empty($gender)) {
										foreach ($gender as $key => $val) {
											$_checked = '';
											if($iz === 1){
												$_checked = 'selected';
											}
											echo '<option value="' . $key . '" '.$_checked.'>' . $val . '</option>';
											$iz++;
										}
									}							
								?>
								</select>
								<label class="bold">Somos:</label>
							</div>
							<div class="input-field col">
								<select>
								<?php
									$all_gender = array();
									$gender = Dataset::load('gender');
									$ix = 0;
									if (isset($gender) && !empty($gender)) {
										foreach ($gender as $key => $val) {
											$_checked = '';
											if($ix === 0){
												$_checked = 'selected';
											}
											echo '<option value="' . $key . '" '.$_checked.'>' . $val . '</option>';
											$ix++;
										}
									}							
								?>
								</select>
								<label class="bold">Estamos procurando:</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col">
								<select>
								<?php for($i = 18 ; $i < 51 ; $i++ ){?>
									<option value="<?php echo $i;?>" <?php if( $i == 20){ echo 'selected';}?> ><?php echo $i;?></option>
								<?php }?>
								</select>
								<label class="bold">Entre idades:</label>
							</div>
							<div class="input-field col">
								<select>
								<?php for($i = 51 ; $i < 99 ; $i++ ){?>
									<option value="<?php echo $i;?>" <?php if( $i == 55){ echo 'selected';}?>><?php echo $i;?></option>
								<?php }?>
								</select>
								<label class="bold">E</label>
							</div>
						</div>
						<div>
							<a href="<?php echo $site_url;?>/login" class="btn btn-large waves-effect waves-light bold btn_primary btn_round">Encontrar casais</a>
						</div>
					</div>
				</div>
			</div>
			<svg class="header_svg_circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1454" height="1062" viewBox="0 0 1454 1062"> <defs> <clipPath id="clip-path"> <rect id="Rectangle_7" data-name="Rectangle 7" width="1454" height="1062" transform="translate(466)" fill="#fff"/> </clipPath> </defs> <g id="Mask_Group_2" data-name="Mask Group 2" transform="translate(-466)" clip-path="url(#clip-path)"> <g id="Circle_Effect_Banner" data-name="Circle Effect Banner"> <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(922 103)" fill="none" stroke="#FD4949" stroke-width="1" opacity="0.85"> <circle cx="290" cy="290" r="290" stroke="none"/> <circle cx="290" cy="290" r="289.5" fill="none"/> </g> <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(819)" fill="none" stroke="#FD4949" stroke-width="1" opacity="0.65"> <circle cx="393" cy="393" r="393" stroke="none"/> <circle cx="393" cy="393" r="392.5" fill="none"/> </g> <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(708 -111)" fill="none" stroke="#FD4949" stroke-width="1" opacity="0.45"> <circle cx="504" cy="504" r="504" stroke="none"/> <circle cx="504" cy="504" r="503.5" fill="none"/> </g> <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(579 -240)" fill="none" stroke="#FD4949" stroke-width="1" opacity="0.25"> <circle cx="633" cy="633" r="633" stroke="none"/> <circle cx="633" cy="633" r="632.5" fill="none"/> </g> <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(1007 188)" fill="none" stroke="#FD4949" stroke-width="1"> <circle cx="205" cy="205" r="205" stroke="none"/> <circle cx="205" cy="205" r="204.5" fill="none"/> </g> </g> </g> </svg>
		</div>
		<!-- End Top Hero  -->
	</div>
	
	<div class="container-fluid dt_header_short_desc">
		<svg class="first" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="708" height="1132" viewBox="0 0 708 1132"> <defs> <clipPath id="clip-pathhhh"> <rect id="Rectangle_6" data-name="Rectangle 6" width="708" height="1132" transform="translate(0 687)" fill="#fff"/> </clipPath> </defs> <g id="Mask_Group_1" data-name="Mask Group 1" transform="translate(0 -687)" clip-path="url(#clip-pathhhh)" style="mix-blend-mode: multiply;isolation: isolate"> <g id="Circle_Effect_Banner" data-name="Circle Effect Banner" transform="translate(-1231 778)"> <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(922 103)" fill="none" stroke="#FD4949" stroke-width="1" opacity="0.85"> <circle cx="290" cy="290" r="290" stroke="none"/> <circle cx="290" cy="290" r="289.5" fill="none"/> </g> <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(819)" fill="none" stroke="#FD4949" stroke-width="1" opacity="0.65"> <circle cx="393" cy="393" r="393" stroke="none"/> <circle cx="393" cy="393" r="392.5" fill="none"/> </g> <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(708 -111)" fill="none" stroke="#FD4949" stroke-width="1" opacity="0.45"> <circle cx="504" cy="504" r="504" stroke="none"/> <circle cx="504" cy="504" r="503.5" fill="none"/> </g> <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(579 -240)" fill="none" stroke="#FD4949" stroke-width="1" opacity="0.25"> <circle cx="633" cy="633" r="633" stroke="none"/> <circle cx="633" cy="633" r="632.5" fill="none"/> </g> <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(1007 188)" fill="none" stroke="#FD4949" stroke-width="1"> <circle cx="205" cy="205" r="205" stroke="none"/> <circle cx="205" cy="205" r="204.5" fill="none"/> </g> </g> </g> </svg>
	</div>
	
	<div class="dt_header_how_works">
		<div class="container">
		<div class="row">
			<div class="col l6">
				<div class="dt_header_how_works_innr">
					<p>Como funciona?</p>
					<h2>Faça novas amizades com o OnlyCouple</h2>
				</div>
			</div>
			<div class="col l6">
				<div class="dt_header_how_works_side">
					<div class="dt_header_how_works_side_innr">
						<div class="list">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="62.563" height="73.52" viewBox="0 0 62.563 73.52"> <path id="Path_6858" data-name="Path 6858" d="M3743,14326.979l.624.348.589-.348a7.931,7.931,0,0,1,2.533-1.734,6.85,6.85,0,0,1,6,0,7.931,7.931,0,0,1,2.533,1.734,6.088,6.088,0,0,1,1.665,2.432,8.134,8.134,0,0,1,.624,2.773,8.35,8.35,0,0,1-.624,3.117,6.081,6.081,0,0,1-1.665,2.43l-11.653,11.791-11.653-11.791a7.761,7.761,0,0,1-2.289-5.547,7.589,7.589,0,0,1,2.289-5.205,7.481,7.481,0,0,1,11.029,0Zm-20.253-5.895v6.934a19.877,19.877,0,0,0-14.705,6.244,20.216,20.216,0,0,0-6.1,14.564H3695a27.607,27.607,0,0,1,26.877-27.742Zm0-45.082a20.822,20.822,0,0,1,20.809,20.809,21.294,21.294,0,0,1-5.827,14.564,21.52,21.52,0,0,1-14.184,6.238h-.8a20.82,20.82,0,0,1-20.808-20.8,20.606,20.606,0,0,1,20.01-20.809Zm0,6.934a13.872,13.872,0,1,0,13.871,13.875A13.892,13.892,0,0,0,3722.744,14282.936Z" transform="translate(-3694.999 -14276.002)" fill="#fff"/> </svg>
							</div>
							<div>
								<h5>Desperte</h5>
								<p>Em apenas 5 minutos, inicie sua jornada para descobrir novos casais e experiências emocionantes.</p>
							</div>
						</div>
						<div class="list">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="67.503" height="69.611" viewBox="0 0 67.503 69.611"> <path id="Union_2" data-name="Union 2" d="M14376.754,69.611V67.925a8.634,8.634,0,0,0-2.466-6.079,8.739,8.739,0,0,0-11.948,0,8.651,8.651,0,0,0-2.462,6.079v1.686h-6.75V67.925a14.515,14.515,0,0,1,1.148-5.743,13.574,13.574,0,0,1,3.306-5.057,22.555,22.555,0,0,1,4.928-3.379,17.182,17.182,0,0,1,11.612,0,22.555,22.555,0,0,1,4.928,3.379,13.576,13.576,0,0,1,3.307,5.057,14.583,14.583,0,0,1,1.147,5.743v1.686Zm-33.751,0V56.11a10.126,10.126,0,0,0-20.251,0v13.5H14316V56.11a16.606,16.606,0,0,1,4.928-11.811,16.618,16.618,0,0,1,23.9,0,16.622,16.622,0,0,1,4.928,11.811v13.5Zm15.76-24.3a12.784,12.784,0,0,1-3.949-9.45,12.779,12.779,0,0,1,3.949-9.45,13.288,13.288,0,0,1,19.1,0,12.767,12.767,0,0,1,3.948,9.45,12.772,12.772,0,0,1-3.948,9.45,13.288,13.288,0,0,1-19.1,0Zm4.794-14.179a6.6,6.6,0,0,0,0,9.454,6.605,6.605,0,0,0,9.519,0,6.611,6.611,0,0,0,0-9.454,6.605,6.605,0,0,0-9.519,0Zm-36.484,3.714a22.734,22.734,0,0,1-4.931-3.372,13.682,13.682,0,0,1-3.307-5.065,14.919,14.919,0,0,1,0-11.476,13.652,13.652,0,0,1,3.307-5.065,22.607,22.607,0,0,1,4.931-3.372,16.709,16.709,0,0,1,5.8-1.018,15.764,15.764,0,0,1,10.732,4.389,15.326,15.326,0,0,1,0,21.6,15.778,15.778,0,0,1-10.732,4.386A16.706,16.706,0,0,1,14327.072,34.845ZM14326.9,14.6a8.713,8.713,0,0,0,0,12.147,8.739,8.739,0,0,0,11.948,0,8.722,8.722,0,0,0,0-12.147,8.72,8.72,0,0,0-11.948,0Zm32.855-.43L14354.2,17l1.058-6.043-4.494-4.343,6.212-.946L14359.759,0l2.776,5.667,6.194.946-4.477,4.343,1.058,6.043Z" transform="translate(-14316.001)" fill="#fff"/> </svg>
							</div>
							<div>
								<h5>Compartilhe</h5>
								<p>Conecte-se com casais de todos os cantos do Brasil e mergulhe em encontros enriquecedores e divertidos.</p>
							</div>
						</div>
						<div class="list">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="67.503" height="80.746" viewBox="0 0 67.503 80.746"> <path id="Union_3" data-name="Union 3" d="M14377.075,81.711a19.559,19.559,0,0,0-3.086-10.606,21.42,21.42,0,0,0-8.3-7.072l2.639-5.786a26.123,26.123,0,0,1,15.172,23.464Zm-16.07,0a18.736,18.736,0,0,0-5.66-13.5,18.952,18.952,0,0,0-27.258,0,18.744,18.744,0,0,0-5.656,13.5H14316a26.158,26.158,0,0,1,7.52-18.32,26.088,26.088,0,0,1,36.391,0,26.161,26.161,0,0,1,7.519,18.32Zm0-32.145a11.744,11.744,0,0,0,6.3-3.213,10.949,10.949,0,0,0,3.213-6.429,10.627,10.627,0,0,0-1.123-6.75,10.215,10.215,0,0,0-5.046-4.819l1.8-6.429a17.424,17.424,0,0,1,7.941,6.429,17.87,17.87,0,0,1,2.989,9.963,17.307,17.307,0,0,1-4.628,11.894A17.555,17.555,0,0,1,14361,56ZM14322.431,33.5a19.287,19.287,0,1,1,19.287,19.287A19.3,19.3,0,0,1,14322.431,33.5Zm6.429,0a12.858,12.858,0,1,0,12.858-12.858A12.872,12.872,0,0,0,14328.859,33.5Zm24.179-21.2a5.345,5.345,0,0,1-2.281-3.455,5.234,5.234,0,0,1,.866-3.83,5.164,5.164,0,0,1,7.472-1.451l.47.152.35-.314a5.539,5.539,0,0,1,1.487-1.509,6.247,6.247,0,0,1,1.957-.863,6.288,6.288,0,0,1,2.107.072,5.528,5.528,0,0,1,1.946.845,4.182,4.182,0,0,1,1.447,1.429,5.66,5.66,0,0,1,.791,1.794,5.847,5.847,0,0,1-.015,2.195,4.187,4.187,0,0,1-.809,1.866l-6.343,9.523Z" transform="translate(-14316.001 -0.965)" fill="#fff"/> </svg>
							</div>
							<div>
								<h5>Interaja</h5>
								<p>Uma plataforma exclusiva para interagir e conectar-se com casais vibrantes em todo o Brasil.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1696" height="1487" viewBox="0 0 1696 1487"> <defs> <linearGradient id="linear-gradienttt" x1="1.346" y1="0.166" x2="-0.977" y2="0.635" gradientUnits="objectBoundingBox"> <stop offset="0" stop-color="#FD4949"/> <stop offset="1" stop-color="#66215f"/> </linearGradient> </defs> <g id="Group_8769" data-name="Group 8769" transform="translate(266.229 -1562)"> <ellipse id="Ellipse_31" data-name="Ellipse 31" cx="251.5" cy="251" rx="251.5" ry="251" transform="translate(-116.229 1903)" opacity="0.14" fill="url(#linear-gradienttt)"/> <circle id="Ellipse_32" data-name="Ellipse 32" cx="211" cy="211" r="211" transform="translate(175.771 2202)" fill="#fccbf7" opacity="0.22"/> <circle id="Ellipse_33" data-name="Ellipse 33" cx="264" cy="264" r="264" transform="translate(256.771 1712)" fill="#b984ff" opacity="0.03"/> <ellipse id="Ellipse_34" data-name="Ellipse 34" cx="160.5" cy="160" rx="160.5" ry="160" transform="translate(363.771 2154)" fill="#cc424b" opacity="0.05"/> <ellipse id="Ellipse_36" data-name="Ellipse 36" cx="201" cy="200.5" rx="201" ry="200.5" transform="translate(557.771 2498)" fill="#9f42cc" opacity="0.05"/> <ellipse id="Ellipse_35" data-name="Ellipse 35" cx="302" cy="302.5" rx="302" ry="302.5" transform="translate(675.771 1893)" fill="#935eff" opacity="0.09"/> </g> </svg>
	</div>

	
	<div class="dt_header_how_works flip" style="margin-top:120px; ">
		<div class="container">
			<div class="row">
				<div class="col l6">
					<div class="dt_header_how_works_side bg flip">
						<div class="dt_header_how_works_side_innr flip">
							<div class="list">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" width="60.24" height="49.988" viewBox="0 0 60.24 49.988"><path id="Path_6466" data-name="Path 6466" d="M3604.61,6235.084l.48.48a16.011,16.011,0,0,1,27.3,10.33,14.777,14.777,0,0,0-11,1.44l-.294.16-.294-.16a14.679,14.679,0,0,0-17.641,23.139l6.165,6.139-4.244,4.245-22.632-22.633a16.021,16.021,0,0,1,22.152-23.141Zm30.639,18.417a8.843,8.843,0,0,1,2.028,3.015,9.23,9.23,0,0,1,0,7.153,8.971,8.971,0,0,1-2.028,3.042l-14.146,14.146-14.146-14.146a9.353,9.353,0,0,1-2.749-6.62,9.2,9.2,0,0,1,.721-3.576,9.472,9.472,0,0,1,5.044-5.045,9.23,9.23,0,0,1,3.577-.72,9.345,9.345,0,0,1,6.619,2.75l.934.934.934-.934a8.936,8.936,0,0,1,3.042-2.03,9.136,9.136,0,0,1,3.576-.72,9.23,9.23,0,0,1,3.577.72,8.834,8.834,0,0,1,3.016,2.03Z" transform="translate(-3577.76 -6230.87)" fill="#fff"/></svg>

								</div>
								<div>
									<h5>Encontre casais</h5>
									<p>Com base em sua localização, tenha encontros incríveis, a maior rede para casais do Brasil.</p>
								</div>
							</div>
							<div class="list">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" width="52.046" height="63.611" viewBox="0 0 52.046 63.611"> <path id="Path_5450" data-name="Path 5450" d="M3328.023,10697a25.7,25.7,0,0,1,18.39,7.516,26.249,26.249,0,0,1,7.633,18.507v11.565a24.973,24.973,0,0,1-2.92,11.854,27.866,27.866,0,0,1-8.1,9.544,55.334,55.334,0,0,0,2.313-13.88l.029-1.734v-5.783h-5.783v6.65a46.037,46.037,0,0,1-4.135,18.216,21.046,21.046,0,0,1-10.352.869,36.75,36.75,0,0,0,5.783-18.793l.029-1.159v-20.241h-5.783v21.108a32.372,32.372,0,0,1-6.043,17.927,34.459,34.459,0,0,1-7.6-4.336,23.9,23.9,0,0,0,4.944-13.591l.029-.867v-17.349l.029-.58a10.412,10.412,0,0,1,1.243-4.625l.318-.578-4.163-4.336a18.145,18.145,0,0,0-3.181,9.252l-.029.867v17.927a18.062,18.062,0,0,1-3.239,9.542,26.058,26.058,0,0,1-5.436-15.9v-11.565a26.249,26.249,0,0,1,7.633-18.507A25.706,25.706,0,0,1,3328.023,10697Zm0,8.675a17.5,17.5,0,0,0-9.4,2.891l-.666.289,4.192,4.336a8.6,8.6,0,0,1,5.176-1.734h1.272a12.456,12.456,0,0,1,7.6,3.471,11.466,11.466,0,0,1,3.383,7.516v6.361h5.783v-5.781a16.85,16.85,0,0,0-5.089-12.145A16.563,16.563,0,0,0,3328.023,10705.675Z" transform="translate(-3302 -10697)" fill="#fff"/> </svg>
								</div>
								<div>
									<h5>Seguro</h5>
									<p>Seus dados estão seguros, não compartilhamos dados com terceiros.</p>
								</div>
							</div>
							<div class="list">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" width="48.1" height="58.788" viewBox="0 0 48.1 58.788"> <path id="Path_6658" data-name="Path 6658" d="M3553.05,7447l21.965,4.89a2.675,2.675,0,0,1,2.084,2.592v26.694a15.892,15.892,0,0,1-1.9,7.563,16.208,16.208,0,0,1-5.238,5.771l-16.915,11.278-16.916-11.278a16.209,16.209,0,0,1-5.237-5.771,15.88,15.88,0,0,1-1.9-7.563v-26.694a2.674,2.674,0,0,1,2.084-2.592Zm0,16.033a5.505,5.505,0,0,0-3.26,1.1,5.341,5.341,0,0,0-1.9,2.86,5.259,5.259,0,0,0,.214,3.446,5.445,5.445,0,0,0,2.272,2.566v11.411h5.344V7473a5.456,5.456,0,0,0,2.271-2.566,5.262,5.262,0,0,0,.213-3.446,5.293,5.293,0,0,0-5.157-3.956Z" transform="translate(-3529 -7447)" fill="#fff"/> </svg>
								</div>
								<div>
									<h5>Privacidade</h5>
									<p>Tenha controle total sobre suas informações pessoais que você compartilha.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l6">
					<div class="dt_header_how_works_innr flip">
						<h2>Por que somos a melhor plataforma?</h2>
						<p class="desc">O OnlyCouple é feito exclusivamente para casais, solteiras e solteiros marcarem encontros com pessoas reais sem enrolação, sem tabus, com sigilo e segurança.</p>
					</div>
				</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1651" height="1521" viewBox="0 0 1651 1521"> <defs> <linearGradient id="linear-gradient" x1="-0.346" y1="0.166" x2="1.977" y2="0.635" gradientUnits="objectBoundingBox"> <stop offset="0" stop-color="#FD4949"/> <stop offset="1" stop-color="#66215f"/> </linearGradient> </defs> <g id="BG_Colour" data-name="BG Colour" transform="translate(105 150)"> <ellipse id="Ellipse_31" data-name="Ellipse 31" cx="251.5" cy="251" rx="251.5" ry="251" transform="translate(893 191)" opacity="0.01" fill="url(#linear-gradient)"/> <circle id="Ellipse_32" data-name="Ellipse 32" cx="240.5" cy="240.5" r="240.5" transform="translate(705 629)" fill="#fccbf7" opacity="0.1"/> <circle id="Ellipse_33" data-name="Ellipse 33" cx="264" cy="264" r="264" transform="translate(495)" fill="#b984ff" opacity="0.03"/> <ellipse id="Ellipse_34" data-name="Ellipse 34" cx="160.5" cy="160" rx="160.5" ry="160" transform="translate(595 442)" fill="#cc424b" opacity="0.05"/> <ellipse id="Ellipse_36" data-name="Ellipse 36" cx="218" cy="217.5" rx="218" ry="217.5" transform="translate(286 786)" fill="#9f42cc" opacity="0.1"/> <ellipse id="Ellipse_35" data-name="Ellipse 35" cx="302" cy="302.5" rx="302" ry="302.5" transform="translate(45 264)" fill="#935eff" opacity="0.09"/> </g> </svg>
	</div>

	<!-- Get Started  -->
	<div class="container" style="display:block;">
		<div class="dt_get_start">
			<div class="center-align">
				<p>Em qualquer hora, em qualquer lugar!</p>
				<h4>Conecte-se com o casal perfeito agora mesmo no OnlyCouple.</h4>
				<?php if ($config->user_registration == 1) { ?>
					<a href="<?php echo $site_url;?>/register" class="waves-effect waves-light bold btn_glossy">Quero conhecer novos casais</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- End Get Started  -->
	
	<!-- End Footer  -->
	<div class="dt_index_foot" style="display:block;">
		<div class="container">
			<div class="dt_index_footinnr">
				<div class="top">
					<div class="row">
						<div class="col m6">
							<h5>Links</h5>
							<div class="row">
								<div class="col s6">
									<div><a href="<?php echo $site_url;?>/about" data-ajax="/about"><?php echo __( 'About Us' );?></a></div>
									<div><a href="<?php echo $site_url;?>/terms" data-ajax="/terms"><?php echo __( 'Terms and Conditions' );?></a></div>
									<div><a href="<?php echo $site_url;?>/privacy" data-ajax="/privacy"><?php echo __( 'Privacy Policy' );?></a></div>
									<div><a href="<?php echo $site_url;?>/contact" data-ajax="/contact"><?php echo __( 'Contact' );?></a></div>
								</div>
								<div class="col s6">
									<div><a href="<?php echo $site_url;?>/faqs" data-ajax="/faqs">Perguntas Frequentes</a></div>
									<div><a href="<?php echo $site_url;?>/refund" data-ajax="/refund"><?php echo __( 'refund' );?></a></div>
									<div><a href="<?php echo $site_url;?>/blog" data-ajax="/blog"><?php echo __( 'Blog' );?></a></div>
								</div>
							</div>
						</div>
						<div class="col m5">
							<h6>Inscreva-se para receber nossas novidades e eventos!</h6>
							<div class="subscribe_alert"></div>
							<form class="subscribe">
								<div>
									<input class="browser-default" type="text" placeholder="Digite seu melhor email" id="subscribe_email" />
								</div>
								<button type="button" class="subs_btn" onclick="NewsSubscribe()">inscreva-se</button>
							</form>
							<br>
							<?php if($config->social_media_links == 'on'){ ?>
							<h6>Siga-nos nas redes sociais</h6>
							<?php if(!empty($config->facebook_url)){ ?>
								<a href="<?php echo $config->facebook_url;?>" target="_blank" class="social_btn">
									<svg xmlns="http://www.w3.org/2000/svg" width="9.436" height="17.973" viewBox="0 0 9.436 17.973"><path id="Path_6060" data-name="Path 6060" d="M3655.291,12537.334h2.247l.9-3.594h-3.145v-1.8c0-.9,0-1.8,1.8-1.8h1.348v-3.056c-.3,0-1.4-.09-2.57-.09a3.916,3.916,0,0,0-4.169,4.224v2.517H3649v3.594h2.7v7.639h3.594Z" transform="translate(-3649 -12527)" fill="currentColor"/></svg>
								</a>&nbsp;&nbsp;
							<?php }?>
							<?php if(!empty($config->twitter_url)){ ?>
								<a href="<?php echo $config->twitter_url;?>" target="_blank" class="social_btn">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg>
								</a>&nbsp;&nbsp;
							<?php }?>
							<?php if(!empty($config->google_url)){ ?>
								<a href="<?php echo $config->google_url;?>" target="_blank" class="social_btn">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21.35,11.1H12.18V13.83H18.69C18.36,17.64 15.19,19.27 12.19,19.27C8.36,19.27 5,16.25 5,12C5,7.9 8.2,4.73 12.2,4.73C15.29,4.73 17.1,6.7 17.1,6.7L19,4.72C19,4.72 16.56,2 12.1,2C6.42,2 2.03,6.8 2.03,12C2.03,17.05 6.16,22 12.25,22C17.6,22 21.5,18.33 21.5,12.91C21.5,11.76 21.35,11.1 21.35,11.1V11.1Z" /></svg>
								</a>
							<?php }?>
						<?php }?>
						</div>
						
					</div>
				</div>
				<div class="bottom">
					<div class="row">
						<div class="col m12">
							<p class="copyright">© Todos os direitos reservados a  OnlyCouple.</p>
							<hr>
							<small>O OnlyCouple é um espaço destinado a conectar casais interessados em encontros e experiências compartilhadas. Não nos responsabilizamos por quaisquer interações, acordos ou conteúdos fornecidos pelos usuários cadastrados. Os perfis exibidos são de responsabilidade dos próprios usuários. Recomendamos que cada pessoa utilize o serviço com cautela, verificando cuidadosamente as informações e estabelecendo limites e expectativas claras antes de qualquer encontro. Em caso de dúvidas ou questões, estamos disponíveis para auxiliar. Nossa prioridade é promover um ambiente seguro e respeitoso para todos os membros do site.</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer  -->
</div>

<div id="modal_langs_main" class="modal modal-sm" tabindex="0">
	<div class="modal-content">
		<h6 class="bold"><?php echo __( 'Language' );?></h6>
		<ul class="browser-default dt_lang_modal">
			<?php
			$language = Dataset::load('language');
			if (isset($language) && !empty($language)) {
				foreach ($language as $key => $val) {
					if ($config->{$key} == 1) {
					?>
				<li <?php if( GetActiveLang() == $key ){ echo 'class="active"';}?>><a href="?language=<?php echo $key;?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" /></svg> <?php echo $val;?></a></li>
			<?php } } } ?>
		</ul>
	</div>
</div>

<script>
function NewsSubscribe() {
	$.post(window.ajax + 'useractions/subscribe', {email: $('#subscribe_email').val()}, function(data, textStatus, xhr) {
  		$('.subscribe_alert').html('<div class="alert alert-success">'+data.message+'</div>');
    	setTimeout(() => {
    		$('.subscribe_alert').html('');
    	},2000);
    }).fail(function (data) {
    	$('.subscribe_alert').html('<div class="alert alert-danger">'+data.responseJSON.message+'</div>');
    	setTimeout(() => {
    		$('.subscribe_alert').html('');
    	},2000);
    });
}
const swiper = new Swiper('.swiper', {
	slidesPerView: 3,
	grid: {
		rows: 2,
		fill: "row"
	},
	spaceBetween: 40,
	
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 1,
			spaceBetween: 10
		},
		// when window width is >= 480px
		800: {
			slidesPerView: 2,
			spaceBetween: 20,
			grid: {
				rows: 3,
				fill: "row"
			},
		},
		// when window width is >= 640px
		1300: {
			slidesPerView: 3,
		}
	}
});
</script>