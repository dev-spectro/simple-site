<?php
    define('IN_SYS', true);
    require_once ("core.php");
    $title = $title . ' - ' . I18N('login');
?>
<?php include ("include/header.php"); ?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo I18N('please_login'); ?></h3>
        </div>
        <div class="panel-body">
            <form class="form-group form-horizontal form-account" role="form" action="//cpanel.<?=$domain?>/login.php" method="post" name="login">
                <div class="form-group">
                    <input type="text" name="uname" class="form-control" placeholder="<?php echo I18N('input_username'); ?>" required autofocus autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="passwd" class="form-control" placeholder="<?php echo I18N('input_password'); ?>" required autocomplete="off">
                </div>
                <div class="form-group">
                    <select class="form-control" name="language" id="inputLanguage">
                        <option disabled><?php echo I18N('choose_from_below'); ?></option>
                        <?php foreach ($languages as $key => $value) {
                            $selected = $key == $current_lang ? 'selected="selected"' : '';
                            echo '<option value="' .$languages[$key][1]. '" ' .$selected . '>' .$languages[$key][0]. '</option>';
                        }?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"><span><?php echo I18N('remember_me'); ?></span>
                            <a href="//cpanel.<?=$domain?>/lostpassword.php"><?php echo I18N('lost_password'); ?></a>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block"><?php echo I18N('login'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include ("include/footer.php"); ?>