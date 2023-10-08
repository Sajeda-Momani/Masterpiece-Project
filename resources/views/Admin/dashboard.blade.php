@extends('Layout.admin_master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section> --}}
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="row">


                    <!-- ======================= Cards ================== -->
                    <div class="cardBox">
                        <div class="card">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="numbers">1,504</div>
                                    <div class="cardName">Daily Views</div>
                                </div>
                                <div class="iconBx ml-2"> <!-- You can adjust the margin as needed -->
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="d-flex align-items-center">

                                <div>
                                    <div class="numbers">8000</div>
                                    <div class="cardName">Sales</div>
                                </div>

                                <div class="iconBx ml-2">
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="d-flex align-items-center">

                                <div>
                                    <div class="numbers">2840</div>
                                    <div class="cardName">Comments</div>
                                </div>

                                <div class="iconBx ml-2">
                                    <ion-icon name="chatbubbles-outline"></ion-icon>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="numbers">$7,842</div>
                                    <div class="cardName">Earning</div>
                                </div>

                                <div class="iconBx ml-2"> 
                                    <ion-icon name="cash-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ================ Order Details List ================= -->
                    <div class="details">
                        <div class="recentOrders">
                            <div class="cardHeader">
                                <h2>Recent Orders</h2>
                                <a href="#" class="btn">View All</a>
                            </div>

                            <table>
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Price</td>
                                        <td>Payment</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Star Refrigerator</td>
                                        <td>$1200</td>
                                        <td>Paid</td>
                                        <td><span class="status delivered">Delivered</span></td>
                                    </tr>

                                    <tr>
                                        <td>Dell Laptop</td>
                                        <td>$110</td>
                                        <td>Due</td>
                                        <td><span class="status pending">Pending</span></td>
                                    </tr>

                                    <tr>
                                        <td>Apple Watch</td>
                                        <td>$1200</td>
                                        <td>Paid</td>
                                        <td><span class="status return">Return</span></td>
                                    </tr>

                                    <tr>
                                        <td>Addidas Shoes</td>
                                        <td>$620</td>
                                        <td>Due</td>
                                        <td><span class="status inProgress">In Progress</span></td>
                                    </tr>

                                    <tr>
                                        <td>Star Refrigerator</td>
                                        <td>$1200</td>
                                        <td>Paid</td>
                                        <td><span class="status delivered">Delivered</span></td>
                                    </tr>

                                    <tr>
                                        <td>Dell Laptop</td>
                                        <td>$110</td>
                                        <td>Due</td>
                                        <td><span class="status pending">Pending</span></td>
                                    </tr>

                                    <tr>
                                        <td>Apple Watch</td>
                                        <td>$1200</td>
                                        <td>Paid</td>
                                        <td><span class="status return">Return</span></td>
                                    </tr>

                                    <tr>
                                        <td>Addidas Shoes</td>
                                        <td>$620</td>
                                        <td>Due</td>
                                        <td><span class="status inProgress">In Progress</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- ================= New Customers ================ -->
                        <div class="recentCustomers">
                            <div class="cardHeader">
                                <h2>Recent Customers</h2>
                            </div>

                            <table>
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>David <br> <span>Italy</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Amit <br> <span>India</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>David <br> <span>Italy</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Amit <br> <span>India</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>David <br> <span>Italy</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Amit <br> <span>India</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>David <br> <span>Italy</span></h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Amit <br> <span>India</span></h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card -->
        </section>
        <!-- /.content -->

    </div>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- /.content-wrapper -->
@endsection
