<ul>
    @foreach($items as $menu)
    <li class="{{ '/'.Request::path()==$menu->url? 'active' : '' }}" ><a href="{{ $menu->url }}" class="link">{{ $menu->title }}</a ></li >   
    @endforeach
   
</ul>