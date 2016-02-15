#!/bin/bash
COMMAND="rsync -r -v -p -z out/ sbac-pad@comissoes.sbc.org.br:/wwwsbc/sbac/"
echo -e "I will execute the following command: \n   $COMMAND"
$COMMAND
