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

---

#CSS

## treestructure

<div align  = 'center'>

![name](capture1.jpg)

![name](capture2.jpg)

![name](capture3.jpg)
</div>

##Styling HTML directly
using style atribute  `<p style="color: blue;">I'm blue</p>`

<p style="color: blue;">I'm blue</p>

##Styling with style
- more safe
- less typing

`<style>
  p { color: blue; }
</style>
`

`<p>I'm blue!</p>`

```HTML
<p style="color: red;">Make me red!</p>
<p style="color: green;">Make me green!</p>
<p style="color: blue;">Make me blue!</p>
```
<p style="color: red;">Make me red!</p>
<p style="color: green;">Make me green!</p>
<p style="color: blue;">Make me blue!</p>

```HTML
<p style="text-align: center;">This is a haiku</p>
<p style="text-align: center;"> So I want each line centered</p>
<p style="text-align: center;">Let’s make it stylish</p>
```

<p style="text-align: center;">This is a haiku</p>
<p style="text-align: center;"> So I want each line centered</p>
<p style="text-align: center;">Let’s make it stylish</p>

---

##syntax
<div align  = 'center'>
selector

![name](capture4.jpg)

declaration blocks there is 2 here
![name](capture5.jpg)

declaration rules there is 3 here
![name](capture6.jpg)

prop and values
![name](capture7.jpg)

all in one
![name](capture8.jpg)
</div>

---

##Selectors: Type


1. type selector

```HTML
a { color: green; }
h1 { color: green; }
```

2. Class
a group of things with the same characteristic
how to create a class

```HTML
<p class = "class2"> asdapsdpasdpaspd </p>
```

```HTML
.class2 { width: 50%; }
```

3. ID

id is like class but it's one only

```HTML
<p id = "id2"> asdapsdpasdpaspd </p>
```

```HTML
#id { width: 50%; }
```


## combingin or descendeant selector

The selector h2 span matches any span element inside an h2 element, which is just what we want here!
```HTML
h2 span { color: green; }
```

```HTML
parent Child { color: green; }
```

---

## Vocabulary review

Here are some important CSS terms that you've learned so far:

*   **DOM**, or Document Object Model, is a tree structure with a node for each HTML element, piece of text, image, and any other object in the web page.
*   **Selectors** are one part of the CSS ruleset. They indicate which HTML element(s) the rule is for.
*   **Declaration blocks** are the other part of the CSS ruleset, they say how the rule will modify the elements indicated by selectors.
*   CSS **rules** are composed of a selector followed by a declaration block.
*   **type** is the simplest kind of selector. It indicates the name of one type of HTML element (such as `em` or `li`).
*   **class** in HTML is an attribute that groups elements together that you want to have the same style.
*   **id** is an attribute that must be unique to a single element, used to identify it.

---

## Selectors Review

You've now learned about three kind of CSS selectors: **type**, **class**, and **ID**!

**Type** selectors are used to apply a style to a particular type of HTML element, like `h1` or `body`. Type selectors are written using just the type name.

**Class** selectors are used to set the style for multiple HTML elements that have a particular value for the `class` attribute. You can name a class anything you want! Class selectors are written with a dot before the class: for elements such as `<p class="blue">`, the class selector is `.blue`.

**ID** selectors are used when the style is being applied to one HTML element, which has to have an `id` attribute. There can be only _one_ element with a particular `id` on a page. You can also choose any name you want for an `id`, just like a `class`. ID selectors are written using a `#` sign: for an element such as `<div id="sidebar">`, the `id` selector is `#sidebar`.

```HTML
<style>
li {
  font-size: 1.5em;
}
.highlight {
  background-color: yellow;
}
.done {
  text-decoration: line-through;
}
</style>
<h1>To-do:</h1>
<ul id="to-do_list">
  <li class="done">Buy milk
  <li>Buy eggs
  <li class="done">Buy flour
  <li class="highlight">Make waffles
  <li>Do laundry
  <li class="highlight">Learn to code
  <li class="highlight">Build a robot
</ul>
```
<style>
li {
  font-size: 1.5em;
}
.highlight {
  background-color: yellow;
}
.done {
  text-decoration: line-through;
}
</style>
<h1>To-do:</h1>
<ul id="to-do_list">
  <li class="done">Buy milk
  <li>Buy eggs
  <li class="done">Buy flour
  <li class="highlight">Make waffles
  <li>Do laundry
  <li class="highlight">Learn to code
  <li class="highlight">Build a robot
