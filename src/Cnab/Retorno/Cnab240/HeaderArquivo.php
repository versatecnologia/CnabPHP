<?php
namespace Cnab\Retorno\Cnab240;

class HeaderArquivo extends \Cnab\Format\Linha
{
	public function __construct(\Cnab\Retorno\IArquivo $arquivo)
    {
        $yamlLoad = new \Cnab\Format\YamlLoad($arquivo->codigo_banco, $arquivo->layoutVersao);
        $yamlLoad->load($this, 'cnab240', 'header_arquivo');
	}

    public function getAgencia()
    {
        if ($this->existField('agencia'))
            return $this->agencia;
        else
            return null;
    }

	public function getConta()
    {
        if($this->existField('conta'))
            return $this->conta;
        else
            return null;
    }

    public function getContaDac()
    {
        if($this->existField('conta_dv'))
            return $this->conta_dv;
        else
            return null;
    }

    public function getCodigoConvenio() {
        if ($this->existField('codigo_convenio'))
            return $this->codigo_convenio;
        elseif ($this->existField('codigo_cedente'))
            return $this->codigo_cedente;
        else
            return null;
    }
}
