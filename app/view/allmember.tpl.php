<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">All Members</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">
            <div class="tabbable tabbable-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#MemberDetails" data-toggle="tab">Member / Resident Details</a>
                    </li>
                   <li>
                        <a href="#AddressDetails" data-toggle="tab">Address Details</a>
                    </li>
                     <li>
                        <a href="#FamilyDetails" data-toggle="tab">Family Details</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="MemberDetails">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Member / Resident Details</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="member">
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
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tblallmember" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Society</th>
                                            <th>Photograph</th>
                                            <th>First Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Member Registration Numbers</th>
                                            <th>Status</th>
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
                                <h4><i class="icon-reorder"></i> </h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="member#AddressDetails">
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
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tblmemberaddress" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Society</th>
                                            <th>Member Reg No</th>
                                            <th>Family Member Name</th>
                                            <th>Address Type</th>
                                            <th>Address</th>
                                           

                                        </tr>
                                    </thead>
                                    <tbody> 

                                    </tbody> 
                                </table> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="FamilyDetails">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Family Details</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="member#FamilyDetails">
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
                                            <th>ResidentTypeDbKey</th>
                                            <th>Address Number</th>
                                            <th>Address Type</th>
                                            <th>Locality</th>
                                            <th>City</th>
                                            <th>State</th>
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