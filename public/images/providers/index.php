<?php require_once ('ibdl_require/head.php');?>




<style>
    
    
    .hghg{
    
    color: #ff7a3e !important;
}
   .hghg:hover{
    
    color: black !important;
} 
</style>


<body>
	<!-- page header -->

	<?php require_once ('ibdl_require/header.php');?>



	<!-- / page header -->
	<!-- revolution slider -->
	<div class="tp-banner-container">
		<div class="tp-banner-slider">
			<ul>
<?php
		$IBDL_slides_all = $db_ibdl->select("789_ihome_slide","*","  `cancellation`='0' ");


		$i=0;


		foreach ($IBDL_slides_all as $value => $key) {

		$i++;




?>

    				<li data-masterspeed="700">
					<img src="files/<?php   echo $IBDL_slides_all[$i]["img"] ?>" data-lazyload="" alt>
					<div class="tp-caption sl-content align-right" data-x="['right','center','center','center']"
					 data-hoffset="20" data-y="center" data-voffset="0"  data-width="['720px','600px','500px','300px']"
					  data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
	 data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
						<div class="sl-title"><?php   echo $IBDL_slides_all[$i]["title"] ?></div>
						<p><?php   echo $IBDL_slides_all[$i]["content"] ?></p>
						<a href="<?php   echo $IBDL_slides_all[$i]["link"] ?>" class="cws-button border-radius">read more</a>
					</div>
   				</li>


<?php

		}
?>









 			</ul>
		</div>
	</div>
	<!-- / revolution slider -->


    <div class="parallaxed">
        <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
        </div>
        <div class="them-mask"></div>
        <div class="grid-row clear-fix">
            <div class="grid-row center-text grid-col grid-col-6"  style="float: left;margin-left: 0px !important" >
               <div class="font-style-1" style="color:black">About Us</div>
               <div style="         line-height: 25px;
    font-weight: 500;
    color: black;  text-align: justify;padding :30px

">	International Business Driving License – IBDL, was founded in 2007 in Huston, Texas. It is an international foundation that provides world-class professional products 
               	(qualifications, executive education, examinations, business simulation games, and assessment centers). IBDL is globally certified and accredited by
               	the prestigious Management Development Institute - MDI of Missouri State University. IBDL professional products are designed, validated, and approved by Mc Graw-Hill, 
               	in collaboration with Management Development Institute, to serve globally as an outreach department for the College of Business Administration of Missouri State University.</div>
            </div>
            <div class="grid-row center-text grid-col grid-col-6"  style="float: left">
                <div class="video-player">
                    <iframe src="https://www.youtube.com/embed/9PRENYCE3Ec"></iframe>
                    
                    
                    
                </div>

            </div>
        </div>
    </div>
    
    
    <div class="parallaxed">
			<div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
 			</div>
			<div class="them-mask bg-color-2"></div>
			
			
								<div class="grid-row clear-fix">
			
			
			
			
			<div class="grid-row center-text grid-col grid-col-6"  style="float: left" >
				<div class="font-style-1 margin-none">Transcript</div>
 				<p class="parallax-text">Search by your logbook  to get your certification.</p>
				<form class="subscribe" method="get" action="certifications">
				
					<input type="text" name="search_logBook" size="40" placeholder="Enter your logbook" aria-required="true"><input type="submit" value="Search">
				</form>
			</div>
			
			
			
			
			<div class="grid-row center-text grid-col-6"  style="float: left">
				<div class="font-style-1 margin-none">REGIONAL PROVIDERS</div>
 				<p class="parallax-text">Search by your country  to find your nearest provider.</p>
				<form class="subscribe" method="get" action="country_provider">
				
				
				
				<select name="country" class="select_country">
				
				<option >Select your country</option>
		<?php 	
		      $IBDL_count = $db_ibdl->select("927_icountry_t","*","");
		      $i=0;
		      foreach($IBDL_count as $key=>$vall ){
		      	$i++;
		      	?>
		      <option  value="<?php echo $IBDL_count[$i]["id"]?>"><?php echo $IBDL_count[$i]["short_name"]?></option>
		      	
		      	<?php 
		      	
		      }
		?>		
				
				</select>
				
				
				<input type="submit" value="Search">
				</form>
			</div>
			
			
			
			
			
			
			
			
			
			
			
		</div>
