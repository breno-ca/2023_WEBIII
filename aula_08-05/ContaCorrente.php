<?php

class ContaCorrente
{
    private $titular;
    private $agencia;
    private $numero;
    private $saldo;
    public function __construct(
        $titular,
        $agencia,
        $numero,
        $saldo = null
    ) {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;

    }

    public function __toString()
    {
        return $this->titular . ", " .
            $this->agencia . ", " .
            $this->numero . ", " .
            $this->saldo;
    }

    public function mostrarDados()
    {
        return $this->titular . "-" . $this->saldo;
    }


    /**
     * @return mixed
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * @param mixed $titular 
     * @return self
     */
    public function setTitular($titular): self
    {
        $this->titular = $titular;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * @param mixed $agencia 
     * @return self
     */
    public function setAgencia($agencia): self
    {
        $this->agencia = $agencia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero 
     * @return self
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

/**
 * @param mixed $saldo 
 * @return self
 */

}

class ValidacaoContaCorrente
{
    public static function protegeAtributo($atributo)
    {
        if ($atributo == "saldo") {
            throw new Exception("Não foi possível alterar atributo:" . $atributo);
        }
    }
}