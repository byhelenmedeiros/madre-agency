<?php
/**
 * Madre Agency functions and definitions
 *
 * @package Madre_Agency
 */


// Enfileirar Scripts e Estilos
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/setup.php';

function criar_tipo_post_portfolio() {
    $labels = array(
        'name'                  => _x('Portfólios', 'Nome geral do tipo de post', 'textdomain'),
        'singular_name'         => _x('Portfólio', 'Nome singular do tipo de post', 'textdomain'),
        'menu_name'             => _x('Portfólios', 'Texto do Menu Admin', 'textdomain'),
        'name_admin_bar'        => _x('Portfólio', 'Adicionar Novo na Barra de Ferramentas', 'textdomain'),
        'add_new'               => __('Adicionar Novo', 'textdomain'),
        'add_new_item'          => __('Adicionar Novo Portfólio', 'textdomain'),
        'new_item'              => __('Novo Portfólio', 'textdomain'),
        'edit_item'             => __('Editar Portfólio', 'textdomain'),
        'view_item'             => __('Ver Portfólio', 'textdomain'),
        'all_items'             => __('Todos os Portfólios', 'textdomain'),
        'search_items'          => __('Procurar Portfólios', 'textdomain'),
        'parent_item_colon'     => __('Portfólios Pai:', 'textdomain'),
        'not_found'             => __('Nenhum portfólio encontrado.', 'textdomain'),
        'not_found_in_trash'    => __('Nenhum portfólio encontrado no Lixo.', 'textdomain'),
        'featured_image'        => _x('Imagem de Capa do Portfólio', 'Substitui a frase “Imagem Destacada” para este tipo de post. Adicionado em 4.3', 'textdomain'),
        'set_featured_image'    => _x('Definir imagem de capa', 'Substitui a frase “Definir imagem destacada” para este tipo de post. Adicionado em 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remover imagem de capa', 'Substitui a frase “Remover imagem destacada” para este tipo de post. Adicionado em 4.3', 'textdomain'),
        'use_featured_image'    => _x('Usar como imagem de capa', 'Substitui a frase “Usar como imagem destacada” para este tipo de post. Adicionado em 4.3', 'textdomain'),
        'archives'              => _x('Arquivos do Portfólio', 'O rótulo do arquivo do tipo de post usado em menus de navegação. Padrão “Arquivos de Posts”. Adicionado em 4.4', 'textdomain'),
        'insert_into_item'      => _x('Inserir no portfólio', 'Substitui a frase “Inserir no post”/“Inserir na página” (usado ao inserir mídia em um post). Adicionado em 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Enviado para este portfólio', 'Substitui a frase “Enviado para este post”/“Enviado para esta página” (usado ao visualizar mídia anexada a um post). Adicionado em 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filtrar lista de portfólios', 'Texto do leitor de tela para o cabeçalho dos links de filtro na tela de listagem do tipo de post. Padrão “Filtrar lista de posts”/“Filtrar lista de páginas”. Adicionado em 4.4', 'textdomain'),
        'items_list_navigation' => _x('Navegação da lista de portfólios', 'Texto do leitor de tela para o cabeçalho da paginação na tela de listagem do tipo de post. Padrão “Navegação da lista de posts”/“Navegação da lista de páginas”. Adicionado em 4.4', 'textdomain'),
        'items_list'            => _x('Lista de portfólios', 'Texto do leitor de tela para o cabeçalho da lista de itens na tela de listagem do tipo de post. Padrão “Lista de posts”/“Lista de páginas”. Adicionado em 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail'),       
        'menu_icon'            => 'dashicons-portfolio', 
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'criar_tipo_post_portfolio');


// Função para adicionar meta boxes
function add_portfolio_meta_boxes() {
    add_meta_box(
        'portfolio_details',
        'Detalhes do Portefólio',
        'render_portfolio_details_meta_box',
        'portfolio',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_portfolio_meta_boxes');

function render_portfolio_details_meta_box($post) {
    // Adicionar um nonce field para verificação
    wp_nonce_field(basename(__FILE__), 'portfolio_details_nonce');
    
    // Obter os valores atuais dos campos
    $date = get_post_meta($post->ID, 'portfolio_date', true);
    $services = get_post_meta($post->ID, 'portfolio_services', true);
    $client = get_post_meta($post->ID, 'portfolio_client', true);
    $location = get_post_meta($post->ID, 'portfolio_location', true);
    $social = get_post_meta($post->ID, 'portfolio_social', true);
    $challenges = get_post_meta($post->ID, 'portfolio_challenges', true);
    
    // Redes sociais disponíveis
    $available_socials = array('Twitter', 'Facebook', 'Pinterest', 'Instagram', 'LinkedIn');

    // Adicionar estilos para a meta box
    echo '<style>
        .portfolio-meta-box {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .portfolio-meta-box .meta-box-field {
            flex: 1 1 100%;
        }
        .portfolio-meta-box .meta-box-field.half-width {
            flex: 1 1 calc(50% - 10px);
        }
        .portfolio-meta-box label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .portfolio-meta-box input,
        .portfolio-meta-box textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .portfolio-meta-box .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .portfolio-meta-box .checkbox-group label {
            display: flex;
            align-items: center;
        }
        .portfolio-meta-box .checkbox-group input[type="checkbox"] {
            margin-right: 5px;
        }
    </style>';

    // Exibir os campos da meta box
    echo '<div class="portfolio-meta-box">';
    echo '<div class="meta-box-field half-width">';
    echo '<label for="portfolio_date">Data:</label>';
    echo '<input type="date" id="portfolio_date" name="portfolio_date" value="' . esc_attr($date) . '" />';
    echo '</div>';
    
    echo '<div class="meta-box-field half-width">';
    echo '<label for="portfolio_services">Serviços:</label>';
    echo '<input type="text" id="portfolio_services" name="portfolio_services" placeholder="Ex: Web Design, SEO, Marketing" value="' . esc_attr($services) . '" />';
    echo '</div>';
    
    echo '<div class="meta-box-field half-width">';
    echo '<label for="portfolio_client">Cliente:</label>';
    echo '<input type="text" id="portfolio_client" name="portfolio_client" value="' . esc_attr($client) . '" />';
    echo '</div>';
    
    echo '<div class="meta-box-field half-width">';
    echo '<label for="portfolio_location">Localização:</label>';
    echo '<input type="text" id="portfolio_location" name="portfolio_location" value="' . esc_attr($location) . '" />';
    echo '</div>';
    
    echo '<div class="meta-box-field">';
    echo '<label>Redes Sociais:</label>';
    echo '<div class="checkbox-group">';
    foreach ($available_socials as $social_network) {
        $checked = is_array($social) && in_array($social_network, $social) ? 'checked' : '';
        echo '<label><input type="checkbox" name="portfolio_social[]" value="' . esc_attr($social_network) . '" ' . $checked . '> ' . esc_html($social_network) . '</label>';
    }
    echo '</div>';
    echo '</div>';
    
    echo '<div class="meta-box-field">';
    echo '<label for="portfolio_challenges">Desafios do Projeto:</label>';
    echo '<textarea id="portfolio_challenges" name="portfolio_challenges">' . esc_textarea($challenges) . '</textarea>';
    echo '</div>';
    echo '</div>';
}


function save_portfolio_details_meta_box($post_id) {
    // Verificar nonce
    if (!isset($_POST['portfolio_details_nonce']) || !wp_verify_nonce($_POST['portfolio_details_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    // Verificar se é uma revisão para evitar duplicar o salvamento
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // Verificar permissões do usuário
    if (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // Salvar os campos
    $fields = ['portfolio_date', 'portfolio_services', 'portfolio_client', 'portfolio_location', 'portfolio_challenges'];
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }

    // Salvar redes sociais como array
    if (isset($_POST['portfolio_social'])) {
        $social = array_map('sanitize_text_field', $_POST['portfolio_social']);
        update_post_meta($post_id, 'portfolio_social', $social);
    } else {
        delete_post_meta($post_id, 'portfolio_social');
    }
}

add_action('save_post', 'save_portfolio_details_meta_box');


function my_custom_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <div <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <div class="comment-one__single">
            <div class="comment-one__image">
                <?php echo get_avatar($comment, 60); ?>
            </div>
            <div class="comment-one__content">
                <h3><?php printf(__('%s'), get_comment_author_link()); ?></h3>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php _e('Your comment is awaiting moderation.'); ?></em>
                    <br />
                <?php endif; ?>
                <p><?php comment_text(); ?></p>
                <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>" class="thm-btn comment-one__btn">Reply</a>
            </div>
        </div>
    </div>
    <?php
}

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : 'dropdown-menu';
        $output .= "\n$indent<ul class=\"$submenu\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'menu-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-submenu';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
function custom_post_type_servicos() {
    $labels = array(
        'name'                  => _x('Serviços', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Serviço', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Serviços', 'text_domain'),
        'name_admin_bar'        => __('Serviço', 'text_domain'),
        'add_new_item'          => __('Adicionar Novo Serviço', 'text_domain'),
        'new_item'              => __('Novo Serviço', 'text_domain'),
        'edit_item'             => __('Editar Serviço', 'text_domain'),
        'view_item'             => __('Ver Serviço', 'text_domain'),
        'all_items'             => __('Todos os Serviços', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Serviço', 'text_domain'),
        'description'           => __('Serviços da empresa', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-hammer',
        'rewrite'               => array('slug' => 'services', 'with_front' => false),
    );
    register_post_type('servicos', $args);

    register_taxonomy(
        'servicos_category',
        'servicos',
        array(
            'label' => __('Categorias de Serviços'),
            'rewrite' => array('slug' => 'services', 'with_front' => false),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'custom_post_type_servicos', 0);



function add_servicos_metaboxes() {
    add_meta_box(
        'servicos_metabox',
        'Lista de Serviços',
        'render_servicos_metabox',
        'servicos',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_servicos_metaboxes' );

function render_servicos_metabox( $post ) {
    wp_nonce_field( 'save_servicos_metabox', 'servicos_metabox_nonce' );
    $services = get_post_meta( $post->ID, '_services', true );

    echo '<div id="services-wrapper">';
    if ( !empty( $services ) ) {
        foreach ( $services as $index => $service ) {
            echo '<div class="service-item">';
            echo '<label>Nome do Serviço:</label>';
            echo '<input type="text" name="services[' . $index . '][name]" value="' . esc_attr( $service['name'] ) . '">';
            echo '<label>Link do Serviço:</label>';
            echo '<input type="text" name="services[' . $index . '][link]" value="' . esc_attr( $service['link'] ) . '">';
            echo '<button type="button" class="remove-service button button-secondary">Remover Serviço</button>';
            echo '</div>';
        }
    }
    echo '</div>';
    echo '<button type="button" id="add-service" class="button button-primary">Adicionar Novo Serviço</button>';
    ?>
    <script>
        jQuery(document).ready(function($) {
            var serviceIndex = <?php echo !empty( $services ) ? count( $services ) : 0; ?>;
            $('#add-service').click(function() {
                var serviceItem = '<div class="service-item">';
                serviceItem += '<label>Nome do Serviço:</label>';
                serviceItem += '<input type="text" name="services[' + serviceIndex + '][name]">';
                serviceItem += '<label>Link do Serviço:</label>';
                serviceItem += '<input type="text" name="services[' + serviceIndex + '][link]">';
                serviceItem += '<button type="button" class="remove-service button button-secondary">Remover Serviço</button>';
                serviceItem += '</div>';
                $('#services-wrapper').append(serviceItem);
                serviceIndex++;
            });

            $(document).on('click', '.remove-service', function() {
                $(this).closest('.service-item').remove();
            });
        });
    </script>
    <?php
}

function save_servicos_metabox( $post_id ) {
    if ( ! isset( $_POST['servicos_metabox_nonce'] ) ) {
        return $post_id;
    }
    $nonce = $_POST['servicos_metabox_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'save_servicos_metabox' ) ) {
        return $post_id;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }
    if ( isset( $_POST['post_type'] ) && 'servicos' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }
    }
    $services = isset( $_POST['services'] ) ? $_POST['services'] : array();
    update_post_meta( $post_id, '_services', $services );
}
add_action( 'save_post', 'save_servicos_metabox' );

function add_servicos_submenu_page() {
    add_submenu_page(
        'edit.php?post_type=servicos',
        'Listagem de Serviços',
        'Listagem de Serviços',
        'manage_options',
        'os-servicos',
        'render_servicos_submenu_page'
    );
}
add_action( 'admin_menu', 'add_servicos_submenu_page' );

function render_servicos_submenu_page() {
    $args = array(
        'post_type' => 'servicos',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    );
    $servicos_query = new WP_Query( $args );

    echo '<div class="wrap">';
    echo '<h1>Listagem de Serviços</h1>';
    
    if ( $servicos_query->have_posts() ) {
        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead><tr><th>Serviço</th><th>Categoria</th><th>Detalhes</th></tr></thead>';
        echo '<tbody>';

        while ( $servicos_query->have_posts() ) {
            $servicos_query->the_post();
            $services = get_post_meta( get_the_ID(), '_services', true );
            $categories = get_the_terms( get_the_ID(), 'servicos_category' );

            echo '<tr>';
            echo '<td>' . get_the_title() . '</td>';
            echo '<td>';
            if ( !empty( $categories ) && !is_wp_error( $categories ) ) {
                $category_names = wp_list_pluck( $categories, 'name' );
                echo implode( ', ', $category_names );
            } else {
                echo 'Sem categoria';
            }
            echo '</td>';
            echo '<td>';
            if ( !empty( $services ) ) {
                echo '<ul>';
                foreach ( $services as $service ) {
                    echo '<li><strong>' . esc_html( $service['name'] ) . ':</strong> <a href="' . esc_url( $service['link'] ) . '" target="_blank">' . esc_html( $service['link'] ) . '</a></li>';
                }
                echo '</ul>';
            } else {
                echo 'Nenhum serviço adicionado.';
            }
            echo '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';

        wp_reset_postdata();
    } else {
        echo '<p>Nenhum serviço encontrado.</p>';
    }

    echo '</div>';
}