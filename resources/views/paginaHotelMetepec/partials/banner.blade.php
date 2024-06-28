<style>
  video{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .capa{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #1c1c1d
    opacity: 0.5;
    mix-blend-mode: overlay;
  }
  .video-container {
  position: fixed;
  top: 10%;
  left: 10%;
  width: 80%;
  height: 80%;
  background: black;
  z-index: 9999;
}

#close-btn {
  position: absolute;
  top: 10px;
  right: 10px;
  background: white;
  color: black;
  border: none;
  cursor: pointer;
}
</style>

<div class="" >
  <div class="container">
    <div class="">
      <div class="col-xl-12" style="display: flex; justify-content:center;">
        <div class="banner__area-title">
          {{-- <h1 style="position: relative; z-index:2;">{{ __('Hotel Metepec Plaza') }}</h1> --}}
          <img src="{{ asset('assets/img/logos/logo_B.png') }}" width="300px" alt="logo" style="position: relative; z-index:2;">
            <div class="video__play" style="position: relative; z-index:2;">
              <a class="video-popup d-block mx-auto" href="#"><i class="fas fa-play "></i></a>
            </div>
          <video muted autoplay loop>
            <source src="{{ asset('assets/video/videoBannerHome.mp4') }}" type="video/mp4">
          </video>
          <div class="capa"></div>
        </div>
      </div>
    </div>

  </div>

</div>

<script>
  document.querySelector('.video-popup').addEventListener('click', function(e) {
  e.preventDefault();
  var video = document.querySelector('video');
  
  if (video.requestFullscreen) {
    video.requestFullscreen();
  } else if (video.mozRequestFullScreen) {
    video.mozRequestFullScreen();
  } else if (video.webkitRequestFullscreen) {
    video.webkitRequestFullscreen();
  } else if (video.msRequestFullscreen) {
    video.msRequestFullscreen();
  }
});


</script>
