(function() {

	var app = {
		louncher: function() {

			if ( ('querySelector' in document) && ('addEventListener' in document) ) {
				form.addListener();
				formAnimation.reset();
			}

		}
	};

	var htmlElements = {
		submitButton: document.querySelector('#submit'),
		list: document.querySelector('#shopping-list'),
		fieldsets: document.querySelectorAll('fieldset')
	};

	var form = {
		addListener: function() {
			var button = htmlElements.submitButton;

			button.addEventListener('click', form.createNewList, false);

		},
		getElements: function() {
			var bread = document.querySelector('#bread input:checked');
			var toppings = document.querySelectorAll('#toppings input:checked');
			var other = document.querySelector('#other');
			var ingredientList = [];

			console.log(other, toppings, bread);

			ingredientList.push(bread.defaultValue);
			if ( other.value != "" ) {
				ingredientList.push(other.value);
			}

			for ( i = 0; i < toppings.length; i ++ ) {
				
				var toppingName = toppings[i].defaultValue;
				ingredientList.push(toppingName);

			}

			return ingredientList;
			
		},
		createNewList: function(e) {

			event.preventDefault();

			var newIngredientList = form.getElements();
			list.addNewContent(newIngredientList);
			formAnimation.setToBeginMode();

			event.preventDefault();
		}
	};

	var list = {
		addNewContent: function(content) {

			var _content = content;
			var list = htmlElements.list;

			_content.forEach(function(contentItem) {
				var listItem = document.createElement('li');
				listItem.innerHTML = contentItem;

				list.appendChild(listItem);

			});

		}
	};

	var formAnimation = {
		addButtonListeners: function() {

			var nextButtons = document.querySelectorAll('.js-button');
			var x = 2;

			for ( i = 0; i < nextButtons.length; i++ ) {

				var nextButton = nextButtons[i];

				nextButton.addEventListener('click', formAnimation.showNextFieldset, false);

				nextButton.next = x;

				x++;

			}

		},
		addNextButtons: function() {

			var fieldsets = htmlElements.fieldsets;
			var y = 1;

			for ( i = 0; i < fieldsets.length; i++ ) {

				var fieldset = fieldsets[i];
				fieldset.classList.add('fieldset' + y);

				if ( y != fieldsets.length ) { // don't set the button at the last fieldset

					// Create button and append it to the html
					var button = document.createElement('button');
					button.innerHTML = "Next";
					button.classList.add('js-button');
					fieldset.appendChild(button);

					y++;

				}

			}

		},
		hideAllFieldsets: function() {

			var fieldsets = htmlElements.fieldsets;

			for ( i = 0; i < fieldsets.length; i++ ) {
				
				var fieldset = fieldsets[i];
				fieldset.classList.add('hide-left');
				fieldset.classList.remove('show');

			}

		},
		showFieldset: function(select) {

			var currentFieldset = document.querySelector('.fieldset' + select);
			setTimeout(function() {
				currentFieldset.classList.remove('hide-left');
				currentFieldset.classList.add('show');
			}, 300);

		},
		showNextFieldset: function() {

			var nexFieldset = event.target.next;

			formAnimation.hideAllFieldsets();
			formAnimation.showFieldset(nexFieldset);		
			
			event.preventDefault();

		},	
		setToBeginMode: function() {

			formAnimation.hideAllFieldsets();
			formAnimation.showFieldset("1");

		},
		reset: function() {

			formAnimation.addNextButtons();
			formAnimation.addButtonListeners();
			formAnimation.hideAllFieldsets();
			formAnimation.showFieldset("1");

		}
		
	};
		
	app.louncher();

}());