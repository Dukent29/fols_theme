<?php
$page_id = get_option('page_on_front'); // ID de la page Accueil

$title = get_field('pourquoi_title', 13);
$subtitle = get_field('pourquoi_subtitle', 13);
$image = get_field('pourquoi_image', 13);
?>

<section class="pourquoi-fols">
    <div class="container">
        <div class="pourquoi-wrapper">
            <div class="p-title">
                <h2 class="title"><?php echo esc_html($title); ?></h2>
                <p class="prq-subtitle"><?php echo esc_html($subtitle); ?></p>

                <ul class="reasons">
                    <?php for ($i = 1; $i <= 4; $i++) :
                        $reason_title = get_field("raison_{$i}_titre", $page_id);
                        $reason_desc = get_field("raison_{$i}_description", $page_id);
                        if ($reason_title && $reason_desc): ?>
                            <li>
                                <h3><i class="bi bi-shield-lock-fill"> </i><?php echo esc_html($reason_title); ?></h3>
                                <p><?php echo esc_html($reason_desc); ?></p>
                            </li>
                        <?php endif;
                    endfor; ?>
                </ul>

            </div>

            <?php if ($image): ?>
                <div class="pourquoi-img">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
