<?php
$linkedin_link = get_theme_mod('linkedin_link', '');
$instagram_link = get_theme_mod('instagram_link', '');
$facebook_link = get_theme_mod('facebook_link', '');
$github_link = get_theme_mod('github_link', '');
?>

<?php if ($linkedin_link): ?>
    <a href="<?php echo esc_url($linkedin_link); ?>" target="_blank">
        <span class="icon-linkedin" role="img" aria-label="Folge uns auf LinkedIn"></span>
    </a>
<?php endif; ?>
<?php if ($instagram_link): ?>
    <a href="<?php echo esc_url($instagram_link); ?>" target="_blank">
        <span class="icon-instagram" role="img" aria-label="Folge uns auf Instagram"></span>
    </a>
<?php endif; ?>
<?php if ($facebook_link): ?>
    <a href="<?php echo esc_url($facebook_link); ?>" target="_blank">
        <span class="icon-facebook" role="img" aria-label="Folge uns auf Facebook"></span>
    </a>
<?php endif; ?>
<?php if ($github_link): ?>
    <a href="<?php echo esc_url($github_link); ?>" target="_blank">
        <span class="icon-github" role="img" aria-label="Folge uns auf GitHub"></span>
    </a>
<?php endif; ?>
