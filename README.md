# ericdjohnson

This is my personal portfolio website. I wanted to build something almost from scratch so a reader could clearly see my 
coding. I started with a copy of HTML5 Boilerplate and the modified it 
 to be as simple as possible and to prioritize clarity.
 
 Below I outline the structure of the site and noteworthy items for each page.
 
 
## Site Structure

### PHP
To allow code re-use across my site (eg, including the header and footer on each page), I used some custom PHP. I wanted 
avoid the overhead of using a larger tool like Drupal or Wordpress. 

`index.php` is a simple router that takes care of the special cases of the homepage and the "Work I've Done" subpages.

On each webpage of the site (located in `/src/pages`) I include the header, footer and any other includes needed for
that particular page.

### JS

#### jQuery
In the spirit of simplicity, I considered using only plain javascript on my site instead of jQuery. But the great readability 
jQuery and its ubiquity made me go with it.

#### GreenSock
...coming...

#### PixiJS
...coming...

#### Modernizr
...coming...

### CSS
I used Sass for my CSS pre-processor. I plan to integrate CSS variables in the future, but for now haven't used them.

I decided to try a form of BEM style naming for my CSS classes where I don't extend base classes, but I create mixins. 
The final CSS is much cleaner and readable using mixins.

For example I created site-wide mixins like
```sass
@mixin site__banner
  //...banner css...
  
.site__banner
  @include site__banner()
```
If you want to just use the default `site__banner` styles you can use the `site__banner` class, but if you need to tweak
the banner CSS on a particular page, you can do

```sass
.about-page__banner
  @include site__banner()
  //...custom css...
  ```
  
I like this approach because it gives you an easily searchable and authoritative source for all the CSS for a particular
 element. It also avoids a lot of abbreviated modifier CSS classes like `site__banner f-large no-bg red`. And you can easily
 override CSS if you need to just by putting it after your includes.
 
 However, I haven't run this method by anyone else, so it could have some fatal flaws that I'm not seeing yet.
 
 
 ...more
 

