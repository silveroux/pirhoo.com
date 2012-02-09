#!/bin/bash

i=0

echo "------------------------------------------------------------------------------------------------------------"
echo "  ____                      _ _            _                                               __ _ _           "                             
echo " / ___|___  _ __ ___  _ __ (_) | ___      | | __ _ _ __   __ _ _   _  __ _  __ _  ___     / _(_) | ___  ___ "
echo "| |   / _ \| '_ \` _ \| '_ \| | |/ _ \     | |/ _\` | '_ \ / _\` | | | |/ _\` |/ _\` |/ _ \   | |_| | |/ _ \/ __|"
echo "| |__| (_) | | | | | | |_) | | |  __/     | | (_| | | | | (_| | |_| | (_| | (_| |  __/   |  _| | |  __/\__ \\"
echo " \____\___/|_| |_| |_| .__/|_|_|\___|     |_|\__,_|_| |_|\__, |\__,_|\__,_|\__, |\___|   |_| |_|_|\___||___/"
echo "                     |_|                                 |___/             |___/" 
echo "------------------------------------------------------------------------------------------------------------"

for inode in $(ls -R); do
  FILE_IN="./$inode/LC_MESSAGES/traductions.po"
  FILE_OUT="./$inode/LC_MESSAGES/traductions.mo";
  if [ -f $FILE_IN ]; then
	  echo ""
	  msgfmt -o $FILE_OUT $FILE_IN
	  echo "- $FILE_OUT compiled"
	  echo "---------------------------------------------"
  fi
done
echo ""