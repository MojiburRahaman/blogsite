@if ($paginator->hasPages())
<div class="pager--wrapper pt--50">
    <ul class="pager nav ff--primary">
        @if ($paginator->onFirstPage())
        <li><a style="pointer-events:none"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
        @else
        <li><a href="{{$paginator->previousPageUrl()}}"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
        @endif

        @if ($paginator->hasMorePages())
        <li><a href="{{$paginator->nextPageUrl()}}" >Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
        @else
        <li><a style="pointer-events:none">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
        @endif
    </ul>
</div>
@endif