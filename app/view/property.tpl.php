<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">Property Details</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">

            <div class="col-md-12">
                <div class="widget box">
                    <form id="frmpropertydetails">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Property Details</h4>
                        </div>
                        <div class="widget-content">

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tower:</label>
                                        <input type="text" name="Tower" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Block:</label>
                                        <input type="text" name="Block" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Floor:</label>
                                        <select name="Floor" class="form-control frmlng">
                                            <option value="GF">Ground Floor</option>
                                            <option value="MZ">Mezzanine Floor</option>
                                            <option value="1">1 Floor</option><option value="2">2 Floor</option>
                                            <option value="3">3 Floor</option><option value="4">4 Floor</option>
                                            <option value="5">5 Floor</option><option value="6">6 Floor</option>
                                            <option value="7">7 Floor</option><option value="8">8 Floor</option>
                                            <option value="9">9 Floor</option><option value="10">10 Floor</option>
                                            <option value="11">11 Floor</option><option value="12">12 Floor</option>
                                            <option value="13">13 Floor</option><option value="14">14 Floor</option>
                                            <option value="15">15 Floor</option><option value="16">16 Floor</option>
                                            <option value="17">17 Floor</option><option value="18">18 Floor</option>
                                            <option value="19">19 Floor</option><option value="20">20 Floor</option>
                                            <option value="21">21 Floor</option><option value="22">22 Floor</option>
                                            <option value="23">23 Floor</option><option value="24">24 Floor</option>
                                            <option value="25">25 Floor</option><option value="26">26 Floor</option>
                                            <option value="27">27 Floor</option><option value="28">28 Floor</option>
                                            <option value="29">29 Floor</option><option value="30">30 Floor</option>
                                            <option value="31">31 Floor</option><option value="32">32 Floor</option>
                                            <option value="33">33 Floor</option><option value="34">34 Floor</option>
                                            <option value="35">35 Floor</option><option value="36">36 Floor</option>
                                            <option value="37">37 Floor</option><option value="38">38 Floor</option>
                                            <option value="39">39 Floor</option><option value="40">40 Floor</option>
                                            <option value="41">41 Floor</option><option value="42">42 Floor</option>
                                            <option value="43">43 Floor</option><option value="44">44 Floor</option>
                                            <option value="45">45 Floor</option><option value="46">46 Floor</option>
                                            <option value="47">47 Floor</option><option value="48">48 Floor</option>
                                            <option value="49">49 Floor</option>

                                            <option value="50">50 Floor</option>    </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Property No:</label>

                                        <input type="text" name="PropertyNo" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Property Type:</label>
                                        <select class="form-control frmlng" name="PropertyType">
                                            <option>Appartment</option>
                                            <option>Parking</option>
                                            <option>Shop</option>
                                            <option>kiosk</option>
                                            <option>Plot</option>
                                            <option>Others</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Unit Type:</label>
                                        <select id="Unit Type" class="form-control frmlng" name="Unit_Type">
                                            <option>1BHK</option>
                                            <option>2BHK</option>
                                            <option>3BHK</option>
                                            <option>3BHK+S</option>
                                            <option>4BHK</option>
                                            <option>4BHK+S</option>
                                            <option>5BHK</option>
                                            <option>5BHK+S</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Parking Type:</label>
                                        <select class="form-control frmlng" name="ParkingType">
                                            <option>N/A</option>
                                            <option>Stilt</option>
                                            <option>Open<!--if prop type = parking --></option>
                                            <option>Basement</option>
                                            <option>Covered</option>
                                            <option>Back To Back</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Unit Of Measurement:</label>
                                        <select class="form-control frmlng" name="UnitOfMeasurement">
                                            <option>Sq.Mt.</option>
                                            <option>Sq.Ft.</option>
                                            <option>Nos</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Original Area:</label>
                                        <input type="date" name="OriginalArea" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Revised Area:</label>
                                        <input type="text" name="RevisedArea" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Property Display Name:</label>
                                        <input type="text" name="PropertyDisplayName" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Remarks:</label>
                                        <input type="text" name="Remarks" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Status:</label>
                                        <input type="text" name="Status" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Currency:</label>
                                        <select class="form-control frmlng" name="Currency">
                                            <option value="INR">INR</option>
                                            <option value="USD">USD</option></select>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Currency Amount:</label>
                                        <input type="text" name="CurrencyAmount" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Exchange Rate:</label>
                                        <input type="text" name="ExchangeRate" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Original Price:</label>
                                        <input type="text" name="OriginalPrice" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Revised Price:</label>
                                        <input type="text" name="RevisedPrice" class="form-control" required="">
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