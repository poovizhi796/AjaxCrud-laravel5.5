<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/Bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Welcome to Registration - @yield('type') Page</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="float-right">
                    <a href="{{ route('ajax_add.create')  }}" title="Create" id="myModel"  data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus btn btn-success"></i>
                    </a>
                    <a href="{{ route('ajax_add.index')  }}" title="List">
                        <i class="fas fa-list btn btn-primary"></i>
                    </a>
                </div>
                <br>
                <br>
                @yield('content')
            </div>
        </div>
        <script>
            $(document).ready(function (){
                $('#form_submit').submit(function(e){
                    e.preventDefault();
                    alert('clcik');
                });
            });
        </script>
        <script src="{{ asset('js/Bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
        <script src="{{ asset('js/Popper.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert.js') }}"></script> <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
            {{ Form::open(['route' => 'ajax_add.store', 'method'=> 'post', 'files'=> 'true', 'id' => 'form_submit']) }}
                @include('Ajax.form')
                <div class="form-group nav justify-content-center">
                    {{ Form::button('Save', ['class' => 'btn btn-outline-success form_submit', 'type'=>'submit']) }}
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
    </body>
</html>
