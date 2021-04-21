<div class="section_wrap_work">
    <div class="block_nav">
        <ul>
            <li class="{{ $active=='all' ? 'active': '' }}"><a href="#" data-page="portfolio" id="nav" data-other="1" data-name="all">Все</a></li>
            @foreach ($categories as $category)
            <li class="{{ $active==$category->slug ? 'active' : '' }}" ><a href="#" id="nav"  wire:click="filter({{ $category->id }}, '{{ $category->slug }}')" >{{ $category->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="block_content">
        <div class="row" id="portfolio">
            @foreach ($projects as $project)
            <div class="col-sm-12 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                <a href="{{ $project->url }}" target="_blank" rel="nofollow" class="portfolio-item-link">
                    <div class="block_item"> <img src="{{ Voyager::image($project->image) }}" alt="">
                        <div class="overlay"></div>
                        <div class="block_inner_wrapper">
                            <div class="block_inner_text">
                                <div class="top">
                                    <h2>{{ $project->title }}</h2> </div>
                                <div class="absolute">
                                    <p class="transparent">
                                        <p>{{ $project->description }}</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="block_tags"> @foreach ($project->categories as $cat)
                            <span>{{ $cat->title }}</span> 
                        @endforeach </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>