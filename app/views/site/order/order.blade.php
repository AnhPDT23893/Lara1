@extends('site.user.index')

@section('title')
        Order
@stop

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{Asset('assets/less/site/order/order.less')}}"/>
@endsection

@section('user_content')
    <div class="slide-show">
       <div class="show">
           <img class="img-responsive" src="{{asset('assets/images/slide-show/slide-categories.png')}}"/>
           <p class="container">
               <a href="javascript:void(0);">ORDER</a>
           </p>
       </div>
    </div>
    <div class="content">
        <div class="container ">
            <div class="order" id="order-form">
            {{Form::open(array('route' => array('site.cart.order')))}}
{{--            {{ Form::open() }}--}}
                <div class="col-md-4 col-xs-12 col-order">
                    <h3>Recipient address</h3>
                    <div class="info">
                        <div class="col-md-11 col-xs-11 form-group">
                           {{Form::text('name',null, array('placeholder'=> 'Name','checked','class' => 'username form-control')) }}
                       </div>
                       <div class="col-md-11 col-xs-11 form-group">
                            {{Form::email('email',null, array('placeholder'=> 'Email','class' => 'email form-control')) }}
                        </div>
                       <div class="col-md-11 col-xs-11 form-group">
                           {{Form::text('phone',null, array('placeholder'=> 'Phone Number','class' => 'phone_number form-control')) }}
                       </div>
                       <div  class="col-md-11 col-xs-11 form-group">
                           <div class="col-md-6 col-xs-6" style="padding-left: 0px;">
                                {{ Form::select('country', array('Viet Nam' => 'Viet Nam'), null, array('class' => 'form-control')) }}
                           </div>
                            <div class="col-md-6 col-xs-6 city" style="padding-right: 0px;">
                                {{ Form::select('ship_id', array('2' => 'HA NOI'), null, array('class' => 'form-control')) }}
                           </div>
                       </div>
                       <div class="col-md-11 col-xs-11 form-group">
                            {{Form::text('address',null, array('placeholder'=> 'Address','class' => 'address form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-order">
                    <h3>Method payment</h3>

                        <div class="payment">
                           <span><i class="fa fa-dot-circle-o icon-car"></i> Payment on delery</span>
                           <div class=" form-group icon-car">
                                <i class="fa fa-truck"></i>
                            </div>

                        </div>

                </div>
                <div class="col-md-4 col-xs-12 col-order  " id="order-cart">
                    <h3>Order</h3>
                    <div class="item-cart list-item ">
                        <div class="cart-empty clearfix" style="display: none;">
                           <div class="col-md-3 col-sm-3 col-xs-3">
                               <img class="pr-image" rel="#"  style="height: 60px; width: 60px">
                           </div>
                           <div class=" col-md-5 col-sm-5 col-xs-5">
                               <h4 class="pr-name"></h4>
                               <label><i class="pr-qty"></i>X<span class="pr-label"></span> </label>
                               <p>Qty: <i class="pr-qty"></i></p>
                           </div>
                           <div class="col-md-4 col-sm-4 col-xs-4 icon-cart ">
                               <i class="fa fa-refresh"></i>
                               <i class="fa fa-remove pr-remove"></i>
                           </div>
                       </div>
                    </div>
                    <div class="total clearfix">
                       <h4 class="col-md-6 col-sm-9">Subtotal:</h4>
                       <p class="col-md-6 col-sm-3">$<i class="price-total"></i></p>
                   </div>
                   <div class="col-md-10 buy">
                      <button type="submit" class="btn btn-block">BUY</button>
                   </div>
                </div>
                 {{Form::close()}}
            </div>
        </div>
    </div>
@endsection