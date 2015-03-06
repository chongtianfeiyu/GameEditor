<?php

namespace Home\Model;
use Think\Model;

class PropPackageModel extends Model{

         protected $connection       =   'SGGAME_DB';
        // 实际数据表名（包含表前缀）
        protected $trueTableName    =   'PkgSundryTable';

        function getPropListByCharId($charid){
                $condition['CharId'] = $charid;
                $condition['ItemId'] = array("gt",0);
                $list = $this->where($condition)
                                ->order("Slot")
                                ->select();
                return $list;
        }
}