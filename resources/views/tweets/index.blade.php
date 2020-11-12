@extends('layouts.app')

@section('content')
    <h3 class="text-lg font-black  "></h3>
   <?php
   $user=auth()->user();
       print("Home Page of " .$user->name);
       echo "";
   ?>


    @include('publish_panel')
    <div class="border border-gray-300 rounded-lg ">

        @foreach($tweets as $tweet)
            @include('tweet_panel')
        @endforeach
    </div>
@endsection
