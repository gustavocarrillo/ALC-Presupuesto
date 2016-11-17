<div class="profile">
    <div class="profile_pic">
        <img src="{{ url('img/fotos_user/'.Auth::user()->foto) }}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Bienvenido,</span>
        <h2>{{ Auth::user()->nombre}}</h2>
    </div>
</div>