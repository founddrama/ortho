#!/bin/sh
# This is a sample deploy script for the Ortho WordPress blog theme
# @requires <http://developer.yahoo.com/yui/compressor/>

# get into the right dir
cd ~/blog/wp-content/themes/ortho/

# update to the latest
echo "Updating Ortho theme from the latest in the git repo's master branch:"
git pull --verbose

# minify the .js files
for j in `find . -name *[^min].js` ; do
	minName=${j/%\.js/.min.js}
	echo "Compressing '${j}' to '${minName}':"
	java -jar ~/build/bin/yuicompressor-2.4.2.jar -o ${minName} ${j}
done

# minify the .css files
for c in `find . -name *.dev.css` ; do
	minName=`echo ${c} | awk -F"dev[\/\.]" '{print $1 $2 $3}'`
	echo "Compressing '${c}' to '${minName}':"
	java -jar ~/build/bin/yuicompressor-2.4.2.jar -o ${minName} ${c}
done

exit 0;