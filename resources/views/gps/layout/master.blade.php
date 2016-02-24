<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Validation | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    
    {!!Html::style('admin/css/bootstrap.min.css')!!}
    <!-- bootstrap theme -->
    {!!Html::style('admin/css/bootstrap-theme.css')!!}
    <!--external css-->
    <!-- font icon -->
    {!!Html::style('admin/css/elegant-icons-style.css')!!}
    {!!Html::style('admin/css/font-awesome.min.css')!!}
    <!-- Custom styles -->
    {!!Html::style('admin/css/style.css')!!}
    {!!Html::style('admin/css/style-responsive.css')!!}

    {!!Html::style('admin/css/jquery-ui-1.10.4.min.css')!!}

    {!!Html::style('admin/dist/css/select2.css')!!}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class=""> 
  @include('gps.include.header') 
  @include('gps.include.sidebar')      
  <!--main content start-->
  <section id="main-content">
  <section class="wrapper">
  @yield('content')
  <!-- wrapper section end -->
  </section>
  <!--main content end-->
  </section>
  <!-- container section end -->
  </section>
      <!-- javascripts -->
    {!!Html::script('admin/js/jquery.js')!!}
    {!!Html::script('admin/js/bootstrap.min.js')!!}
    {!!Html::script('//code.jquery.com/ui/1.11.4/jquery-ui.js')!!}
    <!-- nice scroll -->
    {!!Html::script('admin/js/jquery.scrollTo.min.js')!!}
    {!!Html::script('admin/js/jquery.nicescroll.js')!!}
    <!-- jquery validate js -->
    {!!Html::script('admin/js/jquery.validate.min.js')!!}
    <!-- custom form validation script for this page-->
    {!!Html::script('admin/js/form-validation-script.js')!!}

    {!!Html::script('admin/dist/js/select2.js')!!}
    <!--custome script for all page-->
    {!!Html::script('admin/js/scripts.js')!!}  


  </body>
</html>
