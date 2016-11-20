import os
text_file = open("Output.txt", "w")
rootdir = "C:\xampp\htdocs\maccilMarketing\images\contents"

for subdir, dirs, files in os.walk(rootdir):
    for file in files:
        #print os.path.join(subdir, file)
        filepath = subdir + os.sep + file

        if filepath.endswith(".jpg"):
            text_file.write("%s" % filepath)
text_file.close()