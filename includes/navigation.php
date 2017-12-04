



<nav class="navbar navbar-default ">

            <div class="container">
             
                


            
                <h1 class="navbar-brand">
           <a href="index.php" > <img src="img/logo-2.png" class="img-responsive"></a>

       </h1>
                <div class="button navbar-left">
				<?php  if(isset($_SESSION['ID'])){
                          echo '<span class="logout" class="dropdown ymm-sw" href="index.php?source=profile" class="navbar-text" class="pull-right">Hello, <u><a href="index.php?source=profile">'. $_SESSION['Email'] .'</a></u>   </span>
                             <a class="name" class="dropdown ymm-sw" href="logout.php" class="navbar-text" class="pull-right">Log out</a>';
						}
						else {
							echo '<a href="index.php?source=loginandregister" class="name" class="dropdown ymm-sw" href="#" class="navbar-text" class="pull-right"> Log In/Register</a>';
						}
				?>
                      </div>

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>

                

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    
                      


                   
                    <ul class="main-nav nav navbar-nav navbar-right">
                      

                

                       <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.php?source=property-forsale&type=forsale" class="dropdown-toggle" data-toggle="ddropdown" data-hover="dropdown" data-delay="200">FOR SALE</a>
                      </li>

                      <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                             <a href="index.php?source=property-forsale&type=forrent" class="dropdown-toggle" data-toggle="ddropdown" data-hover="dropdown" data-delay="20 0">FOR RENT</a>
                      </li>
                   
                    
                      <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.php?source=property-forsale&type=new" class="dropdown-toggle" data-toggle="ddropdown" data-hover="dropdown" data-delay="200">NEW DEVELOPMENT</a>
                           
                      </li>

                      <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.php?source=property-forsale&type=commercialland" class="dropdown-toggle" data-toggle="ddropdown" data-hover="dropdown" data-delay="200">COMMERCIAL & LAND</a>
                           
                      </li>


               

                             



                      <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <div class="button navbar-right">

                          <button class="navbar-btn nav-button wow bounceInRight login" onclick="<?php $i="'"; if(isset($_SESSION['ID'])){ echo 'location.href='.$i.'  index.php?source=postproperty'.$i; }else{echo 'location.href='.$i.'  index.php?source=loginandregister'.$i;}?>" data-wow-delay="0.30s">POST PROPERTY NOW!</button>
                          
                      </div>
                           
                      </li>


                       


                        
                        

                        
                    </ul>
                </div><!-- /.navbar-collapse -->
               
            </div><!-- /.container-fluid -->

        </nav>
        <!-- End of nav bar -->