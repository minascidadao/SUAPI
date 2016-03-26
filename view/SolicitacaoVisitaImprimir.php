<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.0.5.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="administradorr">
	<META NAME="CREATED" CONTENT="20140811;15420000">
	<META NAME="CHANGEDBY" CONTENT="administradorr">
	<META NAME="CHANGED" CONTENT="20140811;19010000">
	<STYLE TYPE="text/css">

	</STYLE>
    
   <?include ("connect.php");

@$cod = $_GET['cod'];
session_start();
$_SESSION['codigo'] = $cod;

$sql = ("SELECT * from suapi where cod = '$cod' ");
$result = mysql_query($sql) or die ("Nao foi possivel excutar a consulta");
  
						   $linha = mysql_fetch_array($result); 


@$cod = $linha["cod"];
@$infopen = $linha["infopen"];
@$data_visita = $linha["data_visita"];
@$unidade = $linha["unidade"];
@$visitante = $linha["visitante"];
@$parentesco = $linha["parentesco"];
@$tipo_visita = $linha["tipo_visita"];
@$nome = $linha["nome"];

?>
    
    
    
</HEAD>
<BODY LANG="en-US" TEXT="#000000" DIR="LTR" onload="window.print();" >
<P LANG="pt-BR" CLASS="western" STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<IMG SRC="images/logo_ufmg_small_02.jpg" NAME="Imagem 3" ALIGN=BOTTOM WIDTH=95 HEIGHT=93 BORDER=0>
<SPAN LANG="en-US"><B>GOVERNO DO ESTADO DE MINAS GERAIS</B></SPAN></P>
<P LANG="en-US" CLASS="western" STYLE="margin-left: 0.49in; text-indent: 0.49in; margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<P LANG="en-US" CLASS="western" STYLE="margin-left: 0.49in; text-indent: 0.49in; margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
 <B>SECRETARIA DE ESTADO DE DEFESA SOCIAL</B></P>
<P LANG="en-US" CLASS="western" STYLE="margin-left: 0.49in; text-indent: 0.49in; margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
 <B>SUBSECRETARIA DE ADMINISTRAÇÃO PRISIONAL</B></P>
<P LANG="en-US" CLASS="western" STYLE="margin-left: 0.49in; text-indent: 0.49in; margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
 <B>SUPERINTENDÊNCIA DE ATENDIMENTO AO PRESO</B></P>
<P LANG="en-US" CLASS="western" STYLE="margin-left: 0.49in; text-indent: 0.49in; margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
 <B>NÚCLEO DE ASSISTÊNCIA À FAMÍLIA SO PRESO – NAF</B></P>
<P LANG="en-US" CLASS="western" STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<BR><BR>
</P>
<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<FONT SIZE=4 STYLE="font-size: 16pt"><U><B>Formulário para
Autorização de Credenciamentos de Visitantes</B></U></FONT></P>
<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<BR><BR>
</P>
<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<BR><BR>
</P>
<P LANG="en-US" CLASS="western" STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<B>Infopen: 		<? echo "$infopen"?></B></P>
<P LANG="en-US" CLASS="western" STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%"><B> Preso:</B><span class="western" style="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%"><? echo "$nome"?></span></P>
<P LANG="en-US" CLASS="western" STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<B>Unidade Prisional:</B><span class="western" style="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%"><? echo "$unidade"?></span></P>
<P LANG="en-US" CLASS="western" STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<B>Data:</B><span class="western" style="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%"><? echo "$data_visita"?></span></P>
<P LANG="en-US" CLASS="western" STYLE="margin-top: 0.17in; margin-bottom: 0.14in; line-height: 50%">
<TABLE DIR="LTR" ALIGN=LEFT WIDTH=740 HSPACE=9 CELLPADDING=5 CELLSPACING=0>
	<COLGROUP>
		<COL WIDTH=90>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=309>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=130>
		<COL WIDTH=92>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=30>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=27>
	</COLGROUP>
	<TR VALIGN=TOP>
		<TH COLSPAN=3 WIDTH=550 HEIGHT=6 STYLE="border: none; padding: 0in">
			<P LANG="pt-BR" CLASS="western"><BR>
			</P>
		</TH>
		<TD WIDTH=92 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding: 0in">
			<P LANG="pt-BR" CLASS="western" ALIGN=CENTER><BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=68 STYLE="border: 1px solid #000000; padding: 0in 0.05in">
			<P LANG="pt-BR" CLASS="western" ALIGN=CENTER><B>ASSINALAR</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=90 HEIGHT=12 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western"><B>Protocolo</B></P>
		</TD>
		<TD WIDTH=309 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western"><B>Nome do visitante</B></P>
		</TD>
		<TD WIDTH=130 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western" ALIGN=CENTER><B>Grau de parentesco</B></P>
		</TD>
		<TD WIDTH=92 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western" ALIGN=CENTER><B>Tipo de Visita</B></P>
		</TD>
		<TD WIDTH=30 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western" ALIGN=CENTER><B>Sim</B></P>
		</TD>
		<TD WIDTH=27 STYLE="border: 1px solid #000000; padding: 0in 0.05in">
			<P LANG="pt-BR" CLASS="western" ALIGN=CENTER><B>Não</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=90 HEIGHT=12 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western"><? echo "$cod"?><BR>
			</P>
	  </TD>
		<TD WIDTH=309 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western"><? echo "$visitante"?><BR>
			</P>
	  </TD>
		<TD WIDTH=130 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western"><? echo "$parentesco"?><BR>
			</P>
	  </TD>
		<TD WIDTH=92 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western"><? echo "$tipo_visita"?><BR>
			</P>
	  </TD>
		<TD WIDTH=30 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="pt-BR" CLASS="western"><BR>
			</P>
		</TD>
		<TD WIDTH=27 STYLE="border: 1px solid #000000; padding: 0in 0.05in">
			<P LANG="pt-BR" CLASS="western"><BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=6 WIDTH=729 HEIGHT=14 VALIGN=TOP STYLE="border: 1px solid #000000; padding: 0in 0.05in">
			<P LANG="en-US" CLASS="western" STYLE="margin-top: 0.17in"><BR>
			</P>
		</TD>
	</TR>
