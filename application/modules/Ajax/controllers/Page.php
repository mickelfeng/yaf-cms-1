<?php
/**
 * Admin CP Ajax 单页控制器
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2015-06-06
 */

class Controller_Page extends \Core\Controller\Ajax {

    /**
     * 删除
     */
    public function TrashAction() {
        $id = intval( $this->getRequest()->getPost('id') );
        $Query = new \Service\Page\Query($id);
        $Query->filterTrash();
        $Entity = $Query->getEntity();
        $Entity->trash();

        $this->getView()->display('删除成功');
    }

}
