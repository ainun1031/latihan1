<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Input Konfigurasi Penyajian Ujian</title>

		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/jquery-ui.custom.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/chosen.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/datepicker.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/colorpicker.css" />

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

							<li class="active">Input Konfigurasi Penyajian Ujian</li>
						</ul><!-- /.breadcrumb -->

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

]									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
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
								Form Input Konfigurasi Penyajian Ujian
								<a href="#" onclick="AddPage()" class="btn btn-sm btn-danger">Tambah Halaman</a>
								<a href="#" onclick="SaveConfiguration()" class="btn btn-sm btn-danger">Simpan Konfigurasi Penyajian Ujian</a>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<!-- toc -->
								<table class="table">
									<tbody class="drag" id="toc">
									</tbody>
								</table>								
								
								<!-- Questions in page -->
								<div class="modal fade" id="modal_qip" tabindex="-1" role="dialog">
									<div class="modal-backdrop in" style="height: 100%;" data-dismiss="modal"></div>
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger" id="qip_title">Please fill the following form fields</h4>
												<input type="hidden" value="" id="qip_pagenumber">
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-xs-12 col-sm-12">
													   <table class="table">
													      <thead>
														     <tr>
															    <th>No</th>
																<th>Question</th>
																<th>Action</th>
														     </tr>
														  </thead>
														  <tbody class="page-detail">
														  </tbody>
													   </table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Add Questions From Bank Modal -->
								<div class="modal fade" id="modal_qfb" tabindex="-1" role="dialog">
								   <div class="modal-backdrop in" style="height: 100%;" data-dismiss="modal"></div>
								   <div class="modal-dialog">
								      <div class="modal-content">
										 <div class="modal-header">
										    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
											<h5 class="modal-title" id="qfb_title">Add from the question bank at the end</h5>
											<input type="hidden" value="" id="qfb_pagenumber">
										 </div>
										 <div class="modal-body">
										    <table class="table">
											   <thead>
											      <tr>
												    <th><input type="checkbox" id="check-all"></th>
													<th>Question</th>
												  </tr>
											   </thead>
											   <tbody class="qfb_bank">
											      <!-- Add Questions Bank Here -->
											   </tbody>
											</table>
										 </div>
										 <div class="modal-footer">
										    <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-add-questions">Add selected questions to the quiz</button>
										 </div>
									  </div>
								   </div>
								</div>
								
								<!-- info -->
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

		<!--[if lte IE 8]>
		  <script src="{{ env('TEMPLATE_URL') }}/assets/js/excanvas.js"></script>
		<![endif]-->
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/jquery-ui.custom.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/jquery.ui.touch-punch.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/chosen.jquery.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/fuelux/fuelux.spinner.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/date-time/bootstrap-datepicker.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/date-time/bootstrap-timepicker.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/date-time/moment.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/date-time/daterangepicker.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/date-time/bootstrap-datetimepicker.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/bootstrap-colorpicker.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/jquery.knob.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/jquery.autosize.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/jquery.inputlimiter.1.3.1.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/jquery.maskedinput.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/bootstrap-tag.js"></script>

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
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				if(!ace.vars['touch']) {
					$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
			
			
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('span.ui-slider-handle').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				
				//$('#id-input-file-3')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
				
				});
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.closest('.ace-spinner')
				.on('changed.fu.spinbox', function(){
					//alert($('#spinner1').val())
				}); 
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});
			
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)
			
					//programmatically add a new
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					if(!ace.vars['touch']) {
						$(this).find('.chosen-container').each(function(){
							$(this).find('a:first-child').css('width' , '210px');
							$(this).find('.chosen-drop').css('width' , '210px');
							$(this).find('.chosen-search input').css('width' , '200px');
						});
					}
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					$('textarea[class*=autosize]').trigger('autosize.destroy');
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});
			
			});
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



    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Popper JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <!-- Sortable CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.js" integrity="sha512-5x7t0fTAVo9dpfbp3WtE2N6bfipUwk7siViWncdDoSz2KwOqVC1N9fDxEOzk0vTThOua/mglfF8NO7uVDLRC8Q==" crossorigin="anonymous"></script>
	
	<!-- modal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

    // Class
    var q = []; //volatile
    var question_bank = []; // Questions Bank Array; (daftar pertanyaan dalam database)
    var questions = []; // Questions Array (daftar pertanyaan pada suatu halaman)
	var halaman = [];
    var html = "";
	
	refreshPage("get_konfigurasi");
	questionBank();

    // Function 
    const sort1 = document.querySelector(".drag");
	const sort2 = document.querySelector(".page-detail");

    // Sort Page
    new Sortable(
					sort1, 
					{
						animation: 100,
						onEnd: function (evt) 
						{
							var oldIndex = evt.oldIndex;
							var newIndex = evt.newIndex;
							if(oldIndex != newIndex)
							{
								var replaced = questions[newIndex];
								questions[newIndex] = questions[oldIndex];
								questions[oldIndex] = replaced;
								html = "";
								refreshPage("ignore_konfigurasi");
							}
						},
					}
	)
	
    // Sort Questions Per Page
    new Sortable(
					sort2, 
					{
						animation: 100,
						onEnd: function (evt) 
						{
							var oldIndex = evt.oldIndex;
							var newIndex = evt.newIndex;
							var page = document.getElementById("qip_pagenumber").value;
							if(oldIndex != newIndex)
							{
								var replaced = questions[page][newIndex];
								questions[page][newIndex] = questions[page][oldIndex];
								questions[page][oldIndex] = replaced;
								showDetail(page);
							}
						},
					}
	)

	function getkonfigurasipenyajianujian()
	{
		//retrieve konfigurasi penyajian ujian
		var v_params = new URLSearchParams(window.location.search);
		var v_idujian = v_params.get('id');		
		var retbuf_nomorhalaman;
		var retbuf_itemhalaman;
		
		//get daftar nomor halaman
		$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type': 'GET',
			'url': '{{ route("admincontroller.viewdata_updatekonfigurasipenyajianujian_getdaftarhalaman") }}',
			'data': {post_idujian:v_idujian},
			'success':function(xmlHttp)
			{
				retbuf_nomorhalaman = xmlHttp["respon"];	//$v_nomorhalaman . '###';
			}
		});
		
		//get daftar item setiap halaman
		var arr_retbufnomorhalaman = retbuf_nomorhalaman.split('###');
		for(var i_1=0;i_1 < (arr_retbufnomorhalaman.length-1); i_1++)
		{
			var v_nomorhalaman = arr_retbufnomorhalaman[i_1];
			halaman = [];
			$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
			$.ajax
			({
				'async':false,
				'type': 'GET',
				'url': '{{ route("admincontroller.viewdata_updatekonfigurasipenyajianujian_getdaftarhalamanitem") }}',
				'data': {post_idujian:v_idujian,post_nomorhalaman:v_nomorhalaman},
				'success':function(xmlHttp)
				{
					var retbuf_itemhalaman = xmlHttp["respon"];	//$v_idujiansoal . '||' . $v_nomorsoal . '||' . $v_idsoal . '||' . $v_jenissoal . '||' . $v_namasoal . '||' . $v_tekssoal . '###';
					var arr_retbufitemhalaman = retbuf_itemhalaman.split('###');
					for(var i_2=0;i_2 < (arr_retbufitemhalaman.length-1); i_2++)
					{
						var data_arr_retbufitemhalaman = arr_retbufitemhalaman[i_2].split('||');
						var v_idujiansoal = data_arr_retbufitemhalaman[0];
						var v_nomorsoal = data_arr_retbufitemhalaman[1];
						var v_idsoal = data_arr_retbufitemhalaman[2];
						var v_jenissoal = data_arr_retbufitemhalaman[3];
						var v_namasoal = data_arr_retbufitemhalaman[4];
						var v_tekssoal = data_arr_retbufitemhalaman[5];
						halaman[i_2] = [];
						halaman[i_2]['idsoal'] = v_idsoal;
						halaman[i_2]['jenissoal'] = v_jenissoal;
						halaman[i_2]['namasoal'] = v_namasoal;
						halaman[i_2]['tekssoal'] = v_tekssoal;
					}
				}
			});
			questions[i_1] = halaman;
		}
		
		
	}

	function listSoal()
	{
		//list soal
		$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			'async':false,
			'type':'GET',
			'url':'{{ route("admincontroller.viewdata_listsoal") }}',
			'data': {},
			'success':function(xmlHttp)
			{
				var retbuf = xmlHttp["respon"];
				var arr_retbuf = retbuf.split('###');
				for(var i=0;i < (arr_retbuf.length-1); i++)
				{
					var data_arr_retbuf = arr_retbuf[i].split('||');
					var v_idsoal = data_arr_retbuf[0];
					var v_jenissoal = data_arr_retbuf[1];
					var v_namasoal = data_arr_retbuf[2];
					var v_tekssoal = data_arr_retbuf[3];
					question_bank[i] = [];
					question_bank[i]['idsoal'] = v_idsoal;
					question_bank[i]['jenissoal'] = v_jenissoal;
					question_bank[i]['namasoal'] = v_namasoal;
					question_bank[i]['tekssoal'] = v_tekssoal;
				}
			}
		});
	}	

    function AddPage()
	{
		var html = "";
		var page = questions.length + 1;
		
		html += "<tr style='background-color: #f2f5fa;' id='page-" + page + "'>"
			html += "<td width='10%'>";
				html += "<span class='mr-3'><i class='ace-icon fa fa-folder-o icon-only' onclick='showDetail(" + (page - 1) + ")' ></i></span>";
				html += "&nbsp";
				html += "<span class='badge badge-success' id='page-number-" + page +"'>" + page + "</span>";				
			html += "</td>";
			html += "<td width='80%'>";
				html += "<span id='page-span-number-" + page + "'>Halaman " + page + "</span>";
			html += "</td>";
			html += "<td width='10%'>";
				html += "<span class='mr-3'><i class='ace-icon fa fa-trash-o icon-only' onclick='deletePage(" + page + ")'></i></span>";
				html += "&nbsp";
				html += "<span class='mr-3'><i class='ace-icon fa fa-plus icon-only' onclick='addQuestionFromBank(" + (page - 1) + ")'></i></span>";
			html += "</td>";
		html += "</tr>";
		document.querySelector("#toc").innerHTML += html;
		questions[page - 1] = [];
	}

    document.getElementById("btn-add-questions").onclick = function()
	{
		var checkbox = document.getElementsByClassName("add-question-checkbox");
		var page = document.querySelector("#qfb_pagenumber").value;
		for(var i = 0; i < checkbox.length; i++)
		{
			if(checkbox[i].checked)
			{
				questions[page].push(findQuestion(checkbox[i].id));
			}
		}
		//document.getElementById("modal_qfb").close();
		$('#modal_qfb').modal('hide');
    }

    document.getElementById("check-all").onchange = function()
	{
		var checkbox = document.getElementsByClassName("add-question-checkbox");
		var checked = this.checked;
		if(checked)
		{
			for(var i = 0; i < checkbox.length; i++)
			{
				checkbox[i].checked = true;
			}
		}
		else 
		{
			for(var i = 0; i < checkbox.length; i++)
			{
				checkbox[i].checked = false;
			}
		}
    }
		
    function refreshPage(op)
    {
		if(op == "get_konfigurasi")
		{
			getkonfigurasipenyajianujian();
		}
		
		//menampilkan hasil retrieve
		var html = "";
		for(var i = 0; i < questions.length; i++)
		{
			html += "<tr style='background-color: #f2f5fa;' id='page-" + i + "'>"
				html += "<td width='10%'>";
					html += "<span class='mr-3'><i class='ace-icon fa fa-folder-o icon-only' onclick='showDetail(" + i + ")' ></i></span>";
					html += "&nbsp";
					html += "<span class='badge badge-success' id='page-number-" + (i + 1) +"'>" + (i + 1) + "</span>";				
				html += "</td>";
				html += "<td width='80%'>";
					html += "<span id='page-span-number-" + (i + 1) + "'>Halaman " + (i + 1) + "</span>";
				html += "</td>";
				html += "<td width='10%'>";
					html += "<span class='mr-3'><i class='ace-icon fa fa-trash-o icon-only' onclick='deletePage(" + i + ")'></i></span>";
					html += "&nbsp";
					html += "<span class='mr-3'><i class='ace-icon fa fa-plus icon-only' onclick='addQuestionFromBank(" + i + ")'></i></span>";
				html += "</td>";
			html += "</tr>";
		}
		document.getElementById("toc").innerHTML = html;
    }
	
    function questionBank()
    {		
	    listSoal();
		
		//tampilkan list soal
		var html = "";
		for(var i = 0; i < question_bank.length; i++)
		{
			html += "<tr>";
				html += "<td width='15%'>";
					html += "<span class='mr-2'>";
						html += "<input type='checkbox' class='add-question-checkbox' value='" + question_bank[i]['idsoal'] + "' id='" + question_bank[i]['idsoal'] + "'>";
					html += "</span>";
					html += "<span class='badge badge-secondary'></span>";
				html += "</td>";
				html += "<td>";
					html += question_bank[i]['tekssoal'];
				html += "</td>";
			html += "</tr>";
		}
		document.querySelector(".qfb_bank").innerHTML = html;
    }

    function addQuestionFromBank(page)
    {   
		document.querySelector("#qfb_pagenumber").value = page;
		document.getElementById('qfb_title').innerHTML = "Halaman " + (Number(page) + 1)  + " - Add From Question Bank";
		$('#modal_qfb').modal('show');
    }

    function findQuestion(id)
    {
		var question;
		for(var i = 0; i < question_bank.length; i++)
		{
			if(question_bank[i]['idsoal'] == id) question = question_bank[i];
		}
		return question;
    }


    function showDetail(page)
    {
		var vhtml = "";
		if(questions[page] != null)
		{
			for(var j = 0; j < questions[page].length; j++)
			{
				vhtml += "<tr>";
				vhtml += "<td width='10%'>";
				vhtml += "<span class='badge badge-primary' id='page-detail-number-" + (j + 1) + "'>" + (j + 1) + "</span>";
				vhtml += "</td>";
				vhtml += "<td width='80'>";
				vhtml += "<span>" + questions[page][j].tekssoal + "<span>";
				vhtml += "</td>";
				vhtml += "<td width='10%'>";
				vhtml += "<span class='mr-3'><i class='ace-icon fa fa-trash-o' onclick='deletePageQuestion(" + j + ")'></i></span>";
				vhtml += "</td>";
				vhtml += "</tr>";
			}
		}
		document.getElementById("qip_pagenumber").value = page;
		document.querySelector('.page-detail').innerHTML = vhtml;
		document.getElementById('qip_title').innerHTML = "Halaman " + (Number(page) + 1)  + " Questions";
		$('#modal_qip').modal('show');
    }
		
		
    function deletePage(page)
    {
		questions.splice(page, 1);
		refreshPage("ignore_konfigurasi");
    }
	
    function deletePageQuestion(id)
    {
		var page = document.getElementById("qip_pagenumber").value;
		questions[page].splice(id, 1); 
		showDetail(page);
    }


    function SaveConfiguration()
    {
		var v_params = new URLSearchParams(window.location.search);
		var v_idujian = v_params.get('id');		
		var v_data = "";
		var v_nomorhalaman = 0;
		var v_nomorsoal = 0;
		for(var i = 0; i < questions.length; i++)
		{
			v_nomorhalaman = i + 1;
			for(var j = 0; j < questions[i].length; j++)
			{
				v_nomorsoal++;
				v_data += v_idujian + "||" + v_nomorhalaman + "||" + v_nomorsoal + "||" + questions[i][j].idsoal + "||" + questions[i][j].jenissoal  + "||" + questions[i][j].namasoal + "||" + questions[i][j].tekssoal + "###";
			}
		}
		
		$.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax
		({
			type: 'POST',
			url: '{{ route("admincontroller.do_inputkonfigurasipenyajianujian") }}',
			data: {post_data:v_data},
			success:function(xmlHttp)
			{
				var retbuf_memulaiprosessimpan = xmlHttp["respon_memulaiprosessimpan"];
				var retbuf_prosessimpan = xmlHttp["respon_prosessimpan"];
				var message_content = "";
				message_content += "<center>";
				message_content += "<img src='{{ env('TEMPLATE_URL') }}/assets/images/info.png' style='width:200px;height:200px;'>";
				message_content += "<br>";
				if(retbuf_memulaiprosessimpan=="mulai.gagal")
				{
					message_content += "<h2>Mulai Proses Gagal</h2>";
				}
				if(retbuf_memulaiprosessimpan=="mulai.berhasil")
				{
					message_content += "<h2>Mulai Proses Berhasil</h2>";
				}
				if(retbuf_prosessimpan=="simpan.gagal")
				{
					message_content += "<h2>Simpan Gagal</h2>";
				}
				if(retbuf_prosessimpan=="simpan.berhasil")
				{
					message_content += "<h2>Simpan Berhasil</h2>";
				}
				message_content += "</center>";
				document.getElementById("div_respon").innerHTML = message_content;
				$('#modal_respon').modal('show');
			}
		});
    }
</script>