<?php
function handle_default_route(&$variables) {
    header("HTTP/1.0 404 Not Found");
    $variables['content'] = render_template("pages", "404");
    print render_template("templates", "html", $variables);
}
function get_scriptfiles(&$variables) {
    $env_prefix = getenv("environment_prefix");
    $variables['current_url'] = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $variables['scriptfiles'] = '
    <script type="text/javascript" src="app/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="app/js/bootstrap.min.js"></script>
    <script  type="text/javascript" src="app/js/base64.js"></script>
    <script  type="text/javascript" src="app/js/cookie.js"></script>
    <script  type="text/javascript" src="app/js/all.js"></script>
   <script type="text/javascript" src="app/js/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
    <script type="text/javascript" src="app/js/lodash.compat.min.js"></script>
    <!--[if lt IE 9]><script src="app/js/html5shiv.js"></script><![endif]--> 
    <script type="text/javascript" src="app/js/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="app/js/plugins/event.swipe/jquery.event.move.js"></script> 
    <script type="text/javascript" src="app/js/plugins/event.swipe/jquery.event.swipe.js"></script> 
    <script type="text/javascript" src="app/js/breakpoints.js"></script> 
    <script type="text/javascript" src="app/js/plugins/respond/respond.min.js"></script> 
    <script type="text/javascript" src="app/js/plugins/fileinput/fileinput.js"></script> 
     <script type="text/javascript" src="app/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
     <script type="text/javascript" src="app/js/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script> 
     <script type="text/javascript" src="app/js/plugins/sparkline/jquery.sparkline.min.js"></script>
     <script type="text/javascript" src="app/js/plugins/noty/jquery.noty.js"></script>
    <script type="text/javascript" src="app/js/plugins/noty/layouts/top.js"></script>
    <script type="text/javascript" src="app/js/plugins/noty/themes/default.js"></script>
   
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
     
     <script type="text/javascript" src="app/js/plugins/blockui/jquery.blockUI.min.js"></script> 
     
     <script type="text/javascript" src="app/js/app.js"></script> 
     <script type="text/javascript" src="app/js/plugins.js"></script> 
     <script type="text/javascript" src="app/js/plugins.form-components.js"></script>
     <script>$(document).ready(function(){App.init();Plugins.init();FormComponents.init()});</script>
     <script type="text/javascript" src="app/js/custom.js"></script> 
    <script> var appEnvironmentPrefix = "' . $env_prefix . '" </script>';
    $variables['stylefiles'] = '
        <link href="app/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="app/css/main.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
        <link href="app/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="app/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="app/css/icons.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="app/css/fontawesome/font-awesome.min.css">
        
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
        <link href="app/css/error.css" rel="stylesheet" type="text/css" />
        <link href="app/css/login.css" rel="stylesheet" type="text/css" />';

    return $variables;
}

function handle_login(&$variables) {

    get_scriptfiles($variables);

    $variables['title'] = 'Society Login';
    $variables['script'] = '
    <script  type="text/javascript" src="app/js/manage/login.js"></script>';
    print render_template("app/view", "login", $variables);
}

function handle_home(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'Home';
    $variables['header'] = render_template('app/template', 'header', $variables);
    print render_template("app/view", "home", $variables);
}
function handle_society(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'Add Society';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script  type="text/javascript" src="app/js/manage/societymaster.js"></script>';
    print render_template("app/view", "society", $variables);
}
function handle_allsociety(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'All Society';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script type="text/javascript" src="app/js/manage/societymaster.js"></script>';
    print render_template("app/view", "allsociety", $variables);
}
function handle_tax(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'Add Tax Details';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script  type="text/javascript" src="app/js/manage/societymaster.js"></script>';
    print render_template("app/view", "tax", $variables);
}
function handle_area(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'Add Area Details';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script  type="text/javascript" src="app/js/manage/societymaster.js"></script>';
    print render_template("app/view", "area", $variables);
}
function handle_societycontact(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'Add Area Details';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script  type="text/javascript" src="app/js/manage/societymaster.js"></script>';
    print render_template("app/view", "society-contact", $variables);
}
function handle_societyAddress(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'Add Area Details';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script  type="text/javascript" src="app/js/manage/societymaster.js"></script>';
    print render_template("app/view", "society-address", $variables);
}
function handle_allproperty(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'All Property';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script type="text/javascript" src="app/js/manage/propertymaster.js"></script>';
    print render_template("app/view", "allproperty", $variables);
}
function handle_property(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'Add Property';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script type="text/javascript" src="app/js/manage/propertymaster.js"></script>';
    print render_template("app/view", "property", $variables);
}
function handle_allmember(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'All Memmbers';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script type="text/javascript" src=""></script>';
    print render_template("app/view", "allmember", $variables);
}
function handle_member(&$variables) {

    get_scriptfiles($variables);
    $variables['title'] = 'All Memmbers';
    $variables['header'] = render_template('app/template', 'header', $variables);
    $variables['script'] = '
    <script type="text/javascript" src=""></script>';
    print render_template("app/view", "member", $variables);
}

function alter_routes(&$routes) {
    $routes[null] = "handle_login";
    $routes['home'] = "handle_home";
    $routes['society'] = "handle_society";
    $routes['allsociety'] = "handle_allsociety";
    $routes['tax'] = "handle_tax";
    $routes['area'] = "handle_area";
    $routes['society-contact'] = "handle_societycontact";
    $routes['society-address'] = "handle_societyAddress";
    $routes['allproperty'] = "handle_allproperty";
    $routes['property'] = "handle_property";
    $routes['allmember'] = "handle_allmember";
    $routes['member'] = "handle_member";
    
}
