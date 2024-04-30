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
</style>

<div class="banner__area" >
  <div class="container-fluid"  style="border:1px solid blue">
    <div class="row" >
      <div class="col-xl-12">
        <div class="banner__area-title">
          <h1 style="position: relative; z-index:2;">Hotel Metepec Plaza</h1>
          <div class="banner__area-title-video">
            {{-- <div class="video__play">
              <a class="video-popup" href="#"><i class="fas fa-play"></i></a>
            </div> --}}
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