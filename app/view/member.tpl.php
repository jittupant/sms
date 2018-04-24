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
                            <div class="form-group col-md-6">
                                <label class="control-label">Select Society:</label>
                                <select name="SocietyID" class="form-control SocietyID" required="">
                                </select>                        
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Member / Resident Type:</label>
                                <select name="MemberResidentType" class="form-control" required="">
                                    <option value="" selected="" disabled="">Member / Resident Type</option>
                                    <option value="Member">Member</option>
                                    <option value="Resident">Resident</option>
                                    <option value="Tenant">Tenant</option> 
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Type:</label>
                                <select name="Type" class="form-control" required="">
                                    <option value="" selected="" disabled="">Type</option>
                                    <option value="Temporary">Temporary</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="Original">Original</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Member Registration Number:</label>
                                <input type="text" name="MemberRegistrationNumber" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Previous Member Registration Number:</label>
                                <input type="text" name="PreviousMemberRegistrationNumber" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Ownership Type:</label>
                                <select id="own_type" name="OwnershipType" class="form-control">
                                    <option value="" selected="" disabled="">Ownership Type</option>
                                    <option value="Single">Single</option>
                                    <option value="Joint">Joint</option>
                                    <option value="Multiple">Multiple</option>
                                </select>
                            </div>


                            <div class="form-group col-md-6">
                                <label class="control-label">Salutation:</label>
                                <select id="own_type" name="Salutation" class="form-control">
                                    <option value="" selected="" disabled="">Salutation</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mrs.">Mrs.</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">First Name:</label>
                                <input type="text" name="FirstName" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Middle Name:</label>
                                <input type="text" name="MiddleName" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Last Name:</label>
                                <input type="text" name="LastName" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Gender:</label>
                                <select name="Gender" class="form-control frmlng">
                                    <option value="" selected="" disabled="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Photograph:</label>
                                <input type="file" name="Photograph" data-style="fileinput" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">DOB:</label>
                                <input type="date" name="DOB" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">PAN No.:</label>
                                <input type="text" class="form-control" name="PANNo"  required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">PAN Upload:</label>
                                <input type="file" name="PANupload" data-style="fileinput" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">AADHAR/SSN No.:</label>
                                <input type="text" class="form-control" name="AADHARSSNNo" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">AADHAR/SSN No.:</label>
                                <input type="file" name="AADHARSSNUpload" data-style="fileinput" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Passport No.:</label>
                                <input type="text" name="PassportNo" class="form-control" required="">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label">Passport Upload:</label>
                                <input type="file" name="PassportNoUpload" data-style="fileinput" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Mobile:</label>
                                <input type="text" name="Mobile" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Alternate Mobile:</label>
                                <input type="text" name="AlternateMobile" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Phone:</label>
                                <input type="text" name="Phone" class="form-control" >
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Email:</label>
                                <input type="text" name="Email" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Signature:</label>
                                <input type="file" name="Signature" data-style="fileinput" required="">
                            </div>


                            <div class="form-group col-md-6">
                                <label class="control-label">Member Valid TO:</label>
                                <input type="date" name="MemberValidTo" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Member Valid From:</label>
                                <input type="date" name="MemberValidFrom" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
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
                    <form id="frmmemberaddress" style="display: none;">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Member Address Details</h4>
                        </div>

                        <div class="widget-content">
                            <div class="form-group col-md-6">
                                <label class="control-label">Select Member:</label>
                                <select name="MemberRegNo" class="form-control MemberRegNo" required="">
                                </select>                        
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Family Member Name:</label>
                                <input type="text" name="FamilyMemberName" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Gender:</label>
                                <select name="Gender" class="form-control frmlng">
                                    <option value="" selected="" disabled="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Address Type:</label>
                                <select name="AddressType" class="form-control frmlng">
                                    <option value="" selected="" disabled="">Select Address Type</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="Correspondence">Correspondence</option>
                                    <option value="Temporary">Temporary</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label">Address Line 1:</label>
                                <input type="text" class="form-control" name="AddressLine1"  required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Address Line 2:</label>
                                <input type="text" class="form-control" name="AddressLine2"  required="">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label">Locality:</label>
                                <input type="text" class="form-control" name="Locality" required="">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label">District:</label>
                                <input type="text" name="District" class="form-control" required="">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label">City:</label>
                                <input type="text" class="form-control" name="City" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">State:</label>
                                <input type="text" name="State" class="form-control" >
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Country:</label>
                                <input type="text" name="Country" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">PinCode:</label>
                                <input type="text" name="PinCode" class="form-control" required="">
                            </div>

                        </div>
                        <div class="widget-footer">
                            <p class="btnmain">
                                <input type="submit" id="btn-load btnmain" class="btn btn-primary" value="Submit"/>
                            </p>
                        </div>
                    </form>
                    <form id="frmMemberFamilyDetails" style="display: none;">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Member Family Details</h4>
                        </div>

                        <div class="widget-content">
                            <div class="form-group col-md-6">
                                <label class="control-label">Select Member:</label>
                                <select name="MemberRegNo" class="form-control MemberRegNo" required="">
                                </select>                        
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Family Member Name:</label>
                                <input type="text" name="FamilyMemberName" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Gender:</label>
                                <select name="Gender" class="form-control frmlng">
                                    <option value="" selected="" disabled="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Relationship with Member:</label>
                                <select name="Gender" class="form-control frmlng">
                                    <option value="" selected="" disabled="">Select Relationship</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Friend">Friend</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Photograph:</label>
                                <input type="file" name="Photograph" data-style="fileinput" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Signature:</label>
                                <input type="file" name="Signature" data-style="fileinput" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">DOB:</label>
                                <input type="date" name="DOB" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Age:</label>
                                <input type="number" name="Age" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">PAN No.:</label>
                                <input type="text" class="form-control" name="PANNo"  required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">PAN Upload:</label>
                                <input type="file" name="PANupload" data-style="fileinput" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">AADHAR/SSN No.:</label>
                                <input type="text" class="form-control" name="AADHARSSNNo" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">AADHAR/SSN No.:</label>
                                <input type="file" name="AADHARSSNUpload" data-style="fileinput" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Passport No.:</label>
                                <input type="text" name="PassportNo" class="form-control" required="">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label">Passport Upload:</label>
                                <input type="file" name="PassportNoUpload" data-style="fileinput" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Phone:</label>
                                <input type="text" name="Phone" class="form-control" >
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Email:</label>
                                <input type="text" name="Email" class="form-control" required="">
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