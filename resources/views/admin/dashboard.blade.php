@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')

    <div class="content-wrapper">
        
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <h5 class="mb-2">Info Box</h5>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Messages</span>
                            <span class="info-box-number">1,410</span>
                        </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Bookmarks</span>
                                <span class="info-box-number">410</span>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Uploads</span>
                                <span class="info-box-number">13,648</span>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Likes</span>
                                <span class="info-box-number">93,139</span>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>

                <!-- =========================================================== -->
                
                <!-- <h5 class="mb-2 mt-4">Small Box</h5> -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-6">
                        
                        <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-6">
                        
                        <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-6">
                        
                        <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                    
                </div>
                
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Online Store Visitors</h3>
                                        <a href="javascript:void(0);">View Report</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="d-flex flex-column">
                                            <span class="text-bold text-lg">820</span>
                                            <span>Visitors Over Time</span>
                                        </p>
                                        <p class="ml-auto d-flex flex-column text-right">
                                            <span class="text-success">
                                            <i class="fas fa-arrow-up"></i> 12.5%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </p>
                                    </div>
    
                                    <div class="position-relative mb-4">
                                        <canvas id="visitors-chart" height="200"></canvas>
                                    </div>
    
                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2">
                                            <i class="fas fa-square text-primary"></i> This Week
                                        </span>
    
                                        <span>
                                            <i class="fas fa-square text-gray"></i> Last Week
                                        </span>
                                    </div>
                                </div>
                            </div>
    
                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Products</h3>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-tool btn-sm">
                                            <i class="fas fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Sales</th>
                                                <th>More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('public/assets/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Some Product
                                                </td>
                                                <td>$13 USD</td>
                                                <td>
                                                    <small class="text-success mr-1">
                                                        <i class="fas fa-arrow-up"></i>
                                                        12%
                                                    </small>
                                                    12,000 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('public/assets/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Another Product
                                                </td>
                                                <td>$29 USD</td>
                                                <td>
                                                    <small class="text-warning mr-1">
                                                        <i class="fas fa-arrow-down"></i>
                                                        0.5%
                                                    </small>
                                                    123,234 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('public/assets/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Amazing Product
                                                </td>
                                                <td>$1,230 USD</td>
                                                <td>
                                                    <small class="text-danger mr-1">
                                                        <i class="fas fa-arrow-down"></i>
                                                        3%
                                                    </small>
                                                    198 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('public/assets/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Perfect Item
                                                    <span class="badge bg-danger">NEW</span>
                                                </td>
                                                <td>$199 USD</td>
                                                <td>
                                                    <small class="text-success mr-1">
                                                        <i class="fas fa-arrow-up"></i>
                                                        63%
                                                    </small>
                                                    87 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Sales</h3>
                                        <a href="javascript:void(0);">View Report</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">$18,230.00</span>
                                        <span>Sales Over Time</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 33.1%
                                        </span>
                                        <span class="text-muted">Since last month</span>
                                    </p>
                                    </div>
    
                                    <div class="position-relative mb-4">
                                    <canvas id="sales-chart" height="200"></canvas>
                                    </div>
    
                                    <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> This year
                                    </span>
    
                                    <span>
                                        <i class="fas fa-square text-gray"></i> Last year
                                    </span>
                                    </div>
                                </div>
                            </div>
    
                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Online Store Overview</h3>
                                    <div class="card-tools">
                                    <a href="#" class="btn btn-sm btn-tool">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-tool">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                    <p class="text-success text-xl">
                                        <i class="ion ion-ios-refresh-empty"></i>
                                    </p>
                                    <p class="d-flex flex-column text-right">
                                        <span class="font-weight-bold">
                                        <i class="ion ion-android-arrow-up text-success"></i> 12%
                                        </span>
                                        <span class="text-muted">CONVERSION RATE</span>
                                    </p>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                    <p class="text-warning text-xl">
                                        <i class="ion ion-ios-cart-outline"></i>
                                    </p>
                                    <p class="d-flex flex-column text-right">
                                        <span class="font-weight-bold">
                                        <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                                        </span>
                                        <span class="text-muted">SALES RATE</span>
                                    </p>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                    <p class="text-danger text-xl">
                                        <i class="ion ion-ios-people-outline"></i>
                                    </p>
                                    <p class="d-flex flex-column text-right">
                                        <span class="font-weight-bold">
                                        <i class="ion ion-android-arrow-down text-danger"></i> 1%
                                        </span>
                                        <span class="text-muted">REGISTRATION RATE</span>
                                    </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                </div>
            </div>

        </section>
        
    </div>
    

@endsection

@section('script')
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('public/assets/dist/js/pages/dashboard3.js') }}"></script>
@endsection