<?php
use Gremo\HighchartsBundle\Provider\OptionsProviderInterface;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("my_options_provider")
 * @DI\Tag("gremo_highcharts.options_provider", attributes={"priority"=10})
 */
class MyOptionsProvider implements OptionsProviderInterface
{
    /**
     * @return array
     */
    public function getOptions()
    {
        return array(
            'colors' => array(
                '#058DC7',
                '#50B432',
                '#ED561B',
                '#DDDF00',
                '#24CBE5',
                '#64E572',
                '#FF9655',
                '#FFF263',
                '#6AF9C4',
            )
        );
    }
}