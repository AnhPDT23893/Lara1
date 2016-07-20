@extends('site.user.index')

@section('title')
        Order
@stop

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{Asset('assets/less/site/order/order.less')}}"/>
@endsection

@section('user_content')
    <div class="container ">
      <div class="alert alert-success row" role="alert">
          <strong>Order Successful!</strong> Please, click <a href="{{ URL::route('site.home.index') }}" class="alert-link">here</a> back to Home.
     </div>
    </div>
@endsection