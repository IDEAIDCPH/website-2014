IDEAID 2014 Website
===================

Project Structure
-----------------

	/src
	|—/assets
	  |—/sass
	    |—/bourbon		Bourbon (Sass framework)
	    |—/neat			Bourbon Neat (Sass grid framework)

	  |—/img 			All {jpg,png,gif} will be optimized during build

	  |—/js
	    |—/vendor		cdnjs.com fallbacks

	|—/design			Photoshop design files


Development
-----------

This project only contains the wordpress theme and data files. The project is intended to be built into the Wordpress themes directory. The easiest way is to symlink the `dist` folder into `wp-content/themes/` while developing.
	
	ln -s $PWD/dist /Applications/MAMP/htdocs/wp-content/themes/ideaid