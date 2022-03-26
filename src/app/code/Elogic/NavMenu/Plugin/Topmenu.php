<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Created By : Rohan Hapani
 */
namespace Elogic\NavMenu\Plugin;

use Magento\Framework\Data\Tree\NodeFactory;
use Magento\Framework\UrlInterface;

class Topmenu {
    /**
     * @var NodeFactory
     */
    protected $nodeFactory;

    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    /**
     * @param NodeFactory  $nodeFactory
     * @param UrlInterface $urlBuilder
     */
    public function __construct(
        NodeFactory $nodeFactory,
        UrlInterface $urlBuilder
    ) {
        $this->nodeFactory = $nodeFactory;
        $this->urlBuilder = $urlBuilder;
    }

    public function beforeGetHtml(
        \Magento\Theme\Block\Html\Topmenu $subject,
                                          $outermostClass = '',
                                          $childrenWrapClass = '',
                                          $limit = 0
    ) {
        /**
         * Parent Menu
         */
        $menuNode = $this->nodeFactory->create(
            [
                'data' => $this->getNodeAsArray("Home", "/"),
                'idField' => 'id',
                'tree' => $subject->getMenu()->getTree(),
            ]
        );
        $menuNode1 = $this->nodeFactory->create(
            [
                'data' => $this->getNodeAsArray("About The products", "about"),
                'idField' => 'id',
                'tree' => $subject->getMenu()->getTree(),
            ]
        );
        $menuNode2 = $this->nodeFactory->create(
            [
                'data' => $this->getNodeAsArray("Contact us", "contact"),
                'idField' => 'id',
                'tree' => $subject->getMenu()->getTree(),
            ]
        );
        /**
         * Add Child Menu
         */

        $subject->getMenu()->addChild($menuNode);
        $subject->getMenu()->addChild($menuNode1);
        $subject->getMenu()->addChild($menuNode2);
    }

    protected function getNodeAsArray($name, $id) {
        $url = $this->urlBuilder->getUrl($id);
        return [
            'name' => __($name),
            'id' => $id,
            'url' => $url,
            'has_active' => false,
            'is_active' => false,
        ];
    }
}