</div>
    
    
    
     <!--div class="parallaxed">
        <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
        </div>
        <div class="them-mask bg-color-2"></div>
        <div class="grid-row clear-fix">
            <div class="grid-row center-text grid-col grid-col-6"  style="float: left" >
                <div class="font-style-1" style="margin-top: 20px">REGIONAL PROVIDERS</div>
                <p class="parallax-text">Search by your country  to find your nearest provider.</p>
                <form class="subscribe" method="get" action="country_provider" style="margin-bottom: 40px">
                    <select name="country" class="select_country">
                        <option >Select your country</option>
                        <?php
                        $IBDL_count = $db_ibdl->select("927_icountry_t","*","");
                        $i=0;
                        foreach($IBDL_count as $key=>$vall ){
                            $i++;
                            ?>
                            <option  value="<?php echo $IBDL_count[$i]["id"]?>"><?php echo $IBDL_count[$i]["short_name"]?></option>

                            <?php

                        }
                        ?>

                    </select>
                    <input type="submit" value="Search">
                </form>

                <div class="font-style-1">Transcript</div>
                <p class="parallax-text">Search by your logbook  to get your certification.</p>
                <form class="subscribe" method="get" action="certifications">
                    <input type="text" name="search_logBook" size="40" placeholder="Enter your logbook" aria-required="true"><input type="submit" value="Search">
                </form>
            </div>
            <div class="grid-row center-text grid-col-6"  style="float: left">
                <div class="video-player">
                    <iframe src="https://www.youtube.com/embed/84Z3wgiCL04"></iframe>
                </div>

            </div>
        </div>
    </div-->

    
    
    
    
    


    <div id="home" class="page-content padding-none">
        <!-- section -->
        <section class="fullwidth-background padding-section">
            <div class="grid-row clear-fix">

                <h2 class="section-title center-text">Qualifications</h2>
                <?php

                $IBDL_cert_ess = $db_ibdl->select("751_ipages","*","  `id`='17' ");
                ?>
                <div class="grid-col-row">
                    <div class="grid-col grid-col-4">
                        <div class="course-item">
                            <div class="course-hover">
                                <img src="files/<?php echo $IBDL_cert_ess[1]["img"]  ?>" style="width: 200px ; height: 137px;margin: auto" >
                                <div class="hover-bg bg-color-1"></div>
                                <a href="page/<?php echo rep($IBDL_cert_ess[1]["title"]);?>/id=1373022">Learn More</a>
                            </div>
                            <div class="course-name clear-fix">
                                <h3><a href="#"><?php echo $IBDL_cert_ess[1]["title"]  ?></a></h3>

                            </div>
                            <div class="course-date bg-color-5 clear-fix"  style="background-color:#838383 !important">
                                <div class="description" style="height: 97px !important;"><?php echo strip_tags(substr($IBDL_cert_ess[1]["content"],0,165))  ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $IBDL_cert_pro = $db_ibdl->select("751_ipages","*","  `id`='18' ");
                ?>
                <div class="grid-col-row">
                    <div class="grid-col grid-col-4">
                        <div class="course-item">
                            <div class="course-hover">
                                <img src="files/<?php echo $IBDL_cert_pro[1]["img"]  ?>" style="width: 236px; height: 137px;margin: auto" >
                                <div class="hover-bg bg-color-1"></div>
                                <a href="page/<?php echo rep($IBDL_cert_pro[1]["title"]);?>/id=1449467">Learn More</a>
                            </div>
                            <div class="course-name clear-fix">
                                <h3><a href="#"><?php echo $IBDL_cert_pro[1]["title"]  ?></a></h3>
                            </div>
                            <div class="course-date bg-color-3 clear-fix" style="background-color:#006838 !important">
                                <div class="description" style="height: 97px !important;"><?php echo strip_tags(substr($IBDL_cert_pro[1]["content"],0,165))  ?></div>
                            </div>  
                        </div>
                    </div>
                </div>
                <?php
                $IBDL_cert_mas = $db_ibdl->select("751_ipages","*","  `id`='19' ");
                ?>
                <div class="grid-col-row">
                    <div class="grid-col grid-col-4">
                        <!-- course item -->
                        <div class="course-item">
                            <div class="course-hover">
                                <img src="files/<?php echo $IBDL_cert_mas[1]["img"]  ?>" style="width: 200px; height: 137px;margin: auto"  >
                                <div class="hover-bg bg-color-1"></div>
                                <a href="page/<?php echo rep($IBDL_cert_mas[1]["title"]);?>/id=1525912">Learn More</a>
                            </div>
                            <div class="course-name clear-fix">
                                <h3><a href="#"><?php echo $IBDL_cert_mas[1]["title"]  ?></a></h3>
