<?php

namespace Elogic\Repository\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\APi\SearchCriteriaBuilder;
use Magento\Framework\Api\Search\FilterGroupBuilder;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SortOrderBuilder;

class Searchcriteria extends Action
{

    protected $_rep;
    protected $_searchCriteria;
    protected $_filterGroupBuilder;
    protected $_sortOrderBuilder;
    protected $_filterBuilder;

    public function __construct(
        Context $context,
        ProductRepositoryInterface $rep,
        SearchCriteriaBuilder $search,
        FilterGroupBuilder $filterGroupBuilder,
        FilterBuilder $filterBuilder,
        SortOrderBuilder $sortOrder)
    {
        parent::__construct($context);
        $this->_rep = $rep;
        $this->_searchCriteria = $search;
        $this->_filterGroupBuilder = $filterGroupBuilder;
        $this->_filterBuilder = $filterBuilder;
        $this->_sortOrderBuilder = $sortOrder;
    }

    public function execute()
    {
        $search = $this->_searchCriteria
            ->create();

        // This creates an OR filter
        $filter1 = $this->_filterBuilder
            ->setField('name')
            ->setConditionType('like')
            ->setValue('%jo%')
            ->create();


        $filter2 = $this->_filterBuilder
            ->setField('name')
            ->setConditionType('like')
            ->setValue('%bag%')
            ->create();

        $this->_filterGroupBuilder
            ->addFilter($filter1)
            ->addFilter($filter2);

        $this->_sortOrderBuilder
            ->setField('name')
            ->setDescendingDirection();

        $search->setSortOrders([$this->_sortOrderBuilder->create()])
            ->setFilterGroups([$this->_filterGroupBuilder->create()])
            ->setPageSize(10);

        $items = $this->_rep->getList($search);

        foreach($items->getItems() as $product){
            echo $product->getName() . "<br />";
        }
    }
}
