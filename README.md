# Generator Boilerplate-wp 
It is a ready structure with preconfigured automation, using already defined processing resources.

The interface has a Wordpress theme structured with Bootstrap 4, in order to standardize the institutional production modes.

>You need to download wordpress at https://www.wordpress.org/download/. Then follow the instructions below.

## Installation

#### Global Dependencies

* Yeoman: `npm i -g yo`
* Generator: `npm i -g generator-boilerplate-wp`

#### Wordpress

Install and configure [Wordpress](https://www.wordpress.org/download/).

Enter in your Wordpress `themes` folder and create a folder for the new theme.

Example: `wordpress/wp-content/themes/my-new-theme`.

Enter in the `wordpress/wp-content/themes/my-new-theme` folder and execute the follow command to generate the 
project's files:

```bash
yo boilerplate-wp
``` 

Then, install the npm's dependencies:

```bash
npm i
```

Change the default Wordpress theme to the new one you had created "my-new-theme" ([How-to?](https://wpengine.com/resources/change-wordpress-theme/))

## License

MIT © [Allan Cruz](https://github.com/allanncruz)
