; <?php exit; ?> DO NOT REMOVE THIS LINE
{
"allowcache":true,
"splitmode":false,
"mupdfinstalled":false,
"path.pdf":"\/tmp\/fp\/pdf\/",
"path.swf":"\/tmp\/fp\/docs\/",
"admin.password":"admin",
"renderingorder.primary":"html5",
"renderingorder.secondary":"html",
"cmd.conversion.singledoc":"pdf2swf \"{path.pdf}{pdffile}\" -o \"{path.swf}{pdffile}.swf\" -f -T 9 -t -s storeallcharacters -s linknameurl",
"cmd.conversion.splitpages":"pdf2swf \"{path.pdf}{pdffile}\" -o \"{path.swf}{pdffile}_%.swf\" -f -T 9 -t -s storeallcharacters -s linknameurl",
"cmd.conversion.renderpage":"swfrender \"{path.swf}{swffile}\" -p {page} -o \"{path.swf}{pdffile}_{page}.png\" -X 2048 -s keepaspectratio",
"cmd.conversion.rendersplitpage":"swfrender \"{path.swf}{swffile}\" -o \"{path.swf}{pdffile}_{page}.png\" -X 2048 -s keepaspectratio",
"cmd.conversion.jsonfile":"pdf2json \"{path.pdf}{pdffile}\" -enc UTF-8 -compress \"{path.swf}{pdffile}.js\"",
"cmd.conversion.splitjsonfile":"pdf2json \"{path.pdf}{pdffile}\" -enc UTF-8 -compress -split 10 \"{path.swf}{pdffile}_%.js\"",
"cmd.conversion.splitpdffile":"pdftk \"{path.pdf}{pdffile}\" burst output \"{path.swf}{pdffile}_%1d.pdf\" compress",
"cmd.conversion.catpdffile":"pdftk \"{path.pdf}{pdffile}\" cat {range} output \"{path.swf}{outputfile}\"",
"cmd.conversion.multistamppdf":"pdftk \"{path.pdf}{pdffile}\" multistamp \"{path.swf}{stampfile}\" output \"{path.swf}{annotatedfile}\" compress",
"cmd.conversion.mudraw":"pdfdraw -r120 -m -o \"{path.swf}{pdffile}_{page}.png\" \"{path.pdf}{pdffile}\" {page}",
"cmd.searching.extracttext":"swfstrings \"{swffile}\"",
"cmd.query.swfwidth":"swfdump \"{swffile}\" -X",
"cmd.query.swfheight":"swfdump \"{swffile}\" -Y"
}
