#!/bin/bash
clear

*************************************************************
*	Dit programa maakt een NFS mount script					*
*	Gemaakt door J.J. van Horssen op 23 maart 2017		  	*
*				  											*
*************************************************************
echo "-.-.-.-.-START-.-.-.-.-"
date
#what to backup.
backup_files=" /home /var/spool/mail /etc /root /boot /opt"

#where to backup to
dest="/mnt/backup"
#create archive filename
day=$(date +%A)
hostname=$(hostname -s)
Archive_file="$hostname-$day.tgz"
#print start status message
echo "I'm backing up $backup_files to $dest/$archive_file"
#print end message

tar czf $dest/$Archive_file -P $backup_files

echo
echo "back_up finished"
date

ls -lh $dest
echo "-.-.-.-.-.-.-.KLAAR-.-.-.-.-.-.-.-"