<!--                                <div class="time"><i class="fa fa-clock-o"></i>60 Hours   </div>-->
                            </div>
                            <div class="course-date bg-color-4 clear-fix" style="background-color:#323a6b !important">
                                <div class="description" style="height: 97px !important;"><?php echo strip_tags(substr($IBDL_cert_mas[1]["content"],0,165))  ?></div>
                            </div>
                        </div>
                        <!-- / course item -->
                    </div>
                </div>
                <?php

                //echo "<pre>";

                //print_r($_SESSION);
                //echo "</pre>";
                ?>


            </div>
        </section>

        <!-- bloks -->
        <section class="padding-section parallaxed">
            <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
            </div>
            <div class="them-mask bg-color-2"></div>
            <div class="grid-row clear-fix ">
                <h2 class="center-text section-title" style="color: #fff">Your IBDL</h2>
                <div class="grid-col-row">
                    <a href="Candidate" class="hghg">
                        <div class="grid-col grid-col-4">
                            <div class="community" style="background: white;">
                                <h3>Candidate</h3>
                                <div class="community-logo">
                                    <!--<i class="fa fa-user"></i>-->

                                    <svg viewBox="0 0 496 496" >
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M288,0C173.312,0,80,93.312,80,208c0,42.208,12.672,81.496,34.36,114.328L104,332.688l-18.344-18.344l-11.312,11.312
                                                        L92.688,344l-80.4,80.4C4.36,432.328,0,442.856,0,454.056C0,477.184,18.816,496,41.944,496c11.2,0,21.736-4.36,29.656-12.288
                                                        l80.4-80.4l18.344,18.344l11.312-11.312L163.312,392l10.36-10.36C206.504,403.328,245.792,416,288,416
                                                        c114.688,0,208-93.312,208-208S402.688,0,288,0z M60.288,472.4c-4.904,4.904-11.416,7.6-18.344,7.6
                                                        C27.64,480,16,468.36,16,454.056c0-6.928,2.696-13.44,7.6-18.344l80.4-80.4L140.688,392L60.288,472.4z M152,380.688L115.312,344
                                                        l8.512-8.512c10.664,13.696,22.992,26.024,36.688,36.688L152,380.688z M288,400c-105.864,0-192-86.136-192-192S182.136,16,288,16
                                                        s192,86.136,192,192S393.864,400,288,400z"/>
                                                    <path d="M422.824,294.2l13.472,8.632C454.416,274.544,464,241.752,464,208c0-97.048-78.952-176-176-176s-176,78.952-176,176
                                                        s78.952,176,176,176c52.72,0,102.216-23.344,135.808-64.04l-12.344-10.184c-12.36,14.984-27.128,27.328-43.464,36.776V304
                                                        c0-32.512-19.52-60.504-47.44-73c12.392-7.368,22.072-18.768,27.24-32.4c8.808-4.344,18.28-6.6,28.2-6.6
                                                        c35.288,0,64,28.712,64,64v1.76C435.832,270.52,430.136,282.784,422.824,294.2z M288,48c26.336,0,51.144,6.512,73.072,17.832
                                                        c-24.624,5.92-43.72,26.072-48.072,51.264c-7.688-3.28-16.136-5.096-25-5.096s-17.312,1.816-25,5.096
                                                        c-4.352-25.192-23.448-45.344-48.072-51.264C236.856,54.512,261.664,48,288,48z M152.304,123.632
                                                        c10.304-16.496,23.48-30.96,38.888-42.72c29.48-5.528,55.624,16.792,56.704,45.288c-12.928,10.432-21.736,25.752-23.544,43.144
                                                        C217,173.68,208.592,176,200,176c-26.472,0-48-21.528-48-48C152,126.52,152.16,125.072,152.304,123.632z M128,208
                                                        c0-20.952,4.16-40.92,11.512-59.272c4.976,14.464,14.976,26.568,27.92,34.272c-16.816,7.536-30.544,20.696-38.824,37.088
                                                        C128.312,216.08,128,212.08,128,208z M208,346.352c-33.712-19.576-59.664-51.016-72-88.656V256c0-35.288,28.712-64,64-64
                                                        c9.92,0,19.392,2.256,28.2,6.592c5.168,13.64,14.848,25.04,27.24,32.4C227.52,243.496,208,271.488,208,304V346.352z M352,304
                                                        v50.624C332.08,363.32,310.368,368,288,368c-22.76,0-44.384-4.848-64-13.456V304c0-35.288,28.712-64,64-64
                                                        C323.288,240,352,268.712,352,304z M288,224c-26.472,0-48-21.528-48-48s21.528-48,48-48s48,21.528,48,48S314.472,224,288,224z
                                                         M351.648,169.344c-1.808-17.392-10.624-32.712-23.544-43.144c1.072-28.496,27.168-50.824,56.704-45.288
                                                        c15.408,11.76,28.592,26.216,38.888,42.72C423.84,125.072,424,126.52,424,128c0,26.472-21.528,48-48,48
                                                        C367.408,176,359,173.68,351.648,169.344z M408.56,183c12.952-7.696,22.952-19.808,27.92-34.272
                                                        C443.84,167.08,448,187.048,448,208c0,4.128-0.184,8.232-0.496,12.328C439.232,203.824,425.464,190.568,408.56,183z"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="info-block"   >
                                    <p>Join the thousands of IBDL holders and have the perfect kick-start for you career with IBDL qualification.<br><br><br>
                                  </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="Corporate" class="hghg">

                        <div class="grid-col grid-col-4">
                            <div class="community" style="background: white;">
                                <h3>Corporate</h3>
                                <div class="community-logo">
