With The Extension Random HTML Module you can easily create random html to your own wishes.
Use them to create ramdom html or javascripting and css
examples are random cursor, random javascripts, random html frames
There are around 150 html fields to start with!

if by any chance you get errors about JModuleHelper here is the solution:
Open your template index.php and paste this little alias bridge

< ?php
phpif (!class_exists('JModuleHelper')) {
    class_alias('Joomla\\CMS\\Helper\\ModuleHelper', 'JModuleHelper');
}
? >




Language files for front and back end are included
Tested on several uptodate joomla live sites

This Extension is free to use

Have fun!
www.serviceverkoop.eu
