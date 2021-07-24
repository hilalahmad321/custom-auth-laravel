@include('../components/header');

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-4 offset-md-3">
        <h1>Sign up</h1>
        <form action="{{ route('auth.add_admin') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Enter your first name</label>
                <input type="text" name="fname" id="fname" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="">Enter your last name</label>
                <input type="text" name="lname" id="lname" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="">Enter your email </label>
                <input type="text" name="email" id="email" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="">Enter your password name</label>
                <input type="password" name="password" id="password" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Sign up</button>
            </div>
        </form>
    </div>
</div>

@include('../components/footer')