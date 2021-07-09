# wp-child
Folder used to hold child themes of things I create.

<b>PicoStrap Clone</b> added in a header section with a logo and buttons. <br>
Libraries: Bootstrap, Google Fonts, FontAwesome
![](./picostrap-clone/screenshot.png)


<b>Fcoronel.com</b> created a clone of my old portfolio page using bootstrap. Also uses Jquery.


<b>Myspace Theme</b>
![](./myspace/static/photos/myspace.png)
Be sure to add this to wordpress deployment folder/file sass/main.scss
```
.modal-backdrop {
    display: none;
    z-index: 1040 !important;
}

.modal-content {
    margin: 2px auto;
    z-index: 1100 !important;
}
```



Look into bravada theme or the [avada theme](https://avada.theme-fusion.com/information-technology/) same one used by fcnetworks. clone template

twentychild; A child theme of twentytwentyone to practice making my own theme
[How to add new block patterns or template](#https://kinsta.com/blog/twenty-twenty-one-theme/#how-to-build-a-child-theme-on-twenty-twentyone)<br>



<b>Grace-Portfolio</b>
![](./grace-portfolio/static/grace-portfolio.png)


[Add bootstrap](https://www.greengeeks.com/blog/bootstrap-wordpress/)
[Add FontAwesome](#)
```
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

<i class="fa fa-home"></i>

```

### Wordpress Themes I Enjoy
[Reddit good free starter themes](https://www.reddit.com/r/Wordpress/comments/mxq8cb/i_see_a_lot_of_requests_for_good_free_themes_so_i/)
* picostrap
* GeneratePress
* astra

try
[Bootscore](https://bootscore.me/)

<b>Themes Tried</b>
* Calliope (lobosecurity)
* colibri wp
* neve
* consulting
* vantage
* hestia
* architect design
* artistic blog

<b>Veerotech themes</b>
* decor
* management
* pharmacy
* dentalcare


### Wordpress React

[Wordpress React Tutorial](https://www.iamtimsmith.com/blog/using-wordpress-with-react) Doesnt work followed it.

## ToDO
* [x] header.php overwrites the header in original theme 
* [x] style.css create styles that overwrite original file
  * [x] import google fonts
  * [x] set a background image in header
* [x] functions.php
  * [x] call function that reads old style and reads new styles
* [ ] Finish creating Picostrap child theme
  * [x] Create a copy of picostrap website headers under picostrap-clone
  * [] Create a sample home page 
    * [x] Change bootstrap style to make responsive on bootstrap md-size screens [Grid Tiers Bootstrap breakpoints and max-wdiths](https://getbootstrap.com/docs/4.1/layout/grid/#grid-tiers)
    ```
    .container, .container-md, .container-sm {
    max-width: 100%;
}
* [] Create font awesome section and then we are done.
    ```
