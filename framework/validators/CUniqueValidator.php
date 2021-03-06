<?php
/**
 * CUniqueValidator class file.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2011 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

/**
 * CUniqueValidator validates that the attribute value is unique in the corresponding database table.
 *
 * When using the {@link message} property to define a custom error message, the message
 * may contain additional placeholders that will be replaced with the actual content. In addition
 * to the "{attribute}" placeholder, recognized by all validators (see {@link CValidator}),
 * CUniqueValidator allows for the following placeholders to be specified:
 * <ul>
 * <li>{value}: replaced with current value of the attribute.</li>
 * </ul>
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package system.validators
 * @since 1.0
 */
class CUniqueValidator extends CValidator
{
	/**
	 * @var boolean whether the comparison is case sensitive. Defaults to true.
	 * Note, by setting it to false, you are assuming the attribute type is string.
	 */
	public $caseSensitive=true;
	/**
	 * @var boolean whether the attribute value can be null or empty. Defaults to true,
	 * meaning that if the attribute is empty, it is considered valid.
	 */
	public $allowEmpty=true;
	/**
	 * @var string the ActiveRecord class name that should be used to
	 * look for the attribute value being validated. Defaults to null, meaning using
	 * the class of the object currently being validated.
	 * You may use path alias to reference a class name here.
	 * @see attributeName
	 */
	public $className;
	/**
	 * @var string the ActiveRecord class attribute name that should be
	 * used to look for the attribute value being validated. Defaults to null,
	 * meaning using the name of the attribute being validated.
	 * @see className
	 */
	public $attributeName;
	/**
	 * @var mixed additional query criteria. Either an array or CDbCriteria.
	 * This will be combined with the condition that checks if the attribute
	 * value exists in the corresponding table column.
	 * This array will be used to instantiate a {@link CDbCriteria} object.
	 */
	public $criteria=array();
	/**
	 * @var string the user-defined error message. The placeholders "{attribute}" and "{value}"
	 * are recognized, which will be replaced with the actual attribute name and value, respectively.
	 */
	public $message;
	/**
	 * @var boolean whether this validation rule should be skipped if when there is already a validation
	 * error for the current attribute. Defaults to true.
	 * @since 1.1.1
	 */
	public $skipOnError=true;


	/**
	 * Validates the attribute of the object.
	 * If there is any error, the error message is added to the object.
	 * @param CModel $object the object being validated
	 * @param string $attribute the attribute being validated
	 */
	protected function validateAttribute($object,$attribute)
	{
		$value=$object->$attribute;
		if($this->allowEmpty && $this->isEmpty($value))
			return;

		$className=$this->className===null?get_class($object):Yii::import($this->className);
		$attributeName=$this->attributeName===null?$attribute:$this->attributeName;
		$finder=CActiveRecord::model($className);
		$table=$finder->getTableSchema();
		if(($column=$table->getColumn($attributeName))===null)
			throw new CException(Yii::t('yii','Table "{table}" does not have a column named "{column}".',
				array('{column}'=>$attributeName,'{table}'=>$table->name)));

		$columnName=$column->rawName;
		$criteria=new CDbCriteria();
		if($this->criteria!==array())
			$criteria->mergeWith($this->criteria);
		$tableAlias = empty($criteria->alias) ? $finder->getTableAlias(true) : $criteria->alias;
		$valueParamName = CDbCriteria::PARAM_PREFIX.CDbCriteria::$paramCount++;
		$criteria->addCondition($this->caseSensitive ? "{$tableAlias}.{$columnName}={$valueParamName}" : "LOWER({$tableAlias}.{$columnName})=LOWER({$valueParamName})");
		$criteria->params[$valueParamName] = $value;

		if(!$object instanceof CActiveRecord || $object->isNewRecord || $object->tableName()!==$finder->tableName())
			$exists=$finder->exists($criteria);
		else
		{
			$criteria->limit=2;
			$objects=$finder->findAll($criteria);
			$n=count($objects);
			if($n===1)
			{
				if($column->isPrimaryKey)  // primary key is modified and not unique
					$exists=$object->getOldPrimaryKey()!=$object->getPrimaryKey();
				else
				{
					// non-primary key, need to exclude the current record based on PK
					$exists=array_shift($objects)->getPrimaryKey()!=$object->getOldPrimaryKey();
				}
			}
			else
				$exists=$n>1;
		}

		if($exists)
		{
			$message=$this->message!==null?$this->message:Yii::t('yii','{attribute} "{value}" has already been taken.');
			$this->addError($object,$attribute,$message,array('{value}'=>CHtml::encode($value)));
		}
	}
    
    /**
	 * Returns the JavaScript needed for performing client-side validation.
	 * @param CModel $object the data object being validated
	 * @param string $attribute the name of the attribute to be validated.
	 * @return string the client-side validation script.
	 * @see CActiveForm::enableClientValidation
	 * @author bob <zunfengke@gmail.com>
	 */
	public function clientValidateAttribute($object, $attribute)
	{            
        $value = $object->$attribute;
		$message=$this->message;		
        if($message===null)
            $message=Yii::t('yii','{attribute} "{value}" has already been taken.');
        $message = strtr($message, array(
            '{attribute}'   => $object->getAttributeLabel($attribute),              
        ));
        $pathInfo = Yii::app()->request->getPathInfo();
        $pathArr = explode("/", $pathInfo);
        $className = get_class($object);
       
			return "
if(jQuery.trim(value)!=='' && jQuery.trim(value) != '$value') {
    $.ajax({
        type: 'post',
        url: '/{$pathArr[0]}/{$pathArr[1]}/unique',
        data: {value: value, className: '$className', attributeName: '$attribute'},
        async: false,             
        success: function(data) {                
            if (data) {
                var message = '$message';
                message = message.replace(\"{value}\", value);                               
                messages.push(message); 
            }                       
        }
    });
}
";		
	}
}

