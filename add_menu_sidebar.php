<?php
add_action( 'admin_menu', 'wpse_91693_register' );
function wpse_91693_register(){
    add_menu_page(
        'Mbak Sekar, Tambah Produk Disini',     // page title
        'Tambah Produk',     // menu title
        'manage_options',   // capability
        'produk-mbak-sekar',     // menu slug
        'wpse_91693_render' // callback function
        );
    }
function wpse_91693_render(){
    global $title;
    print '<div class="wrap">';
    print "<h1>$title</h1>";
    $file = plugin_dir_path( __FILE__ ) . "kdw-new-product.php";
    if ( file_exists( $file ) )
        require $file;
    print "<p class='description'>Included from <code>$file</code></p>";
    print '</div>';
    }
?>
