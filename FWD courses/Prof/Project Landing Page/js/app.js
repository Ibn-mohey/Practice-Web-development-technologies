/**
 *
 * Manipulating the DOM exercise.
 * Exercise programmatically builds navigation,
 * scrolls to anchors from navigation,
 * and highlights section in viewport upon scrolling.
 *
 * Dependencies: None
 *
 * JS Version: ES2015/ES6
 *
 * JS Standard: ESlint
 *
*/

/**
 * Define Global Variables
 *
*/

let navbar = document.querySelector('#navbar__list');
const section = document.querySelectorAll('section');


/**
 * End Global Variables
 * Start Helper Functions
 *
*/
function getVisibleSectionIndex() {
    let topOfWindow = window.innerHeight; // An integer value indicating the window's layout viewport height in pixels.
    currentIndex = -1; // -1 to get the first index (0)

    section.forEach((section, index) => {
        let offset = section.getBoundingClientRect(); //position relative to the viewport.
        if(Math.abs(offset.top) < topOfWindow){
            topOfWindow = Math.abs(offset.top);
            currentIndex = index;
        }
    });
    return currentIndex;
}



/**
 * End Helper Functions
 * Begin Main Functions
 *
*/

// build the nav
function buildNav() {
    section.forEach((section) => {
        const items = document.createElement('li'); //list of items TO have A Bar
        const link = document.createElement('a'); //list of links and anchor
        link.innerText = section.getAttribute('data-nav'); //extract attribute of element to use in link anchor
        link.setAttribute('class', 'menu__link');// menu__link from CSS file to the link

        // scroll to anchor ID using scroll to event
        // with each link elemnte add event listener to scroll to
        link.addEventListener("click", () => {
            section.scrollIntoView({behavior: "smooth"});
            });
        items.appendChild(link); // create column for each element
        navbar.appendChild(items); // add the columns into one bar
    });
};


// Add class 'active' to section when near top of viewport

function setActiveSection(){
    visibleSectionIndex = getVisibleSectionIndex();

    // If visibleSection exists
    if(visibleSectionIndex != -1){
        for (let i = 0; i < section.length; i++) {
            // for current section add your-active-class from css file
            if (i == visibleSectionIndex){
                section[i].classList.add('your-active-class');
            }
        };
    };
}

// Scroll to anchor ID using scrollTO event
// used with the same for each

/**
 * End Main Functions
 * Begin Events
 *
*/

// Build menu
buildNav();
// Scroll to section on link click
// done with the builnav
// Set sections as active
document.addEventListener('scroll', setActiveSection);
