<?php include 'connection.php'; ?>
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= 'www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
		<!-- End Google Tag Manager -->
		<meta charset="utf-8" />
		<title>BRTS | News</title>
		<meta name="description" content="Basic datatables examples" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="theme/html/demo1/dist/assets/plugins/custom/datatables/datatables.bundle9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="theme/html/demo1/dist/assets/plugins/global/plugins.bundle9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
		<link href="theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
		<link href="theme/html/demo1/dist/assets/css/style.bundle9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="theme/html/demo1/dist/assets/css/themes/layout/header/base/light9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
		<link href="theme/html/demo1/dist/assets/css/themes/layout/header/menu/light9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
		<link href="theme/html/demo1/dist/assets/css/themes/layout/brand/dark9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
		<link href="theme/html/demo1/dist/assets/css/themes/layout/aside/dark9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/logos/favicon.ico" />
		<!-- Hotjar Tracking Code for keenthemes.com -->
		<script>(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1070954,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index-2.html">
				<img alt="Logo" src="theme/html/demo1/dist/assets/media/logos/logo-light.png" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<?php include'sidemenu.php'; ?>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<?php include 'header.php'; ?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">News</h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item">
												<a href="dashboard.php" class="text-muted">Dashboard</a>
											</li>
											<li class="breadcrumb-item">
												<a href="news.php" class="text-muted">News</a>
											</li>
											
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								
								<!--end::Notice-->
								<!--begin::Card-->
					
								<!--end::Card-->
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">News
											</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="add news.php" class="btn btn-primary font-weight-bolder">
											<i class="la la-plus"></i>Add news</a>
											<!--end::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-separate table-head-custom">
											<thead>
												<tr>
													<th>news id</th>
													<th>title</th>
													<th>description</th>
													<th>news image</th>
													<th>news_datetime</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>

												<?php
												$count=1;
												$result = mysqli_query($conn,"select * from tbl_news") or die(mysqli_error($conn));
												while($row=mysqli_fetch_assoc($result))
												{
												?>

												   <tr>
													<td><?php echo $count; $count++; ?></td>
													<td><?php echo $row["Title"] ?></td>
													<td><?php echo $row["Description"] ?></td>
													<td><img height="100px" width="150px" src="uploads/news/<?php echo $row["News_img"] ?>"></td>
													<td><?php echo $row["News_datetime"] ?></td>


													<td style="width:30%;">
														<a href="update_news.php?NewsId=<?php echo $row['News_id']; ?>" class="btn btn-sm btn-primary">Edit</a>
														<a href="#" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $row["News_id"]; ?>"class="btn btn-sm btn-danger btn-delete">Delete</a>
														<a href="#" class="btn btn-sm btn-info">View More</a>
													</td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<?php include 'Footer.php'; ?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<!--end::Chat Panel-->
		<!--begin::Scrolltop-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete ?
            </div>
            <div class="modal-footer">
            <form method="post">
            	<input type="hidden" name="deleteid" id="deleteid" />
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">No</button>
                <button type="submit" name="btndelete" class="btn btn-primary font-weight-bold">Yes</button>
            </form>
            </div>
        </div>
    </div>
</div>

		<?php
			if(isset($_POST["btndelete"]))
			{
				$id = $_POST["deleteid"];
				$result = mysqli_query($conn, "delete from tbl_news where News_id='$id'") or die(mysqli_error($conn));
				if($result == true)
				{
					echo "<script>window.location='news.php'</script>";
				}
			}
		?>
		
		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="theme/html/demo1/dist/assets/plugins/global/plugins.bundle9cd7.js?v=7.1.5"></script>
		<script src="theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle9cd7.js?v=7.1.5"></script>
		<script src="theme/html/demo1/dist/assets/js/scripts.bundle9cd7.js?v=7.1.5"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="theme/html/demo1/dist/assets/plugins/custom/datatables/datatables.bundle9cd7.js?v=7.1.5"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="theme/html/demo1/dist/assets/js/pages/crud/datatables/basic/basic9cd7.js?v=7.1.5"></script>
		<script>
			$(document).ready(function(){
				$(".btn-delete").click(function(){
					// alert("hello");
					var id = $(this).attr("data-id");
					// alert(id);
					$("#deleteid").val(id);
				})
			})
		</script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/crud/datatables/basic/basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 05:22:58 GMT -->
</html>