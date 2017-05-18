#!/bin/bash
clear

#*************************************************************
#*	Dit programa mailt data van inxi         				*
#*	Gemaakt door J.J. van Horssen op 23 maart 2017		  	*
#* 				  											*
#*************************************************************
echo "-.-.-.-.-START-.-.-.-.-"

echo "From: justinvanhorssen@gmail.com
To: justinvanhorssen@gmail.com
Subject: INXI

"> /home/justin/Documents/inxi.txt


echo	"[CPU]" >> /home/justin/Documents/inxi.txt 	
inxi 	-C -c0 >> /home/justin/Documents/inxi.txt

echo	"[HDD]" >> /home/justin/Documents/inxi.txt
inxi 	-D -c0 >> /home/justin/Documents/inxi.txt
echo	"[Memory]" >> /home/justin/Documents/inxi.txt 	
inxi 	-I -c0 >> /home/justin/Documents/inxi.txt

ssmtp justinvanhorssen@gmail.com < /home/justin/Documents/inxi.txt


echo "-.-.-.-.-.-.-.verstuurd-.-.-.-.-.-.-.-"



