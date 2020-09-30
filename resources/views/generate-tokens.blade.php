<div class="alert alert-success" role="alert">
    {{ session('bearerToken') }}
</div>
----------------------------
<div class="alert alert-success" role="alert">
    {{ session('refreshToken') }}
</div>
----------------------------
<div class="alert alert-success" role="alert">
    {{ session('expiresIn') }}
</div>


<passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens>

