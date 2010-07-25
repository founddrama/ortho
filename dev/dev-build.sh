#!/bin/sh
# This is a simple build script for the Ortho WordPress blog theme
# 
# run from ./ - creates minified .js and .css files for development
# @requires <http://developer.yahoo.com/yui/compressor/>

# minify the .js files
for j in `find . -name *[^min].js` ; do
	minName=${j/%\.js/.min.js}
	echo "Compressing '${j}' to '${minName}':"
	java -jar ~/Applications/yuicompressor-2.4.2/build/yuicompressor-2.4.2.jar -o ${minName} ${j}
done

# minify the .css files
for c in `find . -name *.dev.css` ; do
	minName=`echo ${c} | awk -F"dev[\/\.]" '{print $1 $2 $3}'`
	echo "Compressing '${c}' to '${minName}':"
	java -jar ~/Applications/yuicompressor-2.4.2/build/yuicompressor-2.4.2.jar -o ${minName} ${c}
done

exit 0;