<?php
class SOF_Validation_str_replace extends Redex_Framework {	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since Redex_Framework 1.0.0
	*/
	function __construct($field, $value, $current) {
		
		parent::__construct();
		$this->field = $field;
		$this->value = $value;
		$this->current = $current;
		$this->validate();
		
	}//function
	
	
	
	/**
	 * Field Render Function.
	 *
	 * Takes the vars and validates them
	 *
	 * @since Redex_Framework 1.0.0
	*/
	function validate() {
		
		$this->value = str_replace($this->field['str']['search'], $this->field['str']['replacement'], $this->value);
				
	}//function
	
}//class
?>