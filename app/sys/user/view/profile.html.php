<?php
/**
 * The profile view file of user module of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     user 
 * @version     $Id: profile.html.php 4029 2016-08-26 06:50:41Z liugang $
 * @link        http://www.ranzhico.com
 */
?>
<?php include '../../common/view/header.modal.html.php';?>
<div class='panel-body'>
  <table class='table table-info'>
    <tr>
      <th class='text-right w-100px'><?php echo $lang->user->realname;?></th>
      <td class='w-p45'><?php echo $user->realname;?></td>
      <td rowspan='9' class='text-top'>
        <div class='avatar avatar-lg mgb-10'><?php if(!empty($user->avatar)) echo html::image($user->avatar . '?rid=' . rand(), "class='avatar-img'");?></div>
        <form method='post' action="<?php echo inlink('uploadAvatar', "account={$user->account}");?>" class='form-condensed' id='avatarForm' enctype='multipart/form-data' class='hide'>
        <?php echo html::file('files', "class='form-control file-control'");?>
        <?php echo html::a('javascript:;', $lang->user->uploadAvatar, "class='btn btn-avatar submit'");?>
        </form>
      </td>
    </tr>
    <tr>
      <th><?php echo $lang->user->email;?></th>
      <td><?php echo $user->email;?></td>
    </tr>
    <tr>
      <th><?php echo $lang->user->address;?></th>
      <td><?php echo $user->address;?></td>
    </tr>
    <tr>
      <th><?php echo $lang->user->zipcode;?></th>
      <td><?php echo $user->zipcode;?></td>
    </tr>
    <tr>
      <th><?php echo $lang->user->mobile;?></th>
      <td><?php echo $user->mobile;?></td>
    </tr>
    <tr>
      <th><?php echo $lang->user->phone;?></th>
      <td><?php echo $user->phone;?></td>
    </tr>
    <tr>
      <th><?php echo $lang->user->qq;?></th>
      <td><?php echo $user->qq;?></td>
    </tr>
    <tr>
      <th><?php echo $lang->user->gtalk;?></th>
      <td><?php echo $user->gtalk;?></td>
    </tr>
    <tr>
      <th></th>
      <td><?php echo html::a(inlink('edit'), "<i class='icon-pencil'></i> " . $lang->user->editProfile, "class='btn btn-primary loadInModal'");?></td>
    </tr>
  </table>
</div>
<?php include '../../common/view/footer.modal.html.php';?>
