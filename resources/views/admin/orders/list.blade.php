@extends('admin.layout.app')
@section('page_content')
<div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>{{__('messages.orders_text')}}</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">{{__('messages.home_text')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">{{__('messages.orders_text')}}</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="data-table" id="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>{{__('messages.order_number_text')}}</th>
                                                        <th>{{__('messages.customer_name_text')}}</th>
                                                        <th>{{__('messages.mechanic_name_text')}}</th>
                                                        <th>{{__('messages.address_text')}}</th>
                                                        <th>{{__('messages.total_text')}}</th>
                                                        <th>{{__('messages.status_text')}}</th>
                                                        <th>{{__('messages.created_at_text')}}</th>
                                                        <th>{{__('messages.action_text')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orders as $key=>$val)
                                                    <tr>
                                                        <td>{{$val->order_code}}</td>
                                                        <td>@if($val->customer){{$val->customer->name}}@endif</td>
                                                        <td>
                                                            @if($val->hairdresser){{$val->hairdresser->name}}@endif</td>
                                                        <td>{{$val->address}}</td>
                                                        <td>{{$val->final_total}}</td>
                                                        <td>
                                                            @if($val->order_status==ORDER_REQUEST)
                                                            	{{__('messages.order_request')}}
                                                            @elseif($val->order_status==ORDER_TIMEOUT)
                                                            	{{__('messages.order_timeout')}}
                                                            @elseif($val->order_status==ORDER_CANCEL)
                                                            	{{__('messages.order_cancel')}}
                                                            @elseif($val->order_status==ORDER_ACCEPT)
                                                            	{{__('messages.order_accept')}}
                                                            @elseif($val->order_status==ORDER_ON_THE_WAY)
                                                            	{{__('messages.order_on_the_way')}}
                                                            @elseif($val->order_status==ORDER_PROCESSING)
                                                            	{{__('messages.order_processing')}}
                                                            @elseif($val->order_status==ORDER_COMPLETE)
                                                            	{{__('messages.order_complete')}}
                                                            @elseif($val->order_status==ORDER_REJECT)
                                                            	{{__('messages.order_rejected')}}
                                                            @elseif($val->order_status==ORDER_PAID)
                                                            	{{__('messages.order_paid')}}
                                                            @elseif($val->order_status==PAYMENT_TIMEOUT)
                                                            	{{__('messages.payment_timeout')}}
                                                            @endif
                                                        </td>
                                                        <td>{{$val->created_at}}</td>
                                                        <td>
                                                            <a class="btn btn-info text-white" href="{{route('admin.order_detail',$val->id)}}">View</a>
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
@section('script_js')
<script type="text/javascript">
    $("#data-table").DataTable({
        sDom: '<"row view-filter"<"col-sm-12"<"float-right"l><"float-left"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',

        drawCallback: function () {
          $($(".dataTables_wrapper .pagination li:first-of-type"))
            .find("a")
            .addClass("prev");
          $($(".dataTables_wrapper .pagination li:last-of-type"))
            .find("a")
            .addClass("next");

          $(".dataTables_wrapper .pagination").addClass("pagination-sm");
        },
        language: {
          paginate: {
            previous: "<i class='simple-icon-arrow-left'></i>",
            next: "<i class='simple-icon-arrow-right'></i>"
          },
          search: "_INPUT_",
          searchPlaceholder: messages.data_table_search_placeholder_text,
          lengthMenu: messages.data_table_item_per_page_text+" _MENU_ ",
          info:messages.data_table_pagination_showing_text+" _START_ "+messages.data_table_pagination_to_text+" _END_ "+messages.data_table_pagination_of_text+" _TOTAL_ "+messages.data_table_pagination_entries_text,

        },
    });


</script>
@endsection
