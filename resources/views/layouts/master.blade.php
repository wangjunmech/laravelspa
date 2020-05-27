<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel-SPA</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/css/app.css">

</head>
<body class="hold-transition sidebar-mini ">
<div class="wrapper" id="app" @click="sessionListener()" @mousemove="sessionListener()">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
    <div class="">
      <div class="input-group input-group-sm">
        <!-- <input class="form-control form-control-navbar" type="search" v-model="searchStr" @keyup.enter="searchFun" placeholder="Search" aria-label="Search"> -->
        <input class="form-control form-control-navbar" type="search" v-model="searchStr" @keyup="searchFunIns" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" @click="searchFunIns">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <p></p>
      </div>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class=" p-2">
        <a href="#" @click.prevent="globalPrint()">
          <i class="fa fa-print"></i>
        </a>
      </li>
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <!-- 修改侧边栏颜色 -->
<!-- CSS文件：D:\PHP\WWW\laravel\laravelspa\node_modules\admin-lte\dist\css -->

  <!-- <aside class="main-sidebar sidebar-mini cusbg"> -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/images/motor.png" alt="LaravelSPA" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light ">{{ config('app.name', 'LaravelSPA') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/virus.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }} </a>
        </div>
      </div>

         <!-- Sidebar Menu -->
      <nav id="menuLeft" class="mt-2 " >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt blue"></i>
              <p>
                Dashboard                
                <i class="fas fa-angle-left right"></i>                
                <span class="badge badge-info right">6</span>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/users" class="nav-link ">
                  <span>
                  <i class="fa fa-users nav-icon"></i>
                  users</span>
                </router-link>
          
              </li>
              <li class="nav-item">
                <a href="./studypages/VueStudy.html" class="nav-link">               
                  <p>
                  <i class="fa fa-cubes"></i>
                  VueStudy</p>
                  </a>          
              </li>
              <li class="nav-item">
                <router-link to="/passportdemo" class="nav-link">
                  <i class="fa fa-key"></i>
                  <p>Passport demo</p>
                </router-link>          
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-laptop red"></i>
              <p>
                Works          
                <i class="fas fa-angle-left right"></i>                
                <span class="badge badge-info right">6</span>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/moldlist" class="nav-link ">
                  <span>
                  <i class="fa fa-th-large"></i>
                  MoldList</span>
                </router-link>
          
              </li>
 

            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy indigo"></i>
              <p>
                StudyExamples
                <i class="fas fa-angle-left right"></i>                
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/studypages/guessNum.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>guessNum.php</p>
                </a>          
              </li>

              <li class="nav-item">
                <a href="/Audio.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Audio/Video</p>
                </a>          
              </li>
              
              <li class="nav-item">
                <router-link to="/autofocus" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Autofocus Example</p>
                </router-link>          
              </li>
              
              <li class="nav-item">
                <router-link to="/ref" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ref</p>
                </router-link>          
              </li>
              
              <li class="nav-item">
                <router-link to="/loadingStyle" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LoadingStyle</p>
                </router-link>          
              </li>
              
              <li class="nav-item">
                <router-link to="/uploadfiles" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload files</p>
                </router-link>          
              </li>
              
              <li class="nav-item">
                <router-link to="/loadimgs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload loadimgs</p>
                </router-link>          
              </li>
              
              <li class="nav-item">
                <router-link to="/addlink" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Links to words</p>
                </router-link>          
              </li>
              
              <li class="nav-item">
                <a href="./studypages/drag.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>dragResize</p>
                </a>          
              </li>



            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie cyan"></i>
              <p>
                References          
                <i class="fas fa-angle-left right"></i>                
                <span class="badge badge-info right">6</span>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <router-link to="/refhtml" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Html</p>
                </router-link>          
              </li>
              <li class="nav-item ">
                <router-link to="/refcss" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CSS</p>
                </router-link>          
              </li>

              <li class="nav-item ">
                <router-link to="/refjs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Javascript</p>
                </router-link>          
              </li>
              
              <li class="nav-item ">
                <router-link to="/refphp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PHP</p>
                </router-link>          
              </li>
              
              <li class="nav-item ">
                <router-link to="/refother" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colors</p>
                </router-link>          
              </li>
              
              <li class="nav-item ">
                <router-link to="/clickcopy" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Click to Copy Color</p>
                </router-link>          
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit green"></i>
              <p>
                Study Notes          
                <i class="fas fa-angle-left right"></i>                
                <span class="badge badge-info right">6</span>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <router-link to="/studynote" class="nav-link">
                  <i class="fa fa-bars"></i>
                  <p>Notes</p>
                </router-link>          
              </li>
            <li class="nav-item">
                <router-link to="/rdkp" class="nav-link">
                  <i class="fa fa-rocket yellow"></i>
                  <p>Reading Keeper</p>
                </router-link>          
              </li>
            <li class="nav-item">
                <router-link to="/readingrec" class="nav-link">
                  <i class="fa fa-rocket yellow"></i>
                  <p>My reading</p>
                </router-link>          
              </li>
            <li class="nav-item">
                <router-link to="/vrecorder" class="nav-link">
                  <i class="fa fa-rocket yellow"></i>
                  <p>Recorder</p>
                </router-link>          
              </li>
            <li class="nav-item">
                <router-link to="/vrecorder2" class="nav-link">
                  <i class="fa fa-rocket yellow"></i>
                  <p>Recorder2</p>
                </router-link>          
              </li>


              <li class="nav-item">
                <a href="./recorder/index.html" class="nav-link" target="_blank">
                  <i class="fa fa-rocket yellow"></i>
                  <p>Voice speech</p>
                </a>          
              </li>

             <li class="nav-item">
                <a href="./studypages/artyom.html" class="nav-link" target="_blank">
                  <i class="fa fa-rocket yellow"></i>
                  <p>artyom</p>
                </a>          
              </li>

            <li class="nav-item">
                <router-link to="/artyomjs" class="nav-link">
                  <i class="fa fa-rocket yellow"></i>
                  <p>Artyom.js</p>
                </router-link>          
              </li>

            <li class="nav-item">
                <router-link to="/vdeliver" class="nav-link">
                  <i class="fa fa-rocket yellow"></i>
                  <p>ValDeliver</p>
                </router-link>          
              </li>

            <li class="nav-item">
                <router-link to="/email" class="nav-link">
                  <i class="fa fa-rocket yellow"></i>
                  <p>Email</p>
                </router-link>          
              </li>

            <li class="nav-item">
                <router-link to="/filehandler" class="nav-link">
                  <i class="fa fa-rocket yellow"></i>
                  <p>FileHandler</p>
                </router-link>          
              </li>



            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table green"></i>
              <p>
                DependancesTables          
                <i class="fas fa-angle-left right"></i>                
                <span class="badge badge-info right">6</span>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <router-link to="/phppack" class="nav-link">
                  <img src="/logos/php.jpg" alt="无图片显示" style="width: 30px;height: 30px">
                  <p>PHP</p>
                </router-link>
          
              </li>
              <li class="nav-item ">
                <router-link to="/jspack" class="nav-link">
                  <img src="/logos/js.jpg" alt="无图片显示" style="width: 30px;height: 30px">
                  <p>JS</p>
                </router-link>
          
              </li>
          
              </li>
              <li class="nav-item ">
                <router-link to="/otherpack" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Other</p>
                </router-link>
          
              </li>
              <li class="nav-item ">
                <router-link to="/memorandum" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Memorandum</p>
                </router-link>
          
              </li>
             </ul>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-space-shuttle red"></i>
              <p>
                Tools          
                <i class="fas fa-angle-left right"></i>                
                <span class="badge badge-info right">6</span>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./phpinfo.php" class="nav-link" target="_blank">
                  <img src="/logos/php.jpg" alt="无图片显示" style="width: 30px;height: 30px">
                  <p>phpinfo</p>
                </a>          
              </li>

             </ul>
              
        <li class="nav-item">
                <router-link to="/profile" class="nav-link">
                  <i class="fa fa-user fa-fw yellow"></i>
                  <p>Profile          
                <i class="fas fa-angle-left right"></i>                
                <span class="badge badge-info right">6</span>
              </p>
                </router-link>          
              </li>
        <li class="nav-item">
        <a href="/logout" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" class="nav-link btn btn-danger"><i class="nav-icon fas fa-power-off"></i> <p>
                LogOut
              </p></a> 
        <form id="logout-form" action="/logout" method="POST" style="display: none;"><input type="hidden" name="_token" value="4cJYPte4b8DXT1d7L5b3sdrxuOh8F1Gg395I2VIx">@csrf</form>
        </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <router-view>         
        </router-view>       
        <vue-progress-bar></vue-progress-bar>
