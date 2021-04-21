<section class="section section_meet">
    <div class="top_line_description">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="wrap_t">
              <div class="top_line_description wow fadeInUp">
                <h2 class="top_ttle">Давайте знакомиться</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="meet_main style_bg">
      <div class="contaoner-fluid">
        <div class="row">
          <div class="col-md-12">
                      <div class="slider_meet navs">
                          <div class="slider_meet_item">
                 <div class="background_meet" style="background-image:url({{ Voyager::image( $about->image ) }})"></div>
                 <div class="content_list">
                   <h2 class="h2"><a href="" class="link" tabindex="0">{{ $about->title }}</a></h2>                                       
                    {!! $about->body !!}
                  </div>
               </div>
                      </div> 
               </div>
      </div>
    </div>
  </div>
  </section>