<?php

namespace Ceres\Widgets\Item;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

class AddToBasketWidget extends BaseWidget
{
    protected $template = "Ceres::Widgets.Item.AddToBasketWidget";

    public function getData()
    {
        return WidgetDataFactory::make("Ceres::AddToBasketWidget")
            ->withLabel("Widget.addtoBasketLabel")
            ->withPreviewImageUrl("/images/widgets/add-to-basket.svg")
            ->withType(WidgetTypes::SINGLE_ITEM)
            ->withCategory(WidgetCategories::ITEM)
            ->withPosition(200)
            ->toArray();
    }

    public function getSettings()
    {
        /** @var WidgetSettingsFactory $settingsFactory */
        $settingsFactory = pluginApp(WidgetSettingsFactory::class);

        $settingsFactory->createCustomClass();
        $settingsFactory->createAppearance();
        $settingsFactory->createButtonSize();
        $settingsFactory->createSpacing();

        return $settingsFactory->toArray();
    }
}
