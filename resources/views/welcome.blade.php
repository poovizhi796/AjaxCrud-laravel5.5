<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/Bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
    <div class="row">
        <div class="offset-md-4 col-md-4">
            <h3 class="text-center">Login</h3>
            <div class="login">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <input type="submit" value="Submit" class="btn btn-md btn-outline-success" name="submit" id="submit">
            </div>
        </div>
    </div>
        <script src="{{ asset('js/Bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
        <script src="{{ asset('js/Popper.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert.js') }}"></script>
    </body>
</html>