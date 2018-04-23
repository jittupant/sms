<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">All Component</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">
            <div class="tabbable tabbable-custom" id="viewcomponent">
                <div class="tab-content">
                    <div class="tab-pane active" id="">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Components  Details</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <a href="allcomponent#Addcomponent">
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
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tblallcomponent" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Society Name</th>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Valid From</th>
                                            <th>Valid to</th>
                                            <th>Taxability</th>
                                            <th>Tax Code</th>
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
            <div class="widget box" style="display: none;" id="addcomponentpage">
                    <form id="frmComponentdetails">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i>Add Components Details</h4>
                        </div>
                        <div class="widget-content">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Select Company:</label>
                                <select name="CompanyID" class="form-control CompanyID" required="">

                                </select>                        
                            </div>
                            <div class="form-group">
                                <label class="control-label">Select Society:</label>
                                <select name="SocietyID" class="form-control SocietyID" required="">

                                </select>                        
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Component Code:</label>
                                <input type="text" name="ComponentCode" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Component Name:</label>
                                <input type="text" name="ComponentName" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Component Valid From:</label>
                                <input type="date" name="ComponentValidFrom" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Component Valid To:</label>
                                <input type="date" name="ComponentValidTo" class="form-control" required="">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Taxability:</label>
                                <select name="Taxability" class="form-control Taxability" required="">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tax Code:</label>
                                <input type="text" name="TaxCode" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Account Code:</label>
                                <input type="text" name="AccountCode" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Cost Centre:</label>
                                <input type="text" name="CostCentre" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Remarks:</label>
                                <input type="text" name="Remarks" class="form-control" required="">
                            </div>
                            </div>
                        </div>
                        <div class="widget-footer">
                            <p class="btnmain">
                                <input type="submit" id="btn-load btnmain" class="btn btn-primary" value="Submit"/>
                            </p>
                        </div>
                    </form>
                </div>
            



        </div>


    </div>

</div>
<?php
print_r($variables['scriptfiles']);
print_r($variables['script']);
?>