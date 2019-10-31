<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Digital Trinity</title>
    <!--Fav and touch icons-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/fav1.jpg" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Font-Awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Font-Awesome-4.7.0/css/font-awesome.min.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <!--custom css stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/yoma.css">

</head>

<body>
    <!--- Navbar-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light navtxt">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/images/fav1.jpg" alt="" width="25"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active t-dsh">
                    <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Dashboard <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Manager</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Alerts</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>Reports</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right ml-auto">
                <li>
                    <img style="height: 20px" src="<?php echo base_url();?>assets/images/dot.svg">
                </li>&nbsp;&nbsp;

                <li>
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </li>&nbsp;&nbsp;
                <li>
                    <i class="fa fa-power-off" aria-hidden="true"></i>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="row">
            <div class="col-md-2 mt-2">
                <div>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn submit btn-color" style="color: #fff; padding-left: 5px;">
                                    <i class="fa fa-search search-image"
                                        style="transform: rotateY(180deg);"></i>&nbsp;Search
                                </button>
                            </span>
                            <input class="form-control mr-sm-2" type="search" placeholder="Enter Site"
                                aria-label="Search" id="se-txt">
                    </form>
                </div>

                <div class="input-group1">
                    <p>
                        <button class="btn btn-color accordion-toggle accordion-toggle-styled collapsed "
                            style="color: #fff; padding-left: 8px;" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa fa-filter" style="transform: rotateY(180deg);"></i>&nbsp;filter
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                src="<?php echo base_url();?>assets/images/up.jpg" alt="up arrow" width="25">
                        </button>
                    </p>
                </div>

                <div class="collapse input-group" id="collapseExample">
                    <div class="card card-body">
                        <form class="form-inline my-2 my-lg-0"></form>

                    </div>
                </div>
            </div>

            <div class="n-checkbox loc-checkbox mt-2">
                <h5 class="loc">Location</h5>
                <form>
                    <div class="checkbox checkbox-lm">
                        <input id="cb2-1" class="styled" type="checkbox">
                        <label for="cb2-1">All Locations</label>
                    </div>

                    <div class="checkbox checkbox-lm">
                        <input id="cb2-2" class="styled" type="checkbox">
                        <label for="cb2-2">Agra</label>
                    </div>

                    <div class="checkbox checkbox-lm">
                        <input id="cb2-3" class="styled" type="checkbox">
                        <label for="cb2-3">Ahamedabad</label>
                    </div>

                    <div class="checkbox checkbox-lm">
                        <input id="cb2-4" class="styled" type="checkbox">
                        <label for="cb2-4">Andra Pradesh</label>
                    </div>

                    <div class="checkbox checkbox-lm">
                        <input id="cb2-5" class="styled" type="checkbox">
                        <label for="cb2-5">Arcot</label>
                    </div>

                    <div class="checkbox checkbox-lm">
                        <input id="cb2-6" class="styled" type="checkbox">
                        <label for="cb2-6">Assam</label>
                    </div>

                    <div class="checkbox checkbox-lm">
                        <input id="cb2-7" class="styled" type="checkbox">
                        <label for="cb2-7">Bangalore</label>
                    </div>

                    <div class="checkbox checkbox-lm">
                        <input id="cb2-8" class="styled" type="checkbox">
                        <label for="cb2-8">Chennai</label>
                    </div>

                    <div class="checkbox checkbox-lm">
                        <input id="cb2-9" class="styled" type="checkbox">
                        <label for="cb2-9">Delhi</label>
                    </div>

                    <div class="checkbox checkbox-lm">
                        <input id="cb2-10" class="styled" type="checkbox">
                        <label for="cb2-10">Gujarat</label>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-8 mt-2 tbl-data">
            <ul class="pagination">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Latest update</th>
                            <th scope="col">Site Id</th>
			    <th scope="col">Site Name</th>
                            <th scope="col">Customer</th>
			    <th scope="col">Location</th>
                            <th scope="col">Inverter</th>
                            <th scope="col">Solar</th>
                            <th scope="col">DG</th>
                            <th scope="col">Battery</th>
			    <th scope="col">Engineer Name</th>
                            <th scope="col">Solar(KW)</th>
                            <th scope="col">Bat(v)</th>
                            <th scope="col">BatSOC(%)</th>
                            <th scope="col">Load</th>
                            <th scope="col">Genset(kw)</th>
			    <th scope="col">Fuel(%)</th>
			    <th scope="col">Severity</th>
                            <th scope="col">Action</th>
                          </tr>
                    </thead>
                    <tbody>
<?php //
foreach($records as $record){
//print_r($records);exit;?>
                        <tr>
                            <td><?php echo date('d-m-Y H:i', $record['Timestamp']);?> </td>
                            <td><?php echo $record['SiteID'] ?></td>
                            <td><?php echo $record['smSitename'] ?></td>
		            <td></td>
                            <td><?php echo $record['smAddress'] ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
			    <td><?php echo $record['smTechempid'] ?></td>
                            <td><?php echo $record['SolarTotaOutputPower'] ?></td>
                            <td><?php echo $record['Sitebattvolt'] ?></td>
                            <td><?php echo $record['Batt_SOC'] ?></td>
                            <td><?php echo $record['Total_DCLoad_Current'] ?></td>
                            <td><?php echo ($record['DG_Y_Power']+$record['DG_B_Power']+$record['DG_R_Power']) ?></td>
                            <td><?php echo $record['Fuellevel_Percentage'] ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </ul>
            <div class="row text-center">
                <nav>
                    <ul class="pagination">
                        <li class="prev">
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li class="next">
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>

        <div class="col-md-2 mt-2">
            <div class="alarmstab">
                <div style="font-size: 15px; position: relative; top: 6px; left: 43px; display: inline;">Alarms</div>
                <div class="btn-group" style="float: right;">
                    <select class="form-control btn btn-default dropdown-toggle dropdown-toggle-alarm"
                        id="alarmselector" style="padding: 0px; margin-top: 6px; height: 20px" ng-show="true">
                        <option value="allChoosen">All</option>
                        <option value="inverterChoosen">Inverter</option>
                        <option value="dgChoosen">DG</option>
                        <option value="batteryChoosen">Battery</option>
                    </select>
                </div>
            </div>
            <div class="table">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Description</th>
                            <th>Aging</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Solar Charge</td>
                            <td>4:35</td>
                        </tr>
                        <tr>
                            <td>Solar Charge</td>
                            <td>4:35</td>

                        </tr>
                        <tr>
                            <td>Solar Charge</td>
                            <td>4:35</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <details>
                <summary class="alarmstab">add map here</summary>
                <p>adddddddd</p>
            </details>
        </div>
        <div>

        </div>
    </section>
    <div class="col-md-12">
        <div class="container-fluid bg-pink ct-sec">

            <div class="container">
                <div class="row">
                    <div class="y-tx">
                        <p>© DIGITAL TRINITY</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery-3.4.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
</body>
</html>
