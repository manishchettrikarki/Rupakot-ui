<?php include('header.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="btn-ground text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view">View Details</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade product_view" id="product_view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="detail-panel animate-reveal">
                    <div class="panel">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Flight and Fare details</a></li>
                                <li><a href="#Inflight" data-toggle="tab"> Penalties Info </a></li>
                                <li><a href="#selection" data-toggle="tab">Baggage Info</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="details">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="detail_flight_number">
                                                <div class="pull-left">
                                                    <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">PAX Type</th>
                                                    <th scope="col">Basefare</th>
                                                    <th scope="col">Tax</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Refundable</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">ADT</th>
                                                    <td>Exchange</td>
                                                    <td>Before</td>
                                                    <td>Yes</td>
                                                    <td>NRP 4219.0 / ADT</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">ADT</th>
                                                    <td>Exchange</td>
                                                    <td>After</td>
                                                    <td>Yes</td>
                                                    <td>NRP 4219.0 / ADT</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">ADT</th>
                                                    <td>Exchange</td>
                                                    <td>Before</td>
                                                    <td>Yes</td>
                                                    <td>NRP 6027.0 / ADT</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">ADT</th>
                                                    <td>Exchange</td>
                                                    <td>After</td>
                                                    <td>Yes</td>
                                                    <td>NRP 6027.0 / ADT</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="flight_detail_duration full-white-box">
                                                <div class="details-text">
                                                    <h4> Consequat ante <a href="#" class="btn btn-stop">1 stop</a>
                                                        <br><small>Oneway flight</small></h4>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="flight-logo">
                                                            <img alt="logo" src="assets/img/flight-logo.png"></div>
                                                    </div>
                                                    <div class="col-md-9">

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="LTT">
                                                                    <span class="skin-clr"> <i class="fa fa-plane"></i>
                                                                        Take off</span><br>
                                                                    <span class="time">From Kathmandu</span><br>
                                                                    <span class="time">Nov 13, 2013 7:50 Am</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="LTT">
                                                                    <span class="skin-clr">
                                                                        <i class="fa fa-plane fa-rotate-90"></i>
                                                                        Landing</span><br>
                                                                    <span class="time">To Abhu Dhabi</span><br>
                                                                    <span class="time">Nov 14, 2013 7:50 Am</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="LTT no-border">
                                                                    <span class="skin-clr"> <i
                                                                            class="fa fa-clock-o"></i> Flight
                                                                        Time</span><br>
                                                                    <span class="time">8 hours, 15 minutes</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-center">
                                                    <a href="#" class="btn btn-layour">LAYOVER : 3H 50M</a>
                                                </p>
                                            </div>
                                            <div class="flight_detail_duration full-white-box">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="flight-logo"><img alt="logo"
                                                                src="assets/img/flight-logo.png"></div>
                                                    </div>
                                                    <div class="col-md-9">

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="LTT">
                                                                    <span class="skin-clr"> <i class="fa fa-plane"></i>
                                                                        Take off</span><br>
                                                                    <span class="time">From Kathmandu</span><br>
                                                                    <span class="time">Nov 13, 2013 7:50 Am</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="LTT">
                                                                    <span class="skin-clr">
                                                                        <i class="fa fa-plane fa-rotate-90"></i>
                                                                        Landing</span><br>
                                                                    <span class="time">To Abhu Dhabi</span><br>
                                                                    <span class="time">Nov 14, 2013 7:50 Am</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="LTT no-border">
                                                                    <span class="skin-clr"> <i
                                                                            class="fa fa-clock-o"></i> Flight
                                                                        Time</span><br>
                                                                    <span class="time">8 hours, 15 minutes</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade in" id="Inflight">
                                    <div class="feature-inflight">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">PAX Type</th>
                                                    <th scope="col">Penalty</th>
                                                    <th scope="col">Applicability</th>
                                                    <th scope="col">Availablility</th>
                                                    <th scope="col">Applicable Charges</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">ADT</th>
                                                    <td>Exchange</td>
                                                    <td>Before</td>
                                                    <td>Yes</td>
                                                    <td>NRP 4219.0 / ADT</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">ADT</th>
                                                    <td>Exchange</td>
                                                    <td>After</td>
                                                    <td>Yes</td>
                                                    <td>NRP 4219.0 / ADT</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">ADT</th>
                                                    <td>Exchange</td>
                                                    <td>Before</td>
                                                    <td>Yes</td>
                                                    <td>NRP 6027.0 / ADT</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">ADT</th>
                                                    <td>Exchange</td>
                                                    <td>After</td>
                                                    <td>Yes</td>
                                                    <td>NRP 6027.0 / ADT</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                                <div class="tab-pane fade in" id="selection">
                                <div class="detail_flight_number">
                                                <div class="pull-left">
                                                    <ul class="list-unstyled">
                                                        <li>PAX Type</li>
                                                        <li>Allowence Type:</li>
                                                        <li>Allowence</li>
                                                        <li>Hand Carry</li>
                                                    </ul>
                                                </div>
                                                <div class="pull-right">
                                                    <ul class="list-unstyled">
                                                        <li>ADT x 1</li>
                                                        <li>NRP 87642 x 1</li>
                                                        <li>NRP 17015 x 1</li>
                                                        <li>NRP 104657</li>
                                                    </ul>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>