    <div class="form-group">
        {{ Form::label('name', 'Enter Customer Name') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'customer_name', 'placeholder' => 'Enter Customer Name', 'title' => 'Customer Name']) }}
    </div>
    <div class="form-group">
        {{ Form::label('mobile', 'Enter Customer Mobile') }}
        {{ Form::number('mobile', null, ['class' => 'form-control', 'id' => 'customer_mobile', 'placeholder' => 'Enter Customer Mobile', 'title' => 'Customer Mobile']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Enter Customer Address') }}
        {{ Form::textarea('address', null, ['class' => 'form-control', 'rows'=> '2', 'id'=>'cust_address', 'placeholder'=>'Enter Customer address', 'title'=>'Enter Customer Address']) }}
    </div>
    <div class="form-group">
        {{ Form::label('gender', 'Customer Gender') }}
        {{ Form::radio('gender', 'Male', '') }}Male
        {{ Form::radio('gender', 'Female', '') }}Female
    </div>
    <div class="form-group">
        {{ Form::label('gender', 'Customer Gender') }}
        {{ Form::checkbox('subject', 'Direct', '')}}Direct
        {{ Form::checkbox('subject', 'Online', '')}}Online
    </div>
    <div class="form-group">
        {{ Form::label('image', 'Customer Image') }}
        {{ form::file('image', null) }}
    </div>
    <div class="form-group">
        {{ Form::label('customer_status', 'Customer Status') }}
        {{ Form::select('customer_status', ['active' => 'Active', 'deactive' => 'Deactive']) }}
    </div>
