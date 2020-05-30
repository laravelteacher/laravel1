@extends('includes.master')

@section('content')

@include('includes.validation')


<form action="{{route('createuser')}}" method='post'>
  @csrf
  <input type="text" id="fname" name="fname" placeholder='first name'><br>
  <input type="text" id="fname" name="lname" placeholder='last name'><br>
  <input type="email" id="fname" name="email" placeholder='email'><br>
  <input type="text" id="fname" name="password" placeholder='password'><br>
  <textarea type="text" id="fname" name="notes"></textarea> <br>


  <input type="submit" value="Submit">
</form>
@endsection