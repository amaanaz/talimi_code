
<style>

section {
    padding: 60px 0;
    min-height: 100vh;
}
a, a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}.bg-gray {
    background-color: #f9f9f9;
}

.site-heading h2 {
  display: block;
  font-weight: 700;
  margin-bottom: 10px;
  text-transform: uppercase;
}

.site-heading h2 span {
  color: #ffaf5a;
}

.site-heading h4 {
  display: inline-block;
  padding-bottom: 20px;
  position: relative;
  text-transform: capitalize;
  z-index: 1;
}

.site-heading h4::before {
  background: #177a1a none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 2px;
  left: 50%;
  margin-left: -25px;
  position: absolute;
  width: 50px;
}

.site-heading h2 span {
  color: #ffaf5a;
}

.site-heading {
  margin-bottom: 60px;
  overflow: hidden;
  margin-top: -5px;
}

.pricing-area .site-heading {
  margin-bottom: 100px;
}

.pricing-item {
  background: #ffffff none repeat scroll 0 0;
  -moz-box-shadow: 0 0 10px #cccccc;
  -webkit-box-shadow: 0 0 10px #cccccc;
  -o-box-shadow: 0 0 10px #cccccc;
  box-shadow: 0 0 10px #cccccc;
  margin-bottom: 80px;
  position: relative;
  z-index: 9;
}

.pricing-item .icon {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  font-size: 50px;
  height: 100px;
  left: 50%;
  line-height: 100px;
  margin-left: -50px;
  margin-top: -50px;
  position: absolute;
  text-align: center;
  top: 0;
  width: 100px;
}

.pricing-item .icon::after {
  background: #ffffff none repeat scroll 0 0;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}

.pricing-item.active .icon::after {
  background: #177a1a none repeat scroll 0 0;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}

.pricing-item.active .icon i {
  color: #ffffff !important;
}

.pricing-item .icon i {
  color: #ffaf5a;
  cursor: inherit !important;
}

.pricing-header h4 {
  font-weight: 600;
  text-transform: uppercase;
  color: #323a45;
}

.pricing-header h2 {
  color: #323a45;
  font-size: 50px;
  font-weight: 900;
  letter-spacing: -1px;
  line-height: 1;
  margin-bottom: 0;
}

.pricing-header h2 sup {
  font-size: 24px;
  font-weight: 500;
  top: -25px;
}

.pricing-header h2 sub {
  font-size: 18px;
  font-weight: 400;
  margin-left: -5px;
}

.pricing-item .pricing-header span {
  font-family: "Poppins",sans-serif;
  font-weight: 600;
  text-transform: uppercase;
}

.pricing-header {
  border-bottom: 1px solid #e5e5e5;
  margin-bottom: 20px !important;
  padding: 50px 30px 30px !important;
}

.pricing-item .footer {
  padding: 20px 30px 30px;
}

.pricing-item li {
  font-family: "Poppins",sans-serif;
  line-height: 40px;
  margin: 0 30px;
  text-transform: capitalize;
}

.pricing-area .pricing-item.active .pricing-header {
  background: #177a1a none repeat scroll 0 0;
  border-color: transparent;
  margin: 0;
}

.pricing-area.color-yellow .pricing-item.active .pricing-header {
  background: #ff9800 none repeat scroll 0 0;
}

.pricing-area .pricing-item.active .pricing-header h2,
.pricing-area .pricing-item.active .pricing-header h4,
.pricing-area .pricing-item.active .pricing-header span {
  color: #ffffff;
}

.pricing-area .pricing-item.active .pricing-header span.badge {
  background: #ffffff none repeat scroll 0 0;
  color: #323a45;
}

.pricing-item li i {
  color: #999;
  margin-left: 2px;
  margin-right: 5px;
}

.pricing-item li i:hover {
  cursor: help;
}

.pricing-item li i.fa-times {
  color: #e22626;
}


.btn-sm {
    padding: 8px 35px;
    font-size: 12px;
}
.btn-dark {
  background-color: #323a45;
  color: #ffffff;
  border: 2px solid #323a45;
}

.btn-dark.border {
  background-color: transparent;
  color: #323a45;
  border: 2px solid #323a45;
}

.btn-dark.border:hover {
  background-color: #323a45;
  color: #ffffff !important;
  border: 2px solid #323a45;
}

.btn-theme {
    background-color: #ffaf5a;
    color: #ffffff !important;
    border: 2px solid #ffaf5a;
}


</style>
<section id="pricing" class="pricing-area">
        <div class="container">
             
                <div class="row text-center">
                    
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-item active">
                           <h2 class="text-center alert-success" >Thanks For Registering</h2>
                           <?php 
                           if(!empty($list)){
                           ?>
                           
                            <ul>
                            
    
                               <li class="pricing-header">
                                    <h4>Approximate Quotation</h4>
                                    <h2><?php if(!empty($amount)){ echo $amount; } ?> <sub></sub></h2>
                                </li>
                                <li><b>Company Name : </b><?= $list->company_name; ?></li>
                                <li><b>School Name : </b><?= $list->school_name; ?></li>
                                <li><b>School Address :</b><br></li>
                                 <li><b>Building : </b><?= $list->school_address_building; ?></li>
                                 <li><b>Road : </b><?= $list->school_address_road; ?></li>
                                 <li><b>Block : </b><?= $list->school_address_block; ?></li>
                           
                                <li><b>Contact Number : </b><?= $list->contact_number; ?></li>
                                <li><b>Email Id :</b> <?= $list->email_id; ?></li>
                                <li><b>Number of Students in the school : </b><?= $list->no_of_students_school; ?> </li>
                                <li><b>Number of Teachers in the school : </b><?= $list->no_of_teachers_school; ?></li>
                                <li><b>Education Type : </b><?= $list->education_type; ?></li>
                            </ul>
                            
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
        </div>
    </section>