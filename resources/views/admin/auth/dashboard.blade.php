<?php $page = 'index'; ?>
@extends('layout.mainlayout')

@section('content')


    <div class="dashboard-wrapper">
        <div class="row justify-content-center g-4 w-100">

            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="dashboard-card primary">
                    <div class="card-content">
                        <div>
                            <span class="card-title">Contact Enquiries</span>
                            <h2 class="card-count">{{ $contactCount }}</h2>
                        </div>

                        <div class="card-icon">
                            <i class="ti ti-address-book"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="dashboard-card success">
                    <div class="card-content">
                        <div>
                            <span class="card-title">Service Enquiries</span>
                            <h2 class="card-count">{{ $serviceCount }}</h2>
                        </div>

                        <div class="card-icon">
                            <i class="ti ti-briefcase"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <style>
        /* Wrapper */
        .dashboard-wrapper {
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        /* Card */
        .dashboard-card {
            background: #fff;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            transition: .3s ease;
            overflow: hidden;
            position: relative;
        }

        .dashboard-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, .12);
        }

        /* Left Border */
        .dashboard-card.primary {
            border-left: 6px solid #0d6efd;
        }

        .dashboard-card.success {
            border-left: 6px solid #198754;
        }

        /* Content */
        .card-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Title */
        .card-title {
            display: block;
            font-size: 15px;
            font-weight: 600;
            color: #6c757d;
            margin-bottom: 8px;
        }

        /* Count */
        .card-count {
            font-size: 38px;
            font-weight: 700;
            color: #212529;
            margin: 0;
        }

        /* Icon */
        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: #fff;
        }

        .primary .card-icon {
            background: #0d6efd;
        }

        .success .card-icon {
            background: #198754;
        }

        /* Mobile */
        @media(max-width:768px) {
            .dashboard-wrapper {
                min-height: auto;
                padding: 30px 15px;
            }

            .card-count {
                font-size: 30px;
            }

            .card-icon {
                width: 60px;
                height: 60px;
                font-size: 26px;
            }
        }
    </style>
@endsection