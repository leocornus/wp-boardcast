<?php
/**
 * handle the form submit.
 */
if (isset($_POST['wpb_settings_form_submit']) &&
    $_POST['wpb_settings_form_submit'] == 'Y') {

    // save settings submit. save user input to database.
    update_site_option('wpb_message_title', 
                       $_POST['wpb_message_title']);
    update_site_option('wpb_message_url', 
                       $_POST['wpb_message_url']);
    //update_site_option('wpb_message_excerpt', 
    //                   $_POST['wpb_message_excerpt']);
    //update_site_option('wpb_message_img_url', 
    //                   $_POST['wpb_message_img_url']);

    // save settings submit. save user input to database.
    update_site_option('wpb_message1_title', 
                       $_POST['wpb_message1_title']);
    update_site_option('wpb_message1_url', 
                       $_POST['wpb_message1_url']);

    // save settings submit. save user input to database.
    update_site_option('wpb_message2_title', 
                       $_POST['wpb_message2_title']);
    update_site_option('wpb_message2_url', 
                       $_POST['wpb_message2_url']);

    // show the message.
    echo '<div class="updated"><p><strong>Settings Updated</strong></p></div>';
}

/**
 * TODO:
 * Some questions and design ideas:
 *
 *  * what's the metadata for a message? here is a list:
 *    title, url, excerpt, feature image url?
 *  * Where to store those message? site option?
 *  * How to get the messages? This depends on where we store 
 *    those messages.
 */
?>

<div class="wrap">
  <h2>WP Broadcast - General Settings</h2>
  <p>General settings for WP Broadcast.</p>

  <form name="wpb_settings_form" method="post">
    <input type="hidden" name="wpb_settings_form_submit" value="Y"/>
    <table class="form-table"><tbody>
      <tr>
        <th>Message Title: </th>
        <td><input type="text" id="wpb_message_title" 
                   name="wpb_message_title" 
                   value="<?php echo get_site_option('wpb_message_title'); ?>" size="88"/>
        </td>
      </tr>
      <tr>
        <th>Message URL: </th>
        <td><input type="text" id="wpb_message_url" 
                   name="wpb_message_url" 
                   value="<?php echo get_site_option('wpb_message_url'); ?>" size="88"/>
        </td>
      </tr>
      <!-- tr>
        <th>Message Excerpt: </th>
        <td><textarea id="wpb_message_excerpt" rows="2" cols="60"
                   name="wpb_message_excerpt"
            ><?php echo get_site_option('wpb_message_excerpt'); ?></textarea>
        </td>
      </tr -->
      <tr>
        <th>Message One Title: </th>
        <td><input type="text" id="wpb_message1_title" 
                   name="wpb_message1_title" 
                   value="<?php echo get_site_option('wpb_message1_title'); ?>" size="88"/>
        </td>
      </tr>
      <tr>
        <th>Message One URL: </th>
        <td><input type="text" id="wpb_message1_url" 
                   name="wpb_message1_url" 
                   value="<?php echo get_site_option('wpb_message1_url'); ?>" size="88"/>
        </td>
      </tr>
      <tr>
        <th>Message Two Title: </th>
        <td><input type="text" id="wpb_message2_title" 
                   name="wpb_message2_title" 
                   value="<?php echo get_site_option('wpb_message2_title'); ?>" size="88"/>
        </td>
      </tr>
      <tr>
        <th>Message Two URL: </th>
        <td><input type="text" id="wpb_message2_url" 
                   name="wpb_message2_url" 
                   value="<?php echo get_site_option('wpb_message2_url'); ?>" size="88"/>
        </td>
      </tr>
      <tr>
        <th scope="row"><input type="submit" name="saveSetting" class="button-primary" value="Save Settings" />
        </th>
        <td></td>
      </tr>
    </tbody></table>
  </form>
</div>
