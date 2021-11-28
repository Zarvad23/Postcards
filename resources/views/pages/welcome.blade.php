@extends('layouts.app')
@include('includes.header')
@include('includes.footer')
@section('content')
   @yield('header')
      <transition name="fade" mode="out-in">
         <router-view></router-view>
      </transition>
   @yield('footer')
@endsection