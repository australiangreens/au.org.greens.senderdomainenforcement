<?php

return array(
  'senderdomainenforcement_mode' => array(
    'group_name' => 'Sender Domain Enforcement Settings',
    'group' => 'senderdomainenforcement',
    'name' => 'senderdomainenforcement_mode',
    'type' => 'String',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Choose how the sender domain regex is applied'),
    'title' => ts('Mode'),
    'default' => 'whitelist',
    'html_type' => 'Radio',
    'html_attributes' => array(),
    'options' => array(
      'Whitelist' => 'whitelist',
      'Blacklist' => 'blacklist'
    ),
    'quick_form_type' => 'Element'    
  ),
  'senderdomainenforcement_regex' => array(
    'group_name' => 'Sender Domain Enforcement Settings',
    'group' => 'senderdomainenforcement',
    'name' => 'senderdomainenforcement_regex',
    'type' => 'String',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Regex to match against sender domain'),
    'title' => ts('Regex to match'),
    'default' => '',
    'html_type' => 'Input',
    'html_attributes' => array(),
    'quick_form_type' => 'Element'    
  ),
  'senderdomainenforcement_default_from' => array(
    'group_name' => 'Sender Domain Enforcement Settings',
    'group' => 'senderdomainenforcement',
    'name' => 'senderdomainenforcement_default_from',
    'type' => 'String',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('From Email to enforce'),
    'title' => ts('Default From Email'),
    'default' => '',
    'html_type' => 'Input',
    'html_attributes' => array(),
    'quick_form_type' => 'Element'    
  ),  
);