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
  
  @if(Session::get('success'))
    {{ Session::get('success') }}
  @endif
    
  <h3>Add User Form</h3>
   
      <form action="{{ route('user.add.auth') }}" method="POST">
        @csrf
        <div>
          <label for="name">Name: </label>
          <input type="text" name="name" value="{{ old('name') }}" required autofocus>
          @error('name')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="email">Email: </label>
          <input type="email" name="email" value="{{ old('email') }}" required>
          @error('email')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="password">Password: </label>
          <input type="password" name="password" value="{{ old('password') }}" required>
          @error('password')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="password_confirmation">Confirm Password: </label>
          <input type="password" name="password_confirmation" required>
          @error('password_confirmation')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="role">Role: </label>
          <select name="role" value="">
            <option value="user" selected>User</option>
            <option value="admin">Admin</option>
          </select>
          @error('role')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <button type="reset" class="btn btn-danger">Clear</button>
          <button type="submit" onclick="return confirm('Are you sure you want to proceed?')">Submit</button>
        </div>
      </form>    
    
  @stop
</body>
</html>