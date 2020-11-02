#HTML and programming
The Mozilla Developer Network is a major resource for web developers. Find it here:
[developer.mozilla](https://developer.mozilla.org/)


#HTML Elements Review 1
Here are the HTML elements that you've seen so far in this course. If you haven't tried them out yet in your own text editor and browser, this is a great time to do it!

- `<em>` and ` <strong> ` — Emphasis.
- By default, text inside `<em>` is displayed as italic, and text in <strong> is displayed as boldface.
- ` <p>` — Paragraph.
- Text in a paragraph is separated visually from other paragraphs by a small margin.
- `<br>` — Line break. (empty)
- A line break does not create a new paragraph; it only marks the end of a line.
- `<sub>` and <sup> — Subscript and superscript.
- Useful for math and chemistry: I have x3+2x2 molecules of H2O.
- `<mark>` — Highlighting.
- Not very often used, but it's kind of cool.
- Of these elements, the `br` element is the only one that is an empty (or void) element.

[block elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Block-level_elements#Elements)<br>
[inline elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Inline_elements#Elements)

##The div element
In the video on block and inline elements, you may (or may not) have noticed that one of the block-level elements Kelly mentioned was called ```div```.

---

# HTML elements review 2
Now you've learned about many more HTML elements! This page is a summary of all the elements you've seen so far. You can use this page as a reference if you forget how to use one of these elements in your code.

## Block elements

Block elements are used for large sections of text, such as paragraphs, headlines, or lists; and also for some other features such as video players and tables.

A block element creates a (usually invisible) box in the browser display. By default, this box takes up the full width of the display. The beginning of a block always starts on a new line in the display.

Most block elements have a particular way they are displayed by default: paragraphs have margins around them; lists have bullet-points or numbered items; headlines are printed in large text. There is also a generic block element, `div`, which has no special defaults.

*   `p` — Paragraph.  
    Text in a paragraph is separated visually from other paragraphs by a small margin.
*   `ul` and `ol` — Unordered and ordered lists.  
    By default, `ul` lists are displayed with bullet points, and `ol` lists with numbered items.
*   `li` — List items inside a `ul` or `ol` list.  
    The `li` element has to be nested inside a `ul` or `ol` list; it can't occur on its own.
*   Section headers, from `h1` (largest) to `h6` (smallest).  
    Used for headlines, section titles, and the like.
*   `div` — A logical _div_ision of a page or document.  
    Other block elements such as paragraphs, lists, and headers can be nested inside a `div`.

You will see the `div` element much more in the next lesson. Because they don't have any default display settings, `div`s are heavily used with custom styling with CSS.

## Inline elements

Inline elements do not create a full-width box on the display. They modify the display of text, or insert other things into the text — such as line breaks, images, or hyperlinks.

*   `em` and `strong` — Emphasis.  
    By default, text inside an `em` is displayed as _italic_, and text in `strong` is displayed as **boldface.**
*   `br` — Line break. _(empty)_  
    A line break does not create a new paragraph; it only marks the end of a line.
*   `sub` and `sup` — Subscript and superscript.  
    Useful for math and chemistry: I have x<sup>3</sup>+2x<sup>2</sup> molecules of H<sub>2</sub>O.
*   `mark` — Highlighting.  
    Not very often used, but it's <mark>kind of cool</mark>.

Some of the inline elements you've seen require **attributes**, extra information besides the name of the element itself. Attributes are written inside the opening tag of the element.

*   `img` — Images.  
    Needs a `src` attribute with a URL, and an `alt` attribute with descriptive text.
*   `a` — Hyperlinks.  
    Needs an `href` attribute with a URL.

#### Images

The syntax for the `img` tag is like this:

    <img src="Image URL here" alt="A description of the image">

The URL of an image may be an _absolute_ URL, such as `http://placebear.com/800/600`, or it may be a _relative_ URL such as `images/wolves.jpg`.

The `alt` text is used if the image can't be loaded, or if the user can't see images — such as if the user is using a [screen reader](https://en.wikipedia.org/wiki/Screen_reader).

#### Links

Hyperlinks allow the user to navigate from one page to another. They are created using the `a` element. The destination of the link is written in an attribute called `href`; the link text appears as the contents of the `a` element. Here's an example:

    <a href="https://en.wikipedia.org/wiki/Hypertext">
      Wikipedia's "Hypertext" article
    </a>

This code produces a link like this: [Wikipedia's "Hypertext" article](https://en.wikipedia.org/wiki/Hypertext).

A link within a single web site can be written using a relative URL. Links to other sites must be written as absolute URLs.
#### Supporting Materials
[IPND Reference Sheet - HTML Elements 2](https://video.udacity-data.com/topher/2018/July/5b4546ec_ipnd-reference-sheet-html-elements-2/ipnd-reference-sheet-html-elements-2.pdf)</div>
