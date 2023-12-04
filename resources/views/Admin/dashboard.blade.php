@extends('Layout.admin_master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="row">


                    <!-- ======================= Cards ================== -->
                    <div class="cardBox">
                        <div class="card">
                            <div class="d-flex align-items-center">
                                @php
                                    $CustomerCount = \App\Models\Customer::count();
                                @endphp
                                <div>
                                    <div class="numbers">{{ $CustomerCount }}</div>
                                    <div class="cardName">Users</div>
                                </div>
                                <div class="iconBx ml-2"> <!-- You can adjust the margin as needed -->
                                    <ion-icon name="person-outline"></ion-icon>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="d-flex align-items-center">
                                @php
                                    $OrderCount = \App\Models\Order::count();
                                @endphp
                                <div>
                                    <div class="numbers">{{ $OrderCount }}</div>
                                    <div class="cardName">Orders</div>
                                </div>

                                <div class="iconBx ml-2">
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="d-flex align-items-center">
                                @php
                                    $MessagesCount = \App\Models\Contact::count();
                                @endphp
                                <div>
                                    <div class="numbers">{{ $MessagesCount }}</div>
                                    <div class="cardName">Messages</div>
                                </div>

                                <div class="iconBx ml-2">
                                    <ion-icon name="chatbubbles-outline"></ion-icon>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="d-flex align-items-center">
                                @php
                                    $PaymentsTotal = \App\Models\order::sum('total_price');
                                @endphp
                                <div>
                                    <div class="numbers">{{ $PaymentsTotal }}</div>
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
                                <a href="/orders" class="btn">View All</a>
                            </div>

                            <table>
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Payment</td>
                                        {{-- <td>Status</td> --}}
                                        <td>Date Purchased</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($recentOrders as $order)
                                        <tr>
                                            <td>{{ $order->customer->name }}</td>
                                            <td>${{ number_format($order->total_price, 2) }}</td>
                                            {{-- <td>
                                                <span class="status {{ $order->statusClass }}">{{ $order->status }}</span>
                                            </td> --}}
                                            <td>{{ $order->order_date }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <!-- ================= New Customers ================ -->
                        <div class="recentCustomers">
                            <div class="cardHeader">
                                <h2>Recent Customers</h2>
                            </div>

                            <table>
                                @foreach ($recentCustomers as $customer)
                                    <tr>
                                        {{-- <td width="60px">
                                            <div class="imgBx">
                                                <img src="{{ asset($customer->profile_image) }}"
                                                    alt="{{ $customer->name }} Image">
                                            </div>
                                        </td> --}}
                                        <td>
                                            <h4>{{ $customer->name }} <br> <span>{{ $customer->email }}</span></h4>
                                        </td>
                                    </tr>
                                @endforeach
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
    <script type="module" src="{{ asset('js/ionicons/ionicons.esm.js') }}"></script>
    <script nomodule src="{{ asset('js/ionicons/ionicons.js') }}"></script>

    <!-- /.content-wrapper -->
@endsection
