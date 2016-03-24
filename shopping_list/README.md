# Create Your Tosti Grocery's list
This repo is all about Progressive Enhancement

This code is build by the theory of Progressive Enhancement. [link](http://martijnnieuwenhuizen.github.io/projects/browser-technologies/create_your_own_tosti/tosti.html)

## HTML
If your browser doesn't support anything but HTML, or that's the only thing that's loaded, the HTML is workable. It doesn't look nice, but it works!
![Page with only HTML](https://github.com/MartijnNieuwenhuizen/Browser_Technologies/blob/master/shopping_list/img/only_html.png "Page with only HTML")

## HTML & CSS
If your browser loads CSS, you will get some nice colors, positions and fonts.
The enhancement in the CSS is the alignment with flexbox. Doesn't your browser support flexbox, the alignment is good. Does your browser support flexbox, the alignment is great.
![Page with HTML and CSS](https://github.com/MartijnNieuwenhuizen/Browser_Technologies/blob/master/shopping_list/img/add_css.png "Page with HTML and CSS")

## PHP
The default rendering of the form is done by PHP. The form posts the data to the PHP script and that script renders the input and shows it. 

## JavaScript
There are a view enhancements done with JS
![Page with HTML, CSS and JS](https://github.com/MartijnNieuwenhuizen/Browser_Technologies/blob/master/shopping_list/img/add_js.png "Page with HTML, CSS and JS")

### Sliding form
If your browser supports the querySelector and the eventListener, the form will cut in three parts. Also, buttons are added and you can click true the three sections with the buttons.

### Saving the form
If your browser supports the same element as above, the form will not be rendered by PHP. JS prevents the form from validating and get all the selected elements on the form. Each element gets created as a new 'li' in the ul(grocery list).

### Touch
If your browser supports touch and isn't a mobile with a operating system that's in the check (sorry for that one!), you can drag and drop the elements from the form to the list.