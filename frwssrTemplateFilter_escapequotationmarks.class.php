<?php

/**
 * Perch template filter for escaping quotationmarks
 * 
 * @package PerchTemplateFilter_escapequotationmarks
 * @version v1.0.0 
 * @link https://github.com/frwssr/frwssr_escapequotationmarks
 */

class PerchTemplateFilter_escapequotationmarks extends PerchTemplateFilter 
{
    public function filterAfterProcessing($value, $valueIsMarkup = false)
    {	
    	$return = str_replace('"', '\"', $value);
        return $return;
    }
}

PerchSystem::register_template_filter('escapequotationmarks', 'PerchTemplateFilter_escapequotationmarks');