@if ($paginator->hasPages())
    <nav class="dataTable-pagination">
        <ul class="dataTable-pagination-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pager">
                    <a href="#" data-page="1">‹</a>
                </li>
            @else
                <li class="">
                    <a href="{{ $paginator->previousPageUrl() }}" data-page="1">‹</a>
                </li>
            @endif

            @foreach($elements as $element)
                @if(is_string($element))
                <li class="pager">
                    {{-- <a href="#" data-page="1">‹</a> --}}
                    {{ $element }}
                </li>
                @endif
                @if(is_array($element))
                    @foreach($element as $page =>$url)
                        @if ($page == $paginator->currentPage())
                        <li class="active">
                            <a href="#" data-page="1">{{ $page }}</a>
                        </li>
                        @else
                        <li class="">
                            <a href="{{ $url }}" data-page="1">{{ $page }}</a>
                        </li>
                        @endif
                    @endforeach
                @endif
            @endforeach


            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="">
                    <a href="{{ $paginator->previousPageUrl() }}" data-page="2">›</a>
                </li>
            @else
                <li class="pager">
                    <a href="#" data-page="2">›</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
