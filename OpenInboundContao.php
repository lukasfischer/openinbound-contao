<?php


// $GLOBALS['TL_HOOKS']['processFormData'][] = array('OpenInboundContao', 'OIProcessFormData');

class OpenInboundContao
{

    public function OIProcessFormData($arrPost, $arrForm, $arrFiles)
    {
        /*

     // Demo code from Drupal
    if (valid_email_address($component_data['e_mail'][0])) {
        $data['email'] = $component_data['e_mail'][0];
    }
    if (valid_email_address($component_data['email'][0])) {
        $data['email'] = $component_data['email'][0];
    }
    if ($component_data['company_name'][0]) {
        $data['company_name'] = $component_data['company_name'][0];
    }
    if ($component_data['company'][0]) {
        $data['company_name'] = $component_data['company'][0];
    }
    if ($component_data['phone'][0]) {
        $data['phone'] = $component_data['phone'][0];
    }
    if ($component_data['first_name'][0]) {
        $data['first_name'] = $component_data['first_name'][0];
    }
    if ($component_data['last_name'][0]) {
        $data['last_name'] = $component_data['last_name'][0];
    }


    $oi = new OI(variable_get('openinbound_tracking_id'), variable_get('openinbound_api_key'));
    $oi->updateContact($_COOKIE['_oi_contact_id'], $data);

    $properties = array();
    $properties['title'] = 'Form submission by '.$data['email'].' - '.$node->title;
    $properties['event_type'] = 'submission';
    $properties['raw'] = json_encode($component_data);
    $oi->addEvent($_COOKIE['_oi_contact_id'], $properties);
    */
    }
}