<!--                                    <i class="fa fa-search"></i>-->
                                    <svg viewBox="0 0 496 496">
                                        <g>
                                            <circle  cx="248" cy="44" r="40"/>
                                            <path class="person" d="M296,196h-96v-56c0-26.512,21.488-48,48-48l0,0c26.512,0,48,21.488,48,48V196z"/>
                                        </g>
                                        <g>
                                            <path  d="M267.792,383.68C284.4,376.12,296,359.408,296,340c0-26.472-21.528-48-48-48s-48,21.528-48,48
                                            c0,19.408,11.6,36.12,28.208,43.68C207.088,391.704,192,412.096,192,436v56h112v-56C304,412.096,288.912,391.704,267.792,383.68z
                                             M216,340c0-17.648,14.352-32,32-32s32,14.352,32,32s-14.352,32-32,32S216,357.648,216,340z M288,476h-80v-40
                                            c0-22.056,17.944-40,40-40s40,17.944,40,40V476z"/>
                                            <rect x="176" y="252" width="152" height="16"/>
                                            <path d="M496,164V4h-16v144H368v-3.352c0-10.296-4.008-19.968-11.28-27.24l-7.12-7.12
                                            c1.496-3.136,2.4-6.592,2.4-10.288c0-13.232-10.768-24-24-24s-24,10.768-24,24s10.768,24,24,24c3.696,0,7.152-0.904,10.28-2.408
                                            l7.12,7.12c4.192,4.2,6.6,10.008,6.6,15.936V148h-56v16h56v24H144v-24h56v-16h-56v-3.352c0-5.928,2.408-11.736,6.592-15.928
                                            l7.12-7.12c3.136,1.496,6.592,2.4,10.288,2.4c13.232,0,24-10.768,24-24s-10.768-24-24-24s-24,10.768-24,24
                                            c0,3.696,0.904,7.152,2.408,10.28l-7.12,7.12c-7.28,7.28-11.288,16.952-11.288,27.248V148H16V4H0v160h128v24h-16v48h16v62.496
                                            c-7.072-4.104-15.256-6.496-24-6.496c-26.472,0-48,21.528-48,48c0,19.408,11.6,36.12,28.208,43.68
                                            C63.088,391.704,48,412.096,48,436v56h112v-56c0-23.904-15.088-44.296-36.208-52.32C140.4,376.12,152,359.408,152,340
                                            c0-9.784-2.952-18.88-8-26.48V236h208v77.52c-5.048,7.6-8,16.696-8,26.48c0,19.408,11.6,36.12,28.208,43.68
                                            C351.088,391.704,336,412.096,336,436v56h112v-56c0-23.904-15.088-44.296-36.208-52.32C428.4,376.12,440,359.408,440,340
                                            c0-26.472-21.528-48-48-48c-8.744,0-16.928,2.392-24,6.496V236h16v-48h-16v-24H496z M320,100c0-4.416,3.584-8,8-8s8,3.584,8,8
                                            s-3.584,8-8,8S320,104.416,320,100z M168,92c4.416,0,8,3.584,8,8s-3.584,8-8,8s-8-3.584-8-8S163.584,92,168,92z M144,436v40H64v-40
                                            c0-22.056,17.944-40,40-40S144,413.944,144,436z M104,372c-17.648,0-32-14.352-32-32s14.352-32,32-32s32,14.352,32,32
                                            S121.648,372,104,372z M432,436v40h-80v-40c0-22.056,17.944-40,40-40S432,413.944,432,436z M392,308c17.648,0,32,14.352,32,32
                                            s-14.352,32-32,32s-32-14.352-32-32S374.352,308,392,308z M368,220H128v-16h240V220z"/>
                                            <rect x="344" y="12" width="112" height="16"/>
                                            <rect x="384" y="44" width="72" height="16"/>
                                        </g>
                                    </svg>

                                </div>
                                <div class="info-block">
                                    <p>
                                        
                                        
                                        Whether you are looking for developing your employees’ business skills or even their personalities at work.<br><br>
                                        
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="Provider" class="hghg">

                        <div class="grid-col grid-col-4">
                            <div class="community" style="background: white;">
                                <h3>Provider</h3>
                                <div class="community-logo">
