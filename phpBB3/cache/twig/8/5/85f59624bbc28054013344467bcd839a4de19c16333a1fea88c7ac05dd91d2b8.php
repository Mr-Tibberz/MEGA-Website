<?php

/* footer.html */
class __TwigTemplate_85f59624bbc28054013344467bcd839a4de19c16333a1fea88c7ac05dd91d2b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!-- //IMPORTANT NOTE: DUE TO PHPbb INTEGRATION, WHEN UPDATING THE CODE IN THIS FILE, BE SURE TO COPY AND REPLACE THE footer.html FILE IN THE PHPbb3/STYLE/BLACK/TEMPLATE FOLDER -->

<!-- //ALSO NOTE: DUE TO THIS FILE BEING COPIED OVER INTO THE PHPBB DIRECTORY, YOU WILL NEED TO INCLUDE \"//\" IN ADDITION TO THE HTML COMMENT TAGS AS IT HAS AN INLINE READER (I USED TO IMPORT HTML DOCS INTO OTHER HTML DOCS)-->

<!-- //FOOTER CODE, List of links, modified with CSS -->
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../main.css\">
</head>

<div class=\"footer\">
    
    <!-- FERRIS LOGO HERE -->
    <div href=\"http://www.ferris.edu\"></div>

    <ul>
        <li><a href=\"http://www.ferris.edu\">Ferris.edu</a></li>
        <li><a href=\"#\">About Us</a></li>
        <!-- <li>Contact MEGA</li> -->
    </ul>
    
    <p>Copyright 2015</p>
    
    <a class=\"contact\" href=\"http://localhost/MEGA-Website/phpBB3/memberlist.php?mode=contactadmin\">Contact MEGA</a>
    
</div>    
";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
