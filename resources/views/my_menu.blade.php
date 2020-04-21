<ul>
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->link() }}"><div>{{ $menu_item->title }}</div></a>
        @if( count($menu_item->children) >0 )
            <ul>
                @foreach($menu_item->children as $sub_menu_item)
                    <li>
                        <a href="{{ $sub_menu_item->link() }}">
                            <div>{{ $sub_menu_item->title }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
        </li>
    @endforeach
</ul>
