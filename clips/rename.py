#!/opt/local/bin/python
import glob
import os

def rename(file):
    os.rename(file, "./"+file[5:])

files = glob.glob("./[0-9]*")

[rename(file) for file in files] #take that jbalogh!