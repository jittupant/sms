<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">Society</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">
            <div class="col-md-6">
                <div class="widget box">
                    <form id="frmtaxdetails">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Tax Details</h4>
                        </div>
                        <div class="widget-content">

                            <div class="form-group">
                                <label class="control-label">Select Society:</label>
                                <select name="SocietyID" class="form-control SocietyID" required="">

                                </select>                        
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tax Type:</label>
                                <select name="TaxType" class="form-control" required="">
                                    <option value="VAT">VAT</option>
                                    <option value="Service Tax">Service Tax</option>
                                    <option value="IGST">IGST</option>
                                    <option value="SGST">SGST</option>
                                    <option value="I E CODE">I E CODE</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Applicability:</label>
                                <select name="Applicability" class="form-control" required="">
                                    <option value="INDIA">INDIA</option>
                                    <option value="State">State</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Name Of The State:</label>
                                <input type="text" name="NameOfTheState" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Registration Number:</label>
                                <input type="text" name="RegistrationNumber" class="form-control" required="">
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