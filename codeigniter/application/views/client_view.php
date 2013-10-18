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
        <div class="container-fluid" >
            <div class="row-fluid pagination-centered header1" style="background-image: url(http://localhost:1337/codeigniter/public_html/images/background9.3.jpg)" >

                <header class="span12" >
                    <!--  
                    <!--  Carousel  -->
                    <div id="this-carousel-id" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo base_url(); ?>images/restaurant_header.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p>Welcome !</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>images/restaurant_header_example2.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>images/restaurant_header_example3.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p>Wine</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>images/cocktails_header.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p>Cocktails</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
                    </div>
                    <!-- /.carousel -->

                </header>
            </div>





            <div class="row-fluid pull-left">

                <div class="span1">
                    <h2 class="text-left" style="color:#CCC">Menu:</h2>
                    <nav class="navbar-inner btn-group-vertical">  

                        <?php
                        if (!isset($menutypes)) {
                            ?>
                            <p>there are no menu types</p>
                            <?php
                        } else {
                            foreach ($menutypes as $row) {
                                ?>
                                <li class="btn btn-inverse" style="font-size:large;"><a href  ="<?php echo base_url() ?>client_controller/get_products/<?= $row['ID'] ?>"><?= $row['NAME'] ?></a></li>
                                <?php
                            }
                        }
                        ?>


                    </nav>
                </div>
                <?php
                if (!isset($products)) {
                    ?>
                    <h3  style="text-align:center">Please, select food type</h3>
                    <?php
                } else {
                    foreach ($products as $row) {
                        ?>

                        <div class="span10 pull-right offset1" style="border:groove #313131">

                            <div class = "span3">
                                <img src = "<?php echo base_url(); ?>images/<?= $row['PRODUCTID'] ?>.jpg" alt = "product" class = "img-polaroid foodimage"/>
                            </div>
                            <div class = "span2">
                                <h4 style = "padding-top:20; color:#CCC " ><?= $row['PRODUCTNAME'] ?></h4>
                            </div>
                            <div class = "span3"style = "padding-top:5">
                                <p style = "color:#CCC; text-align: center;"><?= $row['DESCRIPTION'] ?></p>
                            </div>
                            <div class = "span1">
                                <h4 style = "color:#CCC">$<?= $row['PRICE'] ?></h4>
                                <h4 style = "color:#CCC"><?= $row['QUANTITY'] ?></h4>
                            </div>


                            <div class = "span1">
                                <div style = "">
                                    <h6 style = "color:#CCC">Quantity:</h6>
                                    <input type = "number" name = "Quantity" style = "width:50px;" value = "1"/>
                                </div>
                                <div>
<!--                                    <script>
                                        function confirmation() {
                                            var r = confirm("Are you sure to order that product?");
                                            if (r === true)
                                            {
                                                alert("The product is ordered");
                                                window.location.replace('<?php echo base_url() ?>client_controller/order/<?= $row['PRODUCTID'] ?>')
                                            }else{
                                                return false;
                                            }
                                        }

                                    </script>-->
                                    <button class = "btn btn-inverse" type = "submit" value = "Order"><a href = "<?php echo base_url() ?>client_controller/order/<?= $row['PRODUCTID'] ?>">Order</a></button>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                }
                ?>

            </div>


            <div class = "row-fluid">
                <div class = "span4 visible-desktop" style = "color:#CCC"> Just TEST->This is visible on the desktop. </div>
                <div class = "span4 visible-tablet" style = "color:#CCC"> Just TEST->This is visible on the tablet. </div>
                <div class = "span4 visible-phone" style = "color:#CCC"> Just TEST->This is visible on the phone. </div>
            </div>

            <div class = "row-fluid span12" style = "text-align:center; padding-top:150px; padding-bottom:150px;">
                <h4 style = "color:#CCC">Total: $0.00</h4>

                <div class = "btn-group">
                    <a class = "btn dropdown-toggle  btn-inverse" data-toggle = "dropdown" href = "#">Pay<span class = "caret"></span></a>
                    <ul class = "dropdown-menu" style = "color:#CCC">
                        <button class = "btn btn-inverse" type = "submit" value = "Pay1">Cash </button>
                        <button class = "btn btn-inverse" type = "submit" value = "Pay2">With card</button>
                    </ul>
                </div>

            </div>

        </div>


        <div class = "row-fluid" id="footer1" >
            <footer class = "span2 offset10" >
                <h5 style = "color:#CCC; padding-top:40px; padding-bottom:30px"> 
                    &copy; 2013 project.com</h5>
            </footer>


        </div>


        <script src = "http://code.jquery.com/jquery-latest.js"></script> 
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    </body>





</html>