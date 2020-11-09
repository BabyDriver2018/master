<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    FIBER Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/material-dashboard.css?v=2.1.2')}}"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/demo/demo.css')}}" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
		<div class="logo"><a href="#" class="simple-text logo-normal">
          FIBER
        </a>
		
		<h2 class="simple-text">Bienvenido {{ Auth::user()->name }} </h2>
		
		
		</div>
		
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="vistas/user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
	  <div class="card-header card-header-primary">
	  <div class = "row">
			<div class="col-10">
				<h4 class="card-title "></h4>
			</div>
			<a href="{{ route('logout') }}" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											{{ __('Cerrar Sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
		</div>
		<div class = "row">
			<div class="col-2">
				<h4 class="card-title "></h4>
			</div>
			<div class = "col-8">
			<form class="form-search content-search navbar-form" action="" method="post">
				<div class="input-group">
						<input placeholder="Buscar" id="search" class="form-control form-text" type="text" size="15" maxlength="128" />
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary"><span class="icon glyphicon glyphicon-search" aria-hidden="true">Buscar</span></button>
					</span>
					
				</div>
				<!--<div class="row">
					<div class="col-4">
						<input type="checkbox" name="abonado" value="nombre"> Nombre
					</div>
					<div class="col-4">
						<input type="checkbox" name="propiedad" value="propiedad"> Propiedad
					</div>
					<div class="col-2">
						<input type="checkbox" name="sector" value="sector"> Sector
					</div>
				</div>-->
			</form>
			</div>
		</div>
      </div>
	  
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <h3 class="card-title ">Registrar Cliente</h4>
                <br>
                <div>
                    <form action="../public/agregarcliente" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                {{ method_field('POST') }}
                        <div class="form-group">
                          <label >Contrato</label>
                          <input type="text" class="form-control" name="contrato"  placeholder="Ingrese Contrato " required>
                        </div>
                        <br>
                        <div class="form-group">
                          <label >Nombre/Abonado</label>
                          <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label >Propiedad</label>
                            <input type="text" class="form-control" name="propiedad"  placeholder="Ingrese Propiedad" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label >Sector</label>
                            <input type="text" class="form-control" name="sector" placeholder="Ingrese Sector" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label >Servicio</label>
                            <select class="custom-select my-2 mr-sm-2" name="servicio" >
                                <!-- Show all category of products -->
                                
                                    <option value="1">1 Mega</option>
                                    <option value="2">2 Mega</option>
                                    <option value="3">3 Mega</option>
                                
                                <!-- end show products -->
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                      </form>
                </div>
            </div>
			
			<!-- Modal Pagar-->
			<div class="modal fade" id="ModalPagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Pagar Deuda</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					
					<form action="<?php ?>" method="post">
                    <div class="row">
					
						<div class="col-md-5">
							<label>Contrato</label>
							<input type="text" name="contrato" class="form-control" value="<?php ?>" require>
							
						</div>
						<div class="col-md-5">
							<label>Nombre Cliente</label>
							<input type="text" name="abonado" class="form-control" value="" require>
							
						</div>
					
					</div>
					
					
                    <div class="row">
						<div class="col-md-5">
							<label>Propiedad</label>
							<input type="text" name="propiedad" class="form-control" value="" require>
							
						</div>
						<div class="col-md-5 ">
							<label>Sector</label>
							<input type="text" name="sector" class="form-control" value="" require>
							
						</div>
                    </div>
					
					
					
					
					
                    <div class="row">
						<div class="col-md-4">
							<label>Agencia</label>
							<input type="text" name="agencia" class="form-control" value="" require>
							
						</div>
		
						 <div class="col-md-3 ">
						 <label>   </label>
							<select class="form-control" name="estado" id="estado" value="Estado">
									<option value="default">Estado</option>
									<option value="1">Activo</option>
									<option value="0">Inactivo</option>
							</select>
							
						</div>
						<div class="col-md-3 ">
						<label>   </label>
							<select class="form-control" name="servicio" id="servicio" value="Servicio">
									<option value="default">Servicio</option>
									<option value="1Mega">1Mega</option>
									<option value="2Mega">2Mega</option>
									<option value="Television">Televisión</option>
									<option value="Trio">Trio</option>
							</select>
						</div>
					
					
					</div>
					
					
                    <div class="row">
                      
					</div>
					
					
					
                    <div class="row">
                     
                    </div>
						<input type="submit" class="btn btn-primary" value="Agregar Usuario">
                    <div class="clearfix"></div>
                  </form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Guardar</button>
				  </div>
				</div>
			  </div>
			</div>
            
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by team Lock
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script type="text/javascript" src=" {{ asset('assets/js/core/jquery.min.js') }}"></script>
  <script type="text/javascript" src=" {{ asset('assets/js/core/popper.min.js') }}"></script>
  <script type="text/javascript" src=" {{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- Plugin for the momentJs  -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/moment.min.js') }}"></script>
  <!--  Plugin for Sweet Alert -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
  <!-- Forms Validations Plugin -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/jquery-jvectormap.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/arrive.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/chartist.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script type="text/javascript" src=" {{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script type="text/javascript" src=" {{ asset('assets/js/material-dashboard.js?v=2.1.2') }}"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script type="text/javascript" src=" {{ asset('assets/demo/demo.js') }}"></script>
  <script>
function openForm() {
	window.open('nueva.html','nuevaVentana','width=300, height=400')
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
	
	// Write on keyup event of keyword input element
	$(document).ready(function(){
		$("#search").keyup(function(){
			_this = this;
			// Show only matching TR, hide rest of them
			$.each($("#mytable tbody tr"), function() {
				if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
				$(this).hide();
				else
				$(this).show();
			});
		});
	});
  </script>
</body>

</html>