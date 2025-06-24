<?php 

    //C.O e C.C.C
	
	$pmeTempo = 60;
    $pmrTempo = 30; 
    $pmpTempo = 45;
	
    $pmeValor = (1000000 / 360) * $pmeTempo;
    $pmrValor = (600000 / 360) * $pmrTempo;
    $pmpValor = (500000 / 360) * $pmpTempo;

    
    $coValor = $pmeValor + $pmrValor;
    $cccValor = $pmeValor + $pmrValor - $pmpValor;

	$coTempo = $pmeTempo + $pmrTempo;
    $cccTempo = $pmeTempo + $pmrTempo - $pmpTempo;

    echo "CO Valor: R$ " . number_format($coValor, 2, ',', '.') . "\n";
    echo "CO Tempo: " . $coTempo . " dias\n";
    echo "C.C.C Valor: R$ " . number_format($cccValor, 2, ',', '.') . "\n";
    echo "C.C.C Tempo: " . $cccTempo . " dias\n";

    echo "\n";

?>

<?php 

    //Análise Marginal

    //A.L 
    $unidadesAtual = 100000;
    $unidadesNovo = 110000;
    $precoVenda = 100;
    $custoVariavel = 60;
    $prazoMedioRecebimentoAtual = 45;
    $prazoMedioRecebimentoNovo = 60;
    $indinplenciaAtual = 0.01;
    $indinplenciaNova = 0.012;
    $juros = 0.15;

    $al = ($unidadesNovo - $unidadesAtual) * ($precoVenda - $custoVariavel);
    echo "A.L: R$ " . number_format($al, 2, ',', '.') . "\n";

    //CIMDR

    $cimdrAtual =  ($unidadesAtual * $custoVariavel) / (360 / $prazoMedioRecebimentoAtual);
    $cimdrNovo =  ($unidadesNovo * $custoVariavel) / (360 / $prazoMedioRecebimentoNovo);

    $cimdr = ($cimdrNovo - $cimdrAtual) * $juros;

    echo "C.I.M.D.R: R$ " . number_format($cimdr, 2, ',', '.') . "\n";

    //C.P.M

    $cpmAtual = $unidadesAtual * $precoVenda * $indinplenciaAtual;
    $cpmNovo = $unidadesNovo * $precoVenda * $indinplenciaNova;

    $cpm = $cpmNovo - $cpmAtual;
    echo "C.P.M: R$ " . number_format($cpm, 2, ',', '.') . "\n";

    //Análise Marginal Final
    $analiseMarginal = $al - $cimdr - $cpm;
    echo "Análise Marginal Final: R$ " . number_format($analiseMarginal, 2, ',', '.') . "\n";

    echo "\n";
?>

<?php 
    //M.C

    $receita = 320000;
    $producao = 8000;
    $materiaPrima = 90000;
    $maoObra = 32000;
    $encargosSoc = 6500;
    $gastosGerais = 40000;
    $servicosTerc = 25000;
    $despesasAdm = 20000;
    $comissaoVendas = 9500;
    $fretes = 4000;

    $gv = $materiaPrima + $gastosGerais + $servicosTerc + $comissaoVendas + $fretes;
    $gf = $maoObra + $encargosSoc + $despesasAdm;

    //PV - GV
    $mcUnidade = ($receita / $producao) - ($materiaPrima / $producao);
    echo "M.C por unidade: R$ " . number_format($mcUnidade, 2, ',', '.') . "\n";
    
    $mcValor = $receita - $materiaPrima;
    echo "M.C Valor: R$ " . number_format($mcValor, 2, ',', '.') . "\n";


    //P.E

    // GF / MC
    $peUnidade = $gf / $mcUnidade;
    echo "P.E por unidade: " . (int)$peUnidade . " unidades / KGs \n";

    //p.e em unidades * pv
    $peValor = $peUnidade * ($receita / $producao);
    echo "P.E Valor: R$ " . number_format($peValor, 2, ',', '.') . "\n";

    //G.A.O

    $lucro = $receita - ($gv + $gf);
    $gao = $mcValor / $lucro;
    echo "G.A.O: " . number_format($gao, 2, ',', '.') . "\n";
    $gaoValor = $gao * $lucro;
    echo "G.A.O Valor: R$ " . number_format($gaoValor, 2, ',', '.') . "\n";

    echo "\n";
?>

