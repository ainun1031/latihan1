<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Form Ujian</title>

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

	<body class="no-skin" >
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
						<a href="/nonadmin/view_home">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Home
							</span>
						</a>
					</li>
					<li class="active">
						<a href="/nonadmin/view_listujian">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Mengerjakan Ujian
							</span>
						</a>
					</li>
					<li class="">
						<a href="/nonadmin/view_riwayatujian">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Riwayat Ujian
							</span>
						</a>
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

							<li class="active">Form Ujian</li>
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
								Form Ujian
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">Deskripsi Ujian</h4>
									</div>
									<div class="widget-body">
										<div class="widget-main">
											<!-- #section:plugins/fuelux.spinner -->
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Nama Ujian </div>
													<div class="profile-info-value">
														<div id="div_namaujian"></div>
													</div>
												</div>
											</div>
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Informasi Ujian </div>
													<div class="profile-info-value">
														<div id="div_informasiujian"></div>
													</div>
												</div>
											</div>
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Sisa Waktu </div>
													<div class="profile-info-value">
														<font size='6'><div id="div_sisawaktu"></div><label onclick="do_selesaikanujian()" class="btn btn-sm btn-primary btn-danger btn-round">Selesaikan Ujian</label></font>
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
										<h4 class="widget-title lighter">Rincian Soal</h4>
									</div>
									<div class="widget-body">
										<div class="widget-toolbox" id="widget_toolbox">
											<div id='div_daftarnomorsoalujian'></div>
										</div>
										<div class="widget-main">
											<!-- #section:plugins/fuelux.wizard -->
											<div id="fuelux-wizard-container">
												<!-- #section:plugins/fuelux.wizard.container -->
												<div class="step-content pos-rel">
													<div id='div_daftarsoalujian'></div>
												</div>
												<!-- /section:plugins/fuelux.wizard.container -->
											</div>
											<!-- /section:plugins/fuelux.wizard -->
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div>			
								<br>
								<div id='div_backupjawabanpesertaujian'></div>

								<!-- modal respon -->
								<div class="modal fade" id="modal_respon" tabindex="-1" role="dialog">
									<div class="modal-backdrop in" style="height: 100%;" data-dismiss="modal"></div>
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<div id='div_respon'></div>
											</div>
										</div>
									</div>
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

