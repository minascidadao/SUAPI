<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=us-ascii">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="OpenOffice.org 3.3  (FreeBSD/amd64)">
	<META NAME="AUTHOR" CONTENT=".">
	<META NAME="CREATED" CONTENT="20141020;9430000">
	<META NAME="CHANGEDBY" CONTENT="Administrador">
	<META NAME="CHANGED" CONTENT="20141020;9550000">
	<STYLE TYPE="text/css">
	
	</STYLE>
        <?php
    $data = date('D');
    $mes = date('M');
    $dia = date('d');
    $ano = date('Y');
	$espaco = ',';
    $semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sabado'
    );
    $mes_extenso = array(
    'Jan' => 'Janeiro',
    'Feb' => 'Fevereiro',
    'Mar' => 'Marco',
    'Apr' => 'Abril',
    'May' => 'Maio',
    'Jun' => 'Junho',
    'Jul' => 'Julho',
    'Aug' => 'Agosto',
    'Nov' => 'Novembro',
    'Sep' => 'Setembro',
    'Oct' => 'Outubro',
    'Dec' => 'Dezembro'
    );
   // echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";
    
	
	?>


     <?include ("connect.php");

@$cod = $_GET['cod'];
session_start();
$_SESSION['codigo'] = $cod;

$sql = ("SELECT * from solicitacoes where cod = '$cod' ");
$result = mysql_query($sql) or die ("Nao foi possivel excutar a consulta");
  
						   $linha = mysql_fetch_array($result); 


@$cod = $linha["cod"];
@$nome_solicitante = $linha["nome_solicitante"];
@$relacao_preso = $linha["relacao_preso"];
@$nome_preso = $linha["nome_preso"];
@$infopen = $linha["infopen"];
@$tipo_documento = $linha["tipo_documento"];
@$data_solicitacao = $linha["data_solicitacao"];
@$municipio = $linha["municipio"];
@$identidade_solicitante = $linha["identidade_solicitante"];
@$outros = $linha["outros"];


?>
</HEAD>
<BODY LANG="en-US" TEXT="#000000" LINK="#0000ff" BGCOLOR="#ffffff" DIR="LTR" onLoad="window.print();">
<DIV TYPE=HEADER>
<P LANG="pt-BR" STYLE="margin-left: -0.3in; margin-right: -0.49in; margin-bottom: 0in">
<IMG SRC="images/logo_ufmg_small_01.png" NAME="graphics1" ALIGN=LEFT HSPACE=12 WIDTH=190 HEIGHT=168 BORDER=0>
<FONT SIZE=4><B><FONT FACE="Arial, sans-serif"><FONT SIZE=2>GOVERNO	DO ESTADO DE MINAS GERAIS
</FONT></FONT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>(	     )CPNH</FONT></FONT></B></FONT></P>
<P LANG="pt-BR" STYLE="margin-left: -0.3in; margin-right: -0.49in; margin-bottom: 0in">
<FONT SIZE=4><B><FONT FACE="Arial, sans-serif"><FONT SIZE=2>SECRETARIA	DE ESTADO DE DEFESA SOCIAL                       (      ) CPFEP</FONT></FONT></B></FONT></P>
<P LANG="pt-BR" STYLE="margin-left: -0.3in; margin-right: -0.49in; margin-bottom: 0in">
<FONT SIZE=4><B><FONT FACE="Arial, sans-serif"><FONT SIZE=2>SUBSECRETARIA	DE ADMINISTRA&Ccedil;&Atilde;O PRISIONAL                (      )
	CRGPL</FONT></FONT></B></FONT></P>
<P LANG="pt-BR" STYLE="margin-left: -0.3in; margin-right: -0.49in; margin-bottom: 0in"><FONT SIZE=4><B><FONT size="2" FACE="Arial, sans-serif">SUPERINT&Ecirc;NDENCIA DE ATENDIMENTO AO PRESO ( ) PRFJAG</FONT></B></FONT></P>
<P LANG="pt-BR" STYLE="margin-left: -0.3in; margin-right: -0.49in; margin-bottom: 0in"><b><font size="2" face="Arial, sans-serif">N&uacute;cleo de Assist&ecirc;ncia &agrave; Familia do Preso - NAF (  ) PR VESP</font></b></P>
<P LANG="pt-BR" STYLE="margin-left: -0.3in; margin-right: -0.49in; margin-bottom: 0in">
  <FONT SIZE=4><B><FONT FACE="Arial, sans-serif"></B></FONT></P>
</DIV>
<P LANG="pt-BR" CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 0.07in">&nbsp;
</P>
<P LANG="pt-BR" CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 0.07in"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>TERMO DE SOLICITA&Ccedil;&Atilde;O
  E ENTREGA DE DOCUMENTOS </B></FONT></FONT>
</P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in">
<BR>
</P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in">
     <FONT FACE="Arial, sans-serif"><FONT SIZE=3>Declaro para os
