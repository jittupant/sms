<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">Society Contact Details</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">
            <div class="col-md-12">
                <div class="widget box">
                    <form id="frmcontactdetails">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Contact Details</h4>
                        </div>
                        <div class="widget-content">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Select Society:</label>
                                <select name="SocietyID" class="form-control SocietyID" required="">

                                </select>                        
                            </div>
                            <div class="form-group">
                                <label class="control-label">Contact Type:</label>
                                <select name="ContactType" class="form-control">
                                <option value="1">President</option>
                                <option value="2">Secretory</option>
                                <option value="5">Accounts</option>
                                <option value="6">Security</option>
                                <option value="7">Housekeeping</option>
                                <option value="8">Electrician</option>
                                <option value="9">Plumbing</option>
                                </select>
                            </div>
                           
                            <div class="form-group">
                                <label class="control-label">Name :</label>
                                <input type="text" name="Name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address/Property No.:</label>
                                <input type="text" name="Address_PropertyNo" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Phone:</label>
                                <input type="text" name="Phone" class="form-control" required="">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Mobile:</label>
                                <input type="text" name="Mobile" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Membership Number:</label>
                                <input type="text" name="MembershipNumber" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email:</label>
                                <input type="text" name="Email" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Valid From:</label>
                                <input type="date" name="ValidFrom" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Valid To:</label>
                                <input type="date" name="ValidTo" class="form-control" required="">
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