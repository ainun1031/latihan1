<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Halaman Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/font-awesome.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace-part2.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace-rtl.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="{{ env('TEMPLATE_URL') }}/assets/css/ace-ie.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/html5shiv.js"></script>
		<script src="{{ env('TEMPLATE_URL') }}/assets/js/respond.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Aplikasi</span>
									<span class="white" id="id-text2">USM</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; YPTII</h4>
							</div>
							<div class="space-6"></div>
							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>
											<div class="space-6"></div>
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" id='textbox_username' class="form-control" placeholder="Username" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" id='textbox_password' class="form-control" placeholder="Password" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>
												<div class="space"></div>
												<div class="clearfix">
													<input type="submit" onclick="do_login()" id='tombol_login' value='Login' class="width-35 pull-right btn btn-sm btn-primary">
												</div>
												<div class="space-4"></div>
											</fieldset>
											<div id='div_respon'></div>
										</div><!-- /.widget-main -->
										<div class="toolbar clearfix">
											<div>
												&nbsp
											</div>
											<div>
												<a href="/registrasi" class="user-signup-link">
													Registrasi
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
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

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>


<script src="{{ env('LIBAJAX_URL') }}/plugins/jquery/jquery.min.js"></script>
<script>

   function do_login()
   {
      var vusername;
      var vpassword;
      vusername = document.getElementById("textbox_username").value;
	  vpassword = document.getElementById("textbox_password").value;
      $.ajaxSetup
	  ({
            headers: 
			{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
      $.ajax
	  ({
            type:'POST',
            url:'{{ route("indexcontroller.do_login") }}',
            data: {post_username:vusername,post_password:vpassword},
            success:function(xmlHttp)
			{
                var len = 0;
                if(xmlHttp["respon"] != null)
				{
                    len = xmlHttp["respon"].length;
                }
                if(len > 0)
				{
                    var retbuf = xmlHttp["respon"];
					if(retbuf=="admin.tampilkan_list")
					{
						window.location = "http://127.0.0.1:8000/admin/list"
					}
					if(retbuf=="nonadmin.tampilkan_list")
					{
						window.location = "http://127.0.0.1:8000/nonadmin/list"
					}
					if(retbuf=="login.gagal")
					{
						document.getElementById("div_respon").innerHTML = "<div class='alert alert-danger'><p>Login gagal</p></div>";
					}
                }
            }
      });
   }
</script>