<!--                                    <i class="flaticon-shopping"></i>-->
                                    <svg viewBox="0 0 479.999 479.999" >
                                        <g>
                                            <g>
                                                <path d="M473.291,123.978c-8.069-18.475-22.816-33.222-41.291-41.291V28c0-4.418-3.582-8-8-8h-40c-4.418,0-8,3.582-8,8v1.408
                                                l-89.512,17.408l-72,14L97.392,83.584L44,53.056c-3.826-2.209-8.719-0.898-10.928,2.928C32.367,57.205,31.997,58.59,32,60v200
                                                c0,4.418,3.582,8,8,8c1.668,0.004,3.295-0.519,4.648-1.496l53.2-38L144,237.48v14.728c-6.883-5.294-15.316-8.179-24-8.208h-16
                                                c-4.418,0-8,3.582-8,8v56H0v16h104c4.418,0,8-3.582,8-8v-56h8c13.255,0,24,10.745,24,24v32c0,4.418,3.582,8,8,8h112v24h-48v16h24
                                                v64c0,8.837-7.163,16-16,16H115.312l-29.656-29.656c-1.5-1.5-3.534-2.344-5.656-2.344H0v16h76.688l29.656,29.656
                                                c1.5,1.5,3.534,2.344,5.656,2.344h112c17.673,0,32-14.327,32-32v-64h16c4.418,0,8-3.582,8-8v-40c0-4.418-3.582-8-8-8h-48v-54.96
                                                l62.472,12.144L376,282.592V284c0,4.418,3.582,8,8,8h40c4.418,0,8-3.582,8-8v-54.688
                                                C472.489,211.627,490.976,164.468,473.291,123.978z M88,215.88l-40,28.576V73.792L88,96.64V215.88z M208,308h-48v-67.408
                                                l1.184,0.232L208,250.512V308z M208,233.6l-43.2-8.4l-11.2-2.32c-0.224,0-0.44,0-0.664,0L104,213.408V98.592L208,78.4V233.6z
                                                 M280,247.632l-56-10.888V75.256l56-10.888V247.632z M376,266.296l-80-15.552V61.256l80-15.552V266.296z M416,276h-24V36h24V276z
                                                 M455.515,187.796c-5.622,9.779-13.736,17.894-23.515,23.515V100.688C462.548,118.248,473.076,157.248,455.515,187.796z"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="info-block">
                                    <p>
                                        
                                        
In collaboration with McGraw-Hill Higher Education,
IBDL developed an integrated set of educational resources that are certified by
Missouri State in USA.                                     
                                    
                                    
                                    
                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <!-- bloks -->
		<!-- section -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<section class="padding-section" style="padding:70px 0 0 0 !important">
			<div class="grid-row clear-fix">
				<div class="grid-col-row">
					<div class="grid-row grid-col grid-col-6" style="margin-top:-30px" >
						<a href="other" class="service-icon"> <img alt=" " src="files/E-Book-02.png" style="   width: 99%"> </a>
						<a href="other" class="service-icon"> <img alt=" " src="files/E-Book-03.png" style="   width: 99%"> </a>
						<a href="other" class="service-icon"> <img alt=" " src="files/E-Book-06.png" style="    width: 100%"> </a>
						<a href="other" class="service-icon"> <img alt=" " src="files/E-Book-04.png" style="    
    width: 96%;
    
"> </a>
						<a href="other" class="service-icon"> <img alt=" " src="files/E-Book-01.png" style="      width: 100% "> </a>
						<a href="other" class="service-icon"> <img alt=" " src="files/E-Book-05.png" style="    width: 99%"> </a>
					</div>
					<div class="grid-col grid-col-6  clear-fix">
						<h2 class="section-title">Services and Products</h2>
						<p style="    text-align: justify;">
						    Operating for over a decade now, International Business Driving license (IBDL) has developed several world-class professional products
						    that help build the capabilities of the next generation of professionals! IBDL’s curriculums have been developed in 
						    collaboration with McGraw-Hill, Missouri
						    State University and Management Development Institute using the most recent international occupational standards.
						    
						    </p>
						    
						    
						    
						<a href="page/Professional-Products/id=837907" class="cws-button bt-color-3 border-radius alt icon-right">Learn More</a>
					</div>
				</div>
			</div>
		</section>
		
		
		
		
				<section class="fullwidth-background padding-section">
			<div class="grid-row clear-fix">
				<div class="grid-col-row">
					<div class="grid-col grid-col-6">
						<div class="boxs-tab">
							<div class="animated fadeIn active" data-box="1">
								<img style="width: 510px;height: 340px" src="files/7cd3e70dad66014d589c983bb63b6e22.jpg" data-at2x="files/Exam-Provider.jpg" alt="">
							</div>
							<div class="animated fadeIn" data-box="2">
								<img src="files/tech-training-trans3.jpg" data-at2x="files/Training-Providers.jpg" alt>
							</div>
							<div class="animated fadeIn" data-box="3">
								<img src="files/Trainer.jpg" data-at2x="files/Trainer.jpg" alt>
							</div>
							
						</div>
					</div>
					<div class="grid-col grid-col-6">
						<h2 class="section-title">We Offer Accreditation   To : </h2>
						<div class="tabs-box">
							<a href="#vd" data-boxs-tab="1" class="active">Exam provider</a>
							<a href="#dvd" data-boxs-tab="2">Training  provider</a>
							<a href="#dvd" data-boxs-tab="3">Trainer</a>
						</div>
					
												<div class="grid-col grid-col-6">
						<div class="boxs-tab">
							<div class="animated fadeIn active" data-box="1">
	<p style="    text-align: justify;margin-left: -5%;">
