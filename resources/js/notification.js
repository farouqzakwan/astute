window.addEventListener('notification',eventData => {
    let badgeSuccess = 
    `
        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            class="text-green-600" 
            height="24" 
            width="24" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke="currentColor">
            <path 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                stroke-width="2" 
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    `;

    let badgeError = 
    `
        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            class="text-red-600" 
            height="24" 
            width="24" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke="currentColor">
            <path 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                stroke-width="2" 
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    `;
    notificationBadge = document.getElementById('notification-badge');
    notificationTitle = document.getElementById('notification-title').innerHTML = eventData.detail.title;
    notificationMessage = document.getElementById('notification-message').innerHTML = eventData.detail.message;
    if(eventData.detail.status){
        notificationBadge.innerHTML = badgeSuccess;
    }else{
        notificationBadge.innerHTML = badgeError;
    }
    var audio = new Audio('../audio/bell.wav')
    audio.play()
});