<?php 
    //indices

    //balanço patrimonial

    //ativo

    //Ativo circulante
    $caixa = 120;
    $contasReceber = 250;
    $estoques = 300;
    $despesasAntecipadas = 130;

    $ativoCirulante = $caixa + $contasReceber + $estoques + $despesasAntecipadas;
    
    //Ativo não circulante
    $imobilizado = 1100;
    $intangivel = 100;

    $ativoNaoCirculante = $imobilizado + $intangivel;

    //Total do ativo
    $ativoTotal = $ativoCirulante + $ativoNaoCirculante;

    //passivo
    
    //Passivo circulante
    $fornecedores = 200;
    $enpresitmosBancariosCurtoPrazo = 180;
    $obrigacoesTrabalhistas = 120;

    $passivoCirculante = $fornecedores + $enpresitmosBancariosCurtoPrazo + $obrigacoesTrabalhistas;

    //Passivo não circulante
    $enpresitmosBancariosLongoPrazo = 400;
    $passivoNaoCirculante = $enpresitmosBancariosLongoPrazo;
    $financiamentos = 0;

    //Patrimônio líquido
    $capitalSocial = 900;
    $reservasLucros = 200;

    $patrimonioLiquido = $capitalSocial + $reservasLucros;

    //Total do passivo
    $passivoTotal = $passivoCirculante + $passivoNaoCirculante + $patrimonioLiquido;

    echo "Total do Ativo: R$ " . number_format($ativoTotal, 2, ',', '.') . "\n";
    echo "Total do Passivo: R$ " . number_format($passivoTotal, 2, ',', '.') . "\n";
    
    echo "\n";

	echo " Índices de liquidez: \n";

    // Índices de liquidez
    $liquidezCorrente = $ativoCirulante / $passivoCirculante;
    $liquidezGeral = ($ativoCirulante + $financiamentos) / ($passivoCirculante + $passivoNaoCirculante);
    $liquidezSeca = ($ativoCirulante - $estoques) / $passivoCirculante;
    $liquidezImediata = $caixa / $passivoCirculante;
    
    echo "Liquidez Corrente: " . number_format($liquidezCorrente, 2, ',', '.') . "\n";
    echo "Liquidez Geral: " . number_format($liquidezGeral, 2, ',', '.') . "\n";
    echo "Liquidez Seca: " . number_format($liquidezSeca, 2, ',', '.') . "\n";
    echo "Liquidez Imediata: " . number_format($liquidezImediata, 2, ',', '.') . "\n";

    //Endividamento

	echo "\n Endividamento \n";

    $participacaoCapitalTerceiros = ($passivoCirculante + $passivoNaoCirculante) / $patrimonioLiquido;
    $composicaoEndevidamento = $passivoCirculante / ($passivoCirculante + $passivoNaoCirculante);
    $grauEndividamento = ($passivoCirculante + $passivoNaoCirculante) / $ativoTotal;
    $imobilizacaoCapitalProprio = $imobilizado / $patrimonioLiquido;

    echo "Participação Capital de Terceiros: " . number_format($participacaoCapitalTerceiros, 2, ',', '.') . "\n";
    echo "Composição do Endividamento: " . number_format($composicaoEndevidamento, 2, ',', '.') . "\n";
    echo "Grau de Endividamento: " . number_format($grauEndividamento, 2, ',', '.') . "\n";
    echo "Imobilização do Capital Próprio: " . number_format($imobilizacaoCapitalProprio, 2, ',', '.') . "\n";

    //Diversos
    echo "\n Diversos \n";

    $cpv = 1600;
    $vendas = 3500;
    $clientes = 250;
    $receitaLiquida = 3200;
    $lucroLiquido = 480;

    $giroEstoque = $cpv / $estoques;
    $giroContasReceber = $vendas / $clientes;
    $retornoInvestimento = $lucroLiquido / $ativoTotal;
    $rentabilidadeCapitalProprio = $lucroLiquido / $patrimonioLiquido;
    $margemLiquida = $lucroLiquido / $receitaLiquida;

    echo "Giro de Estoque: " . number_format($giroEstoque, 2, ',', '.') . "\n";
    echo "Giro de Contas a Receber: " . number_format($giroContasReceber, 2, ',', '.') . "\n";
    echo "Retorno sobre o Investimento: " . number_format($retornoInvestimento, 2, ',', '.') . "\n";
    echo "Rentabilidade do Capital Próprio: " . number_format($rentabilidadeCapitalProprio, 2, ',', '.') . "\n";
    echo "Margem Líquida: " . number_format($margemLiquida, 2, ',', '.') . "\n";


?>