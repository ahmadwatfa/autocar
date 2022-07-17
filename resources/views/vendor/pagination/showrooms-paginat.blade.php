@if ($paginator->hasPages())
    <div class="paginate">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @if ($paginator->onFirstPage())
                    <li class="disabled"></li>
                @else
                    <li class="page-item"><a class="page-link"
                            href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
                @endif

                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page"><span
                                        class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="page-item"><a class="page-link"
                            href="{{ $paginator->nextPageUrl() }}">Next</a>
                    </li>
                @else
                    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    </li>
                @endif

            </ul>
        </nav>
    </div>
@endif
