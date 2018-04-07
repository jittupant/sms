<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">Basic Details</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">

            <div class="col-md-12">
                <div class="widget box">
                    <form id="frmbasicdetails">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Basic Details</h4>
                        </div>

                        <div class="widget-content">

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name:</label>
                                        <input type="text" name="Name" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Alias Name:</label>
                                        <input type="text" name="AliasName" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Society Registration Number:</label>
                                        <input type="text" name="SocietyRegistrationNumber" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Registration Date:</label>
                                        <input type="date" name="RegistrationDate" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">RWA Registration Number:</label>
                                        <input type="text" name="RWARegistrationNumber" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">RWA Registration Date:</label>
                                        <input type="date" name="RWARegistrationDate" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Remarks:</label>
                                        <input type="text" name="Remarks" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Constructed By:</label>
                                        <input type="text" name="ConstructedBy" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Date Of Comencement Of Construction:</label>
                                        <input type="date" name="DateOfComencementOfConstruction" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Date Of Construction Completion:</label>
                                        <input type="date" name="DateOfConstructionCompletion" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Contact Number:</label>
                                        <input type="text" name="ContactNumber" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Alternate Contact Number:</label>
                                        <input type="text" name="AlternateContactNumber" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">PAN no.:</label>
                                        <input type="text" name="PANno" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">TAN no.:</label>
                                        <input type="text" name="TANno" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">FAX Number:</label>
                                        <input type="text" name="FAXNumber" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email:</label>
                                        <input type="text" name="Email" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Category:</label>
                                        <select name="Category" class="form-control frmlng">

                                            <option value="Residential" selected="">Residential</option>
                                            <option value="Commercial">Commercial</option>
                                            <option value="Others">Others</option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Photo:</label>
                                        <input type="file" name="Photo" data-style="fileinput" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Logo:</label>
                                        <input type="file" name="Logo" data-style="fileinput" required="">
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