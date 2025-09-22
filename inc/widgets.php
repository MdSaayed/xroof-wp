<?php

// Newsletter Form
class Xroof_Newsletter_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'xroof_newsletter_widget',
            __( 'Xroof: Newsletter Form', 'xroof' ),
            array( 'description' => __( 'Footer Newsletter form with editable text', 'xroof' ) )
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $desc  = ! empty( $instance['desc'] ) ? $instance['desc'] : '';

        if ( $title ) {
            echo '<h5 class="footer__title mb-8">' . esc_html( $title ) . '</h5>';
        }

        if ( $desc ) {
            echo '<p class="footer__newsletter-text body-text mb-4">' . esc_html( $desc ) . '</p>';
        }

        ?>
        <form class="d-flex mt-10">
            <div class="footer__newsletter-form-group d-flex w-100">
                <input type="email" class="newsletter-form form-control" placeholder="<?php esc_attr_e('Email Address', 'xroof'); ?>">
                <button type="submit" class="newsletter-form-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 11 8">
                        <path d="M9.887 3.655c.19.19.19.499 0 .69L6.783 7.449a.437.437 0 0 1-.69 0 .487.487 0 0 1 0-.69L8.853 4 6.093 1.241a.487.487 0 0 1 0-.69.437.437 0 0 1 .69 0L9.887 3.655ZM9.542 4v.488H.458V3.512h9.084V4Z" fill="#EE212B"></path>
                    </svg>
                </button>
            </div>
        </form>
        <?php

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $desc  = ! empty( $instance['desc'] ) ? $instance['desc'] : '';
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'xroof' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" 
                value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'desc' ) ); ?>"><?php esc_html_e( 'Description:', 'xroof' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'desc' ) ); ?>"
                name="<?php echo esc_attr( $this->get_field_name( 'desc' ) ); ?>"><?php echo esc_textarea( $desc ); ?></textarea>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['desc']  = ( ! empty( $new_instance['desc'] ) ) ? sanitize_textarea_field( $new_instance['desc'] ) : '';
        return $instance;
    }
}

// Recent Post Widget
class Xroof_Recent_Posts_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'xroof_recent_posts',
            __('XRooF Recent Posts', 'xroof'),
            array('description' => __('Displays recent posts with thumbnails and word-limited titles.', 'xroof'))
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        $title = !empty($instance['title']) ? $instance['title'] : __('Recent Post', 'xroof');
        $number = !empty($instance['number']) ? absint($instance['number']) : 3;
        $word_limit = !empty($instance['word_limit']) ? absint($instance['word_limit']) : 0;
        $order = !empty($instance['order']) && in_array(strtoupper($instance['order']), array('ASC', 'DESC')) ? strtoupper($instance['order']) : 'DESC';

        // Widget title
        echo '<div class="sidebar__posts mt-6 mt-xl-8">';
        echo '<h3 class="sidebar__subtitle mb-2 mb-xl-4">' . esc_html($title) . '</h3>';

        // Query recent posts
        $recent_posts = new WP_Query(array(
            'posts_per_page' => $number,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => $order,
        ));

        if ($recent_posts->have_posts()):
            while ($recent_posts->have_posts()):
                $recent_posts->the_post(); ?>
                <div class="sidebar-post d-flex">
                    <div class="sidebar-post__thumb-wrap">
                        <a href="<?php echo esc_url(get_permalink()); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail', array('class' => 'sidebar-post__thumb', 'alt' => esc_attr(get_the_title())));
                            } else {
                                $default_img = apply_filters('xroof_widget_default_thumb', get_template_directory_uri() . '/assets/img/blog/default.png');
                                echo '<img src="' . esc_url($default_img) . '" class="sidebar-post__thumb" alt="' . esc_attr(get_the_title()) . '">';
                            }
                            ?>
                        </a>
                    </div>
                    <div class="sidebar-post__content">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="sidebar-post__link">
                            <h4 class="sidebar-post__title">
                                <?php
                                if ($word_limit > 0) {
                                    echo esc_html(wp_trim_words(get_the_title(), $word_limit, ''));
                                } else {
                                    echo esc_html(get_the_title());
                                }
                                ?>
                            </h4>
                        </a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;

        echo '</div>'; // .sidebar__posts

        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : __('Recent Post', 'xroof');
        $number = !empty($instance['number']) ? absint($instance['number']) : 3;
        $word_limit = !empty($instance['word_limit']) ? absint($instance['word_limit']) : 0;
        $order = !empty($instance['order']) ? $instance['order'] : 'DESC';
        ?>
        <p>
            <label
                for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Widget Title:', 'xroof'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label
                for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php _e('Number of posts to show:', 'xroof'); ?></label>
            <input class="tiny-text" id="<?php echo esc_attr($this->get_field_id('number')); ?>"
                name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="number" step="1" min="1"
                value="<?php echo esc_attr($number); ?>" size="3">
        </p>
        <p>
            <label
                for="<?php echo esc_attr($this->get_field_id('word_limit')); ?>"><?php _e('Title word limit (0 = full title):', 'xroof'); ?></label>
            <input class="tiny-text" id="<?php echo esc_attr($this->get_field_id('word_limit')); ?>"
                name="<?php echo esc_attr($this->get_field_name('word_limit')); ?>" type="number" step="1" min="0"
                value="<?php echo esc_attr($word_limit); ?>" size="3">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('order')); ?>"><?php _e('Order:', 'xroof'); ?></label>
            <select id="<?php echo esc_attr($this->get_field_id('order')); ?>"
                name="<?php echo esc_attr($this->get_field_name('order')); ?>" class="widefat">
                <option value="DESC" <?php selected($order, 'DESC'); ?>><?php _e('Descending', 'xroof'); ?></option>
                <option value="ASC" <?php selected($order, 'ASC'); ?>><?php _e('Ascending', 'xroof'); ?></option>
            </select>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['number'] = (!empty($new_instance['number'])) ? absint($new_instance['number']) : 3;
        $instance['word_limit'] = (!empty($new_instance['word_limit'])) ? absint($new_instance['word_limit']) : 0;
        $instance['order'] = (!empty($new_instance['order']) && in_array(strtoupper($new_instance['order']), array('ASC', 'DESC'))) ? strtoupper($new_instance['order']) : 'DESC';
        return $instance;
    }
}

function xroof_register_widgets()
{
    register_widget('Xroof_Newsletter_Widget');
    register_widget('Xroof_Recent_Posts_Widget');
}
add_action('widgets_init', 'xroof_register_widgets');