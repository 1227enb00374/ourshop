<!DOCTYPE html>
<html lang="en">
<head>
  <title>Matrix Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
  <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

  <!--Header-part-->
  <div id="header">
    <h1><a href="<?php echo base_url();?>assets/dashboard.html">Matrix Admin</a></h1>
  </div>
  <!--close-Header-part--> 


  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li  class="dropdown" id="profile-messages" ><a title="" href="<?php echo base_url();?>assets/#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>assets/#"><i class="icon-user"></i> My Profile</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo base_url();?>assets/#"><i class="icon-check"></i> My Tasks</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo base_url();?>assets/login.html"><i class="icon-key"></i> Log Out</a></li>
        </ul>
      </li>
      <li class="dropdown" id="menu-messages"><a href="<?php echo base_url();?>assets/#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a class="sAdd" title="" href="<?php echo base_url();?>assets/#"><i class="icon-plus"></i> new message</a></li>
          <li class="divider"></li>
          <li><a class="sInbox" title="" href="<?php echo base_url();?>assets/#"><i class="icon-envelope"></i> inbox</a></li>
          <li class="divider"></li>
          <li><a class="sOutbox" title="" href="<?php echo base_url();?>assets/#"><i class="icon-arrow-up"></i> outbox</a></li>
          <li class="divider"></li>
          <li><a class="sTrash" title="" href="<?php echo base_url();?>assets/#"><i class="icon-trash"></i> trash</a></li>
        </ul>
      </li>
      <li class=""><a title="" href="<?php echo base_url();?>assets/#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
      <li class=""><a title="" href="<?php echo base_url();?>assets/login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
  </div>
  <!--close-top-Header-menu-->
  <!--start-top-serch-->
  <div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
  </div>
  <!--close-top-serch-->
  <!--sidebar-menu-->
  <div id="sidebar"><a href="<?php echo base_url();?>assets/#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li class="<?php echo current_page('active','index.php'); ?>"><a href="<?php echo base_url();?>Admin/index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li class="<?php echo current_page('active','add_category.php'); ?>"> <a href="<?php echo base_url().'Admin/add_category.php';?>"><i class="icon icon-signal"></i> <span>Add Category</span></a> </li>
      <li class="<?php echo current_page('active','add_product.php'); ?>"> <a href="<?php echo base_url().'Admin/add_product.php';?>"><i class="icon icon-signal"></i> <span>Add Product</span></a> </li>
      <li> <a href="<?php echo base_url();?>assets/widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
      <li><a href="<?php echo base_url();?>assets/tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
      <li><a href="<?php echo base_url();?>assets/grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
      <li class="submenu"> <a href="<?php echo base_url();?>assets/#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
        <ul>
          <li><a href="<?php echo base_url();?>assets/form-common.html">Basic Form</a></li>
          <li><a href="<?php echo base_url();?>assets/form-validation.html">Form with Validation</a></li>
          <li><a href="<?php echo base_url();?>assets/form-wizard.html">Form with Wizard</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url();?>assets/buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
      <li><a href="<?php echo base_url();?>assets/interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
      <li class="submenu"> <a href="<?php echo base_url();?>assets/#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
        <ul>
          <li><a href="<?php echo base_url();?>assets/index2.html">Dashboard2</a></li>
          <li><a href="<?php echo base_url();?>assets/gallery.html">Gallery</a></li>
          <li><a href="<?php echo base_url();?>assets/calendar.html">Calendar</a></li>
          <li><a href="<?php echo base_url();?>assets/invoice.html">Invoice</a></li>
          <li><a href="<?php echo base_url();?>assets/chat.html">Chat option</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="<?php echo base_url();?>assets/#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
        <ul>
          <li><a href="<?php echo base_url();?>assets/error403.html">Error 403</a></li>
          <li><a href="<?php echo base_url();?>assets/error404.html">Error 404</a></li>
          <li><a href="<?php echo base_url();?>assets/error405.html">Error 405</a></li>
          <li><a href="<?php echo base_url();?>assets/error500.html">Error 500</a></li>
        </ul>
      </li>
      <li class="content"> <span>Monthly Bandwidth Transfer</span>
        <div class="progress progress-mini progress-danger active progress-striped">
          <div style="width: 77%;" class="bar"></div>
        </div>
        <span class="percent">77%</span>
        <div class="stat">21419.94 / 14000 MB</div>
      </li>
      <li class="content"> <span>Disk Space Usage</span>
        <div class="progress progress-mini active progress-striped">
          <div style="width: 87%;" class="bar"></div>
        </div>
        <span class="percent">87%</span>
        <div class="stat">604.44 / 4000 MB</div>
      </li>
    </ul>
  </div>
  <!--sidebar-menu-->

  <!--main-container-part-->
  <div id="content">
    <?php
    if(!empty($content)){
      echo $content;
    }
    ?>
  </div>

  <!--end-main-container-part-->

  <!--Footer-part-->

  <div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="<?php echo base_url();?>assets/http://themedesigner.in">Themedesigner.in</a> </div>
  </div>

  <!--end-Footer-part-->

  <script src="<?php echo base_url();?>assets/js/excanvas.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.ui.custom.js"></script> 
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.flot.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.peity.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/matrix.js"></script> 
  <script src="<?php echo base_url();?>assets/js/matrix.dashboard.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/matrix.interface.js"></script> 
  <script src="<?php echo base_url();?>assets/js/matrix.chat.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script> 
  <script src="<?php echo base_url();?>assets/js/matrix.form_validation.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.wizard.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.uniform.js"></script> 
  <script src="<?php echo base_url();?>assets/js/select2.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/matrix.popover.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/matrix.tables.js"></script> 

  <script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
            resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
        }
      }

// resets the menu selection upon entry to this page:
function resetMenu() {
 document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