</ul>

---

##Cascading and specificity

The term "cascading" in Cascading Style Sheets refers to the way that style properties "cascade" down the DOM tree, starting at the top. A style applied to the body element will affect the entire document. A style applied to a lower-level element will affect that element and all its descendants.

A style applied at a lower level can override a style at a higher level. For instance, if the body has color: red but a paragraph within the body has color: blue, the blue will apply to that paragraph and to any elements inside it:
```HTML
<style>
    body { color: red; }
    p { color: blue; }
</style>
<body>
    <p> This will be blue, not red. <br>
        <em> Same with this. </em> </p>
</body>
```

#Units

1. px = 1/96 of inch


`.class {width: 111px; }`


2. pt (point) = 1/72 inch

only for font size

3. em relative size 1 em = font size of the element

#Boxes
```HTML
<style>
  .blue_box {
    border: 10px solid blue;
    padding: 0.5em;
    width: 150px;
    height: 100px;
  }
</style>

<div class="blue_box">Hooray, a box!</div>
````

<style>
  .blue_box {
    border: 10px solid blue;
    padding: 0.5em;
    width: 150px;
    height: 100px;
  }
</style>

<div class="blue_box">Hooray, a box!</div>

<style>
  .blue_box {
  border: 10px solid blue;
  padding: 0.5em;
  margin: 0.5em;
  width: 150px;
  height: 100px;
  }
  .red_box {
  border: 10px solid red;
  padding: 0.5em;
  margin: 0.5em;
  width: 20px;
  height: 20px;
  }
</style>

<div class="blue_box">Hooray, a box!</div>
<div class="red_box"></div>

##Percentages

`width: 50%;` doesnt include the boarder or the pading

`font size: 120%` increase the size of thing


he `width` property only changes the width of the contents. The padding, border, and margin are not included in the width (so they add extra width around the sides of the box!).

## Linking stylesheets

To link to a stylesheet in your HTML file, add a `link` element to the `head` of the HTML file. The syntax for the `link` element is just like this:

    `<link rel="stylesheet" href="style.css">`

```HTML
<link rel="stylesheet" href="style.css">
```

If you are linking to a stylesheet located on another web server, you will use a full URL in the `href` attribute. If you're linking to one that's in the same directory as your HTML file, you can just use the filename as a relative URL.

## Stylesheet _or_ style element — not both!

Note that you can put your CSS code inside of a `<style></style>` element, like this

    <style>
      p{color:blue;}
    </style>`


_or_ inside of a linked _stylesheet_, like we just talked about.

But you would not want to do both at the same time! In other words, when you place your CSS in a stylesheet, you don't need to use a `style` element—you can just put the CSS directly into the stylesheet with nothing around it:

    p{color:blue;}

