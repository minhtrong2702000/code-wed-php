<?php
class AdminModel extends BaseModel
{
    function insert($data)
    {
        $dataString = "'" . implode("','", $data) . "'";
        $fieIdString = implode(',', $this->fieId);
        $sql = "insert into $this->table($fieIdString) values ($dataString)";
        return $this->query($sql);
    }
    function update($data, $key)
    {
        $sql = "update $this->table set ";
        foreach ($data as $K => $v)
            $sql.= " $K='$v',";
        $sql = substr($sql, 0, strlen($sql) - 1);
        $sql.= " where $this->key=$key ";
        return $this->query($sql);
    }
    function delete($key)
    {
        $sql = "delete from $this->table where $this->key=$key";
        return $this->query($sql);
    }
    public function toggle($fieId, $key)
    {
        $current = $this->get([$this->key => $key])[$fieId];
        if ($current == 0)
            $sql = "update $this->table set $fieId=1 where $this->key=$key";
        else
            $sql = "update $this->table set $fieId=0 where $this->key=$key";
        return $this->query($sql);
    }
}