devidos fins que o Sr.(a) </FONT></FONT><FONT FACE="Arial, sans-serif"><FONT SIZE=3><U>
                                                                     
 </U></FONT></FONT><B><? echo $nome_solicitante?></B>
</P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="background: #ffffff">Rela&ccedil;&atilde;o
com o preso:</SPAN></FONT></FONT><B><? echo $relacao_preso?></B></P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in">
  <FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="background: #ffffff">CI:
    </SPAN></FONT></FONT>
<B><? echo $identidade_solicitante?></B></P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in">
<FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="background: #ffffff">Nome
do preso:</SPAN></FONT></FONT><B><? echo $nome_preso?></B></P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in">
<FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="background: #ffffff">Infopen
n&deg;:                         </SPAN></FONT></FONT>
<B><? echo $infopen?></B></P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in"><span class="western" style="margin-bottom: 0in; line-height: 0.07in"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="background: #ffffff">Protocolo
n&deg;: </SPAN></FONT></FONT> <B><? echo $cod?></B></span><BR>
</P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in">
  <FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="background: #ffffff">Compareceu
    neste N&uacute;cleo de Assist&ecirc;ncia &agrave; Fam&iacute;lia do
  Preso &ndash; NAF, da Secretaria </SPAN></FONT></FONT>
</P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in">
<BR>
</P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in">
<FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="background: #ffffff">de
 Estado de Defesa Social &ndash; SEDS, nesta data e cidade para
solicitar: </SPAN></FONT></FONT>
</P>
<P LANG="pt-BR" CLASS="western" STYLE="margin-bottom: 0in; line-height: 0.07in">
<BR>
</P>
<P LANG="pt-BR" ALIGN=CENTER STYLE="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in">
<BR>
<B><b><? echo $tipo_documento ?><b><? echo $outros ?></b></b></B><span style="text-align: center"></span></P>
<P LANG="pt-BR" ALIGN=CENTER STYLE="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in">&nbsp;</P>
<P LANG="pt-BR" ALIGN=LEFT STYLE="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>Solicitado pelo (a) <? echo $municipio?>
.</FONT></FONT></P>
<P LANG="pt-BR" ALIGN=LEFT STYLE="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in">&nbsp;</P>
<P LANG="pt-BR" ALIGN=LEFT STYLE="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in">&nbsp;</P>
<P LANG="pt-BR" ALIGN=CENTER STYLE="text-indent: 0.01in; margin-bottom: 0in; line-height: 0.07in">
<FONT SIZE=6 STYLE="font-size: 26pt"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="font-weight: normal">G. Valadares, <? echo   $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";?></SPAN></FONT></FONT></FONT></FONT></P>
<P LANG="pt-BR" ALIGN=CENTER STYLE="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in">
<BR>
</P>
<P LANG="pt-BR" ALIGN=LEFT STYLE="text-indent: 0.01in; margin-bottom: 0in; line-height: 0.07in">
<FONT SIZE=6 STYLE="font-size: 26pt"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="font-weight: normal">Assinatura
do Solicitante:___________________________________________ </SPAN></FONT></FONT></FONT>
                                                                     
        </FONT>
</P>
<P LANG="pt-BR" ALIGN=LEFT STYLE="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in">
<BR>
</P>
<P LANG="pt-BR" ALIGN=LEFT STYLE="text-indent: 0.01in; margin-bottom: 0in; line-height: 0.07in">
<FONT SIZE=6 STYLE="font-size: 26pt"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><SPAN STYLE="font-weight: normal">Assinatura
do Atendente:_____</SPAN></FONT></FONT></FONT></FONT>____________________________________</P>
<P LANG="pt-BR" ALIGN=LEFT STYLE="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in">
<BR>
</P>
<TABLE WIDTH=607 BORDER=1 BORDERCOLOR="#000000" CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=597>
	<TR>
		<TD WIDTH=597 VALIGN=TOP>
			<P LANG="pt-BR" STYLE="margin-bottom: 0in"><FONT SIZE=2 STYLE="font-size: 10pt"><B>DATA
			DA CHEGADA DO DOCUMENTO:</B></FONT>___/____/_____</P>
			<P LANG="pt-BR" STYLE="margin-bottom: 0in"><BR>
			</P>
			<P LANG="pt-BR"><FONT SIZE=2 STYLE="font-size: 10pt"><B>ASSINATURA
			DO RESPONS&Aacute;VEL RECEBIMENTO </B></FONT><FONT SIZE=2 STYLE="font-size: 10pt"><U><B>
			                                                                  
			 </B></U></FONT>
			________________________________</P>
		</TD>
	</TR>
	<TR>
	  <TD WIDTH=597 height="215" VALIGN=TOP>
			<P LANG="pt-BR" STYLE="margin-bottom: 0in"><FONT SIZE=2 STYLE="font-size: 10pt"><B>DATA
			DA ENTREGA DO DOCUMENTO: </B></FONT>
			___/___/____</P>
		<P LANG="pt-BR" STYLE="margin-bottom: 0in"><BR>
			  <FONT SIZE=2 STYLE="font-size: 10pt"><B>ASSINATURA
			DO RETIRANTE: </B></FONT><FONT SIZE=2 STYLE="font-size: 10pt"><U><B>
			                                                                  
			                                      </B></U></FONT>
		  _____________________________________________</P>
		  <P LANG="pt-BR" STYLE="margin-bottom: 0in"><BR>
	    <FONT SIZE=2 STYLE="font-size: 10pt"><B>C.IDENTIDADE:<span style="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in"><B><b><? echo $identidade_solicitante ?></b></B></span></B></FONT></P>
		  <P LANG="pt-BR" STYLE="margin-bottom: 0in"><FONT SIZE=2 STYLE="font-size: 10pt"><B>ASSIN.
	    DO ATENDENTE </B></FONT>__________________________________________________</P></TD>
	</TR>
