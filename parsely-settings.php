<style type="text/css">
    .success {padding:0.8em;margin-bottom:1em;border:2px solid #ddd;background:#e6efc2;color:#264409;border-color:#c6d880;}
    .success a {color:#264409;}
    .success p {margin: 0;}
</style>
<div class="wrap">
    <?php
    if (!empty($errors)) {
        foreach($errors as $error) {
            $this->printErrorMessage($error);
        }
    }
    ?>
    <h2>Parse.ly - Dash Settings</h2>
    <?php
    if ($valuesSaved) {
        $this->printSuccessMessage("Settings saved successfully.");
    }
    ?>
    <p>Thanks again for using Parse.ly's Dash!  Don't forget if you have any questions regarding the plugin you can e-mail us at <a href="mailto:support@parsely.com">support@parsely.com</a></p>
    <form name="parsely" method="post" action="">
        <input type="hidden" name="isParselySettings" value="Y" />
        <h3>Required Settings</h3>
        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="apikey"><?php _e('API Key / Parse.ly Site'); ?></label></th>
                <td>
                    <?php $this->printTextTag("apikey", $options["apikey"], array("size" => "20", "placeholder" => "test.com")); ?>
                    <p class="description">
                        This is the API key that you would've received during setup.  Can't remember yours?
                        You can always get this from within your account.  When <a href="http://dash.parsely.com/" target="_blank">logged into Dash</a>, just head to Settings and then select Setup.
                        Once on this screen, look for the value of data-parsely-site which should be something like test.com.
                    </p>
                    <p class="description">
                        Don't have a Parse.ly account yet? Never fear because you can <a href="http://dash.parsely.com/try" target="_blank">sign up for one here</a>!
                    </p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="tracker_implementation"><?php _e('Tracker Implementation'); ?></label></th>
                <td>
                    <?php $this->printSelectTag("tracker_implementation", $this->IMPLEMENTATION_OPTS, $options["tracker_implementation"]); ?>
                    <p class="description">
                    Parse.ly allows you to choose a few different ways to deploy our tracking code on your site.  In most cases
                    Standard will be fine, but if you'd like to learn more about the other options <a href="http://www.parsely.com/api/tracker.html#javascript-tracker" target="_blank">check out our documentation</a>.
                    </p>
                </td>
        </table>
        <h3>Optional Settings</h3>
        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="content_id_prefix"><?php _e('Content ID Prefix'); ?></label></th>
                <td>
                    <?php $this->printTextTag("content_id_prefix", $options["content_id_prefix"], array("size" => "20", "placeholder" => "WP-")); ?>
                    <p class="description">
                        In the event that your site uses more than one content management system (e.g. WordPress and Drupal), there is the possibility
                        that you'll end up with duplicate content IDs.  For example, WordPress will have a post with ID 1 and so will Drupal which causes
                        a conflict for parsely-page.  Adding a <strong>Content ID Prefix</strong> will ensure the content IDs from WordPress will not
                        conflict with those in another content management system.  We recommend you use something like "WP-" for your prefix but any value
                        will work.
                    </p>
                </td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
        </p>
    </form>
</div>