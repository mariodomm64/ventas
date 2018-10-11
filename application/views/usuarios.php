<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>theme shared on themelock.com</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/morris.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/dropzone.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/datatables.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

    <link rel="stylesheet" href="assets/css/sweetalert.min.css">
    <link rel="stylesheet" href="assets/css/sweetalert-overrides.css">

    <!-- Page Level Stylesheets -->

</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <?=$header?>
        </header>
        <!-- Navbar End -->

        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <?=$menu;?>
        </aside>
        <!-- Sidebar End -->

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Page Header Start -->
            <?php /*
            <section class="page--header">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">E-Commerce Dashboard</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><span>Ecommerce</span></li>
                                <li class="breadcrumb-item active"><span>Dashboard</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <!-- Summary Widget Start -->
                            <div class="summary--widget">
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>

                                    <p class="summary--title">This Month</p>
                                    <p class="summary--stats text-green">2,371,527</p>
                                </div>

                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>

                                    <p class="summary--title">Last Month</p>
                                    <p class="summary--stats text-orange">2,527,371</p>
                                </div>
                            </div>
                            <!-- Summary Widget End -->
                        </div>
                    </div>

                </div>
            </section>
            */?>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <!-- Records Header Start -->
                    <div class="records--header">
                        <div class="title fa-cubes">
                            <h3 class="h3">Usuarios</h3>
                            <p>Se encontraron 34 Usuarios</p>
                        </div>

                        <div class="actions">
                            <form action="#" class="search flex-wrap flex-md-nowrap">
                                <input type="text" class="form-control" placeholder="Product Name..." required>
                                <select name="select" class="form-control">
                                    <option value="" selected>Product Category</option>
                                </select>
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>

                            <a href="#addModal" data-toggle="modal" class="addProduct btn btn-lg btn-rounded btn-warning">Agregar Producto</a>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">
                    <!-- Records List Start -->
                    <div class="records--list" data-title="PRODUCTOS">
                        <table id="recordsListView">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="not-sortable">Image</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th class="not-sortable">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" class="btn-link">#315321</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-link">
                                            <img src="assets/img/products/thumb-80x60.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-link">Baby Dress</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-link">Baby Products</a>
                                    </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td>
                                        <span class="label label-success">Approved</span>
                                    </td>
                                    <td>
                                        <div class="dropleft">
                                            <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Edit</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <a href="#" class="btn-link">#315321</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-link">
                                            <img src="assets/img/products/thumb-80x60.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-link">Baby Dress</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-link">Baby Products</a>
                                    </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td>
                                        <span class="label label-success">Approved</span>
                                    </td>
                                    <td>
                                        <div class="dropleft">
                                            <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Edit</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="btn-link">#315321</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-link">
                                            <img src="assets/img/products/thumb-80x60.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-link">Baby Dress</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-link">Baby Products</a>
                                    </td>
                                    <td>$12.00</td>
                                    <td>1</td>
                                    <td>12 June 2017</td>
                                    <td>
                                        <span class="label label-success">Approved</span>
                                    </td>
                                    <td>
                                        <div class="dropleft">
                                            <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Edit</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Records List End -->
                </div>
            </section>
            <!-- Main Content End -->


            <!-- MODALS -->

            <!-- Large Modal Start -->
            <div id="addModal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="post" name="formAdd" id="formAdd">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregar Producto</h5>

                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label>
                                                <span class="label-text">Clave interna</span>
                                                <input type="text" name="clave" id="clave" placeholder="" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <span class="label-text">Marca</span>
                                                <input type="text" name="marca" id="marca" placeholder="" class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <span class="label-text">Precio Lista</span>
                                                <input type="text" name="precio" id="precio" placeholder="" class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                                <button type="submit" class="btn btn-success" id="btnAdd">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Large Modal End -->

            

            <!-- Main Footer Start -->
            <footer class="main--footer main--footer-light">
                <p>Copyright &copy; <a href="#">TecnoSoft</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-ui.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/js/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.sparkline.min.js"></script>
    <script src="<?=base_url()?>assets/js/raphael.min.js"></script>
    <script src="<?=base_url()?>assets/js/morris.min.js"></script>
    <script src="<?=base_url()?>assets/js/select2.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-jvectormap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="<?=base_url()?>assets/js/horizontal-timeline.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.steps.min.js"></script>
    <script src="<?=base_url()?>assets/js/dropzone.min.js"></script>
    <script src="<?=base_url()?>assets/js/ion.rangeSlider.min.js"></script>
    <script src="<?=base_url()?>assets/js/datatables.min.js"></script>
    
    <script src="<?=base_url()?>assets/js/main.js"></script>
    
    <script src="<?=base_url()?>assets/js/sweetalert.min.js"></script>
    <script type="text/javascript">

        
            $("#formAdd").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                clave: "required",
                marca: "required"

            },
            // Specify validation error messages
            messages: {
                clave: "Ingrese el nombre de la obra",
                marca: "Please enter your lastname"
                
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                $.ajax({
                    url: '<?=base_url()?>/productos/agregar',
                    type: 'POST',
                    data: $(form).serialize(),
                    dataType: "json",
                    beforeSend: function () {
                        //$('#message').html("Cargando...");
                        
                    },
                    success: function(response) {
                        
                            swal({
                                title: 'Guardado',
                                text: 'Producto agregado exitosamente.',
                                imageUrl: '<?=base_url()?>assets/img/sweet-alert/custom-icon.png'
                            });
                        
                        $('#message').html(response.message);
                    }
                });
            }
        });
            /* Act on the event */
    </script>
    

    <!-- Page Level Scripts -->

    

</body>
</html>
