function initializeNavButtons() {
    let navButtons = document.querySelectorAll("[data-scrollto-button]");

    navButtons.forEach(button => button.addEventListener("click", getScrollToTarget));
}

function getScrollToTarget() {
    let scrollToTargetName = this.getAttribute("data-scrollto-button");
    let scrollToTargetElement = document.querySelector("[data-scrollto-target=" + scrollToTargetName + "]")

    scrollViewportToTarget(scrollToTargetElement);
}

function scrollViewportToTarget(target) {
    window.scrollTo({
        top: target.offsetTop - 80,
        behaviors: 'smooth'
    })
}