</TABLE>
<P LANG="pt-BR" ALIGN=LEFT STYLE="margin-bottom: 0in; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.03in; padding-left: 0in; padding-right: 0in; font-weight: normal; line-height: 0.07in">
<FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 11pt">---------------------------------------------------------------------------------------------------------------------------</FONT></FONT></P>
<TABLE WIDTH=607 BORDER=1 BORDERCOLOR="#000000" CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=597>
	<TR>
		<TD WIDTH=597 VALIGN=TOP>
			<P LANG="pt-BR" STYLE="margin-bottom: 0in"><FONT SIZE=2 STYLE="font-size: 18pt; text-align: center;"><B>PROTOCOLO N&ordm;:<?echo $cod ?></B></FONT></P>
		  <P LANG="pt-BR" STYLE="margin-bottom: 0in"><FONT SIZE=2 STYLE="font-size: 10pt"><B>SOLICITA&Ccedil;&Atilde;O
			  DO DOCUMENTO :</B></FONT><FONT SIZE=3><B> </B></FONT><FONT SIZE=3><U><B>
			    
			    </B></U></FONT>
			  <span style="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in"><B><b><? echo $tipo_documento ?></b></B></span><B><b><? echo $outros ?></b></B></P>
			<P LANG="pt-BR" STYLE="margin-bottom: 0in"><FONT SIZE=2 STYLE="font-size: 10pt"><B>NOME
			  DO PRESO: </B></FONT><FONT SIZE=2 STYLE="font-size: 10pt"><U><B>  
			    
			    </B></U></FONT>
		    <span style="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in"><B><b><? echo $nome_preso ?></b></B></span></P>
			<P LANG="pt-BR" STYLE="margin-bottom: 0in"><BR>
		    <FONT SIZE=2 STYLE="font-size: 10pt"><B>INFOPEN:<span style="text-indent: 0.01in; margin-bottom: 0in; font-weight: normal; line-height: 0.07in"><B><b><? echo $infopen ?></b></B></span> </B></FONT> </P>
<P LANG="pt-BR" STYLE="margin-bottom: 0in"><FONT SIZE=2 STYLE="font-size: 10pt"><B>RETIRAR APOS DIA:</B></FONT><b>____/____/_____</b></P>
<P LANG="pt-BR" STYLE="margin-bottom: 0in">&nbsp;</P>
			<P LANG="pt-BR"><FONT SIZE=2 STYLE="font-size: 10pt"><U><B>&Eacute;
			INDISPENS&Aacute;VEL A APRESENTA&Ccedil;&Atilde;O DESTE, PARA A
			RETIRADA DO DOCUMENTO . NA PERDA DESTE PROTOCOLO, SOMENTE O
			SOLICITANTE COM A APRESENTA&Ccedil;&Atilde;O DE UM DOCUMENTO DE
			IDENTIFICA&Ccedil;&Atilde;O PODER&Aacute; RETIRAR O DOCUMENTO</B></U></FONT></P>
		</TD>
	</TR>
</TABLE>
<!--
<P LANG="pt-BR" ALIGN=LEFT STYLE="margin-bottom: 0in; line-height: 0.07in">
<p class="art-page-footer"><a href="solicitacoes.php">VOLTAR</a>
  <input type="button" value="Imprimir" onClick="window.print()"/>
</P>
-->
<DIV TYPE=FOOTER>
  <P LANG="pt-BR" ALIGN=CENTER STYLE="margin-top: 0.39in; margin-bottom: 0in"><img src="images/logo_uai_small_01.jpg" width="81" height="41"></P>
	<P LANG="pt-BR" ALIGN=CENTER STYLE="margin-top: 0.39in; margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Unidade de Atendimento Integrado - UAI - G.VALADARES</B></FONT></P>
<P LANG="pt-BR" ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">Avenida Doutor Raimundo Monteiro Rezende,330 - Loja 1,2 e 3 - CENTRO - G.Valadares/MG</FONT></P>
	<P LANG="pt-BR" ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">CEP:
	 35010-177 - Telefone: (33) 3312.8200     </FONT></P>
</DIV>
</BODY>
</HTML>