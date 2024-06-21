@if ($paginator->hasPages())
<div class="container-fluid pag-container">
<nav aria-label="Page navigation example">
  <ul class="pagination">
  @if ($paginator->onFirstPage())
    <li class="page-item disabled">
      <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" rel="prev" aria-label="@lang('pagination.previous')">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
   @else
    <li class="page-item">
        <a class="page-link" href="#" rel="prev" aria-label="@lang('pagination.prev')">
        <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
        </a>
        </a>
    </li>
   @endif
   @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled page-item" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active page-item" aria-current="page"><a href="#" class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
    @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
        </a>
        </li>
    @else
        <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
        <a class="page-link" href="#" rel="next" aria-label="@lang('pagination.next')">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
        </a>
        </li>
    @endif
  </ul>
</nav>
</div>
@endif
