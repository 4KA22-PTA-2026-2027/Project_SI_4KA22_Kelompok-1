 @extends('layouts.app')

 @section('content')
 <div class="container py-5">
     <div class="row justify-content-center">
         <div class="col-md-6 col-lg-5">
             <div class="card shadow-sm border-0">
                 <div class="card-body p-4">

                     <h3 class="text-center mb-2">Login Scevra</h3>
                     <p class="text-center text-muted mb-4">
                         Masuk ke akun Scevra Parfume Anda
                     </p>

                     @if (session('success'))
                     <div class="alert alert-success">
                         {{ session('success') }}
                     </div>
                     @endif

                     @if (session('error'))
                     <div class="alert alert-danger">
                         {{ session('error') }}
                     </div>
                     @endif

                     <form method="POST" action="{{ route('login.process') }}">
                         @csrf

                         <div class="mb-3">
                             <label for="email" class="form-label">Email</label>
                             <input
                                 id="email"
                                 type="email"
                                 name="email"
                                 value="{{ old('email') }}"
                                 class="form-control @error('email') is-invalid @enderror"
                                 placeholder="Masukkan email"
                                 required
                                 autofocus>

                             @error('email')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                             @enderror
                         </div>

                         <div class="mb-3">
                             <label for="password" class="form-label">Password</label>
                             <input
                                 id="password"
                                 type="password"
                                 name="password"
                                 class="form-control @error('password') is-invalid @enderror"
                                 placeholder="Masukkan password"
                                 required>

                             @error('password')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                             @enderror
                         </div>

                         <div class="form-check mb-3">
                             <input
                                 class="form-check-input"
                                 type="checkbox"
                                 name="remember"
                                 id="remember">

                             <label class="form-check-label" for="remember">
                                 Ingat saya
                             </label>
                         </div>

                         <button type="submit" class="btn btn-dark w-100">
                             Login
                         </button>
                     </form>

                     <p class="text-center mt-4 mb-0">
                         Belum memiliki akun?
                         <a href="{{ route('register') }}">Daftar sekarang</a>
                     </p>

                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection