<?php include('header.php'); ?>

<!--inner body start from here-->
<div class="inner-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread-crumb animate-reveal">
                    <h2>Booking Summary</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="header_box animate-reveal">
                    <div class="pull-left">
                        <h3>KTM -- <i class="fa fa-plane" aria-hidden="true"></i> -- AUD</h3>
                        <h4>2020-01-22 -- 2020-01-23</h4>
                        <p>Passengers: 1 Adult</p>
                        <p><i class="fa fa-map-marker"></i> Tribhuvwan International Airport, Kathmandu, Nepal</p>

                    </div>

                    <div class="pull-right">
                        <strong>NRP 45,000.00</strong><br>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="flight_detail_sidebar white-box animate-reveal">
                        <div class="flight-logo"><img alt="logo" src="assets/img/flight-logo-02.png"></div>

                        <div class="details-text">
                            <h4> Singapore Airlines <a href="#" class="btn btn-stop">1 stop</a> <br><small>Oneway flight
                                    <br><a>
                                        <!-- href="../flights_details_one/right_sidebar.html" class="btn btn-select">Edit</a></small></h4> -->
                        </div>
                        <hr>
                        <div class="LTT">
                            <span class="skin-clr"> <i class="fa fa-clock-o"></i>Total Time <span class="pull-right">8
                                    hours, 15 minutes</span> </span><br>
                        </div>
                        <div class="LTT">
                            <span class="skin-clr"> <i class="fa fa-plane"></i>Take Off
                                <span class="pull-right">NOV 30, 2013 7:50 AM</span> </span><br>
                        </div>
                        <div class="LTT">
                            <span class="skin-clr"> <i class="fa fa-plane fa-rotate-90"></i>Landing
                                <span class="pull-right">NOV 30, 2013 9:50 AM</span> </span><br>
                        </div>
                        <div class="details-text">
                            <h4> Other Detail</h4>
                        </div>
                        <div class="LTT">
                            <span class="skin-clr">AirLine:
                                <span class="pull-right">Qatar</span> </span><br>
                        </div>
                        <div class="LTT">
                            <span class="skin-clr">Class:
                                <span class="pull-right">Economy</span> </span><br>
                        </div>
                        <div class="LTT">
                            <span class="skin-clr">Base Fare:
                                <span class="pull-right">$360</span> </span><br>
                        </div>
                        <div class="LTT">
                            <span class="skin-clr">Taxes:
                                <span class="pull-right">$120</span> </span><br>
                        </div>
                        <div class="LTT">
                            <span class="skin-clr"><b>Total Price:</b>
                                <span class="pull-right"><b>$480</b></span> </span><br>
                        </div>
                    </div>
                    <div class="help-to-do white-box">
                        <h4>Need Our Help?</h4>
                        <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help
                            you.
                        </p>
                        <div class="LTT">
                            <span class="skin-clr"> <i class="fa fa-phone"></i> +923017030286</span>
                        </div>
                    </div>
                </div>
                <form action="#" class="form" id="forms" onsubmit="event.preventDefault()">
                    <div class="col-md-9">
                        <div class="booking_detail white-box animate-reveal">
                            <h4>Personal information</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="step-forms step-forms-active">
                                        <input type="text" class="form-control" placeholder="Enter First Name.."
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Last Name.."
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter Email Address.."
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Verify Email Address.."
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <select class="select_booking">
                                        <option selected="selected">Country Code</option>
                                        <option>United state +1</option>
                                        <option>united kingdom +44</option>
                                        <option>United state +1</option>
                                        <option>united kingdom +44</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4>Your Card information</h4>
                                </div>
                                <div class="col-md-6">
                                    <select class="select_booking">
                                        <option selected="selected">Credit card Type</option>
                                        <option>United state +1</option>
                                        <option>united kingdom +44</option>
                                        <option>United state +1</option>
                                        <option>united kingdom +44</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Card Holder type.."
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Card Number.."
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Card Identification Number.." required="required">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="select_booking">
                                        <option selected="selected">Expiration Month</option>
                                        <option>United state +1</option>
                                        <option>united kingdom +44</option>
                                        <option>United state +1</option>
                                        <option>united kingdom +44</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="select_booking">
                                        <option selected="selected">Expiration Year</option>
                                        <option>United state +1</option>
                                        <option>united kingdom +44</option>
                                        <option>United state +1</option>
                                        <option>united kingdom +44</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Billing Zip Code.."
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value=""> By continuing, you agree to the Terms
                                            and
                                            Conditions.</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p><a href="../confirm_booking/layout_one.html" class="btn_book">Confirm Booking</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!--inner body end here-->
    <!--button back to top-->
    <div id="back_to_top">
        <div class="button">
            <i class="fa fa-chevron-up"></i>
        </div>
    </div>
    <?php include('footer.php'); ?>