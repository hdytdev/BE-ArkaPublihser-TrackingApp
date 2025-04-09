<div class="login-card">
    <div class="login-header">
        <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739280606/logoArkaPublisher_dipqix.png"
            alt="logo">
        <p>
            Kelola data pesanan, jurnal dan lacak secara mudah melalui satu aplikasi
        </p>
    </div>
    <form wire:submit.prevent='login' action="" class="login-form">
        <input wire:model='email' class="login-form-control" type="text" placeholder="Masukan username">
        <input wire:model='password' class="login-form-control" type="password" name="" id=""
            placeholder="Masukan password">
        <div class="forgot-password">
            <p>Lupa password?</p><a href="wa developer">Hubungi admin</a>
        </div>
        <button type="submit" class="login-form-button">
            Login
        </button>
    </form>
</div>