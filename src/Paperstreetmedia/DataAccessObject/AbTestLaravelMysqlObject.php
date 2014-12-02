<?php
namespace Paperstreetmedia\DataAccessObject;

use PDO;
use Illuminate\Database\Capsule\Manager as DB;
use Paperstreetmedia\Core\Interfaces\DataObjectAbTestInterface;
use \Paperstreetmedia\Core\SuperClass\BaseConnection;


class AbTestLaravelMysqlObject extends BaseConnection implements DataObjectAbTestInterface
{

	public function create(array $data)
	{
			return DB::connection($this->connection)->table('upgrade_btn_abtest')->insertGetId($data);
	}

	public function read(array $data)
	{
		$query = DB::connection($this->connection)->table('upgrade_btn_abtest')->whereIn('position', $data)->get();
		return $this->collection->make($query);
	}

	public function readAll()
	{
		$query = DB::connection($this->connection)->table('upgrade_btn_abtest')->get();
		return $this->collection->make($query);
		
	}

	public function update(array $data)
	{
		try {
			return DB::connection($this->connection)->table('upgrade_btn_abtest')->where('id', $data['id'])->update($data);
		}catch(\Exception $e){
			return $e;
		}
	}
	public function delete($id)
	{
		return DB::connection($this->connection)->table('upgrade_btn_abtest')->where('id',  $id)->delete();
	}
}