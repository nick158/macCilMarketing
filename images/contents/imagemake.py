import os
text_file = open("Output.txt", "w")
rootdir = r"C:\xampp\htdocs\maccilMarketing\images\contents"

for subdir, dirs, files in os.walk(rootdir):
	for file in files:
        #print os.path.join(subdir, file)
		groups = subdir.split('\\');
		if len(groups) == 7:
			filepath = os.sep + groups[6] + os.sep + file
		else:
			filepath = os.sep + file
		if filepath.endswith(".jpg") and len(groups) == 7:
			text_file.write("{'src': 'images/content/%s', 'tag': '%s'}, \n" % (filepath[1:], groups[6]))
text_file.close()