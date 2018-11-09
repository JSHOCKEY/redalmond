<?php
 
namespace RedAlmond\CmsInstall\Setup;
 
use Magento\Cms\Model\PageFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
    private $pageFactory;
    private $blockFactory;
 
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $cmsPageData = [
            'title' => 'Buttons',
            'page_layout' => '1column',
            'meta_keywords' => 'Buttons',
            'meta_description' => 'Buttons',
            'identifier' => 'buttons',
            'content' => "<h1>BUTTONS</h1><div class='grid'><div class='col'><button class='button primary tocart' type='button'>Load More</button></div><div class='col'><button class='button btn-continue' title='Continue Shopping' type='button'>Continue Shopping</button></div><div class='col'><button class='action primary checkout' type='button'>Checkout</button></div></div>",
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
 
        // create page
        $this->pageFactory->create()->setData($cmsPageData)->save();
    }
} 