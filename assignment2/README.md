# Funda
This is a assingment made for Funda.nl. It's a one week prototype which lays a focus on new search methodes.

## Usage
If you want to run it local:
* $npm install
* gulp server

For online usage
[Online Link](http://martijnnieuwenhuizen.nl/funda/)

# Enhancements
### Colors
* Aangeboden sinds -> Higher Contrast

### Custom Fonts
* Added Fallback fonts -> font-family: 'Helvetica', 'Arial', 'Open Sans', 'Avenir', Sans-Serif;

### Pictures
Request a smaller image on a smaller screen
**From**
```
<img src="{{ FotoLargest }}" alt="afbeelding van het huis">
```
**To**
```
<picture>
    <source srcset="{{ FotoLargest }}" media="(min-width: 1280px)">
    <source srcset="{{ FotoLarge }}" media="(min-width: 800px)">
    <source srcset="{{ FotoMedium }}" media="(min-width: 320px)">
    <img src="{{ Foto }}" alt="afbeelding van het huis">	
</picture>
```

### Content Blockers
Change png/svg to inline svg
**From**
```
<li><a href="#settings"> <img src="img/settings-white.png" alt="Settings"> </a></li>
```
**To**
```
<li>
	<a href="#settings"> 
		<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><path d="M4.48 39.104v-.4c.03-.142.068-.28.085-.425l.357-3.22.605-5.447c.2-1.79.396-3.577.594-5.367l.69-6.24c.074-.658.156-1.313.232-1.967h35.893c.025.12.055.224.067.328.222 2.002.444 4.004.664 6.005.25 2.267.494 4.534.745 6.8.288 2.6.575 5.196.87 7.793.064.58.156 1.16.236 1.738v.4c-2.176.316-4.352.635-6.527.947-3.35.48-6.7.96-10.052 1.437-.455.064-.912.12-1.386.182l-2.507-12.534-.098.008-2.507 12.532c-.715-.102-1.386-.195-2.056-.29-2.69-.388-5.38-.774-8.07-1.16-2.61-.375-5.22-.748-7.833-1.122z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M42.95 13.44H7.05c0-.545-.008-1.086.002-1.627.01-.493-.03-.998.068-1.475.253-1.235 1.255-2.01 2.533-2.01 8.466-.003 16.93 0 25.395 0 1.763 0 3.524 0 5.287-.004 1.494-.002 2.615 1.105 2.62 2.59v2.525z"/></svg>
	</a>
</li>
```


### ScreenReader
**From**
```
<figcaption><span>{{ Adres }}</span> <span>€ {{ Koopprijs }}</span></figcaption>
```
**To**
```
<figcaption><span>Adress: {{ Adres }}</span> <span>Prijs: {{ Koopprijs }}</span></figcaption>	
```

### No Mouse, use a keyboard
The html has a good flow, so no fixes nessesery here

### No JS
**From**
```
<main></main>
```
**To**
```
<main>
	<h1>Sorry this application only works with JavaScript enabled</h1>
	<p>Help: [Google Support](https://support.google.com/adsense/answer/12654?hl=nl)</p>
</main>
```
Even better: 
Render the data in the template on the server. Return this data as html. 
If JS is enabled, the user stil can see content.

### LocalStorage
Put the usersetting in a Database on the server.
If local storage is unavalible, get the usersetings from the server.

