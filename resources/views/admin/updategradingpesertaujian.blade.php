<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Form Update Grading Peserta Ujian</title>

		<meta name="description" content="and Validation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/select2.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/html5shiv.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/respond.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Aplikasi USM
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="{{ env('TEMPLATE_URL') }}/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="/do_logout">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>


				<ul class="nav nav-list">
					<li class="">
						<a href="/admin/view_home">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Home
							</span>
						</a>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Manajemen Soal
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Input Soal
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="/admin/view_inputsoalmultiplechoice">
											<i class="menu-icon fa fa-caret-right"></i>
											Input Soal Multiple Choice
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="/admin/view_listsoal">
									<i class="menu-icon fa fa-caret-right"></i>
									List Soal
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Manajemen Ujian
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="/admin/view_inputujian">
									<i class="menu-icon fa fa-caret-right"></i>
									Input Ujian
								</a>
								<b class="arrow"></b>
							</li>
							<li class="active">
								<a href="/admin/view_listujian">
									<i class="menu-icon fa fa-caret-right"></i>
									List Ujian
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Manajemen User
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="/admin/view_inputuser">
									<i class="menu-icon fa fa-caret-right"></i>
									Input User
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="/admin/view_listuser">
									<i class="menu-icon fa fa-caret-right"></i>
									List User
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">
								Manajemen Sistem
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="/admin/view_updatesettingtheme">
									<i class="menu-icon fa fa-caret-right"></i>
									Setting Theme
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="/do_logout">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Logout
							</span>
						</a>
					</li>
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li class="active">Form Update Grading Peserta Ujian</li>
						</ul><!-- /.breadcrumb -->


						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<!-- #section:settings.skins -->
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<!-- /section:settings.skins -->

									<!-- #section:settings.navbar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<!-- /section:settings.navbar -->

									<!-- #section:settings.sidebar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<!-- /section:settings.sidebar -->

									<!-- #section:settings.breadcrumbs -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<!-- /section:settings.breadcrumbs -->

									<!-- #section:settings.rtl -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<!-- /section:settings.rtl -->

									<!-- #section:settings.container -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>

									<!-- /section:settings.container -->
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<!-- #section:basics/sidebar.options -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>

									<!-- /section:basics/sidebar.options -->
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Form Update Grading Peserta Ujian
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">Deskripsi Ujian & Peserta</h4>
									</div>
									<div class="widget-body">
										<div class="widget-main">
											<!-- #section:plugins/fuelux.spinner -->
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Ujian </div>
													<div class="profile-info-value">
														Ujian 1
													</div>
												</div>
											</div>
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Informasi Ujian </div>
													<div class="profile-info-value">
														Informasi 1
													</div>
												</div>
											</div>
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Nama Peserta </div>
													<div class="profile-info-value">
														Peserta 1
													</div>
												</div>
											</div>
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Tanggal / Jam </div>
													<div class="profile-info-value">
														Tanggal 1
													</div>
												</div>
											</div>
											<!-- /section:plugins/fuelux.spinner -->
										</div>
									</div>
								</div>
								<br>
								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">Rincian Jawaban Peserta</h4>
									</div>
									<div class="widget-body">
										<div class="widget-toolbox" id="widget_toolbox">
											<label class="btn btn-sm btn-primary btn-white btn-round">1</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">2</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">3</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">4</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">5</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">6</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">7</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">8</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">9</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">10</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">11</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">12</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">13</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">14</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">15</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">16</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">17</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">18</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">19</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">20</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">21</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">22</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">23</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">24</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">25</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">26</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">27</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">28</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">29</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">30</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">31</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">32</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">33</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">34</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">35</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">36</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">37</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">38</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">39</label>
											<label class="btn btn-sm btn-primary btn-white btn-round">40</label>
										</div>
										<div class="widget-main">
											<!-- #section:plugins/fuelux.wizard -->
											<div id="fuelux-wizard-container">
												<!-- #section:plugins/fuelux.wizard.container -->
												<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<div class="lighter block green">Enter the following information</div>
														<div class="radio">
															<label>
																<input id="radio_pilihan1" type="radio" class="ace">
																<span class="lbl"> Pilihan 1</span>
															</label>
														</div>
														<div class="radio">
															<label>
																<input id="radio_pilihan2" type="radio" class="ace">
																<span class="lbl"> Pilihan 2</span>
															</label>
														</div>
														<div class="radio">
															<label>
																<input id="radio_pilihan3" type="radio" class="ace">
																<span class="lbl"> Pilihan 3</span>
															</label>
														</div>
														<div class="radio">
															<label>
																<input id="radio_pilihan4" type="radio" class="ace">
																<span class="lbl"> Pilihan 4</span>
															</label>
														</div>
														<div class="radio">
															<label>
																<input id="radio_pilihan5" type="radio" class="ace">
																<span class="lbl"> Pilihan 5</span>
															</label>
														</div>
													</div>
												</div>
												<!-- /section:plugins/fuelux.wizard.container -->
											</div>											
											<hr />
											<div class="wizard-actions">
												<!-- #section:plugins/fuelux.wizard.buttons -->
												Nilai Soal 
												<input type="text" id="textbox_nilai" placeholder="Nilai">
												<button class="btn btn-sm btn-success">
													Simpan
												</button>
												<!-- /section:plugins/fuelux.wizard.buttons -->
											</div>
											<!-- /section:plugins/fuelux.wizard -->
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Aplikasi</span>
							USM &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='{{ env('TEMPLATE_URL') }}/assets/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='{{ env('TEMPLATE_URL') }}/assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{ env('TEMPLATE_URL') }}/assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/bootstrap.js"></script>

		<!-- page specific plugin scripts -->
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/fuelux/fuelux.wizard.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/jquery.validate.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/additional-methods.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/bootbox.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/jquery.maskedinput.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/select2.js"></script>

		<!-- ace scripts -->
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.scroller.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.colorpicker.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.fileinput.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.typeahead.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.wysiwyg.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.spinner.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.treeview.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.wizard.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.aside.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.ajax-content.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.touch-drag.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.sidebar.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.submenu-hover.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.widget-box.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.settings.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.settings-rtl.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.settings-skin.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.widget-on-reload.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.searchbox-autocomplete.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				$('[data-rel=tooltip]').tooltip();
			
				$(".select2").css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				.on('finished.fu.wizard', function(e) {
					bootbox.dialog({
						message: "Thank you! Your information was successfully saved!", 
						buttons: {
							"success" : {
								"label" : "OK",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});
			
			
				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/
			
				//determine selected step
				//wizard.selectedItem().step
			
			
			
				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				})
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				
				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>

		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace.onpage-help.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/docs/assets/js/themes/sunburst.css" />

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/elements.onpage-help.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/ace/ace.onpage-help.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/docs/assets/js/rainbow.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/docs/assets/js/language/generic.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/docs/assets/js/language/html.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/docs/assets/js/language/css.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/docs/assets/js/language/javascript.js"></script>
	</body>
</html>
