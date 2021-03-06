<?php
/**
 * The edit view file of thread module of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     thread
 * @version     $Id: edit.html.php 4029 2016-08-26 06:50:41Z liugang $
 * @link        http://www.ranzhico.com
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../../sys/common/view/kindeditor.html.php';?>
<?php js::set('boardID', $board->id);?>
<div class='row'>
  <?php include './side.html.php';?>
  <div class='col-md-10'>
    <div class="panel">
      <div class="panel-heading"><strong><i class="icon-edit"></i> <?php echo $lang->thread->edit . $lang->colon; $common->printForum($board, $thread);?></strong></div>
      <div class="panel-body">
        <form method='post' class='form-horizontal' id='ajaxForm' enctype='multipart/form-data'>
          <div class='form-group'>
            <label class='col-md-1 col-sm-2 control-label'><?php echo $lang->thread->title;?></label>
            <div class='col-md-11 col-sm-10'>
            <?php $readonly = $thread->readonly ? 'checked' : ''; if($canManage):?>
              <div class='input-group'>
                <?php echo html::input('title', $thread->title, "class='form-control'");?>
                <span class='input-group-addon'>
                  <label class='checkbox'>
                      <?php echo "<input type='checkbox' name='readonly' value='1'  $readonly/><span>{$lang->thread->readonly}</span>" ?>
                  </label>
                </span>
              </div>
            <?php else:?>
              <?php echo html::input('title', $thread->title, "class='form-control'");?>
            <?php endif;?>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-md-1 col-sm-2 control-label'><?php echo $lang->thread->content;?></label>
            <div class='col-md-11 col-sm-10'><?php echo html::textarea('content', htmlspecialchars($thread->content), "rows='15' class='form-control'");?></div>
          </div>
          <?php if(commonModel::hasPriv('file', 'upload')):?>
          <div class='form-group'>
            <label class='col-md-1 col-sm-2 control-label'><?php echo $lang->thread->file;?></label>
            <div class='col-md-11 col-sm-10'>
              <?php
              $this->thread->printFiles($thread, $canManage = true);
              echo $this->fetch('file', 'buildForm');
              ?>
            </div>
          </div>
          <?php endif;?>
          <div class='form-group'>
            <label class='col-md-1 col-sm-2'></label>
            <div class='col-md-11 col-sm-10'><?php echo html::submitButton() . html::backButton();;?></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
