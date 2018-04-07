<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">All Property</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">
            <div class="tabbable tabbable-custom">
                <div class="tab-content">
                    <div class="tab-pane active" id="PropertyDetails">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Property  Details</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="property">
                                            <span class="btn btn-xs">
                                                <i class="icon-plus"></i>Add New
                                            </span>
                                        </a>
                                        <span class="btn btn-xs widget-collapse">
                                            <i class="icon-angle-down"></i>
                                        </span>
                                        <span class="btn btn-xs tblallproperty-refresh">
                                            <i class="icon-refresh"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tblallproperty" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Society Name</th>
                                            <th>Tower</th>
                                            <th>Block</th>
                                            <th>Property No</th>
                                            <th>Property Type</th>
                                            <th>Unit Type</th>
                                            <th>Status</th>
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