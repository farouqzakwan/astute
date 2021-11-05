<div x-data="{ showNotification: false }" @notification.window="showNotification = true;setTimeout(() => showNotification = false, 3000)"  >
  <div x-show="showNotification" x-transition class="absolute z-50 right-1 bottom-1 w-1/4 bg-white rounded-lg p-3 shadow-lg">
      <div class="flex flex-row">
        <div class="px-2">
          <span id="notification-badge"></span>
        </div>
        <div class="ml-2 mr-6">
            <span class="font-semibold" id="notification-title"></span>
            <span class="block text-gray-500" id="notification-message"></span>
        </div>
      </div>
  </div>
</div>