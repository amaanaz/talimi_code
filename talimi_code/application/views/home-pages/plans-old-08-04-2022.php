<style>
    ul li:nth-child(n+7) {
    display:none;
}

.show {
    cursor: pointer;
    color: #f00;
}

</style>
    <div class="special">
        <div class="container">
            <div class="w3-banner-bottom-heading">
                <h3>Our <span>Plans</span></h3>
            </div>
            <div class="wthree-special-grid">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable10">
                            <!--<div class="pricingTable-header">-->
                            <!--    <h3 class="heading">School Plan I</h3>-->
                            <!--    <img src="<?php echo base_url('assets/images/') ?>school.png" />-->
                            <!--</div>-->
                            
                              <div class="pricingTable-header" style="height:234px;">
                                <h3 class="heading">SCHOOL MANAGEMENT PLAN</h3><br>
                                <h4 style="color:white;">Annual Subscription</h4>
                                   <!--<span class="price-value"><span class="currency">BD</span> 12-->
                                   <!-- <span class="month"></span>-->
                                   
                                </span>
                                <!--<img src="<?php echo base_url('assets/images/') ?>family.png" />-->
                            </div>
                            
                            
                            
                            
                            <div class="pricing-content">
                                      <div class="row">
    <h3 class="pull-left" style="margin-left: 44px;color: #4ab2c6;">Features</h3>
                                 </div>
                                
          <ul>
               <li>App based Teacher/Students Attendance </li>             
     <li>Teacher-Parent Communication </li>             
     <li>Alerts & Notifications </li>             
     <li>Homework & Project Assignments </li>             
     <li>Online interactive activity walls</li>             
     <li>Smart Academic Planner </li>             
     <li>Student Profile & Evaluation </li>             
     <li>Supervisor App</li>             
     <li>Teacher Progress & Re-schedule</li>             
     <li>Smart Teach Plan (Teacher Progress)</li>     
                
          </ul>
                                <a href="registration" class="read">Get Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Parent Plan</h3><br>
                                <h4 style="color:white;">Annual Subscription per User</h4>
                                   <span class="price-value"><span class="currency">BD</span> 12
                                    <span class="month"></span>
                                </span>
                                
                                <!--<img src="<?php echo base_url('assets/images/') ?>family.png" />-->
                            </div>
                            <div class="pricing-content">
                                <div class="row">
                                       <h3 class="pull-left" style="margin-left: 44px;color: #4ab2c6;
">Features</h3>
                                
                                    
                                </div>
                             
                                <ul id="datalist">
                                    <!--<li>Schooly</li>-->
                                    <!--<li>Hometime</li>-->
                                    <!--<li>Yearly Subscription</li>-->
                                    
                                    <li>Attendance</li>
                <li>Syllabus</li>
                <li>Homework</li>
                <li>Class Routine</li>
                <li>About School</li>
                <li>Assignments</li>
                <li>Gallery</li>
                <li>Class Feed</li>
                <li>Notices</li>
                <li>Teacher Link</li>
                <li>Events</li>
                <li>Live Feed</li>
                <li>Home Time complete package</li>
                <li>Parent Post Complain</li>
                <li>Parent Post Request</li>
                <li>Marks Card</li>
                             
                                    <!-- <li>15 Subdomains</li>
                        <li>20 Domains</li> -->
                                </ul>
                                
                                <span class="show">Show More</span>
                                <br>
                                
                                
                                
                                <a href="#" class="read">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable10">
                      
                       <div class="pricingTable-header">
                                <h3 class="heading">HAFILATY PLAN</h3><br>
                                <h4 style="color:white;">Annual Subscription per User</h4>
                                   <span class="price-value"><span class="currency">BD</span> 11
                                    <span class="month"></span>
                                </span>
                                
                                <!--<img src="<?php echo base_url('assets/images/') ?>family.png" />-->
                            </div>
                            
                        <!--    <div class="pricing-content">-->
                        <!--        <ul>-->
                        <!--            <li>Hafilaty</li>-->
                        <!--            <li>Yearly Subscription</li>-->
                                    <!-- <li>70GB Monthly Bandwidth</li>
                        <!--<li>20 Subdomains</li>-->
                        <!--<li>25 Domains</li> -->-->
                        <!--        </ul>-->
                        <!--        <a href="#" class="read">Subscribe Now</a>-->
                        <!--    </div>-->
                        
                        
                            <div class="pricing-content">
                                <div class="row">
                                       <h3 class="pull-left" style="margin-left: 44px;color: #4ab2c6;
">Features</h3>
                                
                                    
                                </div>
                             
                                <ul>
                                    <!--<li>Schooly</li>-->
                                    <!--<li>Hometime</li>-->
                                    <!--<li>Yearly Subscription</li>-->
                               <li>Comprehensive child safety platform</li>
                <li>Low cost of acquisition</li>
                <li>Independent Multilanguage for different users</li>   
                <li>Exclusive GeoTrak technology</li>
                
                <li>Innovative AdaptiBuild architecture</li>
                <li>Complete Cloud Solution</li>
                <li>Class Routine</li>
                <li>Automated Driver Rating, FuelTrakr</li>
                <li>Optimized Routs</li>
                                </ul>
                                <a href="#" class="read">Subscribe Now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script>
    
    $(function () {
    $('.show').click(function () {
        $('#datalist li:hidden').slice(0, 8).show();
        if ($('#datalist li').length == $('#datalist li:visible').length) {
           // $('.show').hide();
            $('.show').attr('style', 'display: none !important');

        }
    });
});

</script>