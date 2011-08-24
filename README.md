A boilerplate from [Fublo](http://fublo.net).

Comes with a HTML5 template, Skeleton and MooTools.

This is made to be as extensible as possible. So always use child themes, you can set this as the parent theme like so.

    Template: fublo-boilerplate

You will then need to use `bloginfo('stylesheet_url')` to get the URL to the themes directory.

Also, to get the benefits of the precoded header and footer you must call them like so.

    get_header('fublo_boilerplate');
    get_footer('fublo_boilerplate');

These can be called from your custom header and footer.

This means you will not have to write the doctype etc because the body tag is opened in the pre done header and closed in the footer.

So you just write in the body.

Please include all scripts in the footer and if you need mootools set that as a dependency. Here is an example.

	wp_register_script('my_epic_script', get_bloginfo('stylesheet_url') . '/somescript.js', array('fublo_boilerplate_mootools'), 'version or false', true);