<?php

/* header.html */
class __TwigTemplate_c5fd4a8ae2904be9029a8e522ff695df5405b3c791f298c8c326a08643117034 extends Twig_Template
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
        echo "<!-- //IMPORTANT NOTE: DUE TO PHPbb INTEGRATION AND THE ROUTE I HAD TO TAKE TO GET THE HEADER AND FOOTER TO SHOW UP, WHEN UPDATING THE CODE IN THIS FILE, BE SURE TO COPY AND REPLACE THE header.html FILE IN THE PHPbb3/STYLE/BLACK/TEMPLATE FOLDER -->

<!-- //ALSO NOTE: DUE TO THIS FILE BEING COPIED OVER INTO THE PHPBB DIRECTORY, YOU WILL NEED TO INCLUDE \"//\" IN ADDITION TO THE HTML COMMENT TAGS AS IT HAS AN INLINE READER (I USED TO IMPORT HTML DOCS INTO OTHER HTML DOCS)-->

<!-- //IMPORTANT: AFTER COPYING THIS FILE TO THE PHPBB FOLDER LISTED ABOVE WE MUST REINSTALL THE THEME ON PHPBB FOR THE CHANGES TO TAKE EFFECT. WHY CODING GODS WHY!!?!?!!?! -->

<!-- //Header CODE, List of links, modified with CSS -->
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../main.css\">
</head>

<hgroup>
    <a href=\"http://localhost/MEGA-Website/home.php\"><div class=\"header_logo\"></div></a>
    <nav class=\"mainMenu\">
        <ul>
            <li class=\"first\"><a href=\"http://localhost/MEGA-Website/phpBB3/viewforum.php?f=10\">News</a></li>
            <li class=\"second\"><a href=\"http://localhost/MEGA-Website/phpBB3/viewforum.php?f=3\">DAGD Tutorials</a></li>
            <li class=\"first\"><a href=\"http://localhost/MEGA-Website/phpBB3/index.php\">Forums</a></li>
            <li class=\"second\"><a href=\"http://localhost/MEGA-Website/phpBB3/viewforum.php?f=4\">Arcade</a></li>
            
        </ul>
    </nav>
</hgroup>

";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
