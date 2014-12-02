<?php
namespace Paperstreetmedia\Repositories;

use Paperstreetmedia\Core\Interfaces\RepositoryInterface;
use Paperstreetmedia\Core\Interfaces\DataObjectAbTestInterface;

/*
* This class is used as our represantation of our data object
* We could easily swap from mysql to mongoDB or any db technology without affecting our front business logic
*/
class AbTestRepository implements RepositoryInterface
{
	public $data;
	/*
	* Instantiate our selected database technology, in this case, Mysql with laravel query builder
	*/
	public function __construct(DataObjectAbTestInterface $dao)
	{
		$this->dao = $dao;
	}
	/*
	* Call create from the data object
	* paramaters would be an array of data
	*/
	public function create(array $data)
	{
		return $this->dao->create($data);
	}
	/*
	* Call read from the data object
	*/
	public function read(array $ids)
	{
		return $this->dao->read($ids);
	}
	/*
	* Call readall from the data object
	*/
	public function readAll()
	{
		return $this->dao->readAll();
	}
	/*
	* Call update from the data object
	* paramaters would be an array of data
	*/
	public function update(array $data)
	{
		return $this->dao->update($data);
	}	
	/*
	* Call delete from the data object
	* paramaters would be an unique id of girl
	*/
	public function delete($id)
	{
		return $this->dao->delete($id);
	}
}