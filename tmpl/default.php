<?php
/**
 * @copyright	Copyright (c) 2014 Webitall ApS (www.webitall.dk). All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

?>
<?php if($signup == 'success'): ?>
    <div class="alert alert-success"><?php echo JText::_('MOD_WEBITALL_MAILCHIMP_SUCCESS'); ?></div>
<?php endif; ?>

<form method="post" action="<?php echo $params->get('subscribe_url'); ?>" class="form-validate">
    <input type="hidden" name="u" value="<?php echo $params->get('user_id'); ?>">
    <input type="hidden" name="id" value="<?php echo $params->get('list_id'); ?>">

    <div class="form-group">
        <div class="controls">
            <input type="text" name="MERGE1" value="" placeholder="<?php echo JText::_('MOD_WEBITALL_MAILCHIMP_FIRSTNAME'); ?>" class="form-control webitall_contact_inputfield" />
        </div>
    </div>

    <div class="form-group">
        <div class="controls">
            <input type="text" name="MERGE2" value="" placeholder="<?php echo JText::_('MOD_WEBITALL_MAILCHIMP_LASTNAME'); ?>" class="form-control webitall_contact_inputfield" />
        </div>
    </div>

    <div class="form-group">
        <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" value="" id="email" placeholder="<?php echo JText::_('MOD_WEBITALL_MAILCHIMP_EMAIL'); ?>" class="form-control webitall_contact_inputfield required">
    </div>

    <!-- real people should not fill this in and expect good things -->
    <div class="hidden"><input type="text" name="b_90dddf454691f898c68dba375_33f2764d77" tabindex="-1" value=""></div>

    <div class="form-group">
        <button type="submit" class="btn btn-block btn-default"><?php echo JText::_('MOD_WEBITALL_MAILCHIMP_SIGNUP'); ?></button>
    </div>
</form>