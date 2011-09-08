<?php
    $userLogin = $this->passedArgs->usr_login;
    $system_time = $this->passedArgs->system_time;
?>

<a href="<?php echo $this->buildLink(array('app'=>'aaa','controller'=>'users','action'=>'edit_settings')); ?>">
    <?php echo _('My settings'); ?> </a> |

<a href="#">
    <?php echo _('Help'); ?> </a> |

<a href="#">
    <?php echo _('About'); ?> </a> |    
    
<a href="main.php?app=init&controller=login&action=logout">
    <?php echo _('Sign out'); ?>
</a> (<?php echo $userLogin; ?>) |

<label title="<?php echo _("Server time"); ?>" id="system_time">
    <?php echo $system_time; ?>
</label>