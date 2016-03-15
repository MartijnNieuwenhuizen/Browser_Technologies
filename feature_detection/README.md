# CSS
Creating a pretty good fallback for relative easy flexbox alignments isn't verry difficult.
I've looked at two elements of the flexbox series.
1. The flex alignment
2. Centering content

In the demo[LINK!!!!!!!] you can click to see the differance between the two possibilities

## Flexbox and/or inline-block
To align something with flexbox is verry easy, but to create a good fallback ins't a hard job.
If you want to align something like in the example you can do the following:
```
.containter {
	// default
	display: block;
	width: 100%;
	text-align: center;

	// flexbox
	display: flex;
	flex-flow: row wrap;
	justify-content: space-around;
}
.containter-inner {
	// default
	display: inline-block;
	max-width: 10em;
	max-height: 30em;
	margin: .3em .7em;
	text-align: left;

	// flexbox	
	nothing in this case
}	

```
So, what happens here?
The idea is that every block in the container has a width and is an inline-block element, so everything is sitting next to eachother. And that's good. The only thing we do with flexbox is a prittier alingment. So if your browser supports *display: inline-block;* (and every browser does that! [Can I Use -> inline-block](http://caniuse.com/#search=inline-block)) the layout will be fine. And if your browser supports flexbox, it will look even nicer. 

## Center the inner content
After creating a nice overview of all the items, I want to aling the content off every item. This is also verry simple! You can use the *text-align* property, which accepts the following settings: *left, right and center*. 
If you want to use flexbox for this, you can use the *justify-content* property on the container. This property accepts the following settings: *flex-start, center, flex-end*.

### Conclusion
So the story here is simple. If you use flexbox for a fancy layout, please think about the possibilities with the *display* property. This gives you the power to create a acceptable layout for non-flexbox users.

# JavaSript (ES6)

# HTML(5)


