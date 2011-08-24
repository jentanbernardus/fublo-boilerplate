A boilerplate parent theme from [Fublo](http://fublo.net).

This lays down the foundations for you to build a child theme upon. It does this by coming with [the 960 grid system](http://960.gs), [Foldy960](https://github.com/davatron5000/Foldy960) which makes the grid responsive (change sizes on smaller browsers), [MooTools](http://mootools.net) and [a HTML5 enabling script](http://remysharp.com/2009/01/07/html5-enabling-script) so you can style HTML5 elements in older browsers.

If you do not yet know how to create a child theme then don't panic, it is literally one line in your `style.css` header. And here it is.

    Template: fublo-boilerplate

Now your theme is a child of the boilerplate.

You will then need to use `get_stylesheet_directory_uri()` to get the URL to the themes directory rather than `bloginfo('theme_url')`.

This is because `theme_url` is the URL of the parent theme. The stylesheets directory however is the directory of your child theme.

Also, to get the benefits of the precoded header and footer you must call them like so.

    get_header('fublo-boilerplate');
    get_footer('fublo-boilerplate');

These can be called from your custom header and footer.

The pre made header and footer include the doctype plus open and close the body tag. So you do not need to worry about that. Just bear in mind that if you include the pre done stuff then the doctype / html / head / body tag will already have been done for you.

Please include all scripts in the footer and if you need mootools set that as a dependency. Here is an example.

	wp_register_script('my_epic_script', get_stylesheet_directory_uri() . '/somescript.js', array('fublo_boilerplate_mootools'), false, true);

Where I have passed false you can pass a version string for your script.

If you do not require MooTools for this, simply add the following line to your functions file.

    add_action('init', 'fublo_boilerplate_dequeue_mootools', 11);