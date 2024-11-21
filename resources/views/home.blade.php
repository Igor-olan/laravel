@include('templates.header');


<div class="main-content login-panel">
    <div class="login-body">
        <div class="bottom">
            <h3 class="panel-title">ADD ACTIVITY</h3>
            <ul>
                @foreach ($data as $d)
                    <li class="d-flex justify-content-between my-2">
                        <span>{{ $d->activity_name }}</span>
                        <div>
                            <a href="/update/{{ $d->id }}" class="btn btn-warning text-light">
                                <i class="fa-solid fa-edit"></i>
                            </a>

                            <a href="/delete/{{ $d->id }}" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </div>
                    </li>
            </ul>

            <form method="POST" action="/login">
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username or email address" name="name">
                </div>
                <div class="input-group mb-20">
                    <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    <input type="password" class="form-control rounded-end" placeholder="Password" name="password">
                    <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                </div>
                <div class="d-flex justify-content-between mb-25">
                    <p class="text-white fs-14">Forgot password? <a href="/reset">Reset password</a></p>
                </div>
                <button class="btn btn-primary w-100 login-btn" type="submit">Login</button><br><br>
                <div class="mt2">Don't have an account? <a href="/register">Sign up</a></div>
            </form>
        </div>
    </div>

    <div class="footer">
        Copyright©
        <script>
            < /p>     document.write(new Date().getFullYear())
        </script> All Rights Reserved By <span class="text-primary">PI SCHOOL LIBRARY</span></p>
    </div>
</div>


@include('templates.footer');
