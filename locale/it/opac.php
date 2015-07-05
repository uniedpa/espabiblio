<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.

* jalg 2012  se agregaron variables para corregir trauducion en la ficha de administracion de biblioteca. dias 
* jalg 2012 se agrego $trans["admin_settingsViewlist"] permite activar o desactivar la funcion del listado general de libros. 
#* MODIFICADO POR JOSE ANTONIO LARA joanlaga@hotmail.com PARA SOPORTE DE Z39.50 (2012)
#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com

 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */


#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["opac_Header"]        = "\$text='Catalogo in linea ad accesso pubblico (OPAC))';";
$trans["opac_WelcomeMsg"]    = "\$text='Benvenuto al nostro OPAC, cerca liberamente nel nostro catalogo.';";
$trans["opac_SearchTitle"]   = "\$text='Ricerca bibliografia per parola chiave:';";
$trans["opac_Keyword"]       = "\$text='Parola chiave';";
$trans["opac_Title"]         = "\$text='Titolo';";
$trans["opac_Author"]        = "\$text='Autore';";
$trans["opac_Subject"]       = "\$text='Soggetto';";
$trans["opac_Callno"]        = "\$text='Numero di riferimento';";
$trans["opac_Search"]        = "\$text='Ricerca';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["opac_ISBN"]        = "\$text='ISBN';";