</TABLE><BR><BR>
</P>
<P LANG="en-US" CLASS="western" STYLE="margin-left: -0.49in; margin-bottom: 0.14in">
<BR><BR>
</P>
<P LANG="en-US" CLASS="western" STYLE="margin-left: -0.49in; margin-bottom: 0.14in">
<BR><BR>
</P>
<P LANG="en-US" CLASS="western" STYLE="margin-left: -0.49in; margin-bottom: 0.14in">
<BR><BR>
</P>
<TABLE WIDTH=762 CELLPADDING=5 CELLSPACING=0>
	<COL WIDTH=188>
	<COL WIDTH=552>
	<TR>
		<TD WIDTH=188 HEIGHT=37 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-left: 0.1in">
			<FONT SIZE=3><B>GENTILEZA FAZER A MARCAÇÃO AUTORIZANDO A VISITA
			OU X NO SIM OU X NO NÃO</B></FONT></P>
		</TD>
		<TD WIDTH=552 VALIGN=TOP STYLE="border: 1px solid #000000; padding: 0in 0.05in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0.14in">
			<BR><BR>
			</P>
			<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0.14in">
			____________________________________________________________________</P>
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><B>(Assinatura do
			Preso)</B></P>
		</TD>
	</TR>
</TABLE>
<P LANG="en-US" CLASS="western" STYLE="margin-left: -0.49in; margin-bottom: 0.14in">
<BR><BR>
</P>
<P LANG="en-US" CLASS="western" STYLE="margin-left: -0.49in; margin-bottom: 0.14in">
----------------------------------------------------------------------------------------------------------------------------------------------------------------------</P>
<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-left: -0.49in; margin-bottom: 0.14in">
É indispensável a apresentação deste PROTOCOLO</P>
<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-left: -0.49in; margin-bottom: 0.14in">
NAF – Núcleo de Assistência à Família</P>
<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-left: -0.49in; margin-bottom: 0.14in; font-size: 18pt;">
<strong>Protocolo</strong>:<? echo "$cod"?></P>
<P LANG="en-US" CLASS="western" ALIGN=CENTER STYLE="margin-left: -0.49in; margin-bottom: 0.14in">
Retornar dia: ____/____/____</P>

<p class="art-page-footer"><a href="seds.php">VOLTAR</a>
  <input type="button" value="Imprimir" onClick="window.print()"/>
</p>
<DIV TYPE=FOOTER>
  <P LANG="pt-BR" ALIGN=CENTER STYLE="margin-top: 0.39in; margin-bottom: 0in"><img src="images/logo_uai_small_01.jpg" width="81" height="41"></P>
  <P LANG="pt-BR" ALIGN=CENTER STYLE="margin-top: 0.39in; margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Unidade de Atendimento Integrado - UAI - G. VALADARES</B></FONT></P>
  <P LANG="pt-BR" ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">Avenida Doutor Raimundo Monteiro Rezende,330 - Loja 1,2 e 3 - CENTRO - G.Valadares/MG</FONT></P>
  <P LANG="pt-BR" ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">CEP:
    35010-177 - Telefone: (33) 3312.8200  </FONT></P>
</DIV>
<p class="art-page-footer">&nbsp;</p>
</BODY>
</HTML>