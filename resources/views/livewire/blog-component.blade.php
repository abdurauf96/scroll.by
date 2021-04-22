<div>
    <div class="block_nav">
        <ul>
            <li class="{{ $key=='all'? 'active': '' }}"><a wire:click="filter('all')" href="#" >Все</a></li>
            <li class="{{ $key=='deal'? 'active': '' }}"><a wire:click="filter('deal')" href="#" >акция</a></li>
            <li class="{{ $key=='blog'? 'active': '' }}"><a wire:click="filter('blog')" href="#" >блог</a></li>
        </ul>
    </div>
    <div class="row" id="news_items">
        @foreach ($blogs as $blog)
        <div class="col-sm-12 col-md-6 blog_item_wrap wow fadeInDown" data-wow-delay=".2s">
            <div class="blog_item">
                <a href="{{ route('blogDetail', $blog->slug) }}">
                    <div class="block_photo"> <img src="{{ Voyager::image($blog->image) }}" alt="">
                        <div class="overlay"></div>
                        <div class="block_tags"><span>{{ $blog->created_at->format('d.m.y') }}</span> <span>{{ $blog->category=='deal'? 'акция' : 'блог' }}</span> </div>
                    </div>
                    <div class="news_title">
                        <h3>{{ $blog->title }}</h3> </div>
                </a>
            </div>
        </div>
        @endforeach
        
        <div class="col-md-12 show-more">
            <button data-items_count="6" wire:click="loadMore" class="btn btn_our_work btn-circle btn-style-red blog-show">Загрузить еще<span></span></button>
        </div>
    </div>
    
</div>
