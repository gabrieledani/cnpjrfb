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
class estabelecimento extends TRecord
{
    const TABLENAME = 'estabelecimento';
    const PRIMARYKEY= 'cnpj_basico';
    const IDPOLICY  = 'serial'; //{max, serial}

    private $fk_pais;
    private $fk_municipio;
    private $fk_cnae_fiscal_principal;
    private $fk_motivo_situacao_cadastral;

    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('cnpj_ordem');
        parent::addAttribute('cnpj_dv');
        parent::addAttribute('identificador_matriz_filial');
        parent::addAttribute('nome_fantasia');
        parent::addAttribute('situacao_cadastral');
        parent::addAttribute('data_situacao_cadastral');
        parent::addAttribute('motivo_situacao_cadastral');
        parent::addAttribute('nome_cidade_exterior');
        parent::addAttribute('pais');
        parent::addAttribute('data_inicio_atividade');
        parent::addAttribute('cnae_fiscal_principal');
        parent::addAttribute('cnae_fiscal_secundaria');
        parent::addAttribute('tipo_logradouro');
        parent::addAttribute('logradouro');
        parent::addAttribute('numero');
        parent::addAttribute('complemento');
        parent::addAttribute('bairro');
        parent::addAttribute('cep');
        parent::addAttribute('uf');
        parent::addAttribute('municipio');
        parent::addAttribute('ddd_1');
        parent::addAttribute('telefone_1');
        parent::addAttribute('ddd_2');
        parent::addAttribute('telefone_2');
        parent::addAttribute('ddd_fax');
        parent::addAttribute('fax');
        parent::addAttribute('correio_eletronico');
        parent::addAttribute('situacao_especial');
        parent::addAttribute('data_situacao_especial');
    }

    /**
     * Method set_pais
     * Sample of usage: $var->pais = $object;
     * @param $object Instance of Pais
     */
    public function set_fk_pais(pais $object)
    {
        $this->fk_pais = $object;
        $this->pais = $object->codigo;
    }
    
    /**
     * Method get_fk_pais
     * Sample of usage: $var->fk_pais->attribute;
     * @returns Pais instance
     */
    public function get_fk_pais()
    {
        
        // loads the associated object
        if (empty($this->fk_pais))
            $this->fk_pais = new pais($this->pais);
        
        // returns the associated object
        return $this->fk_pais;
    }
    /**
     * Method set_munic
     * Sample of usage: $var->munic = $object;
     * @param $object Instance of Munic
     */
    public function set_fk_municipio(munic $object)
    {
        $this->fk_municipio = $object;
        $this->municipio = $object->codigo;
    }
    
    /**
     * Method get_fk_municipio
     * Sample of usage: $var->fk_municipio->attribute;
     * @returns Munic instance
     */
    public function get_fk_municipio()
    {
        
        // loads the associated object
        if (empty($this->fk_municipio))
            $this->fk_municipio = new munic($this->municipio);
        
        // returns the associated object
        return $this->fk_municipio;
    }
    /**
     * Method set_cnae
     * Sample of usage: $var->cnae = $object;
     * @param $object Instance of Cnae
     */
    public function set_fk_cnae_fiscal_principal(cnae $object)
    {
        $this->fk_cnae_fiscal_principal = $object;
        $this->cnae_fiscal_principal = $object->codigo;
    }
    
    /**
     * Method get_fk_cnae_fiscal_principal
     * Sample of usage: $var->fk_cnae_fiscal_principal->attribute;
     * @returns Cnae instance
     */
    public function get_fk_cnae_fiscal_principal()
    {
        
        // loads the associated object
        if (empty($this->fk_cnae_fiscal_principal))
            $this->fk_cnae_fiscal_principal = new cnae($this->cnae_fiscal_principal);
        
        // returns the associated object
        return $this->fk_cnae_fiscal_principal;
    }
    /**
     * Method set_moti
     * Sample of usage: $var->moti = $object;
     * @param $object Instance of Moti
     */
    public function set_fk_motivo_situacao_cadastral(moti $object)
    {
        $this->fk_motivo_situacao_cadastral = $object;
        $this->motivo_situacao_cadastral = $object->codigo;
    }
    
    /**
     * Method get_fk_motivo_situacao_cadastral
     * Sample of usage: $var->fk_motivo_situacao_cadastral->attribute;
     * @returns Moti instance
     */
    public function get_fk_motivo_situacao_cadastral()
    {
        
        // loads the associated object
        if (empty($this->fk_motivo_situacao_cadastral))
            $this->fk_motivo_situacao_cadastral = new moti($this->motivo_situacao_cadastral);
        
        // returns the associated object
        return $this->fk_motivo_situacao_cadastral;
    }

}
?>