@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="login.css" />

<div class="loginl">

    <a class="loginLogo" href="{{ url('/') }}">에브리팀</a><br>
    <a class="logintext">회원가입</a><br><br>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <input id="name" type="text" placeholder="이름" class="logintextbox @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
            <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
      @enderror
    <input id="email" type="email" placeholder="이메일" class="logintextbox bottom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
      <span class="invalid-feedback" role="alert">
      <br><strong>{{ $message }}</strong>
     </span>
    @enderror
    <input id="kakao" type="text" placeholder="카카오 오픈카톡 링크(전화번호 공개거부시 대체 연락 수단입니다 )" class="logintextbox bottom @error('kakao') is-invalid @enderror" name="kakao" value="{{ old('kakao') }}" required autocomplete="phonenum" >
    @error('kakao')
            <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
      @enderror
    {{--  --}}
    <input id="phonenum" type="text" placeholder="전화번호(팀 신청시 생성자 에게 전달됩니다)" class="logintextbox bottom @error('phonenum') is-invalid @enderror" name="phonenum" value="{{ old('phonenum') }}" required autocomplete="phonenum" >
    @error('phonenum')
            <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
      @enderror
    {{--  --}}
    <input id="password" type="password" placeholder="비밀번호" class="logintextbox bottom @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
   
    <input id="password-confirm" type="password" placeholder="비밀번호 재입력" class="logintextbox bottom" name="password_confirmation" required autocomplete="new-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <br><strong>{{ $message }}</strong>
    </span>
    @enderror
    <br><br><br><br><br>
    <button type="submit" class="loginbutton register">
        {{ __('회원가입') }}
    </button>
</form>
</div>
@endsection


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

