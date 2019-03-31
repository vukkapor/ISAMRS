@extends('layout')

@section('content')
<style type="text/css">
	.profile-img img {
    	width: 70%;
    	height: 100%;
	}
	.profile-head h5 {
    	color: #333;
	}
	.profile-head h6 {
    	color: #0062cc;
	}
	.profile-head .nav-tabs {
    	margin-bottom:5%;
	}
	.profile-head .nav-tabs .nav-link {
    	font-weight:600;
    	border: none;
	}
	.profile-head .nav-tabs .nav-link.active {
    	border: none;
    	border-bottom:2px solid #0062cc;
	}
	.profile-tab p {
    	font-weight: 600;
    	color: #0062cc;
	}
	.tab-pane.fade {
		margin-top: -125px;
	}
</style>
<div class="container">
	<h1>User Profile</h1>
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="http://clipart-library.com/data_images/298634.png" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Name Surname
                                    </h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="friend-tab" data-toggle="tab" href="#friends" role="tab" aria-controls="profile" aria-selected="false">Friend List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="reservation-tab" data-toggle="tab" href="#reservations" role="tab" aria-controls="profile" aria-selected="false">Reservations</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>LINKS</p>
                            <a href="">Flights</a><br/>
                            <a href="">Rent-A-Car</a><br/>
                            <a href="">BnB's</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>NameSurname123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Full Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Name Surname</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>namesurname@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 789</p>
                                            </div>
                                        </div>
                         
                            </div>
                            <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="friend-tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Friend1</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Friend2</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Friend3</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Friend4</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Friend5</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="reservations" role="tabpanel" aria-labelledby="reservation-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Reservation1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Reservation2</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Reservation3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
@endsection