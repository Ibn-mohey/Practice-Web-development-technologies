# Landing Page Project

## About

## Project Summary
This project aims to give you real-world scenarios of manipulating the DOM. The functionality you will be using serves two purposes: to prepare you for appending dynamically added data to the DOM, and to show you how javascript can improve the usability of an otherwise static site. This project barely touches the surface of what is possible, but it does use some incredibly common events, methods, and logic.

## JavaScript and the DOM

Great! You now have the starter code. Before moving forward, make sure you are comfortable with the content from the JavaScript and the DOM course. Ask yourself:

*   What is the [Document](https://developer.mozilla.org/en-US/docs/Web/API/Document)?
*   What are [events](https://developer.mozilla.org/en-US/docs/Web/API/Event)?
    *   How do we [listen for them](https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener)?
    *   How does **event delegation** help us avoid too many events?
    *   Check **Working with Browser Events** in JavaScript and the DOM for a refresher if needed
*   How can we access elements with the following two methods? What are the differences between them?
    *   [querySelector()](https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector)
    *   [querySelectorAll()](https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll)
*   How do you use [getElementbyId()](https://developer.mozilla.org/en-US/docs/Web/API/Document/getElementById) to select a DOM element by its `id`?
*   We can also access elements with [getElementsByClassName()](https://developer.mozilla.org/en-US/docs/Web/API/Document/getElementsByClassName). What does this method return, and how do you use it?
*   How do you use the [className](https://developer.mozilla.org/en-US/docs/Web/API/Element/className) property? What does it return, and why would it be useful?
*   What are the different methods for [classList](https://developer.mozilla.org/en-US/docs/Web/API/Element/classList#Methods)?
    *   Hint: the `add()`, `remove()`, and `toggle()` methods look particularly useful...
*   Every element has an [innerHTML](https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML) property that represents the markup of the element's content. How can you leverage this property to _get_ and _set_ content?



## Instructions

The starter project has some HTML and CSS styling to display a static version of the Landing Page project. You'll need to convert this project from a static project to an interactive one. This will require modifying the HTML and CSS files, but primarily the JavaScript file.

To get started, open [`js/app.js`](https://github.com/udacity/fend/tree/refresh-2019/projects/landing-page)  and start building out the app's functionality

This project requires you to build a multi-section landing page, with a dynamically updating navigational menu based on the amount of content that is added to the page.

Once you've met all of the rubric requirements, you can submit your project as either a zip file or a Github repository link below

## PROJECT SPECIFICATION
- [x] Architecture
    css
    - styles.css    
    index.html
    js
    - app.js
    README.md

- [x] All features are usable across modern desktop, tablet, and phone browsers.
- [x] Styling has been added for active states.
- [x] There are at least 4 sections that have been added to the page.
- [x] Navigation is built dynamically as an unordered list.
- [x] It should be clear which section is being viewed while scrolling through the page.
- [x] When clicking an item from the navigation menu, the link should scroll to the appropriate section.
- [x] The ReadMe file should have non-default text in it that is specific to this project. It doesn’t have to be thorough, but should have some basic information, and use correct markdown.
- [x] Comments are present and effectively explain longer code procedure when necessary.
- [x] Code is formatted with consistent, logical, and easy-to-read formatting as described in the Udacity JavaScript Style Guide.

