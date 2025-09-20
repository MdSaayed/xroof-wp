<?php

class Xroof_Newsletter_Widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'xroof_newsletter_widget',
            __('Xroof: Newsletter Form', 'xroof'),
            ['description' => __('Footer Newsletter form with editable text', 'xroof')]
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        $title = !empty($instance['title']) ? $instance['title'] : '';
        $desc = !empty($instance['desc']) ? $instance['desc'] : '';

        if ($title) {
            echo '<h5 class="footer__title mb-8">' . esc_html($title) . '</h5>';
        }
        if ($desc) {
            echo '<p class="footer__newsletter-text body-text mb-4">' . esc_html($desc) . '</p>';
        }

        ?>
        <form class="d-flex mt-10">
            <div class="footer__newsletter-form-group d-flex w-100">
                <input type="email" class="newsletter-form form-control" placeholder="Email Address">
                <button type="submit" class="newsletter-form-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 11 8">
                        <path
                            d="M9.887 3.655c.19.19.19.499 0 .69L6.783 7.449a.437.437 0 0 1-.69 0 .487.487 0 0 1 0-.69L8.853 4 6.093 1.241a.487.487 0 0 1 0-.69.437.437 0 0 1 .69 0L9.887 3.655ZM9.542 4v.488H.458V3.512h9.084V4Z"
                            fill="#EE212B"></path>
                    </svg>
                </button>
            </div>
        </form>
        <?php

        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $desc = !empty($instance['desc']) ? $instance['desc'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('desc'); ?>">Description:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('desc'); ?>"
                name="<?php echo $this->get_field_name('desc'); ?>"><?php echo esc_textarea($desc); ?></textarea>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['desc'] = (!empty($new_instance['desc'])) ? strip_tags($new_instance['desc']) : '';
        return $instance;
    }
}

function xroof_register_widgets()
{
    register_widget('Xroof_Newsletter_Widget');
}
add_action('widgets_init', 'xroof_register_widgets');