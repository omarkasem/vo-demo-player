<?php
class OK_Caps_PostType{

    public function __construct(){
        $this->add_hooks();
    }

    public function add_hooks(){
        add_action( 'init', array($this,'add_post_type') );
    }


    public function add_post_type() {

        /**
         * Post Type: VO Demo Player Playlists.
         */
    
        $labels = [
            "name" => esc_html__( "VO Demo Player Playlists", "twentytwenty" ),
            "singular_name" => esc_html__( "VO Demo Player Playlist", "twentytwenty" ),
            "menu_name" => esc_html__( "VO Demo Player Playlists", "twentytwenty" ),
            "all_items" => esc_html__( "All VO Demo Player Playlists", "twentytwenty" ),
            "add_new" => esc_html__( "Add new", "twentytwenty" ),
            "add_new_item" => esc_html__( "Add new VO Demo Player Playlist", "twentytwenty" ),
            "edit_item" => esc_html__( "Edit VO Demo Player Playlist", "twentytwenty" ),
            "new_item" => esc_html__( "New VO Demo Player Playlist", "twentytwenty" ),
            "view_item" => esc_html__( "View VO Demo Player Playlist", "twentytwenty" ),
            "view_items" => esc_html__( "View VO Demo Player Playlists", "twentytwenty" ),
            "search_items" => esc_html__( "Search VO Demo Player Playlists", "twentytwenty" ),
            "not_found" => esc_html__( "No VO Demo Player Playlists found", "twentytwenty" ),
            "not_found_in_trash" => esc_html__( "No VO Demo Player Playlists found in trash", "twentytwenty" ),
            "parent" => esc_html__( "Parent VO Demo Player Playlist:", "twentytwenty" ),
            "featured_image" => esc_html__( "Featured image for this VO Demo Player Playlist", "twentytwenty" ),
            "set_featured_image" => esc_html__( "Set featured image for this VO Demo Player Playlist", "twentytwenty" ),
            "remove_featured_image" => esc_html__( "Remove featured image for this VO Demo Player Playlist", "twentytwenty" ),
            "use_featured_image" => esc_html__( "Use as featured image for this VO Demo Player Playlist", "twentytwenty" ),
            "archives" => esc_html__( "VO Demo Player Playlist archives", "twentytwenty" ),
            "insert_into_item" => esc_html__( "Insert into VO Demo Player Playlist", "twentytwenty" ),
            "uploaded_to_this_item" => esc_html__( "Upload to this VO Demo Player Playlist", "twentytwenty" ),
            "filter_items_list" => esc_html__( "Filter VO Demo Player Playlists list", "twentytwenty" ),
            "items_list_navigation" => esc_html__( "VO Demo Player Playlists list navigation", "twentytwenty" ),
    "items_list" => esc_html__( "VO Demo Player Playlists list", "twentytwenty" ),
            "attributes" => esc_html__( "VO Demo Player Playlists attributes", "twentytwenty" ),
            "name_admin_bar" => esc_html__( "VO Demo Player Playlist", "twentytwenty" ),
            "item_published" => esc_html__( "VO Demo Player Playlist published", "twentytwenty" ),
            "item_published_privately" => esc_html__( "VO Demo Player Playlist published privately.", "twentytwenty" ),
            "item_reverted_to_draft" => esc_html__( "VO Demo Player Playlist reverted to draft.", "twentytwenty" ),
            "item_scheduled" => esc_html__( "VO Demo Player Playlist scheduled", "twentytwenty" ),
            "item_updated" => esc_html__( "VO Demo Player Playlist updated.", "twentytwenty" ),
            "parent_item_colon" => esc_html__( "Parent VO Demo Player Playlist:", "twentytwenty" ),
        ];
    
        $args = [
            "label" => esc_html__( "VO Demo Player Playlists", "twentytwenty" ),
            "labels" => $labels,
            'menu_icon' => 'dashicons-format-audio',
            "description" => "",
            "public" => false,
            "publicly_queryable" => false,
            "show_ui" => true,
            "show_in_rest" => false,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            "has_archive" => false,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "can_export" => false,
            "rewrite" => false,
            "query_var" => false,
            "supports" => [ "title" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "vdp_playlist", $args );


    }

    
}

new OK_Caps_PostType();