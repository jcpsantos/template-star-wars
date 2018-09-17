<?php
    /**
     * Funções do Tema
     * 
     * @package Star Wars
     */

    /*CSS e JS*/
    function jc_enqueue_assets(){
        /*Estilo CSS Principal*/
        wp_enqueue_style('main-css', get_stylesheet_uri());
        wp_enqueue_style('style-css',get_template_directory_uri().'/css/style.css' );

        /*Scripts*/
        wp_enqueue_script('myscript-js', get_template_directory_uri().'./js/myscript.js');
        wp_enqueue_script('EasePack-js', get_template_directory_uri().'./lib/js/EasePack.min.js');
        wp_enqueue_script('TweenLite-js',get_template_directory_uri().'./lib/js/TweenLite.min.js' );
    }
    add_action('wp_enqueue_scripts', 'jc_enqueue_assets');

    //Sidebar Widget
    function jc_sidebar_widget_area() {
        register_sidebar( array(
          'name'          => 'Sidebar Widget Area',
          'id'            => 'jc-sidebar-widgets',
          'before_widget' => '<div class="well">',
          'after_widget'  => '</div>',
          'before_title'  => '<h4>',
          'after_title'   => '</h4>',
          ));
      }
      add_action( 'widgets_init' , 'jc_sidebar_widget_area' );
      
      //Lista Widger
      class jc_Category_List_Widget extends WP_Widget {
        
        function __construct() {
          $widget_options = array(
            'classname' => 'jc_category_list_widget',
            'description' => 'Adicione uma lista bem formatada de categorias.'
          );
          parent::__construct( 
            'jc_category_list_widget', 
            'Star Wars Theme Category List', 
            $widget_options 
          );
        }
        // create the widget output
        function widget( $args, $instance ) {
          
          $title = apply_filters( 'widget_title', $instance[ 'title' ] );
          $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC'
            ) );
          $cat_count = 0;
          $cat_col_one = [];
          $cat_col_two = [];
          foreach( $categories as $category ) {
            $cat_count ++;
            $category_link = sprintf( 
                '<li class=""><a href="%1$s" alt="%2$s">%3$s</a></li>',
                esc_url( get_category_link( $category->term_id ) ),
                esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                esc_html( $category->name )
            );
            if ($cat_count % 2 != 0 ) {
              $cat_col_one[] = $category_link;
            } else {
              $cat_col_two[] = $category_link;
            }
          }
          echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title'];
          ?><div class="row">
            <div class="col l6"><?php
              foreach( $cat_col_one as $cat_one ) {
                echo $cat_one;
              } ?>
            </div>
      
            <div class="col l6"><?php 
              foreach( $cat_col_two as $cat_two ) {
                echo $cat_two;
              } ?>
            </div>
      
          </div><?php
          echo $args['after_widget'];
        }
        function form( $instance ) { 
          $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
          <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Titulo:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
          </p>
          <p>Este widget exibe todas as suas categorias de postagem.</p>
        <?php }
        
        function update( $new_instance, $old_instance ) { 
          $instance = $old_instance;
          $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
          return $instance;
        }
      }
    
      function jc_register_widgets() { 
        register_widget( 'jc_Category_List_Widget' );
      }
      add_action( 'widgets_init', 'jc_register_widgets' );
      
      
?>