A boilerplate parent theme from [Fublo](http://fublo.net).

This lays down the foundations for you to build a child theme upon. It does this by combining [Skeleton](http://www.getskeleton.com/), [MooTools](http://mootools.net) and [a HTML5 enabling script](http://remysharp.com/2009/01/07/html5-enabling-script) so you can style HTML5 elements in older browsers.

#### This is a bare-bones WordPress theme meant for developers.

In order to make use of this theme, you will need to create a child theme which has fublo-boilerplate as its parent.

### Example and quickstart

There is an example of a child theme in this repository.

https://github.com/fublo/fublo-boilerplate/tree/master/fublo-boilerplate-example

To get going quickly:

* Install the fublo-boilerplate in your `wp-content/themes` folder.
* Move the example sub folder `fublo-boilerplate-example` up a level to your `wp-content/themes`.
* Activate the fublo-boilerplate-example theme.
* Rename it up to what you want and get started using the boilerplate for your development.

### Usage notes

If you do not yet know how to create a child theme then don't panic, it is literally one line in your `style.css` header. And here it is.

    Template: fublo-boilerplate

Now your theme is a child of the boilerplate.

You will then need to use `get_bloginfo('stylesheet_directory')` to get the URL to the themes directory rather than `get_bloginfo('template_url')` etc.

This is because `template_url` is the URL of the parent theme. The stylesheets directory however is the directory of your child theme.

Also, to get the benefits of the precoded header and footer you must call them like so.

    get_header('fublo-boilerplate');
    get_footer('fublo-boilerplate');

These can be called from your custom header and footer.

The pre made header and footer include the doctype plus open and close the body tag. So you do not need to worry about that. Just bear in mind that if you include the pre done stuff then the doctype / html / head / body tag will already have been done for you.

Please include all scripts in the footer and if you need mootools set that as a dependency. Here is an example.

	wp_register_script('my_epic_script', get_bloginfo('stylesheet_directory') . '/somescript.js', array('mootools'), false, true);

Where we have passed false you can pass a version string for your script.

You will also need to set skeleton as a dependency if you wish to use it, like this.

    wp_register_style('my_stylesheet', get_bloginfo('stylesheet_directory') . '/style.css', array('skeleton'));