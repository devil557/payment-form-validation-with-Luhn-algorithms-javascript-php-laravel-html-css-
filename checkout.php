@include("home.layouts.header") 


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   
   <script src="{{ asset('public/material/home') }}/js/vlcard/jquery.creditCardValidator.js"> </script>
 
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/payment_icons/dc_payment_icons.css" />
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


<script>
    $(function() {
        $('#card_no').validateCreditCard(function(result) {

          
					 
					 if(result.valid==true && result.length_valid==true && result.luhn_valid==true)
					 {
						 
						$('.final_result').html("Valid card no.");
						$('.final_result').css("color", "#0099cc");
						 $('.site-btn').prop('disabled', false);
						    $(".site-btn").css("background", "#0099cc");
					 }
					 
 
					 else
					 {
						$('.final_result').html("Invalid card no.");
						$('.final_result').css("color", "#f18b96");
						   $(".site-btn").css("background", "#ccc");
					 }
        });
    });
</script>



<script>
$(document).ready(function(){
 $('.site-btn').prop('disabled', true);
   $(".site-btn").css("background", "#ccc");

});
</script>









<script>
										function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}

										</script>
										
										
										
										
										
										
										
										
										
    <!-- Breadcrumb Section Begin -->
   
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
          
            <div class="checkout__form">
                <h4>Billing Details</h4>
				
				
				
				
				
				
                <form action="{{route('placeorder')}}" method="post" style='padding:0px;'>
                @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
							
							
							
							    
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Full Name<span>*</span></p>
                                        <input maxlength='180' type="text" name="state" required>
                                        @if ($errors->has('state'))
                                                 <div style="color:red;font-size:13px;text-transform:setence;">Name is Empty!</div>
                                         @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Mobile<span>*</span></p>
                                         <input maxlength='12' type="text" name="mobilety"   required >
                                         @if ($errors->has('mobilety'))
                                                 <div style="color:red; font-size:13px;text-transform:setence;">Mobile is Empty!</div>
                                          @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Address<span>*</span></p>
                                         <input maxlength='230' type="text" name="address_line_1ty"  placeholder="Apartment, suite, unite etc  " required>
                                            @if ($errors->has('address_line_1ty'))
                                                 <div style="color:red; font-size:13px;text-transform:setence;">Street Address is Empty!</div>
                                            @endif
                                    </div>
                                  </div>
                                
                                  
                                  <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>City<span>*</span></p>
                                        <input maxlength='130' type="text" name="cityty" required >
                                         @if ($errors->has('cityty'))
                                                 <div style="color:red; font-size:13px;text-transform:setence;"> City is Empty!</div>
                                            @endif
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="checkout__input">
                                            <p>State<span>*</span></p>
                                            <input maxlength='130' type="text" name="statety" required >
                                             @if ($errors->has('statety'))
                                                 <div style="color:red; font-size:13px;text-transform:setence;"> State is Empty!</div>
                                            @endif
                                        </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Country<span>*</span></p>
                                        <input type="text" name='country' value="India" readonly>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Zipcode<span>*</span></p>
                                        <input maxlength='20' type="text" name="zipcode" required >
                                             @if ($errors->has('zipcode'))
                                                 <div style="color:red; font-size:13px;text-transform:setence;"> Zipcode is Empty!</div>
                                            @endif
                                    </div>
                                  </div>
								  
								  
								  
								  
								  
								  
								  
								  
                                  
                            </div>
                            
                          
                           
                           
                        </div>
						
				
							
						
						
						
					
						
					
						
						<div class="col-lg-8 col-md-6" style="padding-top:80px">
						<h5 style="font-size:23px;color:black">payment method</h5><hr>
						<h5 style="font-size:14px"><input type="radio" checked> Cash on Delivery </h5><br>
						<h5 style="font-size:14px">pay only &#8377; 50 as advance and balance amount as cash on delivery  </h5>
						<div><br><hr>
			                           <h5><i style='font-size:20px;color:#9b9b9b' class='fas'>&#xf023;</i>   Pay by Card (&#8377; 50)<i style='font-size:13px;color:#9b9b9b;float:right; border: 0.5px solid #9b9b9b6b;border-radius: 8px;padding-left:6px;padding-right:6px;padding-top:4px;padding-bottom:4px'>powered by stripe</i></h5>
										 
            <div class="icon-container" style="font-size: 4rem;">
			<span class="dc_payment_icons_bevel_48 dc_visa_bevel" title="Visa"></span>
              <span class="dc_payment_icons_bevel_48 dc_mastercard_bevel" title="Mastercard"></span>
              <span class="dc_payment_icons_bevel_48 dc_americanexpress_bevel" title="American Express"></span>
             
              <span class="dc_payment_icons_bevel_48 dc_discover_bevel" title="Discover"></span>
            </div>
										 
										 
										 
									
										 </div>
                            <div class="row" style="padding-top:34px; padding-bottom:25px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);border-radius: 15px;">
							
							
							
							
							    
                                <div class="col-lg-6">
								
								         
										 
										 
										
								
								
								
                                    <div class="checkout__input">
                                        <p>Name on Card<span>*</span></p>
                                         <input maxlength='1500' type="text" name="name"  required>
                                        @if ($errors->has('name'))
                                                 <div style="color:red;font-size:13px;text-transform:setence;">Name is Empty!</div>
                                         @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">   
                                    <div class="checkout__input">  <h5 class="final_result" style="font-size:11px;float:right"></h5>
                                        <p>Card number <span>*  </span> </p>
                                         <input maxlength='19' type="text" id="card_no" name="card"    required>
                                         @if ($errors->has('card'))
                                                 <div style="color:red; font-size:13px;text-transform:setence;">Card number is Empty!</div>
                                          @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Expiry Date<span>*</span></p>
                                        <input maxlength='5'  type="text" name="expiry_date"  placeholder="MM/YY" onkeyup="formatString(event);" required>
										
										
                                            @if ($errors->has('expiry_date'))
                                                 <div style="color:red; font-size:13px;text-transform:setence;">Expiry Date is Empty!</div>
                                            @endif
                                    </div>
                                  </div>
                                
                                  
                                  <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>CVV<span>*</span></p>
                                        <input maxlength='4' type="text"  name="cvv"     required  >
                                         @if ($errors->has('cvv'))
                                                 <div style="color:red; font-size:13px;text-transform:setence;"> CVV is Empty!</div>
                                            @endif
                                    </div>
                                  </div>
                                 
                                  
		 
                                
                            </div>
                            
                          
                           
                           
                        </div>
						
						
						
						
						
						
						
						
						
						
						
						
                        <div class="col-lg-4 col-md-6" style="padding-top:12px;border-radius: 15px;">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                <?php $totalcart=0; ?>
                                <?php $totalsaving=0; ?>
                             @foreach($cart as $r)
                                    <li>{{$r->name}} <span> {{$r->price}} X   <?php   



