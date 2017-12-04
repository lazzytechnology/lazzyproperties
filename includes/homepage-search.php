  <script>
  
  var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
  
  
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4EFKbbWeDCGWiH4VHV6aQTDVI0op9bP8&libraries=places&callback=initAutocomplete"
        async defer></script>
  
  
  
  <div class="slider-area">   
            <div class="slider-content">
                <div class="row">
                    
               
                            
                       <h2>Bringing You Closer To Your Dream Home</h2>
                                        
                      <br>
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                       
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            <form action="" class=" form-inline">
                                
                                
                                
                              <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                <div class="form-group">
                                    <input type="text" class="form-control" onFocus="geolocate()" id="autocomplete" placeholder="Search a Property">
									<input type="hidden"  id="country" name="country" ></input>
									<input type="hidden" id="postal_code" name="zip" ></input>
									<input type="hidden" id="administrative_area_level_1" name="state" ></input>
									<input type="hidden" id="locality" name="city" ></input>
									<input type="hidden" id="route" name="route" ></input>
									<input type="hidden" id="street_number" ></input>
                                </div>
                              <button class="btn search-btn prop-btm-search" type="submit"><i class="fa fa-search"></i></button>  

                                <div style="display: none;" class="search-toggle">

                                    <div class="search-row">   
                                        <div class="form-group">                                     
                                    <select id="basic" class="selectpicker show-tick form-control" title="Select Status" name="type">                                 
                                        <option value="forsale">For Sale</option>
                                        <option value="forrent">For Rent</option>
                                        <option value="new">New Development</option>
                                        <option value="commercialland">Commercial & Land</option>  

                                    </select>
									<input type="hidden" name="source" value="property-forsale"></input>
                                </div>
                                

                                <div class="form-group">                                     
                                    <select id="basic" class="selectpicker show-tick form-control" title="Select Price Range">                                 
                                        <option>P500,000</option>
                                        <option>P1,000,000</option>
                                        <option>P2,000,000</option>
                                        <option>P3,000,000</option>  

                                    </select>
                                </div>

                                <br>
                                        
                                        <!-- End of  -->  

                                     
                                        <!-- End of  --> 
                                    </div>

                                    <br>
                                   
                                        <!-- End of  --> 
                                        <br>
                                        <hr>
                                    </div>                             
                                    
                                </div>                    

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>