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
class natju extends TRecord
{
    const TABLENAME = 'natju';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY  = 'serial'; //{max, serial}

    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('descricao');
    }

}
?>