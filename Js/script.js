/*Notifications*/
const bell = document.getElementById("bell");
const notifications = document.getElementById("notifications");

function displayNotifications() {
    notifications.classList.toggle("clicked");
}

document.addEventListener("click", function(event) {
    if (!notifications.contains(event.target) && event.target !== bell) {
        notifications.classList.remove("clicked");
    }
});

bell.addEventListener("click", function(event) {
    event.stopPropagation();
    displayNotifications();
});


/*Profile*/
const profile = document.getElementById("profile-image");
const profileOptions = document.getElementById("profile-options");

function displayProfileOptions() {
    profileOptions.classList.toggle("clicked");
}

document.addEventListener("click", function(event) {
    if (!profileOptions.contains(event.target) && event.target !== profile) {
        profileOptions.classList.remove("clicked");
    }
});

profile.addEventListener("click", function(event) {
    event.stopPropagation();
    displayProfileOptions();
});