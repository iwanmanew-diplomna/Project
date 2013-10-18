
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to our restaurant</title>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="container-fluid">





            <div class="row-fluid pull-left">

                <div class="span2">
                    <h2 class="text-left" style="color:#CCC; padding-top: 40px;">Go to:</h2>
                    <nav class="navbar-inner btn-group-vertical">  
                        <li class="btn btn-inverse" style="font-size:large;" ><a href  ="<?php echo base_url() ?>admin_controller/get_tables/">Tables</a></li>
                        <li class="btn btn-inverse" style="font-size:large;"><a href  ="<?php echo base_url() ?>admin_controller/get_orders/">Orders</a></li>
                        <li class="btn btn-inverse" style="font-size:large;"><a href  ="<?php echo base_url() ?>admin_controller/about_info/">About<a href  ="#"></li>
                                    </nav>
                                    </div>

                                    <div class="span8 offset0" style="padding-top: 40px;">
                                        <?php
                                        if (!isset($tables)) {
                                            ?>
                                                                                            <!---<p>there are no menu tables</p>-->
                                            <?php
                                        } else {
                                            ?>
                                            <table class="table table-hover">
                                                <tr class="success">
                                                    <td>Table ID</td>
                                                    <td>Table name</td>
                                                    <td>Status</td>
                                                    <td>Payment way</td>
                                                    <td>Info about table</td>
                                                </tr>
                                                <?php
                                                foreach ($tables as $row) {
                                                    ?>
                                                    <tr style = "color:#CCC" > 

                                                                        <!--<a href  ="<?php echo base_url() ?>admin_controller/get_current_table/<?= $row['TABLEID'] ?>"></a>-->
                                                        <td><?= $row['TABLEID'] ?></td>
                                                        <td><?= $row['NAME'] ?></td>
                                                        <td><?= $row['STATUS'] ?></td>
                                                        <td><?= $row['PAYMENTNAME'] ?></td>
                                                        <td><li class="btn btn-inverse" style="font-size:large;"><a href  ="<?php echo base_url() ?>admin_controller/get_current_table/<?= $row['TABLEID'] ?>">Info</a></li></td>


                                                    </tr>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </table>

                                        <?php
                                        if (!isset($orders)) {
                                            ?>

                                            <?php
                                        } else {
                                            ?>
                                            <table class="table table-hover">
                                                <tr class="success">
                                                    <td>Order ID</td>
                                                    <td>Product ID</td>
                                                    <td>Product name</td>
                                                    <td>Table ID</td>
                                                    <td>Table name</td>
                                                    <td>When ?</td>
                                                    <td>DONE ?</td>

                                                </tr>
                                                <?php
                                                foreach ($orders as $row) {
                                                    ?>
                                                    <tr style = "color:#CCC">
                                                        <td><?= $row['ORDERID'] ?></td>
                                                        <td><?= $row['PRODUCTID'] ?></td>
                                                        <td><?= $row['PRODUCTNAME'] ?></td>
                                                        <td><?= $row['TABLEID'] ?></td>
                                                        <td><?= $row['TABLENAME'] ?></td>
                                                        <td><?= $row['ORDERED_AT'] ?></td>
                                                        <td><li class="btn btn-inverse" style="font-size:large;"><a href  ="<?php echo base_url() ?>admin_controller/make_order_ready/<?= $row['ORDERID'] ?>">DONE</a></li></td>

                                                    </tr>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </table>



                                        <?php
                                        if (!isset($r_orders)) {
                                            ?>

                                            <?php
                                        } else {
                                            ?>
                                            <table class="table table-hover">
                                                <tr class="success">
                                                    <td>Order ID</td>
                                                    <td>Product ID</td>
                                                    <td>Product name</td>
                                                    <td>Table ID</td>
                                                    <td>Table name</td>
                                                    <td>When ?</td>
                                                    <td>Price</td>
                                                </tr>
                                                <?php
                                                foreach ($r_orders as $row) {
                                                    ?>
                                                    <tr style = "color:#CCC">
                                                        <td><?= $row['ORDERID'] ?></td>
                                                        <td><?= $row['PRODUCTID'] ?></td>
                                                        <td><?= $row['PRODUCTNAME'] ?></td>
                                                        <td><?= $row['TABLEID'] ?></td>
                                                        <td><?= $row['TABLENAME'] ?></td>
                                                        <td><?= $row['ORDERED_AT'] ?></td>
                                                        <td>$<?= $row['PRICE'] ?></td>
                                                    </tr>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </table>



                                    </div>
                                    </div>



                                    <?php
                                    if (isset($r_orders)) {
                                        ?>

                                        <div class="row-fluid">
                                            <div class="span3 offset3"
                                                 <p>TOTAL PRICE : </p>
                                                         <?php
                                                         foreach ($prices as $row) {
                                                             ?>
                                                    <p>$<?= $row['SUM(PRICE)'] ?></p>
                                                </div>
                                                <div class="span3 offset0">
                                                    <p>PAYMENT WAY:</p>
                                                    <?php 
                                                    foreach ($payment as $row) {
                                                             ?>
                                                    <p><?= $row['PAYMENTWAYNAME'] ?></p>                                                </div>

                                                <?php
                                            }
                                        }
                                    }
                                        ?> </p>


                                    </div>




                                    </div>







                                    <script src = "http://code.jquery.com/jquery-latest.js"></script> 
                                    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
                                    </body>





                                    </html>