Getting accredited by IBDL to be an exam provider of the IBDL internationally-recognized qualifications means you will be able to take advantage of our range of value-adding services to grow your business.

</p><a href="https://www.ibdl.net/page/Exam-Providers-Accreditation/id=1220132" class="cws-button bt-color-3 border-radius alt icon-right" style="margin-left: -5%;">Learn More</a>							</div>
							<div class="animated fadeIn" data-box="2">
<p style="    text-align: justify;margin-left: -5%;">
IBDL accredits training centers to deliver preparation courses and exams associated with our qualification. We do not deliver training ourselves but accredit your training organization, trainers, courseware and quality management system.</p><a href="https://www.ibdl.net/page/Training-Accreditation/id=1143687" class="cws-button bt-color-3 border-radius alt icon-right" style="margin-left: -5%;">Learn More</a>							</div>
							<div class="animated fadeIn" data-box="3">
<p style="    text-align: justify;margin-left: -5%;">
To be accredited by IBDL as a certified trainer means you will receive a respected seal of approval, as we ourselves are accredited as a Management Development Institute through the College of Business Administration at Missouri State University.
</p><a href="https://www.ibdl.net/page/Trainers-Accreditation/id=1067242" class="cws-button bt-color-3 border-radius alt icon-right" style="margin-left: -5%;">Learn More</a>							</div>
							
						</div>
					</div>

                        
					</div>
				</div>
			</div>
		</section>
		
		<!-- / section -->
		<!-- paralax section -->
		<div class="parallaxed">
			<div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
 
			</div>
			<div class="them-mask bg-color-1"></div>
			<div class="grid-row">
				<div class="grid-col-row clear-fix">
 					<div class="grid-col grid-col-3 alt">
						<div class="counter-block">
							<i class="flaticon-sign"></i>
							<div class="counter"  data-count="160000">0</div>
							<div class="counter-name">Exams</div>
						</div>
					</div>
					<div class="grid-col grid-col-3 alt">
						<div class="counter-block">
							<i class="flaticon-pin"></i>
							<div class="counter"  data-count="54">0</div>
							<div class="counter-name">country</div>
						</div>
					</div>
					<div class="grid-col grid-col-3 alt">
						<div class="counter-block">
							<i class="flaticon-multiple"></i>
							<div class="counter" data-count="160">0</div>
							<div class="counter-name">Strategic partner</div>
						</div>
					</div>
					<div class="grid-col grid-col-3 alt">
						<div class="counter-block last">
							<i class="flaticon-computer"></i>
							<div class="counter" data-count="700">0</div>
							<div class="counter-name">Exam provider</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / paralax section -->
		<!-- section -->
		<!-- / paralax section -->
		<!-- paralax section -->
		
		
		
		
		
		
		
		<section style="padding:40px 0 0 0 !important" >
	<div class="grid-row clear-fix">
		<div class="grid-col-row">
<h2 class="section-title center-text">Statistics of IBDL participants </h2>

			<div class="grid-col grid-col-4"  >
				<div id="piechart" style="width: 400px; height: 250px;"  ></div>
			</div>

			<div class="grid-col grid-col-4"  >
				<div id="piechart2"  style="width: 400px; height: 250px;"  ></div>
			</div>

			<div class="grid-col grid-col-4"  >
				<div id="piechart3"  style="width: 400px; height: 250px;"   ></div>
			</div>

		</div>
  
	</div>
