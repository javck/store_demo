@foreach($items as $menu_item)
    @if( count($menu_item->children)>0 )
        <div class="col-lg-6">
            <div class="widget widget_links clearfix">
                <h4>{{ $menu_item->title }}</h4>
                <ul>
                    @foreach ($menu_item->children as $sub_item)
                        <li><a href="{{ $sub_item->link() }}">{{ $sub_item->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
@endforeach

