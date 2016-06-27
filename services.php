<?php include 'header.php';?>
<?php
error_reporting(0);
$json = file_get_contents("images/json/Json.txt");

$serviceData = json_decode ($json,true);
$service = $_GET['serviceType'];
//echo "<h1>".$serviceData['records'][0]['Service']."</h1>";
$count = 0;
$selectedServiceArray = array();
$howItWorks = array();
$testimonials = array();
foreach ($serviceData['records'] as &$value) {
    if($value['Service']==$service){
        $count++;
        array_push($selectedServiceArray, $value);
        if($count==1){
            array_push($howItWorks,$value['howItWorks']);
            array_push($testimonials,$value['testimonials']);
        }

    }
}


//print_r($selectedServiceArray);
//echo "<br>";
//print_r($howItWorks);
//echo "<br>";
//print_r($testimonials);
//echo "<br>";
//echo $testimonials[0][0]['title'];echo $selectedServiceArray[1]['Package'];
//echo $selectedServiceArray[2]['Package'];echo $selectedServiceArray[3]['Package'];


?>
    <style>
        .serviceHeading{
            height:3em;
            width:100%;
            background-color:rgba(255,255,255,.75);
            position:absolute;
            top:7em;
            z-index:2;
        }
    </style>
    <header>
        <div class="container-fluid" style="postion:relative;padding-left:0;padding-right:0;">
            <div class="serviceHeading text-sm-center">
                <h1 style="font-family: 'TwCenMT-CondensedExtraBold';"><?php echo $selectedServiceArray[0]['Service']; ?></h1>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item" style="height: 30em;background-position: center;background-repeat: no-repeat;background-image:url('<?php echo $selectedServiceArray[0]['sliderImage1']; ?>');background-size: cover;">
                    </div>
                    <div class="carousel-item active" style="height: 30em;background-position: center;background-repeat: no-repeat;background-image:url('<?php echo $selectedServiceArray[0]['sliderImage2']; ?>');background-size: cover;">
                    </div>
                    <div class="carousel-item" style="height: 30em;background-position: center;background-repeat: no-repeat;background-image:url('<?php echo $selectedServiceArray[0]['sliderImage3']; ?>');background-size: cover;">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="howDoesItWork container" style="padding-bottom:3em;">
        <div class="row text-sm-center" style="padding-top:30px;">
            <h1 style="font-family: 'TwCenMT-CondensedExtraBold';">HOW DOES IT WORK ?</h1>
            <hr>

            <div class="col-md-3">
                <img src="<?php echo $howItWorks[0][0]['imageUrl'];?>" style="padding-bottom:1em; width:40%;"/><br/>
            <span style="font-family: 'TwCenMT-CondensedExtraBold';font-size: 1.5em;"><?php echo $howItWorks[0][0]['title'];?><small><span  class="infoPopOver" data-toggle="popover" title="<?php echo $howItWorks[0][0]['infoTitle'];?>" data-content="<?php echo $howItWorks[0][0]['infoDesc'];?>"><i style="color:gainsboro;"class="fa fa-info-circle" aria-hidden="true"></i></span></small>
            </div>
            <div class="col-md-3">
                <img src="<?php echo $howItWorks[0][1]['imageUrl'];?>" style="padding-bottom:1em; width:40%;"/><br/>
            <span style="font-family: 'TwCenMT-CondensedExtraBold';font-size: 1.5em;"><?php echo $howItWorks[0][1]['title'];?><small><span  class="infoPopOver" data-toggle="popover" title="<?php echo $howItWorks[0][1]['infoTitle'];?>" data-content="<?php echo $howItWorks[0][1]['infoDesc'];?>"><i style="color:gainsboro;"class="fa fa-info-circle" aria-hidden="true"></i></span></small>
            </div>
            <div class="col-md-3">
                <img src="<?php echo $howItWorks[0][2]['imageUrl'];?>" style="padding-bottom:1em; width:40%;"/><br/>
                <span style="font-family: 'TwCenMT-CondensedExtraBold';font-size: 1.5em;"><?php echo $howItWorks[0][2]['title'];?><small><span  class="infoPopOver" data-toggle="popover" title="<?php echo $howItWorks[0][2]['infoTitle'];?>" data-content="<?php echo $howItWorks[0][2]['infoDesc'];?>"><i style="color:gainsboro;"class="fa fa-info-circle" aria-hidden="true"></i></span></small></span>
            </div>
            <div class="col-md-3">
                <img src="<?php echo $howItWorks[0][3]['imageUrl'];?>" style="padding-bottom:1em; width:40%;"/><br/>
                <span style="font-family: 'TwCenMT-CondensedExtraBold'; font-size: 1.5em;"><?php echo $howItWorks[0][3]['title'];?><small><span  class="infoPopOver" data-toggle="popover" title="<?php echo $howItWorks[0][3]['infoTitle'];?>" data-content="<?php echo $howItWorks[0][3]['infoDesc'];?>"><i style="color:gainsboro;"class="fa fa-info-circle" aria-hidden="true"></i></span></small></span>
            </div>


        </div>
        <div class="row text-sm-center" style="padding-top:30px;">
            <div class="col-md-offset-3 col-md-3">
                <img src="<?php echo $howItWorks[0][4]['imageUrl'];?>" style="padding-bottom:1em; width:40%;"/><br/>
                <span style="font-family: 'TwCenMT-CondensedExtraBold'; font-size: 1.5em;"><?php echo $howItWorks[0][4]['title'];?><small><span  class="infoPopOver" data-toggle="popover" title="<?php echo $howItWorks[0][4]['infoTitle'];?>" data-content="<?php echo $howItWorks[0][4]['infoDesc'];?>"><i style="color:gainsboro;"class="fa fa-info-circle" aria-hidden="true"></i></span></small></span>
            </div>
            <div class="col-md-3">
                <img src="<?php echo $howItWorks[0][5]['imageUrl'];?>" style="padding-bottom:1em; width:40%;"/><br/>
                <span style="font-family: 'TwCenMT-CondensedExtraBold'; font-size: 1.5em;"><?php echo $howItWorks[0][5]['title'];?><small><span  class="infoPopOver" data-toggle="popover" title="<?php echo $howItWorks[0][5]['infoTitle'];?>" data-content="<?php echo $howItWorks[0][5]['infoDesc'];?>"><i style="color:gainsboro;"class="fa fa-info-circle" aria-hidden="true"></i></span></small></span>
            </div>
        </div>
    </section>

    <section class="container" style="">

        <div class="row text-sm-center">
            <h1 style="padding-top:30px;font-family: 'TwCenMT-CondensedExtraBold';"><?php echo $selectedServiceArray[0]['Service']; ?> Packages</h1>
            <hr>
            <div id="carousel-product-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" style="display:none;">
                    <?php for($i=0;$i<sizeof($selectedServiceArray);$i++){}
                        if($i==0){
                    ?>
                            <li data-target="#carousel-product-generic" data-slide-to="0" class="active"></li>
                    <?php }else{ ?>
                            <li data-target="#carousel-product-generic" data-slide-to="<?php echo $i?>" ></li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php for($i=0;$i<sizeof($selectedServiceArray);$i++){
                    if($i==0){
                        ?>
                        <div class="carousel-item active">
                            <div class="row">
                    <?php }else if($i%3==0){ ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                    <?php } ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header text-sm-center bg-<?php if($i%3==0){echo 'primary';}else if($i%3==1){echo 'warning';}else if($i%3==2){echo 'danger';} ?>">
                                            <span> <?php echo $selectedServiceArray[$i]['Package'] ?> </span>
                                        </div>
                                        <div class="card-block text-sm-center" style="background-color: <?php if($i%3==0){echo 'rgba(2, 117, 216, 0.81)';}else if($i%3==1){echo 'rgba(240, 173, 78, 0.81)';}else if($i%3==2){echo 'rgba(217, 83, 79, 0.81)';} ?>;">
                                            <div class="card-title price" style="color:#ffffff;">
                                                <strike><?php echo $selectedServiceArray[$i]['Slashed_price'] ?></strike>
                                                <sup><i class="fa fa-rupee" aria-hidden="true"></i></sup>
                                                <span><?php echo $selectedServiceArray[$i]['Package_amount']?></span>
                                                <sub><?php echo $selectedServiceArray[$i]['Package_subscription'] ?></sub><br/>
                                                <small><?php $tempString = "";
													foreach($selectedServiceArray[$i]['Package_highlights'] as $val1){
														if($tempString==""){
															$tempString=$val1;
														}else{
															$tempString = $tempString." | ".$val1;
														}
													}
													echo $tempString;
													?></small>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush text-sm-center">

                                            <?php for($j=0; $j<sizeof($selectedServiceArray[$i]['Description']);$j++){ ?>
                                                <li class="list-group-item"><span class="text-<?php if($i%3==0){echo 'primary';}else if($i%3==1){echo 'warning';}else if($i%3==2){echo 'danger';} ?>"><i class="fa fa-<?php echo $selectedServiceArray[$i]['Description'][$j]['icon'];?>"></i> <?php echo $selectedServiceArray[$i]['Description'][$j]['desc'];?></span></li>
                                            <?php } ?>
                                        </ul>
                                        <div class="card-footer text-sm-center bg-<?php if($i%3==0){echo 'primary';}else if($i%3==1){echo 'warning';}else if($i%3==2){echo 'danger';} ?>">
                                            <span><?php echo $selectedServiceArray[$i]['Package']?> Package</span>
                                        </div>
                                    </div>
                                </div>
                    <?php }if(sizeof($selectedServiceArray)>0){ ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="carousel-reviews broun-block">
            <div class="container text-sm-center">
                <h1 style="padding-top:30px;font-family: 'TwCenMT-CondensedExtraBold';">TESTIMONIALS</h1>
                <hr>
                <div class="row">

                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" style="font-family: 'TwCenMT-CondensedExtraBold'" href="#"><?php echo $testimonials[0][0]['title']; ?></a>
                                        <hr style="margin:0.2em 0.3em;"/>
                                        <p><?php echo $testimonials[0][0]['description']; ?></p>

                                    </div>
                                    <div class="person-text rel">
                                        <img src="<?php echo $testimonials[0][0]['imageUrl']; ?>"/>
                                        <span><?php echo $testimonials[0][0]['name']; ?></span>
                                        <i><?php echo $testimonials[0][0]['designation']; ?></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo $testimonials[0][1]['title']; ?></a>
                                        <hr style="margin:0.2em 0.3em;"/>
                                        <p><?php echo $testimonials[0][1]['description']; ?></p>

                                    </div>
                                    <div class="person-text rel">
                                        <img src="<?php echo $testimonials[0][1]['imageUrl']; ?>"/>
                                        <span><?php echo $testimonials[0][1]['name']; ?></span>
                                        <i><?php echo $testimonials[0][0]['designation']; ?></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo $testimonials[0][2]['title']; ?></a>
                                        <hr style="margin:0.2em 0.3em;"/>
                                        <p><?php echo $testimonials[0][2]['description']; ?></p>

                                    </div>
                                    <div class="person-text rel">
                                        <img src="<?php echo $testimonials[0][2]['imageUrl']; ?>"/>
                                        <span><?php echo $testimonials[0][2]['name']; ?></span>
                                        <i><?php echo $testimonials[0][2]['designation']; ?></i>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo $testimonials[0][3]['title']; ?></a>
                                        <hr style="margin:0.2em 0.3em;"/>
                                        <p><?php echo $testimonials[0][3]['description']; ?>></p>

                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="<?php echo $testimonials[0][3]['imageUrl']; ?>">
                                        <span><?php echo $testimonials[0][3]['name']; ?></span>
                                        <i><?php echo $testimonials[0][3]['designation']; ?></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo $testimonials[0][4]['title']; ?></a>
                                        <hr style="margin:0.2em 0.3em;"/>
                                        <p><?php echo $testimonials[0][4]['description']; ?></p>

                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="<?php echo $testimonials[0][4]['imageUrl']; ?>">
                                        <span><?php echo $testimonials[0][4]['name']; ?></span>
                                        <i><?php echo $testimonials[0][4]['designation']; ?></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo $testimonials[0][5]['title']; ?></a>
                                        <hr style="margin:0.2em 0.3em;"/>
                                        <p><?php echo $testimonials[0][5]['description']; ?></p>

                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="<?php echo $testimonials[0][5]['imageUrl']; ?>">
                                        <span><?php echo $testimonials[0][5]['name']; ?></span>
                                        <i><?php echo $testimonials[0][5]['designation']; ?></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="services  container-fluid" style="display:block; background: url('images/checkBackground.jpg') fixed; background-size: cover;">
		<div class="container">
			<div class="row text-sm-center" style="background-color: rgba(255,255,255,0.75); padding-top:30px;">
				<h1 style="padding:10px 0px; font-family:TwCenMT-CondensedExtraBold;">SERVICES</h1>
				<hr>
			</div>
			<div class="row text-sm-center" style="padding-top:10px;">
				<a href="services?serviceType=Laundry" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/Laundry.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Laundry</span>
					</div>
				</a>
				<a href="services?serviceType=Dry-clean" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/DryClean.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Drycleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Deep Home Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/HomeCleaning.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Home Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Carpet Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/CarpetCleaning.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Carpet Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Shoe Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/ShoeCleaning.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Shoe Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Sofa Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/wgsofaclean.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Sofa Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Deep Home Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/ChairCleaning.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Chair Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Kitchen Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/Kichen.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Kitchen Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Pest Control" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/PestControl.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Pest Control</span>
					</div>
				</a>
				<a href="services?serviceType=Car Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/CarCleaning.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Car Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Glass Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/WindowCleaning.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Glass Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Bathroom Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/Bathroom.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Bathroom Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Window Blinds Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/Blinds-Cleaning.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Blinds Cleaning</span>
					</div>
				</a>
				<a href="services?serviceType=Office Cleaning" target="_self">
					<div class="service-grid col-xs-3" style="border:2px dashed rgba(255,255,255,1);margin-top:1px; margin-bottom:1px;">
						<img src="images/services/Office-Cleaning.png" style="padding-top:0.5em; padding-bottom:0.3em; width:40%;"/><br/>
						<span style="font-size: 2em; font-family:TwCenMT-CondensedExtraBold;  color:rgb(255,255,255); ">Office Cleaning</span>
					</div>
				</a>

			</div>

		</div>

	</section>

<?php include 'footer.php';?>