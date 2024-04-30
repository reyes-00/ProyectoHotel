<style>
  video{
    width: 100%
  }
</style>

<div class="banner__area" data-background="{{ asset('assets/img/banner-1.jpg') }}"  style="border:1px solid red">
  <div class="container-fluid"  style="border:1px solid blue">
    <div class="row"  style="border:1px solid red">
      <div class="col-xl-12">
        <div class="banner__area-title">
          <h1>Hotel Metepec Plaza</h1>
          <div class="banner__area-title-video" style="border:1px solid red">
            <div class="video__play">
              <a class="video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i class="fas fa-play"></i></a>
            </div>
          </div>
          <video src="{{ asset('assets/video/videoBannerHome.mp4') }}" autoplay muted loop class="background"></video>
        </div>
      </div>
    </div>

  </div>
</div>