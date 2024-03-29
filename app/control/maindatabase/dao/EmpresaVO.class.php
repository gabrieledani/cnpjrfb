<?php
/**
 * System generated by SysGen (System Generator with Formdin Framework) 
 * Download SysGenAd: https://github.com/bjverde/sysgenad
 * Download Formdin5 Framework: https://github.com/bjverde/formDin5
 * 
 * SysGen  Version: 0.6.0
 * FormDin Version: 5.0.0
 * 
 * System cnpjrfb2 created in: 2021-11-20 00:51:44
 */
class EmpresaVO
{
    private $cnpj_basico = null;
    private $razao_social = null;
    private $natureza_juridica = null;
    private $qualificacao_responsavel = null;
    private $capital_social = null;
    private $porte_empresa = null;
    private $ente_federativo_responsavel = null;
    public function __construct( $cnpj_basico=null, $razao_social=null, $natureza_juridica=null, $qualificacao_responsavel=null, $capital_social=null, $porte_empresa=null, $ente_federativo_responsavel=null ) {
        $this->setCnpj_basico( $cnpj_basico );
        $this->setRazao_social( $razao_social );
        $this->setNatureza_juridica( $natureza_juridica );
        $this->setQualificacao_responsavel( $qualificacao_responsavel );
        $this->setCapital_social( $capital_social );
        $this->setPorte_empresa( $porte_empresa );
        $this->setEnte_federativo_responsavel( $ente_federativo_responsavel );
    }
    //--------------------------------------------------------------------------------
    public function setCnpj_basico( $strNewValue = null )
    {
        $this->cnpj_basico = preg_replace('/[^0-9]/','',$strNewValue);
    }
    public function getCnpj_basico()
    {
        return $this->cnpj_basico;
    }
    //--------------------------------------------------------------------------------
    public function setRazao_social( $strNewValue = null )
    {
        $this->razao_social = $strNewValue;
    }
    public function getRazao_social()
    {
        return $this->razao_social;
    }
    //--------------------------------------------------------------------------------
    public function setNatureza_juridica( $strNewValue = null )
    {
        $this->natureza_juridica = $strNewValue;
    }
    public function getNatureza_juridica()
    {
        return $this->natureza_juridica;
    }
    //--------------------------------------------------------------------------------
    public function setQualificacao_responsavel( $strNewValue = null )
    {
        $this->qualificacao_responsavel = $strNewValue;
    }
    public function getQualificacao_responsavel()
    {
        return $this->qualificacao_responsavel;
    }
    //--------------------------------------------------------------------------------
    public function setCapital_social( $strNewValue = null )
    {
        $this->capital_social = $strNewValue;
    }
    public function getCapital_social()
    {
        return $this->capital_social;
    }
    //--------------------------------------------------------------------------------
    public function setPorte_empresa( $strNewValue = null )
    {
        $this->porte_empresa = $strNewValue;
    }
    public function getPorte_empresa()
    {
        return $this->porte_empresa;
    }
    //--------------------------------------------------------------------------------
    public function setEnte_federativo_responsavel( $strNewValue = null )
    {
        $this->ente_federativo_responsavel = $strNewValue;
    }
    public function getEnte_federativo_responsavel()
    {
        return $this->ente_federativo_responsavel;
    }
    //--------------------------------------------------------------------------------
}
?>