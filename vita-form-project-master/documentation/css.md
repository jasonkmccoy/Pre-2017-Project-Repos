# The Sass/CSS Structure
  * This project folder uses the Sass pre-processor
  * All Sass are imported in the style.scss file.
  * The 0-toolbox folder is for important Sass files such as _reset.scss, _mixins.scss, _variables.scss etc.
  * The 1-base folder is for common HTML file sections such as _navigation.scss, _footer.scss, _logo.scss etc.
  * The 2-content folder is for styles specific to a page in your project such as _index.scss, _about.scss, _contact.scss etc.
  * The style.scss file sends all CSS rules to the style.min.css file.
  * This project uses a Grunt plugin called Uncss. This plugin searches for unused CSS rules and removes them from the style.min.css file. These rules will still be in the Sass files they were created in, they just won't be added to the final style.min.css file.

## Sass Plugins
I have included the following Sass libraries:
1.[Bourbon](bourbon.io)
2. [Neat](neat.bourbon.io)
3. [Bitters](bitters.bourbon.io)
4. [Refills](refills.bourbon.io)

## Scaffolding

### Development
````
├── app
│   ├── css
│       ├── style.min.css
│   └── 404.css
├── src
│   ├── scss
│       ├── 0-toolbox
│       ├── 1-base
│       ├── 2-content
│       └── style.scss
````
### Production
````
├── app-production
│   ├── css
│       ├── style.min.css
│   └── 404.css
````

