<?php
// espécies de cobranças
namespace Cnab;

class Especie
{
    const ITAU_DUPLICATA_MERCANTIL               = 1;
    const ITAU_NOTA_PROMISSORIA                  = 2;
    const ITAU_NOTA_DE_SEGURO                    = 3;
    const ITAU_MENSALIDADE_ESCOLAR               = 4;
    const ITAU_RECIBO                            = 5;
    const ITAU_CONTRATO                          = 6;
    const ITAU_COSSEGUROS                        = 7;
    const ITAU_DUPLICATA_DE_SERVICO              = 8;
    const ITAU_LETRA_DE_CAMBIO                   = 9;
    const ITAU_NOTA_DE_DEBITOS                   = 13;
    const ITAU_DOCUMENTO_DE_DIVIDA               = 15;
    const ITAU_ENCARGOS_CONDOMINIAIS             = 16;
    const ITAU_CONTRATO_DE_PRESTACAO_DE_SERVICOS = 17;
    const ITAU_DIVERSOS                          = 99;

    const CEF_DUPLICATA_MERCANTIL                = 1;
    const CEF_NOTA_PROMISSORIA                   = 2;
    const CEF_DUPLICATA_DE_PRESTACAO_DE_SERVICOS = 3;
    const CEF_NOTA_DE_SEGURO                     = 5;
    const CEF_LETRA_DE_CAMBIO                    = 6;
    const CEF_OUTROS                             = 9;

    const CNAB240_OUTROS = 99;

    const FEBRABAN_CHEQUE                           = 1;
    const FEBRABAN_DUPLICATA_MERCANTIL              = 2;
    const FEBRABAN_DUPLICATA_MERCANTIL_P_INDICACAO  = 3;
    const FEBRABAN_DUPLICATA_DE_SERVICO             = 4;
    const FEBRABAN_DUPLICATA_DE_SERVICO_P_INDICACAO = 5;
    const FEBRABAN_DUPLICATA_RURAL                  = 6;
    const FEBRABAN_LETRA_DE_CAMBIO                  = 7;
    const FEBRABAN_NOTA_DE_CREDITO_COMERCIAL        = 8;
    const FEBRABAN_NOTA_DE_CREDITO_A_EXPORTACAO     = 9;
    const FEBRABAN_NOTA_DE_CREDITO_INDUSTRIAL       = 10;
    const FEBRABAN_NOTA_DE_CREDITO_RURAL            = 11;
    const FEBRABAN_NOTA_PROMISSORIA                 = 12;
    const FEBRABAN_NOTA_PROMISSORIA_RURAL           = 13;
    const FEBRABAN_TRIPLICATA_MERCANTIL             = 14;
    const FEBRABAN_TRIPLICATA_DE_SERVICO            = 15;
    const FEBRABAN_NOTA_DE_SEGURO                   = 16;
    const FEBRABAN_RECIBO                           = 17;
    const FEBRABAN_FATURA                           = 18;
    const FEBRABAN_NOTA_DE_DEBITO                   = 19;
    const FEBRABAN_APOLICE_DE_SEGURO                = 20;
    const FEBRABAN_MENSALIDADE_ESCOLAR              = 21;
    const FEBRABAN_PARCELA_DE_CONSORCIO             = 22;
    const FEBRABAN_NOTA_FISCAL                      = 23;
    const FEBRABAN_DOCUMENTO_DE_DIVIDA              = 24;
    const FEBRABAN_CEDULA_DE_PRODUTO_RURAL          = 25;
    const FEBRABAN_CARTAO_DE_CREDITO                = 31;
    const FEBRABAN_BOLETO_PROPOSTA                  = 32;
    const FEBRABAN_OUTROS                           = 99;

    public static function informacao($especie)
    {
        $arrDefinicao = array(
            1  => array('01', 'CH', 'Cheque'),
            2  => array('02', 'DM', 'Duplicata Mercantil'),
            3  => array('03', 'DMI', 'Duplicata Mercantil p/ Indicação'),
            4  => array('04', 'DS', 'Duplicata de Serviço'),
            5  => array('05', 'DSI', 'Duplicata de Serviço p/ Indicação'),
            6  => array('06', 'DR', 'Duplicata Rural'),
            7  => array('07', 'LC', 'Letra de Câmbio'),
            8  => array('08', 'NCC', 'Nota de Crédito Comercial'),
            9  => array('09', 'NCE', 'Nota de Crédito à Exportação'),
            10 => array('10', 'NCI', 'Nota de Crédito Industrial'),
            11 => array('11', 'NCR', 'Nota de Crédito Rural'),
            12 => array('12', 'NP', 'Nota Promissória'),
            13 => array('13', 'NPR', 'Nota Promissória Rural'),
            14 => array('14', 'TM', 'Triplicata Mercantil'),
            15 => array('15', 'TS', 'Triplicata de Serviço'),
            16 => array('16', 'NS', 'Nota de Seguro'),
            17 => array('17', 'RC', 'Recibo'),
            18 => array('18', 'FAT', 'Fatura'),
            19 => array('19', 'ND', 'Nota de Débito'),
            20 => array('20', 'AP', 'Apólice de Seguro'),
            21 => array('21', 'ME', 'Mensalidade Escolar'),
            22 => array('22', 'PC', 'Parcela de Consórcio'),
            23 => array('23', 'NF', 'Nota Fiscal'),
            24 => array('24', 'DD', 'Documento de Dívida'),
            25 => array('25', 'CPR', 'Cédula de Produto Rural'),
            31 => array('31', 'CC', 'Cartão de Crédito'),
            32 => array('32', 'BP', 'Boleto Proposta'),
            99 => array('99', 'OU', 'Outros')
        );

        if (!$arrDefinicao[$especie]) {
            return '-';
        }

        $arrInformacao = $arrDefinicao[$especie];

        return $arrInformacao;
    }

    public static function descricaoFebraban($especie)
    {
        $arrInformacao = self::informacao($especie);

        return $arrInformacao[2];
    }

    public static function siglaFebraban($especie)
    {
        $arrInformacao = self::informacao($especie);

        return $arrInformacao[1];
    }

    public static function codigoFebraban($especie)
    {
        $arrInformacao = self::informacao($especie);

        return $arrInformacao[0];
    }

}