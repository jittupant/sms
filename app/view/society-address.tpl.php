<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">Society Address</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">
            <div class="col-md-12">
                <div class="widget box">
                    <form id="frmAddressdetails">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Address Details</h4>
                        </div>
                        <div class="widget-content">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Select Society:</label>
                                <select name="SocietyID" class="form-control SocietyID" required="">

                                </select>                        
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Address Line 1:</label>
                                <input type="text" name="AddressLine1" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address Line 2:</label>
                                <input type="text" name="AddressLine2" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Locality:</label>
                                <input type="text" name="Locality" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">District:</label>
                                <input type="text" name="District" class="form-control" required="">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">City:</label>
                                <input type="text" name="City" class="form-control" required="">
                            </div>
                          
                            <div class="form-group">
                                <label class="control-label">State:</label>
                                <input type="text" name="State" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Country:</label>
                                <input type="text" name="Country" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">PinCode:</label>
                                <input type="text" name="PinCode" class="form-control" required="">
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

</div>
<?php
print_r($variables['scriptfiles']);
print_r($variables['script']);
?>