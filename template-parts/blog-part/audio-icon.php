<?php
    $post_format_url = function_exists('get_field') ? get_field('post_format_url') : null;
?>

<?php if (!empty($post_format_url)): ?>
    <div class="blog-card__audio-icon">
        <button class="play-btn border-0" aria-label="Play/Pause">
            <svg class="icon-play" width="50" height="50" viewBox="0 0 50 50" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M15 20V30H20L28 36V14L20 20H15Z" fill="black" />
                <path d="M32 20C33.5 21.5 33.5 28.5 32 30" stroke="black" stroke-width="2" stroke-linecap="round" />
            </svg>

            <svg class="icon-pause" width="50" height="50" viewBox="0 0 50 50" fill="none"
                xmlns="http://www.w3.org/2000/svg" style="display:none;">
                <rect x="15" y="14" width="6" height="22" fill="black" />
                <rect x="24" y="14" width="6" height="22" fill="black" />
            </svg>
        </button>
        <audio src="<?php echo esc_url($post_format_url); ?>"></audio>
    </div>
<?php endif; ?>