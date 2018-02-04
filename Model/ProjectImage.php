<?php

App::uses('AppModel', 'Model');

/**
 * Member
 *
 * PHP version 5
 *
 * @category Model
 * @package  Croogo
 * @version  1.0
 * @author   Avo Sarafian <avo.sarafian@ogilvy.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class ProjectImage extends AppModel {

/**
 * Model name
 *
 * @var string
 * @access public
 */
	public $name = 'ProjectImage';

	public $actsAs = array(
		'Croogo.Ordered' => array(
			'field' => 'weight',
			'foreign_key' => false,
		)
	);
/**
 * Order
 *
 * @var string
 * @access public
 */
	public $order = 'ProjectImage.created DESC';


	public $belongsTo = array("Project");

	public $displayField = "caption";
 
/**
 * Validation
 *
 * @var array
 * @access public
 */
	public $validate = array(
		'image' => array(
			'rule' => 'notBlank',
			'message' => 'This field cannot be left blank.',
		)
	);
		
	protected $_displayFields = array('id',
									  'image',
									  'caption',
									  'status',
									  'created'
									  );
	protected $_editFields = array(
									'image',
									'caption',
									'status'=>array("isPublish"=>true,"type"=>"checkbox"),
								);
	
}