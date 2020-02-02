<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.view-profile {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}
.log-form {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}

.title-matches_ms{
    margin:20px;
    font-size:20px;
    color:#006a97;
    text-align:center;
}

.title-matches_ms b{
    color:#ff5a60;
}


.title-payment_ms{
    font-size:16px;
    font-weight:bold;
    color:#006a97;
}


.title-payment_ms .Ptitle_ms{
    font-size:25px;
    color:#006a97;
    display:block;
    padding-top:50px;
    
}

.title-payment_ms .Ctitle_ms{
    font-size:16px;
    font-weight:normal;
    color:#888;
}

.amountP_ms{
    font-size: 40px;
    padding-top: 40px;
    display: block;
    font-weight: bold;
    color: #ff5a60;
}

.textP_ms{
    font-size: 14px;
    padding-left: 10px;
    font-weight: normal;
    color: #222;
}

.title-payment_ms svg{
    width: 20px;
    height: 20px;
    fill: #ccc;
    vertical-align: text-bottom
}

.bottmtxt_ms{
    border-bottom: dotted 1px #ebebeb;
    padding: 6px 0px 6px 0px !important;
}



.payment5k,
.payment8k,
.payment10k
{
    height:400px;
    text-align:center;
    margin:0px;
}

.payment5k:hover,
.payment8k:hover,
.payment10k:hover{
    height:400px;
    
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
  -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
  box-shadow:         3px 3px 5px 6px #ccc;  /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
  z-index:1;


background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top,  #ffffff 0%, #f9f9f9 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ffffff 0%,#f9f9f9 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ffffff 0%,#f9f9f9 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f9f9f9',GradientType=0 ); /* IE6-9 */


}

.active_payment_ms{

    height:400px;
    
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
  -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
  box-shadow:         3px 3px 5px 6px #ccc;  /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
  z-index:1;


background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top,  #ffffff 0%, #f9f9f9 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ffffff 0%,#f9f9f9 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ffffff 0%,#f9f9f9 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f9f9f9',GradientType=0 ); /* IE6-9 */

}
    
}

.txt_ms{text-align:left !important;}

.title-matches_ms h6{
    margin-top: 20px;
    font-size: 18px;
    color: #333;
}

.mar_btn_ms{
    margin-top:40px;
}

@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<div class="container payment_box" style="margin-top:75px; background: #F2f2f2; padding: 50px; ">
    <div class="col-xs-12 no-padding">
        <div class="payment-container">
            
            <?php

echo $payment_success['success_msg'];

?>


                    <div class="page-container">
                        <div class="col-xs-12 no-padding title-matches_ms payment_title">
                            <h4>Find the Perfect plan for you with <b>Guaranteed Matches</b></h4> 
                        </div>
                        <form action="<?php echo site_url();?>dashboard/payment" method="post">
                      <div class="col-xs-12 text-center pull-right">


                      <div class="payment5k col-xs-12 col-md-4  view-profile">
                      
                      <div class="col-xs-12 no-padding">
                          
                          <div class="col-xs-12 no-padding title-payment_ms">
                              <span class="Ptitle_ms">Gold</span>
                              <span class="Ctitle_ms">3 months</span>
                              <span class="amountP_ms">4500</span>
                              <div class="col-xs-12 no-padding bottmtxt_ms">
                              <div class="col-xs-1 no-padding">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>      
                                  </div>
                                  <div class="col-xs-11 no-padding txt_ms text-left">
                                    <span class="textP_ms">Send unlimited messages</span>       
                                  </div>
                                   
                              </div>
                              <div class="col-xs-12 no-padding bottmtxt_ms">
                                  <div class="col-xs-1 no-padding">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>      
                                  </div>
                                  <div class="col-xs-11 no-padding txt_ms text-left">
                                    <span class="textP_ms">35 Contact Numbers</span>    
                                  </div>
                              
                              </div>
                              
                              <div class="col-xs-12 no-padding mar_btn_ms">
                                  <button data-cost="4500" data-contacts="35" class="bsbb darkbg1 white xlarge ts0 dib p10px20px bdr plan-one">Upgrade Gold Plan</button>
                              </div>
                              
                          </div>
                          
                          
                          
                          
                          
                      </div>
                      
                      
                      
                      </div>




                      <div class="payment8k view-profile col-xs-12 col-md-4  active_payment_ms">
                      
                            <div class="col-xs-12 no-padding title-payment_ms">
                              <span class="Ptitle_ms">Diamond Plus</span>
                              <span class="Ctitle_ms">6 months</span>
                              <span class="amountP_ms">6000</span>
                              <div class="col-xs-12 no-padding bottmtxt_ms">
                              <div class="col-xs-1 no-padding">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>      
                                  </div>
                                  <div class="col-xs-11 no-padding txt_ms text-left">
                                    <span class="textP_ms">Send unlimited messages</span>       
                                  </div>
                                   
                              </div>
                              <div class="col-xs-12 no-padding bottmtxt_ms">
                                  <div class="col-xs-1 no-padding">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>      
                                  </div>
                                  <div class="col-xs-11 no-padding txt_ms text-left">
                                    <span class="textP_ms">55 Profiles Contact</span>    
                                  </div>
                              
                              </div>
                              
                              <div class="col-xs-12 no-padding mar_btn_ms">
                                  <button  data-cost="6000" data-contacts="55" class="bsbb darkbg1 white xlarge ts0 dib p10px20px bdr plan-one">Upgrade Diamond Plus</button>
                                  
                              </div>
                              
                          </div>
                      
                      
                      </div>



                      <div class="payment10k view-profile col-xs-12 col-md-4 active_payment_ms">
                          

                          <div class="col-xs-12 no-padding title-payment_ms">
                              <span class="Ptitle_ms">Platinum Plus</span>
                              <span class="Ctitle_ms">9 months</span>
                              <span class="amountP_ms">8000</span>
                              <div class="col-xs-12 no-padding bottmtxt_ms">
                              <div class="col-xs-1 no-padding">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>      
                                  </div>
                                  <div class="col-xs-11 no-padding txt_ms text-left">
                                    <span class="textP_ms">Send unlimited messages</span>       
                                  </div>
                                   
                              </div>
                              <div class="col-xs-12 no-padding bottmtxt_ms">
                                  <div class="col-xs-1 no-padding">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>      
                                  </div>
                                  <div class="col-xs-11 no-padding txt_ms text-left">
                                    <span class="textP_ms">100 profiles  Contact Numbers</span>    
                                  </div>
                              
                              </div>
                              
                              <div class="col-xs-12 no-padding mar_btn_ms">
                                  <button data-cost="8000" data-contacts="100" class="bsbb darkbg1 white xlarge ts0 dib p10px20px bdr plan-one">Upgrade Platinum Plus</button>
                                  
                              </div>
                              
                          </div>
                          
                          
                          </div>   
                      </div>

					<div class="col-xs-12 text-center" style="margin:20px auto; display:none" >
					<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg">
					</div>
                    </div>
        </div>
        
    </div>
</div>

