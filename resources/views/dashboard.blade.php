@include('components/header');

@isset($users)
<div class="row">
    <div class="col-6 offset-3">
        <h1>Dashborad</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>fname</th>
                    <th>lname</th>
                    <th>email</th>
                    <th>Logout</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$users->id}}</td>
                    <td>{{$users->fname}}</td>
                    <td>{{$users->lname}}</td>
                    <td>{{$users->email}}</td>
                    <td><a href="{{ route('auth.logout') }}"><button class="btn btn-danger">Logout</button></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endisset
@include('components/footer')