<!--         <div>
          <div>测试组件progressbar</div>
            <expc></expc>
            <progressbar></progressbar>
        </div> -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-<span id='year'></span>  


      <a href="https://www.qualicrown.com">QualicrownEngineering</a></strong> All rights reserved.
  </footer>
</div>
      <script type="text/javascript">
        function getYear(){
            var time = new Date(); //当前时间戳 
            var year = time.getFullYear();//当前年份 
            var month = time.getMonth()+1; //当前月份
            var Same_day = time.getDate(); //当前月份几号
            var time1 = new Date(year,month,1-1);
            var Last_day = time1.getDate();//当前月份的最后一天
            var week = new Date(year,month-1,1).getDay();//获取当月1号在周几
            time.setMonth(5)//设置月份5代表六月份   
            return year;
        }
        var y=document.getElementById('year');
        y.innerText=getYear();
        // document.write(getYear());

        // ***********设置左侧导航菜单栏显示子菜单的数量
        function setMenubadgeNum(){
          var nav = document.getElementById('menuLeft');
          var navtree = nav.getElementsByClassName('has-treeview');
          var navtreeNum = navtree.length;
          for(var n=0;n<navtreeNum;n++){  
          var submenu = navtree[n].getElementsByClassName('nav-item');
          var submenuNum = submenu.length;
          // console.log(submenuNum+'****')
          var showNum = navtree[n].getElementsByClassName('badge-info');
          showNum[0].innerText=submenuNum;
          }

        }
        setMenubadgeNum()


        // console.log(navtreeNum+'++++++++'+submenuNum);

        // ************************
        function copyToClipboard(txt) {
           if (window.clipboardData) {
            window.clipboardData.clearData();
            clipboardData.setData("Text", txt);
            alert("复制成功！");
         
           } else if (navigator.userAgent.indexOf("Opera") != -1) {
            window.location = txt;
           } else if (window.netscape) {
            try {
             netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
            } catch (e) {
             alert("被浏览器拒绝！\n请在浏览器地址栏输入'about:config'并回车\n然后将 'signed.applets.codebase_principal_support'设置为'true'");
            }
            var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
            if (!clip)
             return;
            var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
            if (!trans)
             return;
            trans.addDataFlavor("text/unicode");
            var str = new Object();
            var len = new Object();
            var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
            var copytext = txt;
            str.data = copytext;
            trans.setTransferData("text/unicode", str, copytext.length * 2);
            var clipid = Components.interfaces.nsIClipboard;
            if (!clip)
             return false;
            clip.setData(trans, null, clipid.kGlobalClipboard);
            alert("复制成功！");
           }
          }





      </script>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
<!-- jQuery -->
<!-- ************* 为啥引入会在控制台报错(SyntaxError: expected expression, got '<')*********** -->
<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.min.js"></script> -->


</body>
</html>
