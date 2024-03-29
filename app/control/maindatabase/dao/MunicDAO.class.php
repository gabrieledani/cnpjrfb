<?php
/**
 * System generated by SysGen (System Generator with Formdin Framework) 
 * Download SysGenAd: https://github.com/bjverde/sysgenad
 * Download Formdin5 Framework: https://github.com/bjverde/formDin5
 * 
 * SysGen  Version: 0.6.0
 * FormDin Version: 5.0.0
 * 
 * System cnpjrfb created in: 2021-11-19 22:41:13
 */
class MunicDAO 
{

    private static $sqlBasicSelect = 'select
                                      codigo
                                     ,descricao
                                     from munic ';

    private $tpdo = null;
    private $repositoryName = 'munic'; //Nome da Classe do tipo Active Record no diretorio /app/model/maindatabase

    public function __construct($tpdo=null)
    {
        //FormDinHelper::validateObjTypeTPDOConnectionObj($tpdo,__METHOD__,__LINE__);
        if( empty($tpdo) ){
            //$tpdo = New TPDOConnectionObj(); //FomDin4
            $tpdo = New TFormDinPdoConnection('maindatabase');
        }
        $this->setTPDOConnection($tpdo);
    }
    public function getTPDOConnection()
    {
        return $this->tpdo;
    }
    public function setTPDOConnection($tpdo)
    {
        //FormDinHelper::validateObjTypeTPDOConnectionObj($tpdo,__METHOD__,__LINE__);
        $this->tpdo = $tpdo;
    }
    private function processWhereGridParameters( $whereGrid )
    {
        $result = $whereGrid;
        if ( is_array($whereGrid) ){
            $where = ' 1=1 ';
            $connetor = SqlHelper::SQL_CONNECTOR_AND;
            $dbms = $this->tpdo->getDbms();
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'CODIGO', SqlHelper::SQL_TYPE_NUMERIC,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'DESCRICAO', SqlHelper::SQL_TYPE_TEXT_LIKE,true,$connetor,$dbms);
            $result = $where;
        }
        return $result;
    }
    //--------------------------------------------------------------------------------
    public function selectById( $id )
    {
        FormDinHelper::validateIdIsNumeric($id,__METHOD__,__LINE__);
        $values = array($id);
        $sql = self::$sqlBasicSelect.' where codigo = ?';
        $result = $this->tpdo->executeSql($sql, $values);
        return $result;
    }
    //--------------------------------------------------------------------------------
    /**
     * Faz um Select SQL nativo count
     * @param array  $where   - 01: array PHP "NOME_COLUNA1=>VALOR,NOME_COLUNA1=>VALOR" que será usado na consulta no metodo processWhereGridParameters
     * @return int Qtd
     */
    public function selectCount( $where=null )
    {
        $where = $this->processWhereGridParameters($where);
        $sql = 'select count(codigo) as qtd from dados_rfb.munic';
        $sql = $sql.( ($where)? ' where '.$where:'');
        $result = $this->tpdo->executeSql($sql);
        return $result[0]->QTD;
    }
    //--------------------------------------------------------------------------------
    /**
     * Faz um Select SQL nativo, COM paginação do banco
     * @param string $orderBy - 01: criterio de ordenação
     * @param array  $where   - 02: array PHP "NOME_COLUNA1=>VALOR,NOME_COLUNA1=>VALOR" que será usado na consulta no metodo processWhereGridParameters
     * @return array Adianti
     */
    public function selectAllPagination( $orderBy=null, $where=null, $page=null,  $rowsPerPage= null )
    {
        $rowStart = SqlHelper::getRowStart($page,$rowsPerPage);
        $where = $this->processWhereGridParameters($where);

        $sql = self::$sqlBasicSelect
        .( ($where)? ' where '.$where:'')
        .( ($orderBy) ? ' order by '.$orderBy:'')
        .( ' LIMIT '.$rowStart.','.$rowsPerPage);

        $result = $this->tpdo->executeSql($sql);
        return $result;
    }
    //--------------------------------------------------------------------------------
    /**
     * Faz um Select SQL nativo, sem paginação
     * @param string $orderBy - 01: criterio de ordenação
     * @param array  $where   - 02: array PHP "NOME_COLUNA1=>VALOR,NOME_COLUNA1=>VALOR" que será usado na consulta no metodo processWhereGridParameters
     * @return array Adianti
     */
    public function selectAll( $orderBy=null, $where=null )
    {
        $where = $this->processWhereGridParameters($where);
        $sql = self::$sqlBasicSelect
        .( ($where)? ' where '.$where:'')
        .( ($orderBy) ? ' order by '.$orderBy:'');

        $result = $this->tpdo->executeSql($sql);
        return $result;
    }
    //--------------------------------------------------------------------------------
    /**
     * Faz um Select usando o TCriteria
     * @param TCriteria $criteria    - 01: Obj TCriteria
     * @param string $repositoryName - 02: nome de classe
     * @return array Adianti
     */
    public function selectByTCriteria( TCriteria $criteria=null )
    {
        $result = $this->tpdo->selectByTCriteria($criteria,$this->repositoryName);
        return $result;
    }
    //--------------------------------------------------------------------------------
    /**
     * Faz um Select Count usando o TCriteria
     * @param TCriteria $criteria    - 01: Obj TCriteria
     * @param string $repositoryName - 02: nome de classe
     * @return array Adianti
     */
    public function selectByTCriteriaCount( TCriteria $criteria=null )
    {
        $result = $this->tpdo->selectByTCriteriaCount($criteria,$this->repositoryName);
        return $result;
    }
    //--------------------------------------------------------------------------------
    public function insert( MunicVO $objVo )
    {
        $values = array(  $objVo->getDescricao() 
                        );
        $sql = 'insert into dados_rfb.munic(
                                 descricao
                                ) values (?)';
        $result = $this->tpdo->executeSql($sql, $values); //Insert return de LastID
        return intval($result);
    }
    //--------------------------------------------------------------------------------
    public function update ( MunicVO $objVo )
    {
        $values = array( $objVo->getDescricao()
                        ,$objVo->getCodigo() );
        $sql = 'update dados_rfb.munic set 
                                 descricao = ?
                                where codigo = ?';
        $result = $this->tpdo->executeSql($sql, $values);
        return intval($result);
    }
    //--------------------------------------------------------------------------------
    public function delete( $id )
    {
        FormDinHelper::validateIdIsNumeric($id,__METHOD__,__LINE__);
        $values = array($id);
        $sql = 'delete from dados_rfb.munic where codigo = ?';
        $result = $this->tpdo->executeSql($sql, $values);
        return $result;
    }
    //--------------------------------------------------------------------------------
    public function getVoById( $id )
    {
        FormDinHelper::validateIdIsNumeric($id,__METHOD__,__LINE__);
        $result = $this->selectById( $id );
        $result = \ArrayHelper::convertArrayFormDin2Pdo($result,false);
        $result = $result[0];
        $vo = new MunicVO();
        $vo = \FormDinHelper::setPropertyVo($result,$vo);
        return $vo;
    }
}
?>