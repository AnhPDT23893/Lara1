@extends('admin.user.layout')

@section('title') Order Management @stop

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/admin/order_details.less') }}">
@stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Order <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Economy / order
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

   <div class="row col-lg-12">
       <div class="col-md-6 col-xs-12 panel panel-primary">
           <pannel-title>
               <div class="caption">
                   <i class="fa fa-cogs"></i>
                   Orders Details
               </div>
               <div class="action">
                   <a herf="" class="btn btn-default">
                       <i class="fa fa-pencil"></i>
                       Edit
                   </a>
               </div>
           </pannel-title>
           <panel-body>
               <div class="row static-info">
                   <label class="col-md-5 label-control"> Order #: </label>
                   <div class="col-md-7 value"> {{$order->id}}</div>
               </div>
               <div class="row static-info">
                  <label class="col-md-5 label-control"> Order Date &Time: </label>
                  <div class="col-md-7 value"> {{$order->created_at}}</div>
               </div>
               <div class="row static-info">
                  <label class="col-md-5 label-control"> Order Status: </label>
                  <div class="col-md-7 value"> <span class="label label-success">{{$order->status}}</span></div>
              </div>
              <div class="row static-info">
                    <label class="col-md-5 label-control"> Grand Total: </label>
                    <div class="col-md-7 value"> ${{$order->grand_total}}</div>
                </div>
           </panel-body>
       </div>
       <div class="col-md-6 col-xs-12 panel panel-primary">
          <div class="page-header">
                <div class="caption">
                      <i class="fa fa-cogs"></i>
                      Customer Information
                  </div>
                  <div class="action">
                      <a herf="" class="btn btn-default">
                          <i class="fa fa-pencil"></i>
                          Edit
                      </a>
                  </div>
          </div>

          {{--<div class="panel-body">--}}
              {{--<div class="row static-info">--}}
                  {{--<label class="col-md-5 label-control">Customer name: </label>--}}
                  {{--<div class="col-md-7 value"> {{$order->customer()->last_name}}</div>--}}
              {{--</div>--}}
              {{--<div class="row static-info">--}}
                 {{--<label class="col-md-5 label-control"> Email:  </label>--}}
                 {{--<div class="col-md-7 value"> {{$order->customer()->email}}</div>--}}
              {{--</div>--}}
              {{--<div class="row static-info">--}}
                 {{--<label class="col-md-5 label-control"> Address </label>--}}
                 {{--<div class="col-md-7 value"> {{$order->customer()->address}}</div>--}}
             {{--</div>--}}
             {{--<div class="row static-info">--}}
                   {{--<label class="col-md-5 label-control"> Grand Total: </label>--}}
                   {{--<div class="col-md-7 value"> ${{$order->customer()->phone}}</div>--}}
             {{--</div>--}}
          {{--</div>--}}

          </panel-body>
      </div>
    </div>
@stop