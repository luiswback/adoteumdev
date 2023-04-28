@extends('layouts.app')

@section('content')
   <div class="flex flex-col items-center justify-center min-h-screen w-full bg-gradient-to-tr from-primary-100 to-secondary-100">
       <div class="flex flex-col items-center justify-center space-y-3.5">
           <img class="w-15 h-15" src="{{asset('assets/mstile-144x144.png')}}" alt="">
           <span class="text-white text-xl">AdoteUm.Dev</span>
       </div>
   </div>
@endsection
