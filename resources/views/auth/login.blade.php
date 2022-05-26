@extends('layouts.app')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
                    <div class="text-center mb-3">
                      <img src="{{asset('img/logo.png')}}" alt="">
                    </div>
		      	{{-- <div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
                      <img src="{{asset('img/logo.png')}}" alt="">
		      	</div> --}}
		      	<h2 class="text-dark text-center mb-4">Login</h2>
		      	<h3 class="text-center mb-4">Kantin IT Del</h3>
				<form method="POST" action="{{ route('login') }}" class="login-form">
		      	 @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group d-flex">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
	            </div>
	          </form>
              
	        </div>
				</div>
			</div>
		</div>
	</section>
@endsection
