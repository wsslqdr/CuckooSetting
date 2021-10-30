<?php
/**
 * .______    __    __       ___        ______
 * |   _  \  |  |  |  |     /   \      /  __  \
 * |  |_)  | |  |__|  |    /  ^  \    |  |  |  |
 * |   _  <  |   __   |   /  /_\  \   |  |  |  |
 * |  |_)  | |  |  |  |  /  _____  \  |  `--'  |
 * |______/  |__|  |__| /__/     \__\  \______/
 *
 * Footer
 *
 * @author Bhao
 * @link https://dwd.moe/
 * @version 2.0.0
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
</div>
<div onclick="tocOverlay()" class="toc-overlay"></div>
<button class="mdui-fab mdui-fab-fixed mdui-ripple top mdui-color-theme-accent"><i class="mdui-icon material-icons">arrow_upward</i></button>
<footer>
  <?php Footer() ?>
</footer>
<script src="<?php staticFiles('js/mdui.min.js') ?>"></script>
<script src="<?php staticFiles('js/highlight.min.js') ?>"></script>
<script src="<?php staticFiles('js/lazyload.min.js') ?>"></script>
<script src="<?php staticFiles('js/fancybox.umd.min.js') ?>"></script>
<script src="<?php staticFiles('js/qrcode.min.js') ?>"></script>
<script src="<?php staticFiles('js/infinite-scroll.pkgd.min.js') ?>"></script>
<script src="<?php staticFiles('js/pjax.min.js') ?>"></script>
<script src="<?php staticFiles('js/cuckoo.min.js') ?>"></script>
<script src="<?php staticFiles('js/comments.min.js') ?>"></script>
<script src="<?php staticFiles('ranran/TweenLite.js') ?>"></script>
<script src="<?php staticFiles('ranran/live2dcubismcore.min.js') ?>"></script>
<script src="<?php staticFiles('ranran/pixi.min.js') ?>"></script>
<script src="<?php staticFiles('ranran/cubism4.min.js') ?>"></script>
<script src="<?php staticFiles('ranran/pio.js') ?>"></script>
<script src="<?php staticFiles('ranran/pio_sdk4.js') ?>"></script>
<script src="<?php staticFiles('ranran/load.js') ?>"></script>

<script>hljs.initHighlightingOnLoad();</script>
<?php otherJs();$this->footer();otherPjax(); ?>
</body>
</html>