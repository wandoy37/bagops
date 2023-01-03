@if ($paginator->hasPages())
    <div class="blog-pagination">
        <ul class="justify-content-center">
            @if ($paginator->hasPages())
                <li>
                    <a href="#" tabindex="-1">Previous</a>
                </li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>{{ $element }}</li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active">
                                <a href="#">{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link" href="#">Next</a>
                </li>
                <li>
                    <a href="#">Next</a>
                </li>
            @endif

        </ul>
    </div>
@endif
