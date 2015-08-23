<?php echo '<?php'; ?>

// $Id: controller.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * <?php echo $class_name; ?> 控制器
 */
class <?php echo $class_name; ?> extends Controller_Abstract
{

	function actionIndex()
	{
        // 为 $this->_view 指定的值将会传递数据到视图中
		# $this->_view['text'] = 'Hello!';
	}
}


