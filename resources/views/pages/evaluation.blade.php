@extends('layouts.app')

@section('content')

<style>
    video {
  object-fit: cover;
  width: 100vw;
  height: 89.6vh;
  position: absolute;
  top:20;
  left: 0;
}



.viewport-header {
  position: relative;
  height: 100%;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
}

h1 {
  font-family: 'Syncopate', sans-serif;
  color: white;
  text-transform: uppercase;
  letter-spacing: 3vw;
  line-height: 1.2;
  font-size: 3vw;
  text-align: center;
  margin-top: 9rem
}
span {
  display: block;
  font-size: 10vw;
  letter-spacing: 1vw;
}




</style>
<video src="{{ asset('images/video.mp4') }}" autoplay loop playsinline muted>

</video>

<header class="viewport-header">
  <h1>
    Project
    <span>Evaluation</span>
  </h1>
</header>

@endsection
