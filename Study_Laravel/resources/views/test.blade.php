@extends('layouts.app')
@section('script')

@endSection
@section('extraStyle')
      .flexCenter {
        position:absolute;
        top:0;
	      bottom: 0;
	      left: 0;
	      right: 0;
	      margin: auto;
        background-color:#fff;
        width: 500px;
        height: 300px;
        z-index: 10;
        border:1px #fff;
        text-align:center;
        <!-- display:none; -->
      }
      .container {
          -webkit-filter: blur(5px) grayscale(90%);
      }

@endSection
@section('extraModal')
<div class="flexCenter" name='loginDiv'>
<form action="{{url('login')}}" method="post" >
  @csrf
  Username :<br>
  <input type = 'text' name="txtUsername" id="txtUsername" value="{{old('txtUsername')}}"/><br>
  @if($errors->has('txtUsername'))

  <span style='color:red'>
    {{ $errors->first('txtUsername') }}
  </span>
  <br>
  @endif
  <br>
  Password :<br>
  <input type = 'password' name="txtPassword" id="txtPassword" value="{{old('txtPassword')}}"/><br>
  @if($errors->has('txtPassword'))
  <span style="color:red">{{ $errors->first('txtPassword') }}</span><br>
  @endif
  @if($errors->has('errLogin'))
  <span style='color:red'>
    {{ $errors->first('errLogin') }}
  </span>
  <br>
  @endif
  <br><input type="submit" name="btAction" value="Login" id="btAction"/>
</form>
</div>
@endSection
