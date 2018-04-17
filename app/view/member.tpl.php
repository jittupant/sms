<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">Member / Add Details</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">

            <div class="col-md-12">
                <div class="widget box">
                    <form id="frmmemberdetails">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Member Details</h4>
                        </div>

                        <div class="widget-content">

                            
                               
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Select Society:</label>
                                        <select name="SocietyID" class="form-control SocietyID" required="">
                                        </select>                        
                                    </div>
                                    <div class="form-group col-md-4">
                                       
                                        <select name="MemberResidentType" class="form-control" required="">
                                            <option value="" selected="" disabled="">Member / Resident Type</option>
                                            <option value="Member">Member</option>
                                            <option value="Resident">Resident</option>
                                            <option value="Tenant">Tenant</option> 
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        
                                        <select name="Type" class="form-control" required="">
                                            <option value="" selected="" disabled="">Type</option>
                                            <option value="Temporary">Temporary</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Original">Original</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Member Registration Number:</label>
                                        <input type="text" name="MemberRegistrationNumber" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Previous Member Registration Number:</label>
                                        <input type="text" name="PreviousMemberRegistrationNumber" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <select id="own_type" name="OwnershipType" class="form-control">
                                            <option value="" selected="" disabled="">Ownership Type</option>
                                            <option value="Single">Single</option>
                                            <option value="Joint">Joint</option>
                                            <option value="Multiple">Multiple</option>
                                        </select>
                                    </div>
                               
                                
                                    <div class="form-group col-md-4">
                                        
                                        <select id="own_type" name="Salutation" class="form-control">
                                            <option value="" selected="" disabled="">Salutation</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mrs.">Mrs.</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">First Name:</label>
                                        <input type="text" name="FirstName" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Middle Name:</label>
                                        <input type="text" name="MiddleName" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Last Name:</label>
                                        <input type="text" name="LastName" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        
                                        <select name="Gender" class="form-control frmlng">
                                            <option value="" selected="" disabled="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Photograph:</label>
                                        <input type="file" name="Photograph" data-style="fileinput" required="">
                                    </div>

                                
                                    <div class="form-group col-md-4">
                                        <label class="control-label">DOB:</label>
                                        <input type="date" name="DOB" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">PAN No.:</label>
                                        <input type="text" class="form-control" name="PANNo"  required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">PAN Upload:</label>
                                        <input type="file" name="PANupload" data-style="fileinput" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">AADHAR/SSN No.:</label>
                                        <input type="text" class="form-control" name="AADHARSSNNo" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">AADHAR/SSN No.:</label>
                                        <input type="file" name="AADHARSSNUpload" data-style="fileinput" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Passport No.:</label>
                                        <input type="text" name="PassportNo" class="form-control" required="">
                                    </div>
                                
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Passport Upload:</label>
                                        <input type="file" name="PassportNoUpload" data-style="fileinput" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Mobile:</label>
                                        <input type="text" name="Mobile" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Alternate Mobile:</label>
                                        <input type="text" name="AlternateMobile" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Phone:</label>
                                        <input type="text" name="Phone" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Email:</label>
                                        <input type="text" name="Email" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Signature:</label>
                                        <input type="file" name="Signature" data-style="fileinput" required="">
                                    </div>
                                
                               
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Member Valid TO:</label>
                                        <input type="date" name="MemberValidTo" class="form-control" required="">
                                    </div>
                                     <div class="form-group col-md-4">
                                        <label class="control-label">Member Valid From:</label>
                                        <input type="date" name="MemberValidFrom" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label">Remarks:</label>
                                        <input type="text" name="Remarks" class="form-control" required="">
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