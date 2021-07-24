@include('../components/header');

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-4 offset-md-3">
        @if (session()->has('status'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('status') }}</strong>
        </div>
        @endif
        <h1>Sign in</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Enter your email </label>
                <input type="text" name="email" id="email" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="">Enter your password name</label>
                <input type="password" name="password" id="password" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
</div>

@include('../components/footer')