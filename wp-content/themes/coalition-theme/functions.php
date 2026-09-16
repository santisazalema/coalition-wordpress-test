// Custom Theme Settings Menu
function coalition_theme_settings_init() {
    add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'coalition-theme-settings', 'coalition_settings_page');
}
add_action('admin_menu', 'coalition_theme_settings_init');

function coalition_settings_page() {
    ?>
    <div class="wrap">
        <h1>Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('coalition_options_group');
            do_settings_sections('coalition-theme-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}