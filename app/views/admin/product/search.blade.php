{{ Form::model($searchProductFrom, array('class' => 'form-inline', 'method' => 'GET')) }}

    <div class="form-group">
       <a href="{{ URL::route('admin.adProduct.create') }}" class="btn btn-success">
           <i class="fa fa-plus"></i> {{{ trans('admin_product.table.create') }}}
       </a>
   </div>
    <div class="form-group">
        {{ Form::text('name_product', Input::old('name_product'), array('class' => 'form-control', 'placeholder' => 'Product Name')) }}
    </div>
    <div class="form-group">
        {{ Form::select('category', $searchProductFrom::getCategorySelect(), null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::select('size', $searchProductFrom::getSizeSelect(), null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::select('color', $searchProductFrom::getColorSelect(), null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
            {{ Form::select('status', $searchProductFrom::getStatusSelect(), null, array('class' => 'form-control')) }}
        </div>

    {{ Form::submit(trans('admin_product.table.search'), array('class' => 'btn btn-default')) }}

{{ Form::close() }}