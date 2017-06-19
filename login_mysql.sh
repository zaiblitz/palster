#!/bin/bash

config_files=()  # initialize array ?


current_dir=$(dirname $(readlink -f $0)) 		# current file directory
root_dir=$(dirname $(dirname $current_dir))		# root directory

secret_file="config_secret_local.php"


secret_file_path="$current_dir/$secret_file"


config_files+=($secret_file_path)


# Search string from files
function search_string () {
    config_file=$1
    s_pattern=$2
    cat $config_file | grep "$s_pattern" | awk -F= '{print $2}' | sed "s/.*'\(.*\)'.*/\1/"
}


for config_file in ${config_files[@]}; do 		
	echo $config_file
	test -f $config_file || break	# if file not exist then break	

	passwd=$(search_string $config_file 'db.default.password')
	user=$(search_string $config_file 'db.default.username')
done


if [ -z "$passwd" ] || [ -z "$user" ]; then			# Check if empty
	echo "Cannot obtain password or user info" >&2
	exit 1
fi


echo "Username $user"
echo "Passwword $passwd"

