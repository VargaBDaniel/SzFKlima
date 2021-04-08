function initializeNavButtons() {
    let navButtons = document.querySelectorAll("[data-scrollto-button]");

    navButtons.forEach(button => button.addEventListener("click", getScrollToTarget));
}

function getScrollToTarget() {
    let scrollToTargetName = this.getAttribute("data-scrollto-button");
    let scrollToTargetElement = document.querySelector("[data-scrollto-target=" + scrollToTargetName + "]")

    if (this.parentElement.parentElement.classList.contains('mobile')) {
        openAndCloseNavMenu();
    }

    scrollViewportToTarget(scrollToTargetElement);
}

function scrollViewportToTarget(target) {
    window.scrollTo({
        top: target.offsetTop - 80,
        behaviors: 'smooth'
    })
}

function openAndCloseNavMenu() {
    let navMenu = document.getElementsByClassName('nav-menu mobile')[0];

    if (navMenu.classList.contains('closed')) {
        navMenu.classList.replace('closed', 'open')
    } else {
        navMenu.classList.replace('open', 'closed')
    };
}