<?php

class Walker_Main_Nav extends Walker_Nav_Menu {

        /**
         * @see Walker::start_lvl()
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int $depth Depth of page. Used for padding.
         */
        public function start_lvl( &$output, $depth = 0, $args = array() ) {
                $indent = str_repeat( "\t", $depth );
                $output .= "\n$indent";
                $output .= "<ul>\n$indent\t<li class=\"empty-menu-element\"><hr></li>";
        }

        function end_lvl( &$output, $depth = 0, $args = array() ) {
            $indent = str_repeat("\t", $depth);
            $output .= "$indent</ul>\n";
        }

        /**
         * @see Walker::start_el()
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         * @param int $current_page Menu item ID.
         * @param object $args
         */
        public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
                $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

                $class_names = $value = '';

                $classes = empty( $item->classes ) ? array() : (array) $item->classes;

                $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

                $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

                $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

                $output .= $indent . '<li' . $id . $value . $class_names .'>';

                $atts = array();
                $atts['title']  = ! empty( $item->title )        ? $item->title        : '';
                $atts['target'] = ! empty( $item->target )        ? $item->target        : '';
                $atts['rel']    = ! empty( $item->xfn )                ? $item->xfn        : '';
                $atts['href'] = ! empty( $item->url ) ? $item->url : '';

                $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

                $attributes = '';
                foreach ( $atts as $attr => $value ) {
                        if ( ! empty( $value ) ) {
                                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                                $attributes .= ' ' . $attr . '="' . $value . '"';
                        }
                }

                $item_output = $args->before;

                $item_output .= '<a'. $attributes .'>';
                $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
                $item_output .= '</a>';
                $item_output .= $args->after;

                $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }

        public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
            if ( ! $element )
                return;

            $id_field = $this->db_fields['id'];

            // Display this element.
            if ( is_object( $args[0] ) )
               $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

            parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
        }

        public static function fallback( $args ) {
                if ( current_user_can( 'manage_options' ) ) {

                        extract( $args );

                        $fb_output = null;

                        if ( $container ) {
                                $fb_output = '<' . $container;

                                if ( $container_id )
                                        $fb_output .= ' id="' . $container_id . '"';

                                if ( $container_class )
                                        $fb_output .= ' class="' . $container_class . '"';

                                $fb_output .= '>';
                        }

                        $fb_output .= '<ul';

                        if ( $menu_id )
                                $fb_output .= ' id="' . $menu_id . '"';

                        if ( $menu_class )
                                $fb_output .= ' class="' . $menu_class . '"';

                        $fb_output .= '>';
                        $fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
                        $fb_output .= '</ul>';

                        if ( $container )
                                $fb_output .= '</' . $container . '>';

                        echo $fb_output;
                }
        }
}