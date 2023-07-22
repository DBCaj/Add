<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Form</title>
</head>
<body>
  @extends('layouts.main')
  @section('add-form')
    
  <h3>Add User Form</h3>
  <hr>
  <br>
  
      <form action="{{ route('user.add.auth') }}" method="POST">
        @csrf
        
        @if(Session::get('success'))
          <div style="background-color:lightgreen; color:black; padding:9px; border-radius:4px; margin-bottom: 20px">
            {{ Session::get('success') }}
          </div>
        @endif
        
        <div>
          <label for="name">Name: </label>
          <br>
          <input type="text" name="name" value="{{ old('name') }}" required autofocus>
          @error('name')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="email">Email: </label>
          <br>
          <input type="email" name="email" value="{{ old('email') }}" required>
          @error('email')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="password">Password: </label>
          <br>
          <input type="password" name="password" value="{{ old('password') }}" required>
          @error('password')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="password_confirmation">Confirm Password: </label>
          <br>
          <input type="password" name="password_confirmation" required>
          @error('password_confirmation')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="role">Role: </label>
          <br>
          <select name="role" value="">
            <option value="user" selected>User</option>
            <option value="admin">Admin</option>
          </select>
          @error('role')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div><br>
          <button type="reset" style="background-color:red; color:white">Clear</button>
          <button type="submit" style="background-color:green; color:white" onclick="return confirm('Are you sure you want to proceed?')">Submit</button>
        </div>
      </form>    
    
  @stop
</body>
</html>