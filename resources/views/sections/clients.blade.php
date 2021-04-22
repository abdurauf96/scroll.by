<section class="section section_our_clients">
    <div class="top_line_description" style="margin-bottom: 110px;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12"> 
            <div class="wrap_t">
              <div class="top_line_description wow fadeInUp">
                <h2 class="top_ttle">Среди наших клиентов</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="our_clients_main">
      <div class="slider_our_clients" dir="rtl">
        @foreach ($clients as $client)
        <div class="our_clients_item">
          <img data-src="{{ Voyager::image($client->logo) }}" alt="">
        </div>
        @endforeach      
      </div>
    </div>
</section>