<hr>
<div class="container">
<?php echo profile();?>
    <!--<div class="row">
        <div class="col-sm-10"><h1>Aegor Targaryen</h1></div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3">--><!--left col-->
              
          <!--<ul class="list-group">
            <li class="list-group-item text-muted">Profile</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>First Name</strong></span> Aegor</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Last Name</strong></span> Targaryan</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> Luke Wilson  </li>
            
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootply.com">bootply.com</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Properties Posted</strong></span> 3</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Properties Sold</strong></span> 13</li>

          
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div>--><!--/col-3-->
        <div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#home" data-toggle="tab">List of Properties</a></li>
         <!--    <li><a href="#messages" data-toggle="tab">Messages</a></li>
            <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
          </ul>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Location</th>
                      
                    </tr>
                  </thead>
                  <tbody id="items">
                  <?php echo prop_list();?>
                    <!--<tr>
                      <td>1</td>
                      <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    </tr>
                    <tr>
                      <td>3</td>
                     <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    </tr>
                    <tr>
                      <td>4</td>
                     <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    </tr>
                    <tr>
                      <td>5</td>
                     <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    </tr>
                    <tr>
                      <td>6</td>
                     <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    </tr>
                    <tr>
                      <td>7</td>
                     <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    </tr>
                     <tr>
                      <td>8</td>
                      <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    </tr>
                    <tr>
                      <td>9</td>
                     <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    </tr>
                    <tr>
                      <td>10</td>
                     <td><a href="#child4">House Lot</a></td>
                      <td>P200000</td>
                      <td>Sold</td>
                      <td>Manila</td>
                    </tr>-->
                  </tbody>
                </table>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                    <ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
              </div><!--/table-resp-->
              
              <hr>
              
              <h4>Recent Activity</h4>
              
              <div class="table-responsive">
                <table class="table table-hover">
                  
                  <tbody>
                    <tr>
                      <td><i class="pull-right fa fa-edit"></i> Today, 1:00 - This guy posted a new property</td>
                    </tr>
                    <tr>
                      <td><i class="pull-right fa fa-edit"></i> Today, 12:23 - That guy has a new connection</td>
                    </tr>
                    <tr>
                      <td><i class="pull-right fa fa-edit"></i> Today, 12:20 - You have a new connection.</td>
                    </tr>
                    <tr>
                      <td><i class="pull-right fa fa-edit"></i> 2 Days Ago - You got a new message from this guy.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
             </div><!--/tab-pane-->
             <!-- <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <ul class="list-group">
                  <li class="list-group-item text-muted">Inbox</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Hi Joe, There has been a request on your account since that was..</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Nullam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Thllam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Wesm sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">For therepien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Also we, havesapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Swedish chef is assaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  
                </ul> 
               
             </div><!--/tab-pane--> 
           <!--   <div class="tab-pane" id="settings">
                    
                
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div> -->
          
                      
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
