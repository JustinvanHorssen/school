#!/bin/bash
clear

*************************************************************
*	Dit programa mailt data van inxi         				*
*	Gemaakt door J.J. van Horssen op 23 maart 2017		  	*
*				  											*
*************************************************************
echo "-.-.-.-.-START-.-.-.-.-"

echo "From: justinvanhorssen@gmail.com
To: justinvanhorssen@gmail.com
Subject: INXI

"> /home/justin/Documents/inxi.txt

inxi -C >> /home/justin/Documents/inxi.txt
echo -ne '\n'  >> /home/justin/Documents/inxi.txt
inxi -D >> /home/justin/Documents/inxi.txt
echo -ne '\n'  >> /home/justin/Documents/inxi.txt 
inxi -I >> /home/justin/Documents/inxi.txt

ssmtp justinvanhorssen@gmail.com < /home/justin/Documents/inxi.txt

echo /home/justin/Documents/inxi.txt
	


echo "-.-.-.-.-.-.-.verstuurd-.-.-.-.-.-.-.-"



