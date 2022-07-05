<?php
/**
 * System generated by SysGen (System Generator with Formdin Framework) 
 * Download SysGenAd: https://github.com/bjverde/sysgenad
 * Download Formdin5 Framework: https://github.com/bjverde/formDin5
 * 
 * SysGen  Version: 0.6.0
 * FormDin Version: 5.0.0
 * 
 * System cnpjrfb created in: 2021-11-19 22:41:14
 */
class SociosDAO 
{

    private static $sqlBasicSelect = 'select
                                      cnpj_basico
                                     ,identificador_socio
                                     ,nome_socio_razao_social
                                     ,cpf_cnpj_socio
                                     ,qualificacao_socio
                                     ,data_entrada_sociedade
                                     ,pais
                                     ,representante_legal
                                     ,nome_do_representante
                                     ,qualificacao_representante_legal
                                     ,faixa_etaria
                                     from socios ';

    private $tpdo = null;
    private $repositoryName = 'socios'; //Nome da Classe do tipo Active Record no diretorio /app/model/maindatabase

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
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'CNPJ_BASICO', SqlHelper::SQL_TYPE_TEXT_LIKE,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'IDENTIFICADOR_SOCIO', SqlHelper::SQL_TYPE_NUMERIC,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'NOME_SOCIO_RAZAO_SOCIAL', SqlHelper::SQL_TYPE_TEXT_LIKE,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'CPF_CNPJ_SOCIO', SqlHelper::SQL_TYPE_TEXT_LIKE,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'QUALIFICACAO_SOCIO', SqlHelper::SQL_TYPE_NUMERIC,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'DATA_ENTRADA_SOCIEDADE', SqlHelper::SQL_TYPE_TEXT_LIKE,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'PAIS', SqlHelper::SQL_TYPE_NUMERIC,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'REPRESENTANTE_LEGAL', SqlHelper::SQL_TYPE_TEXT_LIKE,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'NOME_DO_REPRESENTANTE', SqlHelper::SQL_TYPE_TEXT_LIKE,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'QUALIFICACAO_REPRESENTANTE_LEGAL', SqlHelper::SQL_TYPE_NUMERIC,true,$connetor,$dbms);
            $where = SqlHelper::getAtributeWhereGridParameters($where, $whereGrid, 'FAIXA_ETARIA', SqlHelper::SQL_TYPE_NUMERIC,true,$connetor,$dbms);
            $result = $where;
        }
        return $result;
    }
    //--------------------------------------------------------------------------------
    public function selectById( $id )
    {
        $values = array($id);
        $sql = self::$sqlBasicSelect.' where cnpj_basico = ?';
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
        $sql = 'select count(cnpj_basico) as qtd from dados_rfb.socios';
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
    public function insert( SociosVO $objVo )
    {
        $values = array(  $objVo->getIdentificador_socio() 
                        , $objVo->getNome_socio_razao_social() 
                        , $objVo->getCpf_cnpj_socio() 
                        , $objVo->getQualificacao_socio() 
                        , $objVo->getData_entrada_sociedade() 
                        , $objVo->getPais() 
                        , $objVo->getRepresentante_legal() 
                        , $objVo->getNome_do_representante() 
                        , $objVo->getQualificacao_representante_legal() 
                        , $objVo->getFaixa_etaria() 
                        );
        $sql = 'insert into dados_rfb.socios(
                                 identificador_socio
                                ,nome_socio_razao_social
                                ,cpf_cnpj_socio
                                ,qualificacao_socio
                                ,data_entrada_sociedade
                                ,pais
                                ,representante_legal
                                ,nome_do_representante
                                ,qualificacao_representante_legal
                                ,faixa_etaria
                                ) values (?,?,?,?,?,?,?,?,?,?)';
        $result = $this->tpdo->executeSql($sql, $values); //Insert return de LastID
        return intval($result);
    }
    //--------------------------------------------------------------------------------
    public function update ( SociosVO $objVo )
    {
        $values = array( $objVo->getIdentificador_socio()
                        ,$objVo->getNome_socio_razao_social()
                        ,$objVo->getCpf_cnpj_socio()
                        ,$objVo->getQualificacao_socio()
                        ,$objVo->getData_entrada_sociedade()
                        ,$objVo->getPais()
                        ,$objVo->getRepresentante_legal()
                        ,$objVo->getNome_do_representante()
                        ,$objVo->getQualificacao_representante_legal()
                        ,$objVo->getFaixa_etaria()
                        ,$objVo->getCnpj_basico() );
        $sql = 'update dados_rfb.socios set 
                                 identificador_socio = ?
                                ,nome_socio_razao_social = ?
                                ,cpf_cnpj_socio = ?
                                ,qualificacao_socio = ?
                                ,data_entrada_sociedade = ?
                                ,pais = ?
                                ,representante_legal = ?
                                ,nome_do_representante = ?
                                ,qualificacao_representante_legal = ?
                                ,faixa_etaria = ?
                                where cnpj_basico = ?';
        $result = $this->tpdo->executeSql($sql, $values);
        return intval($result);
    }
    //--------------------------------------------------------------------------------
    public function delete( $id )
    {
        $values = array($id);
        $sql = 'delete from dados_rfb.socios where cnpj_basico = ?';
        $result = $this->tpdo->executeSql($sql, $values);
        return $result;
    }
    //--------------------------------------------------------------------------------
    public function getVoById( $id )
    {
        $result = $this->selectById( $id );
        $result = \ArrayHelper::convertArrayFormDin2Pdo($result,false);
        $result = $result[0];
        $vo = new SociosVO();
        $vo = \FormDinHelper::setPropertyVo($result,$vo);
        return $vo;
    }
}
?>