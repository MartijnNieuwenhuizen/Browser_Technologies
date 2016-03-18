# Progressive Enhancement
## Assignment
Rewrite the core functionality of the [Funda-App](https://github.com/MartijnNieuwenhuizen/web-app-form-scratch) with progressive enhancement.

## The core functionality
The core functionality of the Funda-App are the Push Messages. Every day you will receive a Push Message with the houses that are added that night and suit your search patterns.

## The proces
The Push Messages are send by the Native browser function *Notification*. 
```
	// Ask the browser for permission
Notification.requestPermission();

	// Send a notification
var notification = new Notification(obj);
```

Because this hasn't got a verry large support yet, the fallback for this is a hidden html section:
```
// HTML
<section id="push-notification">
	<img src="img/funda-logo.png" alt="Logo van Funda">
	<h2 id="notification-title"></h2>
	<p id="notification-content"></p>
	<button id="notification-button">Gezien!</button>
</section>

// JS
	// At default, hide the section
pushNotification.classList.add('hide');

	// Insert the content
notificationTitle.innerHTML = title;
notificationContent.innerHTML = body;

	// Show the notification
pushNotification.classList.add('show');
```

But of course, not everything is supported. Like: *innerHTML* or *classList.add*.
So this is the fallback if everything else fails
```
	// Get the elements from the object
var contentStr = content.title + ", " + content.body;
	// Create a sting of the content and send it as a alert to the user
alert(JSON.stringify(contentStr));
```

If you want to see it in action: [Progressive Enhancement Funda App](http://martijnnieuwenhuizen.github.io/projects/browser-technologies/progressive_enhancement/progressive-enhancement.html)