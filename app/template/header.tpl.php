<!DOCTYPE html>

<html lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title><?php print_r($variables['title']); ?></title>
        <?php
        print_r($variables['stylefiles']);
        ?>


    </head>
    <body>

        <header class="header navbar navbar-fixed-top" role="banner">

            <div class="container">

                <ul class="nav navbar-nav">

                    <li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>

                </ul>

                <a class="navbar-brand" href="index"><strong>Society  </strong>Managment </a>

                <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation"> <i class="icon-reorder"></i> </a>

                <ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">

                    <li> <a href="home"> Dashboard </a> </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <!--                    <li class="dropdown">
                    
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-bell "></i> <span class="badge">5</span> </a>
                    
                                            <ul class="dropdown-menu extended notification">
                    
                                                <li class="title">
                    
                                                    <p>You have 5 new notifications</p>
                    
                                                </li>
                    
                                                <li>
                    
                                                    <a href="javascript:void(0);"> <span class="label label-success"><i class="icon-plus"></i></span> <span class="message">New user registration.</span> <span class="time">1 mins</span> </a>
                    
                                                </li>
                    
                                                <li>
                    
                                                    <a href="javascript:void(0);"> <span class="label label-danger"><i class="icon-warning-sign"></i></span> <span class="message">High CPU load on cluster #2.</span> <span class="time">5 mins</span> </a>
                    
                                                </li>
                    
                                                <li>
                    
                                                    <a href="javascript:void(0);"> <span class="label label-success"><i class="icon-plus"></i></span> <span class="message">New user registration.</span> <span class="time">10 mins</span> </a>
                    
                                                </li>
                    
                                                <li>
                    
                                                    <a href="javascript:void(0);"> <span class="label label-info"><i class="icon-bullhorn"></i></span> <span class="message">New items are in queue.</span> <span class="time">25 mins</span> </a>
                    
                                                </li>
                    
                                                <li>
                    
                                                    <a href="javascript:void(0);"> <span class="label label-warning"><i class="icon-bolt"></i></span> <span class="message">Disk space to 85% full.</span> <span class="time">55 mins</span> </a>
                    
                                                </li>
                    
                                                <li class="footer"> <a href="javascript:void(0);">View all notifications</a> </li>
                    
                                            </ul>
                    
                                        </li>
                    
                                        <li>
                    
                                            <a href="#" class="dropdown-toggle row-bg-toggle"> <i class="icon-resize-vertical"></i> </a>
                    
                                        </li>-->

                    <li class="dropdown user">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-male"></i> <span class="username"></span> <i class="icon-caret-down small"></i> </a>

                        <ul class="dropdown-menu profileddl">

                            <li class="walletbalance">


                            </li>

                            <li class="divider"></li>

                            <li><a href="profile"><i class="icon-user"></i> Profile</a></li>

                            <li><a href="model/logout-model?Operation=64364dfbdkvb"><i class="icon-signout"></i> Logout</a></li>

                        </ul>

                    </li>

                </ul>

            </div>

        </header>

        <div id="container">

            <div id="sidebar" class="sidebar-fixed">

                <div id="sidebar-content">


                    <ul id="nav">

                        <li class="current">

                            <a href="home"> <i class="icon-dashboard"></i> Dashboard </a>

                        </li>
                        <li class="">

                            <a href="javascript:void(0);"> <i class="icon-reorder"></i> Masters </a>

                            <ul class="sub-menu">
                                <li class="">
                                    <a href="allsociety"> <i class="icon-angle-right"></i> Society  </a>
                                </li>
                                <li class="">
                                    <a href="allproperty"> <i class="icon-angle-right"></i> Property   </a>
                                </li>
                                <li class="">
                                    <a href="allmember"> <i class="icon-angle-right"></i> Member  </a>
                                </li>
                                <li class="">
                                    <a href="allcomponent"> <i class="icon-angle-right"></i> Components  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Chart of Accounts  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Financial Year  </a>
                                </li>


                            </ul>

                        </li>
                        <li class="">

                            <a href="javascript:void(0);"> <i class="icon-reorder"></i> Operations </a>

                            <ul class="sub-menu">
                                <li class="">
                                    <a href="society"> <i class="icon-angle-right"></i> Member Property Mapping  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Transfer of Property   </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Transfer of Membership  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> NOC/ No Dues Certificate  </a>
                                </li>

                            </ul>

                        </li>
                        <li class="">

                            <a href="javascript:void(0);"> <i class="icon-reorder"></i> Financials </a>

                            <ul class="sub-menu">
                                <li class="">
                                    <a href="society"> <i class="icon-angle-right"></i> Billing setup  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Bill generation  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Show All Receipts  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Add Receipt  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Payments  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Expense Invoice  </a>
                                </li>

                            </ul>

                        </li>
                        <li class="">

                            <a href="javascript:void(0);"> <i class="icon-reorder"></i> Reports </a>

                            <ul class="sub-menu">
                                <li class="">
                                    <a href="society"> <i class="icon-angle-right"></i> Members List  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Bills/ Invoices  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Income &amp; Expenditure  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Receipt &amp; Payment  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Balance Sheet  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Members Outstanding Bills  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Supplier Outstanding Invoices  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Members Ledger  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Account Ledger  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Payment Voucher  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Receipt Vouchers  </a>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="icon-angle-right"></i> Journal Vouchers  </a>
                                </li>

                            </ul>

                        </li>










                    </ul>

                    <div class="sidebar-title"> <span>Notifications</span> </div>

                    <ul class="notifications demo-slide-in" style="display: none;">

                        <li style="display: none;">

                            <div class="col-left"> <span class="label label-danger"><i class="icon-envelope"></i></span> </div>

                            <div class="col-right with-margin"> <span class="message">Last prepaid recharge</span> <span class="time">1 day ago</span> </div>

                        </li>

                        <li style="display: none;">

                            <div class="col-left"> <span class="label label-info"><i class="icon-envelope"></i></span> </div>

                            <div class="col-right with-margin"> <span class="message">Last DTH recharge</span> <span class="time">3 hours ago</span> </div>

                        </li>

                        <li>

                            <div class="col-left"> <span class="label label-success"><i class="icon-envelope"></i></span> </div>

                            <div class="col-right with-margin"> <span class="message"><i class="icon-inr"></i> 500/- add to your wallet</span> <span class="time">3 hours ago</span> </div>

                        </li>

                    </ul>

                </div>

                <div id="divider" class="resizeable"></div>

            </div>



            <style>
                .row-bg {
                    background-color: #ffffff;
                }
                .btnmain{
                    text-align: -webkit-right;
                    width: 100%;
                    background: #f9f9f9;
                    display: -webkit-inline-box;
                    padding: 0px 56px;
                    border-bottom: white;
                    box-shadow: 0px 14px 15px -15px;
                }
                .btnmain input{
                    padding: 10px 38px;
                }
                .input-width-xlarge {
                    width: auto !important;
                }
            </style>