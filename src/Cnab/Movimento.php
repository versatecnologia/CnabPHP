<?php
namespace Cnab;

class Movimento
{
    const ENTRADA_DE_TITULO                                     = 1;
    const PEDIDO_DE_BAIXA                                       = 2;
    const CONCESSAO_DE_ABATIMENTO                               = 4;
    const CANCELAMENTO_DE_ABATIMENTO                            = 5;
    const ALTERACAO_DE_VENCIMENTO                               = 6;
    const CONCESSAO_DE_DESCONTO                                 = 7;
    const CANCELAMENTO_DE_DESCONTO                              = 8;
    const PROTESTAR                                             = 9;
    const SUSTAR_PROTESTO_E_BAIXAR_TITULO                       = 10;
    const SUSTAR_PROTESTO_E_MANTER_EM_CARTEIRA                  = 11;
    const ALTERACAO_DE_JUROS_DE_MORA                            = 12;
    const DISPENSAR_COBRANCA_DE_JUROS_DE_MORA                   = 13;
    const ALTERACAO_DE_VALOR_OU_PERCENTUAL_DE_MULTA             = 14;
    const DISPENSAR_COBRANCA_DE_MULTA                           = 15;
    const ALTERACAO_DO_VALOR_DE_DESCONTO                        = 16;
    const NAO_CONCEDER_DESCONTO                                 = 17;
    const ALTERACAO_DO_VALOR_DE_ABATIMENTO                      = 18;
    const ALTERACAO_DE_OUTROS_DADOS                             = 31;
    const ALTERACAO_DOS_DADOS_DO_RATEIO_DE_CREDITO              = 33;
    const PEDIDO_DE_CANCELAMENTO_DOS_DADOS_DO_RATEIO_DE_CREDITO = 34;
    const INCLUSAO_NO_BANCO_DE_PAGADORES                        = 36;
    const ALTERACAO_NO_BANCO_DE_PAGADORES                       = 37;
    const EXCLUSAO_NO_BANCO_DE_PAGADORES                        = 38;
    const SERVICOS                                              = 40;
    const ALTERACAO_DO_VALOR_NOMINAL_DO_TITULO                  = 47;
    const ALTERACAO_VALOR_OU_PERCENTUAL_MINIMO_OU_MAXIMO        = 48;
}