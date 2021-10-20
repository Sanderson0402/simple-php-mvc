<?php   

    //builds the webpage
    function template($name){
        $recipe = array("html_boilerplate.html", "menu.html", $name, "html_footer.html");

        $path = "../templates/";
        $files = scandir($path);

        $assoc_array = array();

        //following code will return the files without . and .. that are contained in "../templates/"
        foreach( $files as $file ):
            if ($file != '.' and $file != '..'):
                $assoc_array[$file] = $file;
            endif;
        endforeach;
        
        foreach( $recipe as $value ):
            require_once("../templates/" .$assoc_array[$value]);
        endforeach;
	}
?>