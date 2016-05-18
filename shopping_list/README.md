# Progressive enhancing the Drag & Drop API
Drag & Drop is an awesome new feature in the world of Web API's, but not usable in every browser. So what to do in those browsers? For what is Drag & Drop an enhancement?

## Support
The Drag & Drop API is supported in

* Chrome 4.0 (now 50)
* IE9 (now 11)
* Firefox 3.5 (now 46)
* Safari 6.0 (now 9.2)
* Ophera 12.0 (now 36)

So it's not that bad, but what if you use IE8, an E-reader or a smart tv with a weird browser? It should still work right!?

## The core
In this assignment I build a tool to [create a Grocery list for a tosti](http://martijnnieuwenhuizen.github.io/projects/browser-technologies/create_your_own_tosti/tosti.html). 
You must be able to get the choices on the list, and it would be awesome if you could immediately Drag & Drop them on the list.
But what's the core of that? **A From**. So that's:

```
<form>
    // your code
</form>
```

Becuase a form gives you the opportunity to collect the data that the user has set, and transfer it to the list, it's the right choice for the job.
So this would be your basic HTML:

```    
<form action="formValidation.php" method="post">
    
    <h2>Add your Ingredient</h2>
    <fieldset id="bread">
        
        <legend>Bread</legend>
        
        <label for="white-bread">White Bread</label>
        <input id="white-bread" type="radio" name="bread" value="white-bread" checked="checked">

        <label for="brown-bread">Brown Bread</label>
        <input id="brown-bread" type="radio" name="bread" value="brown-bread">

    </fieldset>
    <fieldset id="toppings">
        
        <legend>Toppings</legend>
        
        <label for="ingredient-tomato">Tomato</label>
        <input id="ingredient-tomato" type="checkbox" name="ingredient[]" value="tomato">

        <label for="ingredient-pineapple">Pineapple</label>
        <input id="ingredient-pineapple" type="checkbox" name="ingredient[]" value="pineapple">

        <label for="ingredient-cheese">Cheese</label>
        <input id="ingredient-cheese" type="checkbox" name="ingredient[]" value="cheese">

        <label for="ingredient-ham">Ham</label>
        <input id="ingredient-ham" type="checkbox" name="ingredient[]" value="ham">

    </fieldset>
    <fieldset id="input-ingredient">

        <legend>Others</legend>

        <label for="other">Ingredient</label>
        <input id="other" type="text" name="other" placeholder="Salami">

        <button id="submit" type="submit" name="submit">Create Tosti</button>

    </fieldset>

</form>
```

The form will be rendered by the formValidation.php script and set in the list.

This means almost(or even) every browser is able to create this list.

## Adding the Drag & Drop
After the core works, it's time te enhance it. To add the drag and drop you simply add ```draggable="true"``` to every element that must be draggable. This lets you drag the items, but there's no drop yet.
To set the drop, you will need to use JavaScript.

First, check if the draggable element is available. In this case, I used the check from Modernizer I know it's ugly, but also the only way to do it.
```    
if ( 'draggable' in document.createElement("div") && !/Mobile|Android|Slick\/|Kindle|BlackBerry|MSIE|Opera Mini|MSIE|Opera Mobi/i.test(navigator.userAgent)  ) {
            
    // call the other functions

}
```

If your browser supports this, you will need to get the element that's dragged with a check
```
item.ondragstart = function() {
    dragEvent(event);
};
```

Next, set the data to the element-object so you can transfer it to the list.
```
function dragEvent(event) {
      
    event.dataTransfer.setData("targetName", event.target.htmlFor);

};
```

After that, make the dropPont droppable
```
function setDropZone() {
    
    var dropArea = document.querySelector('ul');
    
    // add a class for the styling
    dropArea.classList.add('js-drop-area');
    
    // allow drop in this area
    dropArea.ondrop = function() {
        dropElement(event);
    }
    // create a visual clue that you can drop your element here
    // and prevent the default
    dropArea.ondragover = function() {
        dropArea.classList.add('allow-drop')

        if (event.preventDefault) {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
    }    

};
```

At last, set the info from the drag element into the drop element
```
function dropElement(event) {

    // get the targetName of the draged element
    var data = event.dataTransfer.getData("targetName");
    // get the label with the same 'for' name on the html
    var element = document.querySelector('label[for="'+ data +'"]');
    // get the inner html of the selected label
    var text = element.innerHTML;
    // create new list item
    var newListItem = document.createElement('li');
    // set the list item inner html to the inner html of the selected label
    newListItem.innerHTML = text;
    // add the new list item to the ul
    event.target.appendChild(newListItem);
    // add the animation class to the elements
    newListItem.classList.add('js-ondrop');

    if (event.preventDefault) {
          event.preventDefault();
      } else {
          event.returnValue = false;
      }

}
```


If the item is Dropped, read the event and added it as a new list item

That's the basic code to create a good drag and drop functionality with the Drag & Drop API.

## Other enhancements
### CSS
Now that there's Flexbox, it's very easy to build a layout, but also flexbox isn't supported by every browser. To fix this you don't need to float anything, just be smart with the CSS ```display: something;```.
If you set this right, your layout will behave like you want, without setting and deleting the floats in case your browser supports flexbox. If you want to see a specific example, you could look at the [feature detection assignment](https://github.com/MartijnNieuwenhuizen/Browser_Technologies/tree/master/feature_detection).
A quick example will give you an insight:
```
li {
    // this centers all the elements in the *li* and will place all the li's behind each other
    display: inline-block;
    text-align: center;    
}

// with flexbox, you could better align the list and the list-item like this.
ul, li {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
}
li {
    flex-direction: column;
}
```

## JavaScript
The bar on the left animates if your browser supports some basic JavaScript. But if not, the bar should still be usable, so the default is one big bar. 

If your JavaScript runs, two of the three pieces of the bar are moved out of the screen. If you push the (by JavaScript) added 'Next' button, the current piece is moved to the left and the next one slide in from the left.

This way there's a fancy animation and it's usable without the animation.


## Enhance it
If you have any suggestions, feel free to create a pull request and if you see something wrong, you can create an Issue