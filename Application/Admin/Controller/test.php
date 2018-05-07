<?php

/**
 * @Author: Administrator
 * @Date:   2018-05-04 15:41:05
 * @Last Modified by:   Administrator
 * @Last Modified time: 2018-05-04 16:57:59
 */
/**
 *显示所有，将数据库表实例化，执行select或者findAll功能
 * 新增数据，获取前台传来的表格参数，执行create创建方法，之后执行save方法进行保存
 * 更新数据，先根据编辑中传来的id 过滤数据，执行select * from 表格 where （id =$id）,保存到list中传到前台显示
 * 之后执行update ，先进行数据创建create ，之后进行save方法保存到数据库
 * 删除数据（物理删除，）根据传来的id直接执行delete（$id）方法
 * 删除数据（逻辑删除），同样是根据传来的id，编辑status的改变的状态值，通常是有两个，一个是启用，一个是失效。之后执行save保存到数据库方法。
 * 也就是更新数据改变要删除的数据状态值.在显示界面中进行过滤，状态值为某个的进行显示...
 */

?>