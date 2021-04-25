<div class="reviews_wrap" id="items_reviews">
    @foreach ($reviews as $review)
    <div class="reviews_items wow fadeInUp">
        <div class="row">
            <div class="col-lg-12 col-xl-3">
                <div class="photo_rev" style="background-image:url({{ Voyager::image($review->logo) }})"></div>
                <div class="made_rev"> <img data-src="/" class="img-fluid" alt="{{ $review->image_alt }}" title="{{ $review->image_title }}"> </div>
            </div>
            <div class="col-lg-12 col-xl-9 dercription_wrap">
                <div class="description_rev"> <strong>{{ $review->title }}</strong>
                    <br>
                    <br> {!! $review->body !!} </div>
                <div class="row" style="margin-top:65px;">
                    <div class="col-sm-12 col-md-9">
                        <div class="person_info_rev">
                            <p></p> <span></span> </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="downloan_file rounded-circle">
                            <a href="{{ Voyager::image($review->image) }}" target="_blank" class="link"> <i class="fal fa-file-pdf"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    <div class="btn__reviews col-md-12 mb-5">
        <button data-items_count="6" wire:click="loadMore" class="btn-circle btn-style-red btn_reviews">Загрузить еще<span></span></button>
    </div>
</div>