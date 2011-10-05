A boilerplate parent theme from [Fublo](http://fublo.net).

This lays down the foundations for you to build a child theme upon. It does this by combining [Skeleton](http://www.getskeleton.com/), [MooTools](http://mootools.net) and [a HTML5 enabling script](http://remysharp.com/2009/01/07/html5-enabling-script) so you can style HTML5 elements in older browsers.

#### This is a bare-bones WordPress theme meant for developers.

In order to make use of this theme, you will need to create a child theme which has fublo-boilerplate as its parent.

### Example and quickstart

There is an example of a child theme using the boilerplate included in the package.

https://github.com/fublo/fublo-boilerplate/tree/master/fublo-boilerplate-example

To get going quickly:

* Install the fublo-boilerplate in your `wp-content/themes` folder.
* Move the example sub folder `fublo-boilerplate-example` up a level to your `wp-content/themes`.
* Activate the fublo-boilerplate-example theme.
* Rename it up to what you want and get started using the boilerplate for your development.
* Celebrate the fun of Skeleton and HTML5 in your WordPress theme.

### Usage notes

The child theme includes the fublo-boilerplate as its parent with a single line in the `style.css` file:

    Template: fublo-boilerplate

More information on [child themes is available in the WordPress Codex](http://codex.wordpress.org/Child_Themes).

As you will see in the example, we use `get_bloginfo('stylesheet_directory')` to get the URL to the themes directory rather than `get_bloginfo('template_url')` etc. This is because `template_url` is the URL of the parent theme. The stylesheet's directory however is the directory of your child theme.

Also, to get the benefits of the precoded header and footer you must call them like so.

    get_header('fublo-boilerplate');
    get_footer('fublo-boilerplate');

These can be called from your custom header and footer.

The pre-made header and footer include the doctype plus open and close the body tag, so there is no need to include that in your child theme header.

We recommend including all scripts in the footer. When you want to include Mootools, set that as a dependency. Here is an example.

	wp_register_script('my_epic_script', get_bloginfo('stylesheet_directory') . '/somescript.js', array('mootools'), false, true);

Where we have passed false you can pass a version string for your script.

You will also need to set skeleton as a dependency if you wish to use it, like this.

    wp_register_style('my_stylesheet', get_bloginfo('stylesheet_directory') . '/style.css', array('skeleton'));

Have fun!