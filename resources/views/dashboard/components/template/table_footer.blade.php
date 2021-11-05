<div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
    <span class="flex items-center col-span-3">
      @if (!empty($listing))
        Showing {{ $listing->firstItem() ?? '0' }} - {{ $listing->lastItem() ?? '0' }} of {{ $listing->total() ?? '0' }}
      @else 
        Empty list
      @endif
    </span>
    <span class="col-span-2"></span>
    @if (!empty($listing))
    {{ $listing->links('dashboard.components.template.pagination') }}
    @endif
</div>