This is what you should do for the exercise below—simply put the CSS directly into your `style.css` file (and _don't_ use the `style` element).

##colors

1. RGB
<p style="color: rgb(100%,50%,0%);">Make me orange !</p>

2. each color of web stores 256 possible value
`rgb(255, 255, 255)`
- red: 0..255 or 00...FF
- green: 0..255 or 00...FF
- Blue: 0..255 or 00...FF
and that is hexcode

`#00000` all zeros are black

`#FFFFFF` all FF are blacks
3. color picker

###test

<p style="color: #fed000;">test !</p>

<p style="color: rgb(80, 5, 120);">test !</p>

<p style="color: rgb(90%, 90%, 90%);">test !</p>

<p style="color: rgb(0%, 100%, 100%);">test !</p>



## Fonts

use with

```CSS
{font-family: fontname;}
```
Here are some common fonts you can try:

*   `Helvetica`
*   `"Times New Roman"`
*   `Courier`
*   `Palatino`
*   `Impact`

You can also try out the five **generic** font families Karl mentioned:

```CSS{
  font-family: monospace, font2, font3;

}
```

*   serif
*   sans-serif
*   cursive
*   fantasy
*   monospace

test fonts
<p> no font !</p>
<p style="font-family: Helvetica;">Helvetica !</p>
<p style="font-family: Times New Roman;">Times New Roman !</p>
<p style="font-family: Courier;">Courier !</p>
<p style="font-family: Palatino;">Palatino !</p>
<p style="font-family: Impact;">Impact !</p>
<p style="font-family: serif;">serif !</p>
<p style="font-family: sans-serif;">sans-serif !</p>
<p style="font-family: cursive;">cursive !</p>
<p style="font-family: fantasy;">fantasy !</p>
<p style="font-family: monospace;">monospace !</p>



Remember, when you use a _generic_ font family, this tells the browser "get me this general _kind_ of font". For example, if you tell it to use `font-family: monospace`, it might use `Inconsolata` or `Courier New` (because these are both categorized as _monospace_ fonts).

###more on fonts

```CSS
{
  font-weight: bold;
  font-style: italic;
  text-decoration: underline;
}
```
or u can just use

```CSS
{
  font: bold 14pt georgia, serif;
}
```

<header class="task-list-atom--header--3bRGC">

### Try Google Web Fonts!

Take a look at the documentation for Google Web Fonts:  
[https://developers.google.com/fonts/docs/getting_started](https://developers.google.com/fonts/docs/getting_started)

You'll see there's some example code provided—copy it and paste it into the workspace. Then, try editing the code so that it uses a different Google Web Font (the documentation will tell you what to change).

You can find all the available fonts at [https://fonts.google.com/](https://fonts.google.com/)

Try some out in the workspace below—then, if you like, add some interesting fonts to your `notes.html` file or another HTML file you're working on!

## Practice — Meaning vs. style
Something you may have wondered is why we have both `<strong></strong>` and `font-weight: bold;`. If you want to **bold** some text, it seems like you could use either of these—and they would have the same results.

And the same seems to be true of `<em></em>` and `font-style: italic;`.

Why would we need CSS style properties like `font-weight` and `font-style`, when we already have HTML elements like `em` and `strong`?

There are a couple of reasons for this.

The _historical_ reason is that HTML was created before CSS, but the engineers who designed CSS wanted it to provide more customization than HTML alone did. The _default_ way to show emphasis is by styling it as italic. But we don't have to do it that way — we can use CSS to override the default styles. For example, we could say that we want emphasized text to be red, or in a larger font size.

But the differences go deeper than that. HTML code isn't _only_ used by browsers that display on the screen. It's also used by search engines, smart speaker apps, and other programs. Those programs can't see "boldface" or "italics", but they still need to know which text on a page is _more important_.

The `em` and `strong` elements specify the _meaning_ of their contents. In contrast, the CSS style properties are _just_ specifying the visual appearance.

To repeat this in more general terms: the HTML indicates what the contents _mean_, while the CSS indicates how the contents should _look_. Web programmers refer to this as _semantic markup_ — using markup to indicate meaning, not just appearance.

For example, if we place some text inside an `em` element, this is our way of indicating that this text should be emphasized _in some way_. But to a program that's reading the page aloud to the user, it won't use italics; it will use tone of voice. And even in a page that _is_ displayed to the user, you might want it to be emphasized using color or another property, instead of with italics.

In fact, why don't you give that a try. In the workspace below, you'll find some text that uses a bunch of `em` elements. Apply a CSS ruleset to these that makes them red and bold, but _not_ italic!

**Hint:** You'll need to look up what CSS property and value you can use to remove the italics.

Notice how there were a ton of `em` elements, but you only needed to add the style ruleset in one place to change the appearance of _all_ of that content. This is one of the advantages of separating the structure and **meaning** of the content from the **style** of the content.

---

##Basic concepts of flexbox

```CSS
{ display: flex;}
 ```
then add

flex-direction

- row
- row-reverse
- column
- column-reverse

 flex-basis

 - auto

 flex-wrap
 - nowrap
 - wrap
flex-grow
flex-shrink
flex-basis

---

# CSS syntax review

You've seen many examples of CSS syntax in this lesson. Here's a review!

The basic syntax of a CSS ruleset has two parts: a _selector_, and a group of _rules_, each of which consists of a _property_ name and the _value_ of that property.

    selector {
        property: value;
    }

The selector is written first, and then the rules are written inside `{` curly brackets `}`. Each rule's property and value are separated by a `:` colon, and the rule always ends with a `;` semicolon.


---

## Selectors

The selector indicates which HTML elements the rule will apply to. You've seen a few different sorts of selector: the _element_ selector, the _class_ selector, the _id_ selector, and the _descendant_ selector.

A **type selector** applies to every HTML element of a particular type, such as `p` or `em`. This selector will apply to every `p` element:

    p {
        color: blue;
    }

A **class selector** applies to all elements that share a `class` attribute. The class selector is written starting with a `.` (dot):

    .narrow {
        width: 20%;
    }

In order for the class selector to apply, there have to be HTML elements on the page that use that `class` attribute:

    <div class="narrow">
       This will get the 20% width.
    </div>

An **id selector** applies to an element with a particular `id` attribute. The id selector is written starting with a `#` sign:

    #sidebar {
        background-color: lightgray;
        width: 20%;
        float: left;
    }

Within an HTML page, there should be only one element with that `id` attribute value.

    <div id="sidebar">
        This will get the background, width, and float values from the sidebar CSS rule.
    </div>

A **descendant selector** is a compound of two simpler selectors. It applies only to an inner element that is a descendant (on the DOM tree) of a particular outer element.

    li a {
        color: pink;
    }

The above selector will apply to `a` elements (hyperlinks), but only those inside an `li` element (list item):

    <ul>
        <li> <a href="https://www.udacity.com/"> Pink Udacity </a>
    </ul>
    <p> <a href="https://www.google.com/"> Non-pink Google </a>

## Rules

A ruleset can be composed of several rules, each of which applies a particular _value_ to a _property_ of the selected elements. Properties are things such as the color, position, size, and shape of the element.

    h1 { color: red; font-size: larger; }

This rule applies the value `red` to the property `color`, and the value `larger` to the property `font-size`.

Some properties allow values that are more than one word long, such as the `font` property:

    body { font: 12pt bold Consolas, Monaco, monospace; }

### Font stacks

The `font-family` and `font` properties allow you to specify a _font stack_, a list of font options separated by `,` commas. The browser will use the first font in the stack that is available on the user's system. Usually the last font in the stack should be a generic font name, such as `serif`, `sans-serif`, or `monospace`.

### Colors

There are several ways to specify a color in CSS. Three common ones are hex codes, `rgb` triples, and color names.

    .orange {
        color: #ff9900;
    }
    .pink {
        color: rgb(100%, 80%, 80%);
    }
    .chartreuse {
        color: chartreuse;
    }

## Flexbox

To change the browser's layout from the default document-based layout to the flexible box layout, set `display: flex` on a container element (one that has other elements inside it).

    .outer {
        display: flex;
        border: 2px dotted orange;
    }
    .inner {
        width: 100px;
        border: 1px solid black;
        padding: 10px;
    }

Flexbox can be heavily customized! The above will cause `.inner` HTML elements to be packed in a row within the `.outer` element:

    <div class="outer">
       <p class="inner"> I am a box. </p>
       <p class="inner"> I am another box. </p>
       <p class="inner"> Hey, I am a box, too! Boxes <strong>rock</strong>. </p>
       <p class="inner"> Let's be boxes together. Yay, flexbox. </p>
    </div>
---


<div class="outer" style="display: flex; border: 2px dotted orange">

I am a box.

I am another box.

Hey, I am a box, too! Boxes **rock**.

Let's be boxes together. Yay, flexbox.

</div>

---


#### Supporting Materials
[IPND Reference Sheet - CSS Syntax](https://video.udacity-data.com/topher/2018/June/5b340432_ipnd-reference-sheet-css-syntax/ipnd-reference-sheet-css-syntax.pdf)

---