if ($r->quant == 0 or null) {
 
  
 echo "1";
} else {
  echo ($r->quant);
}
							  ?> = &#8377; <?php   



if ($r->quant == 0 or null) {
 
  
 echo ($r->price );
} else {
  echo ($r->price * $r->quant);
}
							  ?>
							  
							  </span></li><br><hr>
							  
							  <?php   



if ($r->quant == 0 or null) {

  
  $totalcart=$totalcart + ($r->price );
} else {
  $totalcart=$totalcart + ($r->price * $r->quant);
}
							  ?>
                                   
                                  
                                    <?php   $totalsaving=$totalsaving + $r->saving; ?>
                                    <input type='hidden' name='final_price' value="{{$totalcart}}">
                                    <input type='hidden' name='final_saving' value="{{$totalsaving}}">
                                @endforeach
                                </ul>
								<div style='color:#6f6f6f;font-size:13px;'>Delivery Fee<span style="float:right"> &#8377; 0 </span></div><hr>
                                <div class="checkout__order__total">Total <span> &#8377;   {{ $totalcart}}</span></div>
                                <div style='color:#00cc77;font-size:15px;'>Total Saving on this Order<span> &#8377;   {{ $totalsaving}}</span></div><br><hr>
								
								 <div style='color:#060606;font-size:20px;'>Pay advance<span style="float:right"> &#8377; 50 </span></div><br><hr>
								  <div style='color:#060606;font-size:20px;'>Pay at delivery<span style="float:right"> &#8377; {{ $totalcart -50 }}  </span></div>
                         
                                <button type="submit" class="site-btn" style="background-color:#00cc77;">Pay &#8377; 50</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
	
	
		
		
		
		
		
		
		
		
	
    </footer>
	
	
	
	
    <!-- Footer Section End -->


	
    <!-- Js Plugins -->
   
    <script src="{{ asset('public/material/home') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/material/home') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('public/material/home') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('public/material/home') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('public/material/home') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('public/material/home') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('public/material/home') }}/js/main.js"></script>	
		</body>
		</html>
