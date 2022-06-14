@extends('admin.layout.app')
@section('page_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>{{__('messages.sidebar_dashboard_text')}}</h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item active">
                        <a href="#">{{__('messages.home_text')}}</a>
                    </li>
                </ol>
            </nav>
            <div class="separator mb-5"></div>
        </div>
        <div class="col-lg-12 col-xl-12">
            <div class="icon-cards-row">
                <div class="glide dashboard-numbers">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <a href="{{route('admin.orders')}}/3" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-clock"></i>
                                        <p class="card-text mb-0">{{__('messages.pending_orders_text')}}</p>
                                        <p class="lead text-center">{{\App\Models\Order::where('order_status','<',7)->where('order_status','<>',3)->count()}}</p>
                                    </div>
                                </a>
                            </li>
                            <li class="glide__slide">
                                <a href="{{route('admin.orders')}}/7" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-basket-coins"></i>
                                        <p class="card-text mb-0">{{__('messages.completed_order_text')}}</p>
                                        <p class="lead text-center">{{\App\Models\Order::where('order_status','=',7)->count()}}</p>
                                    </div>
                                </a>
                            </li>
                            <li class="glide__slide">
                                <a href="{{route('admin.orders')}}" class="card">
                                    <div class="card-body text-center">
                                        <i class="glyph-icon iconsminds-dollar"></i>
                                        <p class="card-text mb-0">{{__('messages.today_income_text')}}</p>
                                        <p class="lead text-center">{{\App\Models\Order::where('order_status','=',7)->where('created_at','like',date('Y-m-d').'%')->sum('admin_amount')}}</p>
                                    </div>
                                </a>
                            </li>
                            <li class="glide__slide">
                                <a href="{{route('admin.orders')}}" class="card">
                                    <div class="card-body text-center">
                                        <i class="glyph-icon iconsminds-dollar"></i>
                                        <p class="card-text mb-0">{{__('messages.week_income_text')}}</p>
                                        <p class="lead text-center">{{\App\Models\Order::where('order_status','=',7)->where('created_at','>',date( "Y-m-d", strtotime("sunday -1 week") ).' 00:00:00')->sum('admin_amount')}}</p>
                                    </div>
                                </a>
                            </li>
                            <li class="glide__slide"> 
                                <a href="{{route('admin.orders')}}" class="card">
                                    <div class="card-body text-center">
                                        <i class="glyph-icon iconsminds-dollar"></i>
                                        <p class="card-text mb-0">Today's Released Amount</p>
                                        <p class="lead text-center">{{\App\Models\UserWalletHistory::where('order_id','=',0)->where('created_at','like',date('Y-m-d').'%')->sum('amount')}}</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php /*
        <div class="col-lg-12 col-xl-6">
            <div class="icon-cards-row">
                <div class="glide dashboard-numbers">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            
                            <li class="glide__slide"> 
                                <a href="{{route('admin.orders')}}" class="card">
                                    <div class="card-body text-center">
                                        <i class="glyph-icon iconsminds-dollar"></i>
                                        <p class="card-text mb-0">Today's Released Amount</p>
                                        <p class="lead text-center">{{\App\Models\UserWalletHistory::where('order_id','=',0)->where('created_at','like',date('Y-m-d').'%')->sum('amount')}}</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       */ ?>
    </div>

    
    <div class="row">
        <div class="col-xl-6 col-lg-12 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{__('messages.hairdresser_list_text')}}</h5>
                    <table class="data-table data-table-standard responsive nowrap"
                        data-order="[[ 1, &quot;desc&quot; ]]">
                        <thead>
                            <tr>
                                <th>{{__('messages.name_text')}}</th>
                                <th>{{__('messages.phone_number_text')}}</th>
                                <th>{{__('messages.wallet_amount_text')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $list = \App\Models\User::where('wallet_total','<',0)->where('role_id',3)->get();
                            @endphp
                            @foreach($list as $key=>$val)
                                <tr>
                                    <td>
                                        <a href="{{route('admin.hairdresser_detail',$val->id)}}" class="list-item-heading">{{$val->name}}</a>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{$val->phone_number}}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{$val->wallet_total}}</p>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{__('messages.customer_list_text')}}</h5>
                    <table class="data-table data-table-standard responsive nowrap"
                        data-order="[[ 1, &quot;desc&quot; ]]">
                        <thead>
                            <tr>
                                <th>{{__('messages.name_text')}}</th>
                                <th>{{__('messages.phone_number_text')}}</th>
                                <th>{{__('messages.wallet_amount_text')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $list = \App\Models\User::where('wallet_total','<',0)->where('role_id',2)->get();
                            @endphp
                            @foreach($list as $key=>$val)
                                <tr>
                                    <td>
                                        <a href="{{route('admin.customer_detail',$val->id)}}" class="list-item-heading">{{$val->name}}</a>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{$val->phone_number}}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{$val->wallet_total}}</p>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 


</div>
@endsection