</section>		
		
		
		
		
		
		
		
		
		
		
		<!-- / paralax section -->

		<!-- section -->
		<section class="grid-row clear-fix padding-section news-section">
			<h2 class="section-title center-text">Our News</h2>
			<div class="grid-col-row">
			<?php
			$IBDL_news_all = $db_ibdl->select("395_inews","*","  `cancellation`='0' " ,"`id` desc" , "4");
			//echo "<pre>";
			//print_r($IBDL_news_all);
			//echo "</pre>";
			?>
				<div class="grid-col grid-col-6">
					<div class="item-instructor bg-color-off-white "><?php
						$news_id = ($IBDL_news_all[1]["id"] * 76445 )+ 73457 ;

						?>
						<a href="news/<?php echo rep($IBDL_news_all[1]["title"]);?>/id=<?php echo $news_id;?>" class="instructor-avatar">
							<img style="width: 210px; height: 220px" src="files/<?php  echo $IBDL_news_all[1]["img2"] ?>" data-at2x="files/<?php  echo $IBDL_news_all[1]["img2"] ?>" alt>
						</a>

						<a href="news/<?php echo rep($IBDL_news_all[1]["title"]);?>/id=<?php echo $news_id;?>"><div class="info-box">
							<h3><?php  echo $IBDL_news_all[1]["title"] ?></h3>
							<div class="divider"></div>
							<p><?php echo substr(strip_tags($IBDL_news_all[1]["content"]) ,0,100) ?></p>
  						</div></a>
					</div>
					<div class="item-instructor bg-color-off-white "><?php
					$news_id2 = ($IBDL_news_all[2]["id"] * 76445 )+ 73457 ;

						?>
						<a href="news/<?php echo rep($IBDL_news_all[2]["title"]);?>/id=<?php echo $news_id2;?>" class="instructor-avatar">
							<img style="width: 210px; height: 220px" src="files/<?php  echo $IBDL_news_all[2]["img2"] ?>" data-at2x="files/<?php  echo $IBDL_news_all[2]["img2"] ?>" alt>
						</a>


						<a href="news/<?php echo rep($IBDL_news_all[2]["title"]);?>/id=<?php echo $news_id2;?>"><div class="info-box">
							<h3><?php  echo $IBDL_news_all[2]["title"] ?></h3>
 							<div class="divider"></div>
							<p><?php echo substr(strip_tags($IBDL_news_all[2]["content"]) ,0,100) ?></p>

						</div></a>
					</div>
				</div>
				<div class="grid-col grid-col-6">
					<div class="item-instructor bg-color-off-white "><?php
					$news_id3 = ($IBDL_news_all[3]["id"] * 76445 )+ 73457 ;

						?>
						<a href="news/<?php echo rep($IBDL_news_all[3]["title"]);?>/id=<?php echo $news_id3;?>" class="instructor-avatar">
							<img style="width: 210px; height: 220px" src="files/<?php  echo $IBDL_news_all[3]["img2"] ?>" data-at2x="files/<?php  echo $IBDL_news_all[3]["img2"] ?>" alt>
						</a>


						<a href="news/<?php echo rep($IBDL_news_all[3]["title"]);?>/id=<?php echo $news_id3;?>"><div class="info-box">
							<h3><?php  echo $IBDL_news_all[3]["title"] ?></h3>
 							<div class="divider"></div>
							<p><?php echo substr(strip_tags($IBDL_news_all[3]["content"]) ,0,100) ?></p>

						</div></a>
					</div>
					<div class="item-instructor bg-color-off-white ">
					<?php
					$news_id4 = ($IBDL_news_all[4]["id"] * 76445 )+ 73457 ;

						?>
						<a href="news/<?php echo rep($IBDL_news_all[4]["title"]);?>/id=<?php echo $news_id4;?>" class="instructor-avatar">
							<img style="width: 210px; height: 220px" src="files/<?php  echo $IBDL_news_all[4]["img2"] ?>" data-at2x="files/<?php  echo $IBDL_news_all[4]["img2"] ?>" alt>
						</a>


						<a href="news/<?php echo rep($IBDL_news_all[4]["title"]);?>/id=<?php echo $news_id4;?>"><div class="info-box">
							<h3><?php  echo $IBDL_news_all[4]["title"] ?></h3>
 							<div class="divider"></div>
							<p><?php echo substr(strip_tags($IBDL_news_all[4]["content"]) ,0,100) ?></p>

						</div></a>
					</div>
                </div>
                <div class="news-btn">
                    <a href="ibdl_news" class="cws-button bt-color-3 border-radius alt icon-right">Learn More</a>
                </div>
            </div>
		</section>
		<!-- / section -->

		<!-- section -->
		<section class="fullwidth-background padding-section">
			<div class="grid-row clear-fix">
				<h2 class="section-title center-text"> IBDL Community</h2>
				<div class="grid-col-row">
  <div class="grid-col grid-col-4">
                        <aside class="widget-post">
                            <a href="Master_Trainers" >  <h2>Master Trainers</h2></a>
                            <div class="carousel-nav">
                            </div>
                            <hr class="divider-big" />
                            <div class="owl-carousel widget-carousel">
                              <div>  
                           
 <article class="clear-fix">
                                        <img src="files/Rayanna-Anderson--web2.jpg" style=" width: 57px;
    height: 50px" data-at2x="http://placehold.it/60x60" alt>
                                        <h4>Rayanna Anderson</h4>
                                       <p style="font-size:12px">Director of Management Development Institute and Small Business & Technology Development Center</p>
                                    </article>
                                     <article class="clear-fix">
                                        <img src="files/Scot.jpg" style=" width: 57px;
    height: 50px" data-at2x="http://placehold.it/60x60" alt>
                                        <h4>Scot R. Scobee, SPHR</h4>
                                        <p style="font-size:13px">Human Resources Director, SRC Heavy Duty</p>
                                    </article>

                               
                                    <article class="clear-fix">
                                        <img src="files/Glenn_Pace.jpg" style=" width: 57px;
    height: 50px" data-at2x="http://placehold.it/60x60" alt>
                                        <h4>Glenn Pace</h4>
                                        <p style="font-size:13px">Instructor for the Management Development Institute, and instructs academic classes   </p>
                                    </article>
                                    
                                    
                                    

                                
                              
                                                                 </div>
                            </div>
                        </aside>
                    </div>
                <div class="grid-col grid-col-4">
                        <aside class="widget-post">
                            <h2>Recent Providers</h2>
                            <div class="carousel-nav">
                            </div>
                            <hr class="divider-big" />
                            <div class="owl-carousel widget-carousel">
                              <div>  
                                <?php
                                
                                $IBDL_providers= $db_ibdl->select("348_iproviders","*","","`id`desc","3");
                               // pr($IBDL_providers);
                                $fgl = 0;
                               foreach ($IBDL_providers as $vvaaalure => $kedrkey) {
                                $fgl++;
                                ?>
                                
                               
                                    <article class="clear-fix">
                                        <img src="files/<?php echo $IBDL_providers[$fgl]["flag"]  ?>" style=" width: 57px;
    height: 50px" data-at2x="http://placehold.it/60x60" alt>
                                        <h4><?php echo $IBDL_providers[$fgl]["provider"]  ?></h4>
                                        <p><?php echo $IBDL_providers[$fgl]["city"]  ?></p>
                                    </article>
                                    

                                
                                <?php
                                
                                }
                                ?>
                                                                 </div>
                            </div>
                        </aside>
                    </div>

                <div class="grid-col grid-col-4 quotes-carousel">
                    <h2>Testimonials</h2>
                    <div class="carousel-nav">
                        <div class="carousel-button">
                            <div class="prev"><i class="fa fa-angle-left"></i></div>
                            <div class="next"><i class="fa fa-angle-right"></i></div>
                        </div>
                    </div>
                    <div class="owl-carousel widget-carousel">
                        <div>
                        
                        
                        
                        
                        
                        				<?php 
				
                        				$IBDL_testi  = $db_ibdl->select("394_iapplicants_opinions","*","`approve` = 1 ","id desc","0,3");
				
				
				$i=0;
				
				
				foreach ($IBDL_testi as $value => $key) {
				    
				    $i++;
				    
				    
				    
				    
				    ?>
                        
                        
                        
                            <div class="quote-item">
                                <q><b><?php echo $IBDL_testi[$i]["name"] ?></b><br/>

										<?php echo substr($IBDL_testi[$i]["opinion"],0,95)?>

                                </q>
                            </div>
                            
                            
                            
                            <?php }?>
                            
                        
                        
                        </div>
                        <div>
                        
                        
                        
                        				<?php 
				
                        				$IBDL_testi  = $db_ibdl->select("394_iapplicants_opinions","*","`approve` = 1 ","id desc","3,6");
                        				
				
				$i=0;
				
				
				foreach ($IBDL_testi as $value => $key) {
				    
				    $i++;
				    
				    
				    
				    
				    ?>
                        
                        
                        
                            <div class="quote-item">
                                <q><b><?php echo $IBDL_testi[$i]["name"] ?></b><br/>

										<?php echo substr($IBDL_testi[$i]["opinion"],0,95)?>

                                </q>
                            </div>
                            
                            
                            
                            <?php }?>
                            
                        </div>
                    </div>
				</div>
		</section>



		<?php require_once ('ibdl_require/footer.php');?>

	<!-- / footer -->



	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox_packed.js"></script>
	<script type='text/javascript' src='js/jquery.validate.min.js'></script>
	<script src="js/jquery.form.min.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<!-- jQuery REVOLUTION Slider  -->
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>

	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jflickrfeed.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/jquery.tweet.js"></script>
</body>
</html>