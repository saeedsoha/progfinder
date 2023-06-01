const d = document;
const $q = d.querySelectorAll.bind(d);
const $g = d.querySelector.bind(d);
const $prev = $g(".prev");
const $next = $g(".next");
const $list = $g(".carousel__list");
let auto;
let pauser;

/**
 * Returns the index of the active slide.
 *
 * @return {number} The index of the active slide.
 */
const getActiveIndex = () => {
    const $active = $g("[data-active]");
    return getSlideIndex($active);
}


/**
 * Returns the index of a slide element within a list of slides.
 *
 * @param {HTMLElement} $slide - The slide element to find the index of.
 * @return {number} The index of the given slide element within the list of slides.
 */
const getSlideIndex = ($slide) => {
    return [...$q(".carousel__item")].indexOf( $slide );
}


/**
 * Moves the carousel to the previous slide.
 *
 * @return {undefined} This function does not return anything.
 */
const prevSlide = () => {
    const index = getActiveIndex();
    const $slides = $q(".carousel__item");
    const $last = $slides[$slides.length-1];
    $last.remove();
    $list.prepend($last);
    activateSlide( $q(".carousel__item")[index] );
}

/**
 * Moves the carousel to the next slide by removing the first slide, 
 * appending it to the end and activating the slide in the same position 
 * as the previously active slide.
 *
 * @return {void} This function does not return anything.
 */
const nextSlide = () => {
    const index = getActiveIndex();
    const $slides = $q(".carousel__item");
    const $first = $slides[0];
    $first.remove();
    $list.append($first);
    activateSlide( $q(".carousel__item")[index] );
}



/**
 * Chooses the slide to display based on the user's click event. 
 *
 * @param {Event} e - the click event when a user selects a carousel__item
 * @return {void} This function does not return any value.
 */
const chooseSlide = (e) => {
    const max = (window.matchMedia("screen and ( max-width: 600px)").matches) ? 5 : 8;
    const $slide = e.target.closest( ".carousel__item" );
    const index = getSlideIndex( $slide );
    if ( index < 3 || index > max ) return;
    if ( index === max ) nextSlide();
    if ( index === 3 ) prevSlide();
    activateSlide($slide);
}


/**
 * Activates a given slide by setting its 'data-active' attribute to true and
 * focusing on it. Removes 'data-active' attribute from all other slides.
 *
 * @param {HTMLElement} $slide - The slide to activate.
 * @return {void} This function does not return anything.
 */
const activateSlide = ($slide) => {
    if (!$slide) return;
    const $slides = $q(".carousel__item");
    $slides.forEach(el => el.removeAttribute('data-active'));
    $slide.setAttribute( 'data-active', true );
    $slide.focus();
}


/**
 * Executes the next slide automatically.
 *
 * @return {undefined} 
 */
const autoSlide = () => {
    nextSlide();
}


/**
 * Stops an auto-refresh timer and clears a timeout for pausing.
 *
 * @return {undefined} 
 */
const pauseAuto = () => {
    clearInterval( auto );
    clearTimeout( pauser );
}


/**
 * Calls the function to pause the automatic slideshow and calls the function 
 * to move to the next slide.
 *
 * @param {Event} e - The event object.
 * @return {void} This function does not return anything.
 */
const handleNextClick = (e) => {
    pauseAuto();
    nextSlide(e);
}


/**
 * Handles click event for the previous slide button.
 *
 * @param {Event} e - The click event object.
 * @return {void} This function does not return anything.
 */
const handlePrevClick = (e) => {
    pauseAuto();
    prevSlide(e);
}



/**
 * Handles click event for the previous slide button.
 *
 * @param {Event} e - The click event object.
 * @return {void} This function does not return anything.
 */
const handleSlideClick = (e) => {
    pauseAuto();
    chooseSlide(e);
}



/**
 * Handles slide navigation when arrow keys or 'a' and 'd' keys are pressed.
 *
 * @param {Object} e - The event object containing the key code.
 * @return {void} This function does not return anything.
 */
const handleSlideKey = (e) => {
    switch(e.keyCode) {
        case 37:
        case 65:
            handlePrevClick();
            break;
        case 39:
        case 68:
            handleNextClick();
            break;
    }
}


/**
 * Starts the automatic slide interval.
 *
 * @return {void} 
 */
const startAuto = () => {
    auto = setInterval( autoSlide, 3000 );
}

// startAuto();

$next.addEventListener( "click", handleNextClick );
$prev.addEventListener( "click", handlePrevClick );
// $list.addEventListener( "click", handleSlideClick );
$list.addEventListener( "focusin", handleSlideClick );
$list.addEventListener( "keyup", handleSlideKey );
