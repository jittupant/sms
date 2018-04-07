<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">All Society</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">
            <div class="tabbable tabbable-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#BasicDetails" data-toggle="tab">Basic Details</a>
                    </li>
                    <li>
                        <a href="#TaxDetails" data-toggle="tab">Tax Details</a>
                    </li>
                    <li>
                        <a href="#AreaDetails" data-toggle="tab">Area Details</a>
                    </li>
                    <li>
                        <a href="#ContactDetails" data-toggle="tab">Contact Details</a>
                    </li>
                    <li>
                        <a href="#AddressDetails" data-toggle="tab">Address Details</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="BasicDetails">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Basic Details</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="society">
                                            <span class="btn btn-xs">
                                                <i class="icon-plus"></i>Add New
                                            </span>
                                        </a>
                                        <span class="btn btn-xs widget-collapse">
                                            <i class="icon-angle-down"></i>
                                        </span>
                                        <span class="btn btn-xs tblallsociety-refresh">
                                            <i class="icon-refresh"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tblallsociety" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody> 

                                    </tbody> 
                                </table> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="TaxDetails">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Tax Details</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="tax">
                                            <span class="btn btn-xs">
                                                <i class="icon-plus"></i>Add New
                                            </span>
                                        </a>
                                        <span class="btn btn-xs widget-collapse">
                                            <i class="icon-angle-down"></i>
                                        </span>
                                        <span class="btn btn-xs tbltax-refresh">
                                            <i class="icon-refresh"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tbltax" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Society</th>
                                            <th>Tax Type</th>
                                            <th>Applicability</th>
                                            <th>State</th>
                                            <th>Registration</th>

                                        </tr>
                                    </thead>
                                    <tbody> 

                                    </tbody> 
                                </table> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="AreaDetails">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> </h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="area">
                                            <span class="btn btn-xs">
                                                <i class="icon-plus"></i>Add New
                                            </span>
                                        </a>
                                        <span class="btn btn-xs widget-collapse">
                                            <i class="icon-angle-down"></i>
                                        </span>
                                        <span class="btn btn-xs tblarea-refresh">
                                            <i class="icon-refresh"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tblarea" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Society</th>
                                            <th>Area Type</th>
                                            <th>Area UOM</th>
                                            <th>Original Area</th>
                                            <th>Revised Area</th>
                                            <th>CIA</th>

                                        </tr>
                                    </thead>
                                    <tbody> 

                                    </tbody> 
                                </table> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="ContactDetails">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Contact Details</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="society-contact">
                                            <span class="btn btn-xs">
                                                <i class="icon-plus"></i>Add New
                                            </span>
                                        </a>
                                        <span class="btn btn-xs widget-collapse">
                                            <i class="icon-angle-down"></i>
                                        </span>
                                        <span class="btn btn-xs tblarea-refresh">
                                            <i class="icon-refresh"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tblcontact" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Society</th>
                                            <th>Contact Type</th>
                                            <th>Name</th>
        <!--                                    <th>Address/Property No</th>-->
                                            <th>Phone</th>
                                            <th>Mobile</th>
                                            <th>MembershipNumber</th>
                                            <th>Email</th>
                                            <th>ValidFrom</th>
                                            <th>ValidTo</th>

                                        </tr>
                                    </thead>
                                    <tbody> 

                                    </tbody> 
                                </table> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="AddressDetails">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Address Details</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="society-address">
                                            <span class="btn btn-xs">
                                                <i class="icon-plus"></i>Add New
                                            </span>
                                        </a>
                                        <span class="btn btn-xs widget-collapse">
                                            <i class="icon-angle-down"></i>
                                        </span>
                                        <span class="btn btn-xs tblarea-refresh">
                                            <i class="icon-refresh"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tbladdress" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Society</th>
                                            <th>Address 1</th>
                                            <th>Address 2</th>
                                            <th>Locality</th>
                                            <th>District</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Country</th>
                                            <th>PinCode</th>


                                        </tr>
                                    </thead>
                                    <tbody> 

                                    </tbody> 
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>


    </div>

</div>
<?php
print_r($variables['scriptfiles']);
print_r($variables['script']);
?>