<?php

    function doc_link($type, $sfml_class, $doc_class)
    {
        if (!isset($doc_class))
            $doc_class = $sfml_class;

        $doc_class = str_replace("::", "_1_1", $doc_class);
        echo '<a href="../../documentation/2.1/'. $type . 'sf_1_1' . $doc_class . '.php" title="Documentation de sf::' . $sfml_class . '"><code>sf::' . $sfml_class . '</code></a>';
    }

    function class_link($sfml_class, $doc_class = null)
    {
        doc_link("class", $sfml_class, $doc_class);
    }

    function struct_link($sfml_struct, $doc_struct = null)
    {
        doc_link("struct", $sfml_struct, $doc_struct);
    }

    $breadcrumbs = array(
        'Apprendre' => 'learn-fr.php',
        'Tutoriels 2.1' => 'tutorials/2.1/index-fr.php',
        $title => 'tutorials/2.1/' . $page
    );

    require("../../header-fr.php");
?>
