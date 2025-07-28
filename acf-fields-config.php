<?php
/**
 * ACF Field Configuration for Niche Post Type
 * 
 * This file contains the field definitions that need to be set up in ACF
 * for the niche post type to work properly.
 * 
 * IMPORTANT: You need to manually create these fields in ACF or use ACF Local JSON
 */

/*
ACF Field Group: "Niche Details"
Location Rules: Post Type is equal to Niche

Fields to create:

1. Field Label: Niche Name
   Field Name: niche_name
   Field Type: Text
   Required: Yes
   Default Value: (leave empty)

2. Field Label: Niche Description  
   Field Name: niche_description
   Field Type: Textarea
   Required: No
   Default Value: (leave empty)

3. Field Label: Keywords
   Field Name: keywords
   Field Type: Relationship
   Post Type: (select your keyword post type)
   Required: No
   Allow Multiple Values: Yes
   Return Format: Post Object

4. Field Label: Target Audience
   Field Name: target_audience
   Field Type: Textarea
   Required: No
   Default Value: (leave empty)

5. Field Label: Primary Intent
   Field Name: primary_intent
   Field Type: Select
   Choices: 
     informational: Informational
     navigational: Navigational
     transactional: Transactional
   Required: No
   Default Value: (leave empty)

6. Field Label: Competition Level
   Field Name: competition_level
   Field Type: Select
   Choices:
     low: Low
     medium: Medium
     high: High
   Required: No
   Default Value: (leave empty)

7. Field Label: Monthly Search Volume
   Field Name: monthly_search_volume
   Field Type: Number
   Required: No
   Minimum Value: 0
   Default Value: (leave empty)

8. Field Label: Difficulty Score
   Field Name: difficulty_score
   Field Type: Number
   Required: No
   Minimum Value: 0
   Maximum Value: 100
   Default Value: (leave empty)

9. Field Label: Content Strategy
   Field Name: content_strategy
   Field Type: Textarea
   Required: No
   Default Value: (leave empty)

10. Field Label: Notes
    Field Name: notes
    Field Type: Textarea
    Required: No
    Default Value: (leave empty)
*/

// Optional: Auto-register ACF fields programmatically
// Uncomment the code below if you want to register fields programmatically

/*
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_niche_details',
        'title' => 'Niche Details',
        'fields' => array(
            array(
                'key' => 'field_niche_name',
                'label' => 'Niche Name',
                'name' => 'niche_name',
                'type' => 'text',
                'required' => 1,
            ),
            array(
                'key' => 'field_niche_description',
                'label' => 'Niche Description',
                'name' => 'niche_description',
                'type' => 'textarea',
                'required' => 0,
            ),
            array(
                'key' => 'field_keywords',
                'label' => 'Keywords',
                'name' => 'keywords',
                'type' => 'relationship',
                'post_type' => array('keyword'), // Adjust to your keyword post type
                'multiple' => 1,
                'return_format' => 'object',
            ),
            array(
                'key' => 'field_target_audience',
                'label' => 'Target Audience',
                'name' => 'target_audience',
                'type' => 'textarea',
                'required' => 0,
            ),
            array(
                'key' => 'field_primary_intent',
                'label' => 'Primary Intent',
                'name' => 'primary_intent',
                'type' => 'select',
                'choices' => array(
                    'informational' => 'Informational',
                    'navigational' => 'Navigational',
                    'transactional' => 'Transactional',
                ),
                'required' => 0,
            ),
            array(
                'key' => 'field_competition_level',
                'label' => 'Competition Level',
                'name' => 'competition_level',
                'type' => 'select',
                'choices' => array(
                    'low' => 'Low',
                    'medium' => 'Medium',
                    'high' => 'High',
                ),
                'required' => 0,
            ),
            array(
                'key' => 'field_monthly_search_volume',
                'label' => 'Monthly Search Volume',
                'name' => 'monthly_search_volume',
                'type' => 'number',
                'required' => 0,
                'min' => 0,
            ),
            array(
                'key' => 'field_difficulty_score',
                'label' => 'Difficulty Score',
                'name' => 'difficulty_score',
                'type' => 'number',
                'required' => 0,
                'min' => 0,
                'max' => 100,
            ),
            array(
                'key' => 'field_content_strategy',
                'label' => 'Content Strategy',
                'name' => 'content_strategy',
                'type' => 'textarea',
                'required' => 0,
            ),
            array(
                'key' => 'field_notes',
                'label' => 'Notes',
                'name' => 'notes',
                'type' => 'textarea',
                'required' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'niche',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));
}
*/
?> 