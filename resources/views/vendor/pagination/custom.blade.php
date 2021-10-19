
@if ($paginator->hasPages())
    <ul class="pager">
       
        @if ($paginator->onFirstPage())
            <li class="disabled prev"><span>← Previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" class="prev active" rel="prev">← Previous</a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled pagenumber"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active pagenumber"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}" class="pagenumber">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" class="next active" rel="next">Next →</a></li>
        @else
            <li class="disabled next"><span>Next →</span></li>
        @endif
    </ul>
@endif 