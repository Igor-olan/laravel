
<div class="main-content login-panel">
    <div class="login-body">
        <div class="bottom">
            <h3 class="panel-title">ADD ACTIVITY</h3>

            <form method="POST" action="{{ Route('add') }}" type="text" class="form-control" placeholder="activity_name"
                name="activity_name" value="{{ old('activity_name') }}">
                @csrf
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Activity" name="name">
                </div>

                <button class="btn btn-primary w-100 login-btn" type="submit">Add</button><br><br>
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

