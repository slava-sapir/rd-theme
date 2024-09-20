<?php

namespace RdTheme;

class Init
{
    const TEXT_DOMAIN = 'rd-theme';

    public string $public_path;

    public function __construct()
    {
        $this->public_path = get_template_directory_uri() . '/public';

        $this->autoloader();
        $this->actions();
        $this->filters();
    }

    public function autoloader(): void
    {
        require get_template_directory() . '/vendor/autoload.php';
    }

    public function actions(): void
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
        add_action('enqueue_block_editor_assets', [$this, 'block_enqueue'], 10, 0);
        add_action('admin_menu', [$this, 'disable_comments_admin_menu']);
        add_action('admin_init', [$this, 'disable_comments_admin_menu_redirect']);
    }

    public function filters(): void
    {
        add_filter('comments_open', [$this, 'disable_comments_status'], 20, 2);
        add_filter('pings_open', [$this, 'disable_comments_status'], 20, 2);
    }

    public function enqueue(): void
    {
        wp_enqueue_style('theme-font', 'https://use.typekit.net/jnb7uqw.css');
        wp_enqueue_style('theme-css', $this->public_path . '/css/theme.css');
        wp_enqueue_script('theme-js', $this->public_path . '/js/theme.js', [], false, true);
    }

    public function block_enqueue(): void
    {
        wp_enqueue_style('block_editor_css', $this->public_path . '/css/theme.min.css');
    }

    public function disable_comments_status(): bool
    {
        return false;
    }

    public function disable_comments_admin_menu(): void
    {
        remove_menu_page('edit-comments.php');
    }

    public function disable_comments_admin_menu_redirect(): void
    {
        global $pagenow;

        if ($pagenow === 'edit-comments.php') {
            wp_redirect(admin_url());
            exit;
        }
    }
}

new Init();
new ThemeSetup();
new ImageSize(
    name: 'circled-image',
    width: 670,
    height: 335,
    crop: true
);

$faq_cpt = new PostType();
$faq_cpt->has_archive = false;
$faq_cpt->labels(
    name: 'FAQs',
    singular: 'FAQ',
    menu_name: 'FAQs'
)->create(
    post_type: 'faq',
    slug: 'faqs'
);

$faq_cpt_category = new Taxonomy();
$faq_cpt_category->labels(
    name: 'FAQ Categories',
    singular_name: 'FAQ Category',
    menu_name: 'FAQ Categories'
)->add_post_type(
    post_type:'faq'
)->create(
    taxonomy: 'faq-category',
    slug: 'faq-category'
);

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
    acf_add_options_sub_page('Header');
}