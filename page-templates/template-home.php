<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="order-details">
    <div class="container-fluid m-0 p-0">

        <!-- SECTION 1 -->
        <section class='section1'>
            <div class="fluid-container">
                <div class="row ml-5 pt-3 pb-2">
                    <div class="col-12">
                        <h5 class='mb-3'>ORDERS</h5>
                        <p><a href='#'>&longleftarrow; Order detail</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2 -->
        <section class='section2'>
            <div class="container">
                <div class="row mt-5 offset-1">
                   
                    <div class="col-md-3 col-sm-5 mb-4">
                        <h6>ORDER NUMBER</h6>
                        <h3 style='font-variant-numeric: lining-nums'>KJL8X7</h3>                        
                    </div>
                    <div class="col-md-3 col-sm-5 mb-4 mr-5">
                        <h6>SERVICE</h6>
                        <div class="">
                            <img src='<?php echo get_template_directory_uri(); ?>/img/dhl.png' width='120px' alt='dhl'>                            
                        </div>
                    </div>
                
                    <div class="col-md-5 mb-4">
                        <h6>DATE OF SUBMISSION</h6>
                        <p>Monday, February 8</p>
                    </div>
                </div>
    
                <div class="row offset-1">               
                    <div class="col-md-3 col-sm-5 mb-4">
                        <h6>SHIPPING TO</h6>
                        <address>
                            <strong>
                                John Doe <br>
                                419 Fake Address <br>
                                10016 New York, USA &nbsp;
                                <img class='mb-1' src='<?php echo get_template_directory_uri(); ?>/img/usa2.png' width='25px' alt='usa flag' style='opacity: 0.8'>                            
                                <br><br>                      
                            </strong>
                            example@email.com <br>
                            +718 640 1519
                        </address>
                    </div>
                    <div class="col-md-3 col-sm-5 mb-4 mr-5">
                        <h6>BILLING TO</h6>
                        <address>
                            <strong>
                                John Doe <br>
                                419 Fake Address <br>
                                10016 New York, USA &nbsp;
                                <img class='mb-1' src='<?php echo get_template_directory_uri(); ?>/img/usa2.png' width='25px' alt='usa flag' style='opacity: 0.8'>                          
                                <br><br>                      
                            </strong>
                            example@email.com <br>
                            +718 640 1519
                        </address>
                    </div>                
                    <div class="col-md-5 mb-4">
                        <h6>DELIVERY</h6>
                        <p class='mb-4'>Expected Arrival 01/03/21</p>          
                        <a class='mb-2 d-block' href='#'><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Print invoice</a>                       
                        <a href='#'><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;Print invoice (pdf)</a> 
                    </div>
                </div>

                <!-- PROGRESS BAR -->
                <div class="container px-1 px-md-4 my-5 mx-auto">
                    <div class="card">                       
                        <div class="row d-flex justify-content-center">
                            <div class="col-12">
                                <ul id="progressbar" class="text-center">
                                    <li class="active step0"></li>
                                    <li class="active step0"></li>
                                    <li class="active step0"></li>
                                    <li class="step0"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-between top">
                            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                                <div class="d-flex flex-column">
                                    <p class="font-weight-bold">Order<br>Processed</p>
                                </div>
                            </div>
                            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                                <div class="d-flex flex-column">
                                    <p class="font-weight-bold">Order<br>Shipped</p>
                                </div>
                            </div>
                            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                                <div class="d-flex flex-column">
                                    <p class="font-weight-bold">Order<br>In transit</p>
                                </div>
                            </div>
                            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                                <div class="d-flex flex-column">
                                    <p class="font-weight-bold">Order<br>Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3 -->
        <section class='py-5 section3'> 
            <div class="fluid-container">              
                    <div class="col-10 offset-1">
                        <div class="table-responsive-md">    
                            <table class="table table-striped table-hover borderless">
                                <thead>
                                    <tr>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">REMARKS</th>
                                    <th scope="col">LOCATION</th>
                                    </tr>
                                </thead>
                                <tbody>                  
                                    <tr class='table-primary'>
                                    <th scope="row">In Transit</th>
                                        <td>02/15/2021, 09:20 a.m.</td>
                                        <td><img src='<?php echo get_template_directory_uri(); ?>/img/transit.png' width='60px' alt='in transit'></td>
                                        <td>Saint Petersburg</td>
                                    </tr>
                                    <th scope="row">Cleared Customs</th>
                                        <td>02/12/2021, 08:40 a.m.</td>
                                        <td><img src='<?php echo get_template_directory_uri(); ?>/img/customs.png' width='60px' alt='customs'></td>
                                        <td>Clearwater FL</td>
                                    </tr>
                                    <tr class='table-primary'>
                                    <th scope="row">Dispatched</th>
                                        <td>02/09/2021, 10:04 a.m.</td>
                                        <td><img src='<?php echo get_template_directory_uri(); ?>/img/dispatched.png' width='60px' alt='dispatched'></td>
                                        <td>ClearwatterFL</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Pick Up</th>
                                        <td>02/09/2021, 09:20 a.m.</td>
                                        <td><img src='<?php echo get_template_directory_uri(); ?>/img/pickup.png' width='60px' alt='pickup'></td>
                                        <td>Jacksonville FL</td>
                                    </tr>
                                    <tr>
                                    <tr class='table-primary'>
                                    <th scope="row">Pending</th>
                                        <td>02/08/2021, 4:51 p.m.</td>
                                        <td><img src='<?php echo get_template_directory_uri(); ?>/img/pending.png' width='60px' alt='pending'></td>                                        
                                        <td>Piney Flats TN</td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>           
                        </div>    
                    </div>              
            </div>
        </section>
    </div>
</div>

<?php
get_footer();
