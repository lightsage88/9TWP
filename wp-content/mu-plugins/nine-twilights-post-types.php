<?php 
function nine_twilights_post_types() {
    register_post_type('comic', array(
        "supports" => array('title', 'editor', 'excerpt'),
        'rewrite' => array(
            "slug" => "comics"
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Comics',
            'add_new_item' => "Add New Comic-Page",
            'edit_item' => "Edit Comic-Page",
            'all_items' => "All Comic-Pages",
            'singular_name' => "Comic-Page"
        ),
        'menu_icon' => 'dashicons-images-alt'
    ));

    register_post_type('team_mate', array(
        "supports" => array('title', 'editor' ,'excerpt'),
        'rewrite' => array(
            "slug" => 'team'
        ),
        'has_archive' => true,
        'public' => true,
        //TODO: See if making this public makes it only available for admins
        'labels' => array(
            'name' => 'Teammates',
            'add_new_item' => "Add Team Mate",
            'edit_item' => "Edit Team Mate",
            "all_items" => "All Team Mates",
            'singular_name' => 'Team Mate'
        ),
        'menu_icon' => 'dashicons-groups'
    ));
    
    register_post_type('character', array(
        "supports" => array('title', 'editor', 'excerpt'),
        "rewrite" => array(
            "slug" => "characters"
        ),
        "has_archive" => true,
        "public" => true,
        "labels" => array(
            "name" => "Characters",
            "add_new_item" => "Add Character",
            "edit_item" => "Edit Character",
            "all_items" => "All Characters",
            "singular_name" => "Character"
        ),
        'menu_icon' => "dashicons-universal-access-alt"
    ));

    register_post_type('event', array(
        "supports" => array('title', 'editor', 'excerpt'),
        "rewrite" => array(
            "slug" => "events"
        ),
        "has_archive" => true,
        "public" => true,
        "labels" => array(
            "name" => "Events",
            "add_new_item" => "Add Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
            "singular_name" => "Event"
        ),
        'menu_icon' => "dashicons-location-alt"
    ));

}


add_action('init', 'nine_twilights_post_types')
?>