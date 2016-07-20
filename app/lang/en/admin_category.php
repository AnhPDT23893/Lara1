<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 4/20/2015
 * Time: 6:10 PM
 */

return array(
  'title' => 'Category',

    'table' => array(
        'category_name' => 'Category Name',
        'parent_id' => 'Parent',
        'actions' => array(
            'title' => 'Actions',
            'edit' => 'Edit',
            'delete' => 'Delete',
        ),
    ),

    'form' => array(
        'name' => 'Category Name',
        'parent' => 'Parent',
        'cancel' => 'Cancel',
        'save' => 'Save',
        'delete' => 'Delete',
        'help_block' => 'Category name must be unique name. At least 4 characters.',
    ),
);