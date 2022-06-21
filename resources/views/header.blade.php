@extends('layout');

@section('header')
  <nav class="flex justify-between items-center mb-4">
    <a href="index.html">
      <img src="images/logo.png" alt="Logo" class="w-24">
    </a>
    <ul class="flex space-x-6 mr-6 text-lg">
      <li>
        <a href="register.html" class="hover:text-laravel">
          <i class="fa-solid fa-user-plus"></i> Register
        </a>
      </li>
    </ul>
  </nav>
@endsection