 @extends('layouts.app')

 @section('content')
 <div class="container py-5">
     <div class="row justify-content-center">
         <div class="col-md-7 col-lg-6">
             <div class="card shadow-sm border-0">
                 <div class="card-body p-4">

                     <h3 class="text-center mb-2">Daftar Scevra</h3>
                     <p class="text-center text-muted mb-4">
                         Buat akun untuk mulai berbelanja di Scevra Parfume
                     </p>

                     <form method="POST" action="{{ route('register.process') }}">
                         @csrf

                         <div class="mb-3">
                             <label for="nama_pengguna" class="form-label">
                                 Nama Lengkap
                             </label>

                             <input
                                 id="nama_pengguna"
                                 type="text"
                                 name="nama_pengguna"
                                 value="{{ old('nama_pengguna') }}"
                                 class="form-control @error('nama_pengguna') is-invalid @enderror"
                                 placeholder="Masukkan nama lengkap"
                                 required
                                 autofocus>

                             @error('nama_pengguna')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                             @enderror
                         </div>

                         <div class="mb-3">
                             <label for="email" class="form-label">
                                 Email
                             </label>

                             <input
                                 id="email"
                                 type="email"
                                 name="email"
                                 value="{{ old('email') }}"
                                 class="form-control @error('email') is-invalid @enderror"
                                 placeholder="Masukkan email"
                                 required>

                             @error('email')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                             @enderror
                         </div>

                         <div class="mb-3">
                             <label for="no_telepon" class="form-label">
                                 Nomor Telepon
                             </label>

                             <input
                                 id="no_telepon"
                                 type="text"
                                 name="no_telepon"
                                 value="{{ old('no_telepon') }}"
                                 class="form-control @error('no_telepon') is-invalid @enderror"
                                 placeholder="Masukkan nomor telepon">

                             @error('no_telepon')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                             @enderror
                         </div>

                         <div class="mb-3">
                             <label for="password" class="form-label">
                                 Password
                             </label>

                             <input
                                 id="password"
                                 type="password"
                                 name="password"
                                 class="form-control @error('password') is-invalid @enderror"
                                 placeholder="Minimal 8 karakter"
                                 required>

                             @error('password')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                             @enderror
                         </div>

                         <div class="mb-4">
                             <label for="password_confirmation" class="form-label">
                                 Konfirmasi Password
                             </label>

                             <input
                                 id="password_confirmation"
                                 type="password"
                                 name="password_confirmation"
                                 class="form-control"
                                 placeholder="Ulangi password"
                                 required>
                         </div>

                         <button type="submit" class="btn btn-dark w-100">
                             Daftar Sekarang
                         </button>
                     </form>

                     <p class="text-center mt-4 mb-0">
                         Sudah memiliki akun?
                         <a href="{{ route('login') }}">Login di sini</a>
                     </p>

                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection