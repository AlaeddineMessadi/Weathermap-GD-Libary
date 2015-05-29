<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Switzerland</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="//bootswatch.com/amelia/bootstrap.css" media="screen"> -->
        <link rel="stylesheet" href="./css/bootstarp.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
        <!-- Magnific Popup core JS file -->

    </head>
    <body>
        <div class="container">
            <h1> Switzerland Map</h1>
            <div class="container">
                <?php for($i=1;$i<=7;$i++){ ?>
                <hr>
                    <h2>Day <?php echo $i ?></h2>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="maps/day<?php echo $i ?>/weather.jpeg" alt="Weather">
                            <div class="carousel-caption">
                                <h1>Weather</h1>
                            </div>
                        </div>
                        <div class="item">
                            <img src="maps/day<?php echo $i ?>/temp.jpeg" alt="Min an Max Temperatur in °C">
                            <div class="carousel-caption">
                                <h1>Min an Max Temperatur in °C</h1>
                            </div>
                        </div>
                        <div class="item">
                            <img src="maps/day<?php echo $i ?>/breez.jpeg" alt="Breeze">
                            <div class="carousel-caption">
                                <h1>Breeze</h1>
                            </div>
                        </div>
                        <div class="item">
                            <img src="maps/day<?php echo $i ?>/pollen.jpeg" alt="Pollen">
                            <div class="carousel-caption">
                                <h1>Pollen</h1>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php
        // put your code here
        ?>
        <script src="http://extremecss.com/demos/bs_carousel/js/bootstrap.min.js"></script>
    </body>
</html>