<script>
	var v_params = new URLSearchParams(window.location.search);
	var v_idujian = v_params.get('id_ujian');
	var v_idsesi = 12;	//dummy idsesi
	var v_sisawaktuujian;
	var v_formatsisawaktuujian;
	var v_nomorhalamanujianyangsedangditampilkanolehuser;
					
	get_informasiujian();
	get_daftarnomorsoalujian();
	do_mulaimengerjakanataulanjutmengerjakan();
	
	function get_informasiujian()
	{
		var v_params = new URLSearchParams(window.location.search);
		var v_idujian = v_params.get('id_ujian');
		$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.get_informasiujian") }}',
			'data': {post_idujian:v_idujian},
			'success':function(xmlHttp)
			{
				var retbuf = xmlHttp["respon"];
				var arr_retbuf = retbuf.split('||');
				document.getElementById("div_namaujian").innerHTML = arr_retbuf[1];
				document.getElementById("div_informasiujian").innerHTML = arr_retbuf[2];
			}
		});
	}
	
	function get_daftarnomorsoalujian()
	{
		var v_params = new URLSearchParams(window.location.search);
		var v_idujian = v_params.get('id_ujian');
		$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.get_daftarnomorsoalujian") }}',
			'data': {post_idujian:v_idujian},
			'success':function(xmlHttp)
			{
				var retbuf = xmlHttp["respon"];
				var arr_retbuf = retbuf.split('###');
				var vhtml = "";
				for(var i=0;i < (arr_retbuf.length-1); i++)
				{
					var v_nomorsoal = arr_retbuf[i];
					vhtml += "<label id='tombol_tampilkansoalujian"+v_nomorsoal+"' class='btn btn-sm btn-primary btn-white btn-round' onclick='do_tampilkansoalujian("+v_nomorsoal+")'>"+v_nomorsoal+"</label>";
				}
				document.getElementById("div_daftarnomorsoalujian").innerHTML = vhtml;
			}
		});
	}
	
	function do_tampilkansoalujian(v_nomorsoal)
	{
		var v_params = new URLSearchParams(window.location.search);
		var v_idujian = v_params.get('id_ujian');
		//menggunakan nomor_soal dan id_ujian untuk mendapatkan data nomor_halaman 
		$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.get_datanomorhalamanujian") }}',
			'data': {post_nomorsoal:v_nomorsoal,post_idujian:v_idujian},
			'success':function(xmlHttp)
			{
				v_nomorhalamanujianyangsedangditampilkanolehuser = xmlHttp["respon"];
			}
		});
		//berdasarkan data nomor_halaman, menampilkan semua soal yang berada pada nomor_halaman tersebut dan menyembunyikan semua soal yang berada pada nomor_halaman lainnya
		$('.divnomorhalamanujian').hide();	//hide div halaman lainnya
		document.getElementById("divnomorhalamanujian_"+v_nomorhalamanujianyangsedangditampilkanolehuser).style.display = "block";	//tampilkan div halaman ybs
	}

	function get_daftarsoalujian()
	{
		var v_params = new URLSearchParams(window.location.search);
		var v_idujian = v_params.get('id_ujian');
		var retbuf_daftarsoalujian;
		var retbuf_kuncijawaban;
		//get daftar nomor halaman ujian
		var retbuf_daftarnomorhalamanujian;
		$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.get_daftarnomorhalamanujian") }}',
			'data': {post_idujian:v_idujian},
			'success':function(xmlHttp)
			{
				retbuf_daftarnomorhalamanujian = xmlHttp["respon"];
			}
		});
		//tampilkan daftar soal ujian (dan kunci jawabannya) pada setiap halaman ujian nya
		var v_html = "";
		var arr_retbufdaftarnomorhalamanujian = retbuf_daftarnomorhalamanujian.split('###');
		for(var i_1=0;i_1 < (arr_retbufdaftarnomorhalamanujian.length-1); i_1++)
		{
			var v_nomorhalamanujian = arr_retbufdaftarnomorhalamanujian[i_1];
			//memulai halaman ujian
			var v_iddivnomorhalamanujian;
			var v_idtextboxnomorhalamanujian;
			v_iddivnomorhalamanujian = "divnomorhalamanujian_" + v_nomorhalamanujian;
			v_idtextboxnomorhalamanujian = "textboxnomorhalamanujian_" + v_nomorhalamanujian;
			v_html += "<div id='"+v_iddivnomorhalamanujian+"' class='divnomorhalamanujian' data-step='1'>";
			v_html += "<input type='HIDDEN' id='"+v_idtextboxnomorhalamanujian+"' value="+v_nomorhalamanujian+">";
			//get daftar soal ujian (daftar item halaman)
			var retbuf_daftarsoalujian;
			$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
			$.ajax
			({
				'async':false,
				'type':'GET',
				'url':'{{ route("nonadmincontroller.get_daftarsoalujian") }}',
				'data': {post_idujian:v_idujian,post_nomorhalamanujian:v_nomorhalamanujian},
				'success':function(xmlHttp)
				{
					retbuf_daftarsoalujian = xmlHttp["respon"];
				}
			});
			//mengisi halaman ujian dengan daftar soal ujian beserta kunci jawabannya
			var arr_retbufdaftarsoalujian = retbuf_daftarsoalujian.split('###');   //$v_idujiansoal . "||" . $v_idujian . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . '###';
			for(var i_2=0;i_2 < (arr_retbufdaftarsoalujian.length-1); i_2++)
			{
				//mengekstrak informasi soal ujian
				var data_arr_retbufdaftarsoalujian = arr_retbufdaftarsoalujian[i_2].split('||');
				var v_idujiansoal = data_arr_retbufdaftarsoalujian[0];
				var v_idujian = data_arr_retbufdaftarsoalujian[1];
				var v_nomorhalamanujian = data_arr_retbufdaftarsoalujian[2];
				var v_nomorsoalujian = data_arr_retbufdaftarsoalujian[3];
				var v_idsoal = data_arr_retbufdaftarsoalujian[4];
				var v_jenissoalujian = data_arr_retbufdaftarsoalujian[5];
				var v_namasoalujian = data_arr_retbufdaftarsoalujian[6];
				var v_tekssoalujian = data_arr_retbufdaftarsoalujian[7];
				//menuliskan teks soal ke dalam halaman ujian
				var v_iddividujiansoal;
				var v_idtxtidujiansoal;
				v_iddividujiansoal = "dividujiansoal_halaman" + v_nomorhalamanujian + "nomor" + v_nomorsoalujian;
				v_idtxtidujiansoal = "txtidujiansoal_halaman" + v_nomorhalamanujian + "nomor" + v_nomorsoalujian;
				v_html += "<div id='"+v_iddividujiansoal+"' class='lighter block green'>"+v_tekssoalujian+"</div>";
				v_html += "<input type='HIDDEN' id='"+v_idtxtidujiansoal+"' value="+v_idujiansoal+">";
				//get daftar kunci jawaban soal ujian
				var retbuf_kuncijawaban;
				$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
				$.ajax
				({
					'async':false,
					'type':'GET',
					'url':'{{ route("nonadmincontroller.get_daftarkuncijawaban") }}',
					'data': {post_idujiansoal:v_idujiansoal},
					'success':function(xmlHttp)
					{
						retbuf_kuncijawaban = xmlHttp["respon"];
					}
				});
				//menuliskan kunci jawaban ke dalam halaman ujian
				var arr_retbufkuncijawaban = retbuf_kuncijawaban.split('###');   //$v_idujian . "||" . $v_idujiansoal . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . "||" . $v_pilihanke . "||" . $v_tekspilihan . "||" . $v_nilai . "||" . $v_umpanbalik . '###';
				for(var i_3=0;i_3 < (arr_retbufkuncijawaban.length-1); i_3++)
				{
					var data_arr_retbufkuncijawaban = arr_retbufkuncijawaban[i_3].split('||');
					var v_idujian = data_arr_retbufkuncijawaban[0];
					var v_idujiansoal = data_arr_retbufkuncijawaban[1];
					var v_nomorhalamanujian = data_arr_retbufkuncijawaban[2];
					var v_nomorsoalujian = data_arr_retbufkuncijawaban[3];
					var v_idsoal = data_arr_retbufkuncijawaban[4];
					var v_jenissoalujian = data_arr_retbufkuncijawaban[5];
					var v_namasoalujian = data_arr_retbufkuncijawaban[6];
					var v_tekssoalujian = data_arr_retbufkuncijawaban[7];
					var v_pilihanke = data_arr_retbufkuncijawaban[8];
					var v_tekspilihan = data_arr_retbufkuncijawaban[9];
					var v_nilai = data_arr_retbufkuncijawaban[10];
					var v_umpanbalik = data_arr_retbufkuncijawaban[11];
					var v_idradiopilihan;
					v_idradiopilihan = "radiopilihan_halaman"+v_nomorhalamanujian+"nomor"+v_nomorsoalujian;
					v_html += "<div class='radio'>";
						v_html += "<label>";
							v_html += "<input name='"+v_idradiopilihan+"'  id='"+v_idradiopilihan+"' type='radio' class='ace'>";
							v_html += "<span class='lbl'>"+v_tekspilihan+"</span>";
						v_html += "</label>";
					v_html += "</div>";
				}					
			}
			//mengakhiri halaman
			v_html += "</div>";
		}
		//tampilkan daftar soal ujian
		document.getElementById("div_daftarsoalujian").innerHTML = v_html;
		//tampilkan halaman 1
		$('.divnomorhalamanujian').hide(); //hide div halaman lainnya
		document.getElementById("divnomorhalamanujian_1").style.display = "block"; //tampilkan div halaman 1
		v_nomorhalamanujianyangsedangditampilkanolehuser = 1;
	}
	
	function do_restorejawabanpeserta()
	{
		var v_restoreparams = new URLSearchParams(window.location.search);
		var v_restoreidujian = v_restoreparams.get('id_ujian');
		var v_restoreidattempt = v_restoreparams.get('id_attempt');
		//get daftar nomor halaman ujian
		var retbuf_restoredaftarnomorhalamanujian;
		$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.get_restoredaftarnomorhalamanujian") }}',
			'data': {post_idattempt:v_restoreidattempt,post_idujian:v_restoreidujian},
			'success':function(xmlHttp)
			{
				retbuf_restoredaftarnomorhalamanujian = xmlHttp["respon"];
			}
		});
		//tampilkan daftar soal ujian (dan kunci jawabannya) pada setiap halaman ujian nya
		var v_html = "";
		var arr_retbufrestoredaftarnomorhalamanujian = retbuf_restoredaftarnomorhalamanujian.split('###');
		for(var i_1=0;i_1 < (arr_retbufrestoredaftarnomorhalamanujian.length-1); i_1++)
		{
			var nomorhalamanujian = arr_retbufrestoredaftarnomorhalamanujian[i_1];
			//memulai halaman ujian
			var v_restoreiddivnomorhalamanujian;
			var v_restoreidtextboxnomorhalamanujian;
			v_restoreiddivnomorhalamanujian = "divnomorhalamanujian_" + nomorhalamanujian;
			v_restoreidtextboxnomorhalamanujian = "textboxnomorhalamanujian_" + nomorhalamanujian;
			v_html += "<div id='"+v_restoreiddivnomorhalamanujian+"' class='divnomorhalamanujian' data-step='1'>";
			v_html += "<input type='HIDDEN' id='"+v_restoreidtextboxnomorhalamanujian+"' value="+nomorhalamanujian+">";
			//get daftar soal ujian (daftar item halaman)
			var retbuf_restoredaftarsoalujian;
			$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
			$.ajax
			({
				'async':false,
				'type':'GET',
				'url':'{{ route("nonadmincontroller.get_restoredaftarsoalujian") }}',
				'data': {post_idattempt:v_restoreidattempt,post_idujian:v_restoreidujian,post_nomorhalamanujian:nomorhalamanujian},
				'success':function(xmlHttp)
				{
					retbuf_restoredaftarsoalujian = xmlHttp["respon"];
				}
			});
			//mengisi halaman ujian dengan daftar soal ujian beserta kunci jawabannya
			var arr_retbufrestoredaftarsoalujian = retbuf_restoredaftarsoalujian.split('###');   //$v_idujiansoal . "||" . $v_idujian . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . '###';
			for(var i_2=0;i_2 < (arr_retbufrestoredaftarsoalujian.length-1); i_2++)
			{
				//mengekstrak informasi soal ujian
				var data_arr_retbufrestoredaftarsoalujian = arr_retbufrestoredaftarsoalujian[i_2].split('||');
				var restore_idujiansoal = data_arr_retbufrestoredaftarsoalujian[0];
				var restore_idujian = data_arr_retbufrestoredaftarsoalujian[1];
				var restore_nomorhalamanujian = data_arr_retbufrestoredaftarsoalujian[2];
				var restore_nomorsoalujian = data_arr_retbufrestoredaftarsoalujian[3];
				var restore_idsoal = data_arr_retbufrestoredaftarsoalujian[4];
				var restore_jenissoalujian = data_arr_retbufrestoredaftarsoalujian[5];
				var restore_namasoalujian = data_arr_retbufrestoredaftarsoalujian[6];
				var restore_tekssoalujian = data_arr_retbufrestoredaftarsoalujian[7];
				//menuliskan teks soal ke dalam halaman ujian
				var v_restoreiddividujiansoal;
				var v_restoreidtxtidujiansoal;
				v_restoreiddividujiansoal = "dividujiansoal_halaman" + restore_nomorhalamanujian + "nomor" + restore_nomorsoalujian;
				v_restoreidtxtidujiansoal = "txtidujiansoal_halaman" + restore_nomorhalamanujian + "nomor" + restore_nomorsoalujian;
				v_html += "<div id='"+v_restoreiddividujiansoal+"' class='lighter block green'>"+restore_tekssoalujian+"</div>";
				v_html += "<input type='HIDDEN' id='"+v_restoreidtxtidujiansoal+"' value="+restore_idujiansoal+">";
				//get daftar kunci jawaban soal ujian
				var retbuf_restorekuncijawaban;
				$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
				$.ajax
				({
					'async':false,
					'type':'GET',
					'url':'{{ route("nonadmincontroller.get_restoredaftarkuncijawaban") }}',
					'data': {post_idattempt:v_restoreidattempt,post_idujian:v_restoreidujian,post_idujiansoal:restore_idujiansoal},
					'success':function(xmlHttp)
					{
						retbuf_restorekuncijawaban = xmlHttp["respon"];
					}
				});
				//menuliskan kunci jawaban ke dalam halaman ujian
				var arr_retbufrestorekuncijawaban = retbuf_restorekuncijawaban.split('###');   //$v_idujian . "||" . $v_idujiansoal . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . "||" . $v_pilihanke . "||" . $v_tekspilihan . "||" . $v_nilai . "||" . $v_umpanbalik . "||" . $jawaban_pilihanke . "||" . $jawaban_teksjawaban . "||" . $jawaban_nilai . "||" . $jawaban_umpanbalik . "###";
				for(var i_3=0;i_3 < (arr_retbufrestorekuncijawaban.length-1); i_3++)
				{
					var data_arr_retbufrestorekuncijawaban = arr_retbufrestorekuncijawaban[i_3].split('||');
					var v_restoreidujian = data_arr_retbufrestorekuncijawaban[0];
					var v_restoreidujiansoal = data_arr_retbufrestorekuncijawaban[1];
					var v_restorenomorhalamanujian = data_arr_retbufrestorekuncijawaban[2];
					var v_restorenomorsoalujian = data_arr_retbufrestorekuncijawaban[3];
					var v_restoreidsoal = data_arr_retbufrestorekuncijawaban[4];
					var v_restorejenissoalujian = data_arr_retbufrestorekuncijawaban[5];
					var v_restorenamasoalujian = data_arr_retbufrestorekuncijawaban[6];
					var v_restoretekssoalujian = data_arr_retbufrestorekuncijawaban[7];
					var v_restorepilihanke = data_arr_retbufrestorekuncijawaban[8];
					var v_restoretekspilihan = data_arr_retbufrestorekuncijawaban[9];
					var v_restorenilai = data_arr_retbufrestorekuncijawaban[10];
					var v_restoreumpanbalik = data_arr_retbufrestorekuncijawaban[11];
					var v_restoreischecked = data_arr_retbufrestorekuncijawaban[12];
					var v_restoreidradiopilihan;
					v_restoreidradiopilihan = "radiopilihan_halaman"+v_restorenomorhalamanujian+"nomor"+v_restorenomorsoalujian;
					if (v_restoreischecked == "CHECKED")
					{
						v_html += "<div class='radio'>";
							v_html += "<label>";
								v_html += "<input name='"+v_restoreidradiopilihan+"'  id='"+v_restoreidradiopilihan+"' type='radio' class='ace' checked>";
								v_html += "<span class='lbl'>"+v_restoretekspilihan+"</span>";
							v_html += "</label>";
						v_html += "</div>";
					}
					if (v_restoreischecked == "UNCHECKED")
					{
						v_html += "<div class='radio'>";
							v_html += "<label>";
								v_html += "<input name='"+v_restoreidradiopilihan+"'  id='"+v_restoreidradiopilihan+"' type='radio' class='ace'>";
								v_html += "<span class='lbl'>"+v_restoretekspilihan+"</span>";
							v_html += "</label>";
						v_html += "</div>";
					}
				}
			}
			//mengakhiri halaman
			v_html += "</div>";
		}
		//tampilkan daftar soal ujian
		document.getElementById("div_daftarsoalujian").innerHTML = v_html;
		//tampilkan halaman 1
		$('.divnomorhalamanujian').hide(); //hide div halaman lainnya
		document.getElementById("divnomorhalamanujian_1").style.display = "block"; //tampilkan div halaman 1
	}
	
	function do_mulaimengerjakanataulanjutmengerjakan()
	{
		var v_params = new URLSearchParams(window.location.search);
		var v_idattempt = v_params.get('id_attempt');
		var retbuf_statusmengerjakan;
		retbuf_statusmengerjakan = "";
		$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.do_mulaimengerjakanataulanjutmengerjakan") }}',
			'data': {post_idattempt:v_idattempt},
			'success':function(xmlHttp)
			{
				retbuf_statusmengerjakan = xmlHttp["respon"];
			}
		});
		if(retbuf_statusmengerjakan == "lanjutmengerjakan")
		{
			do_restorejawabanpeserta();  //lanjut mengerjakan
		}
		if(retbuf_statusmengerjakan == "mulaimengerjakan")
		{
			get_daftarsoalujian();  //mulai mengerjakan
		}
	}
	
	function hitung_sisawaktuujian() //sisa waktu pada attempt terakhir dari id_ujian terkait (tanpa menggunakan thread)
	{
		var v_params = new URLSearchParams(window.location.search);
		var v_idattempt = v_params.get('id_attempt');
		$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':true,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.hitung_sisawaktuujian") }}',
			'data': {post_idujian:v_idujian,post_idsesi:v_idsesi},
			'success':function(xmlHttp)
			{
				var retbuf = xmlHttp["respon"];
				v_sisawaktuujian = retbuf;
			}
		});
		//convert format selisih waktu ke dalam format jam:menit:detik
		var secs = Math.round(v_sisawaktuujian);
		var hours = Math.floor(secs / (60 * 60));
		var divisor_for_minutes = secs % (60 * 60);
		var minutes = Math.floor(divisor_for_minutes / 60);
		var divisor_for_seconds = divisor_for_minutes % 60;
		var seconds = Math.ceil(divisor_for_seconds);
		v_formatsisawaktuujian = hours + ":" + minutes + ":" + seconds;
		document.getElementById("div_sisawaktu").innerHTML = v_formatsisawaktuujian;
		//jika selisih waktu sudah 0 (alias tidak ada sisa waktu lagi)
		if(v_sisawaktuujian == 0 || v_sisawaktuujian < 0)
		{
			do_selesaikanujian();
		}
	}

	/*
	function hitung_sisawaktuujian()  //sisa waktu pada attempt terakhir dari id_ujian terkait (dengan menggunakan thread)
	{
		setInterval(function() 
		{
			var v_params = new URLSearchParams(window.location.search);
			var v_idattempt = v_params.get('id_attempt');
			$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
			$.ajax
			({
				'async':false,
				'type':'GET',
				'url':'{{ route("nonadmincontroller.hitung_sisawaktuujian") }}',
				'data': {post_idujian:v_idujian,post_idsesi:v_idsesi},
				'success':function(xmlHttp)
				{
					var retbuf = xmlHttp["respon"];
					v_sisawaktuujian = retbuf;
				}
			});
			//convert format selisih waktu ke dalam format jam:menit:detik
			var secs = Math.round(v_sisawaktuujian);
			var hours = Math.floor(secs / (60 * 60));
			var divisor_for_minutes = secs % (60 * 60);
			var minutes = Math.floor(divisor_for_minutes / 60);
			var divisor_for_seconds = divisor_for_minutes % 60;
			var seconds = Math.ceil(divisor_for_seconds);
			v_formatsisawaktuujian = hours + ":" + minutes + ":" + seconds;
			//postMessage({sisawaktuujian: v_sisawaktuujian,format_sisawaktuujian: v_formatsisawaktuujian});
			document.getElementById("div_sisawaktu").innerHTML = v_formatsisawaktuujian;
			//jika selisih waktu sudah 0 (alias tidak ada sisa waktu lagi)
			if(v_sisawaktuujian == 0 || v_sisawaktuujian < 0)
			{
				do_selesaikanujian();
			}
		}, 500);
	}
	*/
	

	function do_backupjawabanpeserta()	//tanpa menggunakan thread
	{
		var v_backupparams = new URLSearchParams(window.location.search);
		var v_backupidujian = v_backupparams.get('id_ujian');
		var v_backupidattempt = v_backupparams.get('id_attempt');
		//cek setiap inputan user untuk dimasukkan ke dalam tabel_attempt_cache
		var retbuf_backupdaftarsoalujian;
		var retbuf_backupkuncijawaban;
		//get daftar nomor halaman ujian
		var retbuf_backupdaftarnomorhalamanujian;
		$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.get_daftarnomorhalamanujian") }}',
			'data': {post_idujian:v_backupidujian},
			'success':function(xmlHttp)
			{
				retbuf_backupdaftarnomorhalamanujian = xmlHttp["respon"];
			}
		});
		//tampilkan daftar soal ujian (dan kunci jawabannya) pada setiap halaman ujian nya
		var v_backupnomorhalamanujian;
		var v_backupidujiansoal;
		var v_backupnomorsoalujian;
		var v_backuppilihanke;
		var v_data = "";
		var arr_retbufbackupdaftarnomorhalamanujian = retbuf_backupdaftarnomorhalamanujian.split('###');
		for(var i_1=0;i_1 < (arr_retbufbackupdaftarnomorhalamanujian.length-1); i_1++)
		{
			var nomorhalamanujian = arr_retbufbackupdaftarnomorhalamanujian[i_1];
			//memulai halaman ujian
			var v_backupiddivnomorhalamanujian;
			var v_backupidtextboxnomorhalamanujian;
			v_backupiddivnomorhalamanujian = "divnomorhalamanujian_" + nomorhalamanujian;
			v_backupidtextboxnomorhalamanujian = "textboxnomorhalamanujian_" + nomorhalamanujian;
			v_backupnomorhalamanujian = document.getElementById(v_backupidtextboxnomorhalamanujian).value;
			//get daftar soal ujian (daftar item halaman)
			var retbuf_backupdaftarsoalujian;
			$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
			$.ajax
			({
				'async':false,
				'type':'GET',
				'url':'{{ route("nonadmincontroller.get_daftarsoalujian") }}',
				'data': {post_idujian:v_backupidujian,post_nomorhalamanujian:nomorhalamanujian},
				'success':function(xmlHttp)
				{
					retbuf_backupdaftarsoalujian = xmlHttp["respon"];
				}
			});
			//mengisi halaman ujian dengan daftar soal ujian beserta kunci jawabannya
			var arr_retbufbackupdaftarsoalujian = retbuf_backupdaftarsoalujian.split('###');   //$v_idujiansoal . "||" . $v_idujian . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . '###';
			for(var i_2=0;i_2 < (arr_retbufbackupdaftarsoalujian.length-1); i_2++)
			{
				//mengekstrak informasi soal ujian
				var data_arr_retbufbackupdaftarsoalujian = arr_retbufbackupdaftarsoalujian[i_2].split('||');
				var backup_idujiansoal = data_arr_retbufbackupdaftarsoalujian[0];
				var backup_idujian = data_arr_retbufbackupdaftarsoalujian[1];
				var backup_nomorhalamanujian = data_arr_retbufbackupdaftarsoalujian[2];
				var backup_nomorsoalujian = data_arr_retbufbackupdaftarsoalujian[3];
				var backup_idsoal = data_arr_retbufbackupdaftarsoalujian[4];
				var backup_jenissoalujian = data_arr_retbufbackupdaftarsoalujian[5];
				var backup_namasoalujian = data_arr_retbufbackupdaftarsoalujian[6];
				var backup_tekssoalujian = data_arr_retbufbackupdaftarsoalujian[7];
				//menuliskan teks soal ke dalam halaman ujian
				var v_backupiddividujiansoal;
				var v_backupidtxtidujiansoal;
				v_backupiddividujiansoal = "dividujiansoal_halaman" + backup_nomorhalamanujian + "nomor" + backup_nomorsoalujian;
				v_backupidtxtidujiansoal = "txtidujiansoal_halaman" + backup_nomorhalamanujian + "nomor" + backup_nomorsoalujian;
				v_backupidujiansoal = document.getElementById(v_backupidtxtidujiansoal).value;
				//get daftar kunci jawaban soal ujian
				var retbuf_backupkuncijawaban;
				$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
				$.ajax
				({
					'async':false,
					'type':'GET',
					'url':'{{ route("nonadmincontroller.get_daftarkuncijawaban") }}',
					'data': {post_idujiansoal:backup_idujiansoal},
					'success':function(xmlHttp)
					{
						retbuf_backupkuncijawaban = xmlHttp["respon"];
					}
				});
				//menuliskan kunci jawaban ke dalam halaman ujian
				var arr_retbufbackupkuncijawaban = retbuf_backupkuncijawaban.split('###');   //$v_idujian . "||" . $v_idujiansoal . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . "||" . $v_pilihanke . "||" . $v_tekspilihan . "||" . $v_nilai . "||" . $v_umpanbalik . '###';
				for(var i_3=0;i_3 < (arr_retbufbackupkuncijawaban.length-1); i_3++)
				{
					var data_arr_retbufbackupkuncijawaban = arr_retbufbackupkuncijawaban[i_3].split('||');
					var v_backupidujian = data_arr_retbufbackupkuncijawaban[0];
					var v_backupidujiansoal = data_arr_retbufbackupkuncijawaban[1];
					var v_backupnomorhalamanujian = data_arr_retbufbackupkuncijawaban[2];
					var v_backupnomorsoalujian = data_arr_retbufbackupkuncijawaban[3];
					var v_backupidsoal = data_arr_retbufbackupkuncijawaban[4];
					var v_backupjenissoalujian = data_arr_retbufbackupkuncijawaban[5];
					var v_backupnamasoalujian = data_arr_retbufbackupkuncijawaban[6];
					var v_backuptekssoalujian = data_arr_retbufbackupkuncijawaban[7];
					var v_backuppilihanke = data_arr_retbufbackupkuncijawaban[8];
					var v_backuptekspilihan = data_arr_retbufbackupkuncijawaban[9];
					var v_backupnilai = data_arr_retbufbackupkuncijawaban[10];
					var v_backupumpanbalik = data_arr_retbufbackupkuncijawaban[11];
					var v_backupidradiopilihan;
					v_backupidradiopilihan = "radiopilihan_halaman"+v_backupnomorhalamanujian+"nomor"+v_backupnomorsoalujian;
					var v_backupelems = document.getElementsByName(v_backupidradiopilihan);
					if (v_backupelems[i_3].checked)
					{
						var v_element = document.getElementById("tombol_tampilkansoalujian"+v_backupnomorsoalujian);
						v_element.classList.remove("btn-primary");
						v_element.classList.remove("btn-white");
						v_element.classList.remove("btn-success");
						v_element.classList.add("btn-success");
						v_data += v_backupidattempt + "||" + v_backupidujian + "||" + v_backupidujiansoal + "||" + v_backupnomorhalamanujian + "||" + v_backupnomorsoalujian + "||" + v_backupidsoal + "||" + v_backupjenissoalujian + "||" + v_backupnamasoalujian + "||" + v_backuptekssoalujian + "||" + v_backuppilihanke + "||" + v_backuptekspilihan + "||" + v_backupnilai + "||" + v_backupumpanbalik + "###";
					}
				}
			}
			//mengakhiri halaman
		}
		//meyimpan backup ke dalam tabel_attempt_cache
		$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':true,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.do_backupjawabanpeserta") }}',
			'data': {post_data:v_data},
			'success':function(xmlHttp)
			{
				//respon
			}
		});
		//document.getElementById("div_backupjawabanpesertaujian").innerHTML = v_data;
	}
	/*
	function do_backupjawabanpeserta()  //dengan menggunakan thread
	{
		setInterval(function() 
		{
			var v_backupparams = new URLSearchParams(window.location.search);
			var v_backupidujian = v_backupparams.get('id_ujian');
			var v_backupidattempt = v_backupparams.get('id_attempt');
			//cek setiap inputan user untuk dimasukkan ke dalam tabel_attempt_cache
			var retbuf_backupdaftarsoalujian;
			var retbuf_backupkuncijawaban;
			//get daftar nomor halaman ujian
			var retbuf_backupdaftarnomorhalamanujian;
			$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
			$.ajax
			({
				'async':false,
				'type':'GET',
				'url':'{{ route("nonadmincontroller.get_daftarnomorhalamanujian") }}',
				'data': {post_idujian:v_backupidujian},
				'success':function(xmlHttp)
				{
					retbuf_backupdaftarnomorhalamanujian = xmlHttp["respon"];
				}
			});
			//tampilkan daftar soal ujian (dan kunci jawabannya) pada setiap halaman ujian nya
			var v_backupnomorhalamanujian;
			var v_backupidujiansoal;
			var v_backupnomorsoalujian;
			var v_backuppilihanke;
			var v_data = "";
			var arr_retbufbackupdaftarnomorhalamanujian = retbuf_backupdaftarnomorhalamanujian.split('###');
			for(var i_1=0;i_1 < (arr_retbufbackupdaftarnomorhalamanujian.length-1); i_1++)
			{
				var nomorhalamanujian = arr_retbufbackupdaftarnomorhalamanujian[i_1];
				//memulai halaman ujian
				var v_backupiddivnomorhalamanujian;
				var v_backupidtextboxnomorhalamanujian;
				v_backupiddivnomorhalamanujian = "divnomorhalamanujian_" + nomorhalamanujian;
				v_backupidtextboxnomorhalamanujian = "textboxnomorhalamanujian_" + nomorhalamanujian;
				v_backupnomorhalamanujian = document.getElementById(v_backupidtextboxnomorhalamanujian).value;
				//get daftar soal ujian (daftar item halaman)
				var retbuf_backupdaftarsoalujian;
				$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
				$.ajax
				({
					'async':false,
					'type':'GET',
					'url':'{{ route("nonadmincontroller.get_daftarsoalujian") }}',
					'data': {post_idujian:v_backupidujian,post_nomorhalamanujian:nomorhalamanujian},
					'success':function(xmlHttp)
					{
						retbuf_backupdaftarsoalujian = xmlHttp["respon"];
					}
				});
				//mengisi halaman ujian dengan daftar soal ujian beserta kunci jawabannya
				var arr_retbufbackupdaftarsoalujian = retbuf_backupdaftarsoalujian.split('###');   //$v_idujiansoal . "||" . $v_idujian . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . '###';
				for(var i_2=0;i_2 < (arr_retbufbackupdaftarsoalujian.length-1); i_2++)
				{
					//mengekstrak informasi soal ujian
					var data_arr_retbufbackupdaftarsoalujian = arr_retbufbackupdaftarsoalujian[i_2].split('||');
					var backup_idujiansoal = data_arr_retbufbackupdaftarsoalujian[0];
					var backup_idujian = data_arr_retbufbackupdaftarsoalujian[1];
					var backup_nomorhalamanujian = data_arr_retbufbackupdaftarsoalujian[2];
					var backup_nomorsoalujian = data_arr_retbufbackupdaftarsoalujian[3];
					var backup_idsoal = data_arr_retbufbackupdaftarsoalujian[4];
					var backup_jenissoalujian = data_arr_retbufbackupdaftarsoalujian[5];
					var backup_namasoalujian = data_arr_retbufbackupdaftarsoalujian[6];
					var backup_tekssoalujian = data_arr_retbufbackupdaftarsoalujian[7];
					//menuliskan teks soal ke dalam halaman ujian
					var v_backupiddividujiansoal;
					var v_backupidtxtidujiansoal;
					v_backupiddividujiansoal = "dividujiansoal_halaman" + backup_nomorhalamanujian + "nomor" + backup_nomorsoalujian;
					v_backupidtxtidujiansoal = "txtidujiansoal_halaman" + backup_nomorhalamanujian + "nomor" + backup_nomorsoalujian;
					v_backupidujiansoal = document.getElementById(v_backupidtxtidujiansoal).value;
					//get daftar kunci jawaban soal ujian
					var retbuf_backupkuncijawaban;
					$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
					$.ajax
					({
						'async':false,
						'type':'GET',
						'url':'{{ route("nonadmincontroller.get_daftarkuncijawaban") }}',
						'data': {post_idujiansoal:backup_idujiansoal},
						'success':function(xmlHttp)
						{
							retbuf_backupkuncijawaban = xmlHttp["respon"];
						}
					});
					//menuliskan kunci jawaban ke dalam halaman ujian
					var arr_retbufbackupkuncijawaban = retbuf_backupkuncijawaban.split('###');   //$v_idujian . "||" . $v_idujiansoal . "||" . $v_nomorhalamanujian . "||" . $v_nomorsoalujian . "||" . $v_idsoal . "||" . $v_jenissoalujian . "||" . $v_namasoalujian . "||" . $v_tekssoalujian . "||" . $v_pilihanke . "||" . $v_tekspilihan . "||" . $v_nilai . "||" . $v_umpanbalik . '###';
					for(var i_3=0;i_3 < (arr_retbufbackupkuncijawaban.length-1); i_3++)
					{
						var data_arr_retbufbackupkuncijawaban = arr_retbufbackupkuncijawaban[i_3].split('||');
						var v_backupidujian = data_arr_retbufbackupkuncijawaban[0];
						var v_backupidujiansoal = data_arr_retbufbackupkuncijawaban[1];
						var v_backupnomorhalamanujian = data_arr_retbufbackupkuncijawaban[2];
						var v_backupnomorsoalujian = data_arr_retbufbackupkuncijawaban[3];
						var v_backupidsoal = data_arr_retbufbackupkuncijawaban[4];
						var v_backupjenissoalujian = data_arr_retbufbackupkuncijawaban[5];
						var v_backupnamasoalujian = data_arr_retbufbackupkuncijawaban[6];
						var v_backuptekssoalujian = data_arr_retbufbackupkuncijawaban[7];
						var v_backuppilihanke = data_arr_retbufbackupkuncijawaban[8];
						var v_backuptekspilihan = data_arr_retbufbackupkuncijawaban[9];
						var v_backupnilai = data_arr_retbufbackupkuncijawaban[10];
						var v_backupumpanbalik = data_arr_retbufbackupkuncijawaban[11];
						var v_backupidradiopilihan;
						v_backupidradiopilihan = "radiopilihan_halaman"+v_backupnomorhalamanujian+"nomor"+v_backupnomorsoalujian;
						var v_backupelems = document.getElementsByName(v_backupidradiopilihan);
						if (v_backupelems[i_3].checked)
						{
							v_data += v_backupidattempt + "||" + v_backupidujian + "||" + v_backupidujiansoal + "||" + v_backupnomorhalamanujian + "||" + v_backupnomorsoalujian + "||" + v_backupidsoal + "||" + v_backupjenissoalujian + "||" + v_backupnamasoalujian + "||" + v_backuptekssoalujian + "||" + v_backuppilihanke + "||" + v_backuptekspilihan + "||" + v_backupnilai + "||" + v_backupumpanbalik + "###";
						}
					}
				}
				//mengakhiri halaman
			}
			//postMessage({data_backup: v_data});
			//meyimpan backup ke dalam tabel_attempt_cache
			$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
			$.ajax
			({
				'async':false,
				'type':'GET',
				'url':'{{ route("nonadmincontroller.do_backupjawabanpeserta") }}',
				'data': {post_data:v_data},
				'success':function(xmlHttp)
				{
					//respon
				}
			});
			//document.getElementById("div_backupjawabanpesertaujian").innerHTML = v_data;
		}, 500);
	}
	*/

	function do_selesaikanujian()
	{
		var v_params = new URLSearchParams(window.location.search);
		var v_idujian = v_params.get('id_ujian');
		var v_idattempt = v_params.get('id_attempt');
		//memindahkan data dari tabel_attempt_cache ke tabel_attempt_detail
		$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type':'GET',
			'url':'{{ route("nonadmincontroller.do_selesaikanujian") }}',
			'data': {post_idujian:v_idujian,post_idattempt:v_idattempt},
			'success':function(xmlHttp)
			{
				retbuf = xmlHttp["respon"];
				var message_content = "";
				message_content += "<center>";
				message_content += "<img src='{{ env('TEMPLATE_URL') }}/assets/images/info.png' style='width:200px;height:200px;'>";
				message_content += "<br>";
				message_content += "<h2>Ujian telah berakhir. <br></h2>";
				message_content += "</center>";
				document.getElementById("div_respon").innerHTML = message_content;
				$('#modal_respon').modal('show');
				clearInterval(v_intervalhitungsisawaktuujian);
				clearInterval(v_intervalbackupjawabanpeserta);
			}
		});
	}
	
	var v_intervalhitungsisawaktuujian = setInterval(hitung_sisawaktuujian, 500); //every 500 milliseconds (tanpa menggunakan thread)
	/*
	//every 500 milliseconds (dengan menggunakan thread)
	var code_hitungsisawaktuujian = hitung_sisawaktuujian.toString();
	code_hitungsisawaktuujian = code_hitungsisawaktuujian.substring(code_hitungsisawaktuujian.indexOf("{")+1, code_hitungsisawaktuujian.lastIndexOf("}"));
	var blob_hitungsisawaktuujian = new Blob([code_hitungsisawaktuujian], {type: "application/javascript"});
	var hitung_sisawaktuujian = new hitung_sisawaktuujian(URL.createObjectURL(blob_hitungsisawaktuujian));
	hitung_sisawaktuujian.onmessage = function(e) 
	{
		//var v_formatsisawaktuujian = e.data.format_sisawaktuujian;
		//var v_sisawaktuujian = e.data.sisawaktuujian;
		//document.getElementById("div_sisawaktu").innerHTML = v_formatsisawaktuujian;
		//jika selisih waktu sudah 0 (alias tidak ada sisa waktu lagi)
		//if(v_sisawaktuujian == 0 || v_sisawaktuujian < 0)
		//{
		//	do_selesaikanujian();
		//}
	};
	*/
	var v_intervalbackupjawabanpeserta = setInterval(do_backupjawabanpeserta, 500); //every 500 milliseconds (tanpa menggunakan thread)
	/*
	//every 500 milliseconds (dengan menggunakan thread)
	var code_backupjawabanpeserta = do_backupjawabanpeserta.toString();
	code_backupjawabanpeserta = code_backupjawabanpeserta.substring(code_backupjawabanpeserta.indexOf("{")+1, code_backupjawabanpeserta.lastIndexOf("}"));
	var blob_backupjawabanpeserta = new Blob([code_backupjawabanpeserta], {type: "application/javascript"});
	var do_backupjawabanpeserta = new do_backupjawabanpeserta(URL.createObjectURL(blob_backupjawabanpeserta));
	do_backupjawabanpeserta.onmessage = function(e) 
	{
		//var v_databackup = e.data.data_backup;
		//$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		//$.ajax
		//({
		//	'async':false,
		//	'type':'GET',
		//	'url':'{{ route("nonadmincontroller.do_backupjawabanpeserta") }}',
		//	'data': {post_data:v_databackup},
		//	'success':function(xmlHttp)
		//	{
		//		//respon
		//	}
		//});
	};
	*/
</script>