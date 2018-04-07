<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">Area Details</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">

            <div class="col-md-6">
                <div class="widget box">
                    <form id="frmareadetails">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Area Details</h4>
                        </div>
                        <div class="widget-content">

                            <div class="form-group">
                                <label class="control-label">Select Society:</label>
                                <select name="SocietyID" class="form-control SocietyID" required="">

                                </select>                        
                            </div>
                            <div class="form-group">
                                <label class="control-label">Area Type:</label>
                                <select name="AreaType" class="form-control" required="">
                                    <option value="Plot Area">Plot Area</option>
                                    <option value="Built Up Area">Built Up Area</option>
                                    <option value="Parks/Open Area">Parks/Open Area</option>
                                </select>                        
                            </div>
                            <div class="form-group">
                                <label class="control-label">Area UOM:</label>
                                <select name="AreaUOM" class="form-control" required="">
                                    <option value="Sq.Mtr">Sq.Mtr</option>
                                    <option value="Sq.Ft">Sq.Ft</option>
                                    <option value="Acre">Acre</option>
                                    <option value="Nos">Nos</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Original Area:</label>
                                <input type="text" name="OriginalArea" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Revised Area:</label>
                                <input type="text" name="RevisedArea" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">CIA:</label>
                                <input type="text" name="CIA" class="form-control" required="">
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