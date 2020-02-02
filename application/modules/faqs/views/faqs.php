<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}

.accordion{
    border: solid 0px #ccc;
    padding: 10px;
}

.card-header{
    background: #FFF;
    border: solid 1px #ccc;
}

.pb-40{
    padding:40px;
}

.card-body{
    padding: 10px;
    clear: both;
    background: #FFF;
    border: solid 1px #ccc;
    margin-bottom: 10px;
}

.mb-0 button{
    width: 100%;
    text-align: left;
    font-weight: bold;
}

.mb-0 button:hover{
   text-decoration: none;
}

@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<section class="about-us faq-page" style="margin-top: 60px !important; padding-top:60px; " >

   <div class="container">

      <div class="row">

         <div class="about-heading text-center">

            <h3>FAQ's</h3>

            <img src="<?php echo site_url();?>images/title-bottom.png" class="title-btm">

         </div>

         <div class="about-content">

            <div class="col-md-12 pb-40">

               <div class="row">

                  <div class="col-md-12">

                     <h3>FAQ's in <span class="orange">MANASHAADI</span></h3>

                     <div class="btm-line"></div>

                     <div class="our-faq-wrapper">

                        <div class="col-lg-12 no-padding">

                           <div class="accordion" id="accordion">

                               <?php if(isset($faqs) && count($faqs) > 0) { 

                               foreach($faqs as $value) { ?>

                              <div class="card">

                                 <div class="card-header" id="headingOne">

                                    <h5 class="mb-0">

                                       <button class="btn-link" type="button" data-toggle="collapse" data-target="#<?php echo $value['id']; ?>" aria-expanded="true" aria-controls="collapseOne"><?php echo ucwords($value['question']);?></button>

                                    </h5>

                                 </div>

                                 <div id="<?php echo $value['id']; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                    <div class="card-body"><?php echo stripcslashes(str_replace('\n','',$value['content']));?></div>

                                 </div>

                              </div>

                              <?php } } else{

                                echo "No Faqs Found!";

                              }?>

                           </div>

                        </div>

                        

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section>