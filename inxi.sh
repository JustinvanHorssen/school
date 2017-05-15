#!/bin/bash
clear

# *************************************************************
# *															*
# *	Gemaakt door J.J. van Horssen op 23 maart 2017		  	*
# *				  											*
# *************************************************************
echo "-.-.-.-.-START-.-.-.-.-"

echo [CPU] > output.txt
inxi -C >> output.txt
echo	>> output.txt
echo	>> output.txt
echo	>> output.txt

echo [Memory]	>> output.txt
inxi -I >> output.txt
echo >> output.txt
echo	>> output.txt
echo	>> output.txt

echo [HDD] >> output.txt
inxi -D >> output.txt

echo "-.-.-.-.-.-.-.KLAAR-.-.-.-.-.-.-.-"



