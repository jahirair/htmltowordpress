
<?php

//custom post texonomy
function services_taxonomy()
{
    register_taxonomy(
        "service_cat", //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        "services", //register post type name/ in which custom post I want to give the texonomy
        [
            "hierarchical" => true,
            "label" => "Service Category", //Display name
            "show_in_rest" => true, // Needed for tax to appear in Gutenberg editor.
            "query_var" => true,
            "rewrite" => [
                "slug" => "service-category", // This controls the base slug that will display before each term
                "with_front" => true, // Don't display the category base before
            ],
        ]
    );
}
add_action("init", "services_taxonomy");

function portfolio_taxonomy()
{
    register_taxonomy(
        "portfolio_cat", //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        "portfolios", //register post type name/ in which custom post I want to give the texonomy
        [
            "hierarchical" => true,
            "label" => "Portfolio Category", //Display name
            "show_in_rest" => true, // Needed for tax to appear in Gutenberg editor.
            "query_var" => true,
            "rewrite" => [
                "slug" => "portfolio-category", // This controls the base slug that will display before each term
                "with_front" => true, // Don't display the category base before
            ],
        ]
    );
}
add_action("init", "portfolio_taxonomy");

?>