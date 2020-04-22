@extends('layouts.app')
@section('title', 'Registartion form using Ajax and Jquery')
@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" data-keyboard="false" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            {{ Form::open(['route' => 'ajax_add.store', 'method'=> 'post', 'files'= > 'true']) }}
                @include('Ajax.form')
                <div class="form-group nav justify-content-center">
                    {{ Form::button('Save', ['class' => 'btn btn-outline-success', 'type'=>'submit']) }}
                </div>
            {{ Form::close() }}
            </div>
            <div class="modal-footer">
                Thank You for using Our Registartion Form
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
<!---- end Model ------>
@endsection()