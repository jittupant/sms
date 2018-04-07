<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">Member / Resident Details</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">

            <div class="col-md-12">
                <div class="widget box">
                    <form id="frmmemberdetails">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Member / Resident Details</h4>
                        </div>

                        <div class="widget-content">

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Member / Resident Type:</label>
                                        <input type="text" name="MemberResidentType" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Type:</label>
                                        <input type="text" name="Type" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Member Registration Number:</label>
                                        <input type="text" name="SocietyRegistrationNumber" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Previous Member Registration Number:</label>
                                        <input type="date" name="PreviousMemberRegistrationNumber" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Ownership Type:</label>
                                        <input type="text" name="OwnershipType" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Salutation:</label>
                                        <input type="date" name="Salutation" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">First Name:</label>
                                        <input type="text" name="FirstName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Middle Name:</label>
                                        <input type="text" name="MiddleName" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Last Name:</label>
                                        <input type="date" name="LastName" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gender:</label>
                                        <input type="date" name="Gender" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">DOB:</label>
                                        <input type="text" name="DOB" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">PAN No.:</label>
                                        <input type="text" name="PANNo" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">AADHAR/SSN No.:</label>
                                        <input type="text" name="AADHARSSNNo" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Passport No.:</label>
                                        <input type="text" name="PassportNo" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Mobile:</label>
                                        <input type="text" name="Mobile" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Alternate Mobile:</label>
                                        <input type="text" name="AlternateMobile" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone:</label>
                                        <input type="text" name="Phone" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email:</label>
                                        <input type="text" name="Email " class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Member Valid From:</label>
                                        <input type="file" name="MemberValidFrom" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Pincode:</label>
                                        <input type="text" name="Pincode" class="form-control" required="">
                                    </div>
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