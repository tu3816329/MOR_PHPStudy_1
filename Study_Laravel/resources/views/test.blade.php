@extends('layouts.app')
@section('content')
<div class="flexCenter">
<form action="{{url('login')}}" method="post">
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
