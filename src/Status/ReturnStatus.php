<?php

namespace CommonLibs\Status;

class ReturnStatus
{
	/**
	 * Constant when status is a sucessfull one
	 * @var bool
	 */
	const STATUS_OK=true;

	/**
	 * Constant when status is an error
	 * @var bool
	 */
	const STATUS_ERR=false;

	/**
	 * Status when a parameter is missing
	 * @var integer
	 */
	const ERR_TYPE_MISSING_PARAM=1;

	/**
	 * Status when a parameter is given an unwanted value
	 * @var integer
	 */
	const ERR_TYPE_WRONG_PARAM=2;

	/**
	 * Internal Error value
	 * @var integer
	 */
	const ERR_TYPE_INTERNAL_ERROR=3;

	/**
	 * Internal Error value
	 * @var integer
	 */
	const ERR_TYPE_NONE=null;

	/**
	 * Indicates whether is an errorous error or not
	 * It should be either STATUS_OK or STATUS_ERR
	 * @var boolean
	 */
	private $status;

	/**
	 * If status is an errorous one with that we set the error type
	 * @var integer
	 */
	protected $err_type=self::ERR_TYPE_NONE;

	/**
	 * A message for the status
	 * @var string
	 */
	protected $message="";

	/**
	 * Set value to the data
	 * @var Mixed
	 */
	protected $data=null;

	/**
	 * Sets the status an an errorous one
	 * @param integer $type One of the values:
	 *  self::ERR_TYPE_MISSING_PARAM
	 *	self::ERR_TYPE_EMPTY_PARAM
	 *	self::ERR_TYPE_INTERNAL_ERROR
	 * @param string $message Theerror message
	 */
	public function setStatusAsError($type,$message)
	{
		$this->status=self::STATUS_ERR;
		$this->setErrType($type);

		//Chainload
		return $this;
	}

	/**
	 * Sets the error type
	 * @param integer $type One of the values:
	 *  self::ERR_TYPE_MISSING_PARAM
	 *	self::ERR_TYPE_EMPTY_PARAM
	 *	self::ERR_TYPE_INTERNAL_ERROR
	 * @param string $message Theerror message
	 */
	protected function setErrType($type,$message="")
	{
		if($type===self::ERR_TYPE_MISSING_PARAM ||
			$type=== self::ERR_TYPE_EMPTY_PARAM ||
			$type== self::ERR_TYPE_INTERNAL_ERROR
		){
			$this->type=type;
		}

		if(!empty($message)){
			$this->setMessage;
		}
	}

	public function setStatusAsOk()
	{
		$this->status=self::STATUS_OK;
		//Chainload
		return $this;
	}

	/**
	 * Seth the message for this status
	 * @param string $message
	 */
	public function setMessage($message)
	{
		$this->message=$message;

		//Chainload
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * Sets the return data
	 * @param mixed $data
	 */
	public function setData($data)
	{
		$this->data=data;

		//Chainload
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * @return boolean
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @return number
	 */
	public function getErrType()
	{
		return $this->err_type;
	}

	/**
	 * @return boolean
	 */
	public function isOk()
	{
		return $this->status===self::STATUS_OK;
	}

	/**
	 * @return boolean
	 */
	public function isErr()
	{
		return $this->status===self::STATUS_ERR;
	}
}
