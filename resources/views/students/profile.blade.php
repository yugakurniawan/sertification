@extends('layouts.main')

@section('container')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
                                <h3 class="name">{{ $student->nama }}</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        45 <span>Projects</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        15 <span>Awards</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        2174 <span>Points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Basic Info</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Birthdate <span>24 Aug, 2016</span></li>
                                    <li>Mobile <span>(124) 823409234</span></li>
                                    <li>Email <span>samuel@mydomain.com</span></li>
                                    <li>Website <span><a href="https://www.themeineed.com">www.themeineed.com</a></span>
                                    <li>Website <span><a href="https://www.themeineed.com">www.themeineed.com</a></span>
                                    <li>Website <span><a href="https://www.themeineed.com">www.themeineed.com</a></span>
                                    </li>
                                </ul>
                            </div>

                            <div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">

                        <!-- END AWARDS -->
                        <!-- TABBED CONTENT -->
                        <div class="custom-tabs-line tabs-line-bottom left-aligned">
                            <ul class="nav" role="tablist">
                                <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent
                                        Activity</a></li>
                                <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Projects <span
                                            class="badge">7</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-bottom-left1">
                                <div class="table-responsive">
                                    <table class="table project-table">
                                        <thead>
                                            <tr>
                                                <th>Semester</th>
                                                <th>Nilai</th>
                                                <a href="#" class="btn btn-primary">Tambah Nilai</a>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">Semester 1</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                            <span>3.4</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Semester 2</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                            <span>3.4</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Semester 3</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                            <span>3.4</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-bottom-left2">
                                <div class="table-responsive">
                                    <table class="table project-table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Progress</th>
                                                <th>Leader</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">Spot Media</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                            <span>60% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user2.png" alt="Avatar"
                                                        class="avatar img-circle"> <a href="#">Michael</a></td>
                                                <td><span class="label label-success">ACTIVE</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">E-Commerce Site</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="33"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                                                            <span>33% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user1.png" alt="Avatar"
                                                        class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                <td><span class="label label-warning">PENDING</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Project 123GO</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="68"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                                            <span>68% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user1.png" alt="Avatar"
                                                        class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                <td><span class="label label-success">ACTIVE</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Wordpress Theme</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                            <span>75%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user2.png" alt="Avatar"
                                                        class="avatar img-circle"> <a href="#">Michael</a></td>
                                                <td><span class="label label-success">ACTIVE</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Project 123GO</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 100%;">
                                                            <span>100%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user1.png" alt="Avatar"
                                                        class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                <td><span class="label label-default">CLOSED</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Redesign Landing Page</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 100%;">
                                                            <span>100%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user5.png" alt="Avatar"
                                                        class="avatar img-circle"> <a href="#">Jason</a></td>
                                                <td><span class="label label-default">CLOSED</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END TABBED CONTENT -->
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection
